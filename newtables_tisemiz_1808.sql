use tisemiz;
drop table if exists BaoCaoGSMT;
create table if not exists BaocaoGSMT(
	id int(11) not null auto_increment,
	id_doanhnghiep int(11) not null,
	id_user int(11) not null,
	created_date datetime not null,
	updated_date datetime null,
	tungay date not null,
	denngay date not null,
	customdir varchar(100) default null,
	quytrinhcnxstrongkybc	text default null,
	file_quytbaocaogsmtrinhcnsxbaocaogsmt	varchar(100) default null,
	file_nguononhiem varchar(100) null,
	file_quytrinhcnxlnt varchar(100) null,
	quytrinhcnxlnt text null,
	file_ketquaphantichnt varchar(100) null,
	file_quytrinhcnxlkt varchar(100) null,
    quytrinhcnxlkt text null,
	file_ketquaphantichkt varchar(100) null,
	nguonpstiengonvabpkp text null,
	file_ketquaphantichtiengon varchar(100) null,
	nguonpsdorungvabpkp text null,
	file_ketquaphantichdorung varchar(100) null,
	file_sodovitricacdiemgiamsatmtxq varchar(100) null,
	file_ketquadodacphantichmtxq varchar(100) null,
	primary key (id)
);

drop table if exists DoanhNghiep;
create table if not exists DoanhNghiep(
	id int(11) not null auto_increment,
	tencoso varchar(100) not null,
	truso	varchar(100) not null,
	dienthoai	varchar(20) not null,
	fax	varchar(20) null,
	email varchar(50) null,
	gpkinhdoanh	varchar(50) null,
	masothue	varchar(50) null,
	quytrinhcnxs	text default null,
	id_cosolapbc int(11),
	primary key (id)
);

drop table if exists TinhHinhSXKD;
create table if not exists TinhHinhSXKD(
	id int(11) not null auto_increment,
	stt int(4) not null default 0,
	tennguyenlieu varchar(100) not null,
	donvi	varchar(100) null,
	quy1 float(4) null,
	quy2 float(4) null,
	quy3 float(4) null,
	quy4 float(4) null,
	tong	float(8) null,
	chucnang varchar(255) null,
	id_bc int(11) not null,
	primary key (id)
);
drop table if exists HienTrangNuocThai;
create table if not exists HienTrangNuocThai (
    id int(11) not null auto_increment,
    stt int(4) not null default 0,
    loainuocthai varchar(100) not null,
    donvi varchar(50) null,
    quy1 float(4) null,
    quy2 float(4) null,
    quy3 float(4) null,
    quy4 float(4) null,
    tong float(8) null,
    ghichu varchar(100) null,
    chucnang varchar(100) null,
    id_bc int(11) not null,
    primary key (id)
);

drop table if exists HienTrangKhiThai;
create table if not exists HienTrangKhiThai (
    id int(11) not null auto_increment,
    stt int(4) not null default 0,
    loaikhithai varchar(100) not null,
    donvi varchar(50) null,
    quy1 float(4) null,
    quy2 float(4) null,
    quy3 float(4) null,
    quy4 float(4) null,
    tong float(8) null,
    ghichu varchar(100) null,
    chucnang varchar(100) null,
    id_bc int(11) not null,
    primary key (id)
);

drop table if exists KetQuaPhanTichNuocThai;
create table if not exists KetQuaPhanTichNuocThai(
	id int(11) not null auto_increment,
	stt int(4) not null default 0,
	thongsodo varchar(100) not null,
	donvi varchar(50) null,
	lan1 float(4) null,
	lan2 float(4) null,
	lan3 float(4) null,
	lan4 float(4) null,
	lan5 float(4) null,
	lan6 float(4) null,
	tong float(8) null,
	ghichu varchar(100) null,
	chucnang varchar(100) null,
	id_bc int(11) not null,
	primary key (id)
);

drop table if exists KetQuaPhanTichKhiThai;
create table if not exists KetQuaPhanTichKhiThai(
	id int(11) not null auto_increment,
	stt int(4) not null default 0,
	thongsodo varchar(100) not null,
	donvi varchar(50) null,
	lan1 float(4) null,
	lan2 float(4) null,
	lan3 float(4) null,
	lan4 float(4) null,
	lan5 float(4) null,
	lan6 float(4) null,
	tong float(8) null,
	ghichu varchar(100) null,
	chucnang varchar(100) null,
	id_bc int(11) not null,
	primary key (id)
);
 drop table if exists HienTrangChatThaiRan;
create table if not exists HienTrangChatThaiRan(
	id int(11) not null auto_increment,
	id_loaichatthairan int(11) not null,
	stt int(4) not null default 0,
	loaichatthai varchar(100) not null,
	donvi varchar(50) not null,
	thang1 float(4) null,
	thang2 float(4) null,
	thang3 float(4) null,
	thang4 float(4) null,
	thang5 float(4) null,
	thang6 float(4) null,
	thang7 float(4) null,
	thang8 float(4) null,
	thang9 float(4) null,
	thang10 float(4) null,
	thang11 float(4) null,
	thang12 float(4) null,
	donvithugomvanchuyen varchar(100) null,
	tong float(8) null,
	chucnang varchar(100) null,
	id_bc int(11) not null,
	primary key (id)
);

drop table if exists LoaiChatThaiRan;
create table if not exists LoaiChatThaiRan(
	id int(11) not null auto_increment,
	tenloai varchar(100) not null,
	primary key (id)
);