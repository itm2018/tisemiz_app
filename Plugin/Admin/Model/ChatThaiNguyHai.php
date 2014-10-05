<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * ChatThaiNguyHai Model
 *
 */
class ChatThaiNguyHai extends AdminAppModel
{
	public $saved = array();
	/**
	 * Use table
	 *
	 * @var mixed False or table name
	 */
	public $useTable = 'chat_thai_nguy_hai';

	/**
	 * Primary key field
	 *
	 * @var string
	 */
	public $primaryKey = 'colMa';
	public $validate = array();

	public function beforeSave($options = array())
	{
		if (isset($this->data['ChatThaiNguyHai']['colThoiGian']) && $this->data['ChatThaiNguyHai']['colThoiGian']) {
			$thoigian                                     = date_create_from_format('d/m/Y', $this->data['ChatThaiNguyHai']['colThoiGian']);
			$this->data['ChatThaiNguyHai']['colThoiGian'] = $thoigian->format('Y-m-d');
		}
		parent::beforeSave($options);
	}

	public function afterSave($created, $options = array())
	{
		parent::afterSave($created, $options);
		if ($created) {
			$this->saved[] = $this->getLastInsertID();
		}
	}

	public function afterFind($results, $primary = false)
	{
		if ($primary) {
			if (!empty($results[0]['ChatThaiNguyHai']['colThoiGian'])) {
				$vn_date                                      = date('d/m/Y',
																	 strtotime
																	 ($results[0]['ChatThaiNguyHai']['colThoiGian']));
				$results[0]['ChatThaiNguyHai']['colThoiGian'] = $vn_date;
			}
		}

		return $results;
	}

}
