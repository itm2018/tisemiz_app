create table vi_tri_do(
id int(11) not null auto_increment,
vi_tri varchar(200) not null,
colCSSX int(11),
primary key (id)
)engine=innoDB default character set utf8;

create table ket_qua_giam_sat_dinh_ky_khi_thai(
id int(11) not null auto_increment,
stt int not null default 0,
chi_tieu varchar(100) not null,
gia_tri_can_tren float(8) null,
gia_tri_can_duoi float(8) null,
gia_tri_trung_binh float(8) not null,
ghichu text null,
id_vi_tri_do int(11) not null,
ngay_giam_sat datetime not null,
ngay_nhap datetime not null,
created_by int(11) null,
primary key(id)
);

create table ket_qua_giam_sat_dinh_ky_nuoc_thai(
id int(11) not null auto_increment,
stt int not null default 0,
chi_tieu varchar(100) not null,
truoc_xu_ly float(8) null,
sau_xu_ly float(8) null,
nuoc_sinh_hoat float(8) null,
ghichu text null,
id_vi_tri_do int(11) not null,
ngay_giam_sat datetime not null,
ngay_nhap datetime not null,
created_by int(11) null,
primary key(id)
);

create table ket_qua_giam_sat_dinh_ky_do_rung(
id int(11) not null auto_increment,
tieng_on float(8) null,
do_rung float(8) null,
ghichu text null,
id_vi_tri_do int(11) not null,
ngay_giam_sat datetime not null,
ngay_nhap datetime not null,
created_by int(11) null,
primary key(id)
);