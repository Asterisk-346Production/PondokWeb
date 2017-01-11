CREATE TABLE tmp_table LIKE td_karyawan_kompentensi;
ALTER TABLE tmp_table MODIFY COLUMN id_kopetensi int(6) AUTO_INCREMENT PRIMARY KEY;
INSERT tmp_table SELECT * FROM td_karyawan_kompentensi;
DROP TABLE td_karyawan_kompentensi;
RENAME TABLE tmp_table TO td_karyawan_kompentensi;

CREATE TABLE tmp_table LIKE td_karyawan_pendidikan;
ALTER TABLE tmp_table MODIFY COLUMN id_pendidikan int(5) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM td_karyawan_pendidikan;
DROP TABLE td_karyawan_pendidikan;
RENAME TABLE tmp_table TO td_karyawan_pendidikan;

CREATE TABLE tmp_table LIKE td_kelas;
ALTER TABLE tmp_table MODIFY COLUMN id_kelas int(4) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM td_kelas;
DROP TABLE td_kelas;
RENAME TABLE tmp_table TO td_kelas;

CREATE TABLE tmp_table LIKE td_kelas_wali;
ALTER TABLE tmp_table MODIFY COLUMN id_kelas_wali int(11) AUTO_INCREMENT PRIMARY KEY;
INSERT tmp_table SELECT * FROM td_kelas_wali;
DROP TABLE td_kelas_wali;
RENAME TABLE tmp_table TO td_kelas_wali;

CREATE TABLE tmp_table LIKE td_pembayaran_dtl;
ALTER TABLE tmp_table MODIFY COLUMN id_pembayaran_dtl int(6) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM td_pembayaran_dtl;
DROP TABLE td_pembayaran_dtl;
RENAME TABLE tmp_table TO td_pembayaran_dtl;

CREATE TABLE tmp_table LIKE td_santri_wali;
ALTER TABLE tmp_table MODIFY COLUMN id_santri_wali int(6) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM td_santri_wali;
DROP TABLE td_santri_wali;
RENAME TABLE tmp_table TO td_santri_wali;

CREATE TABLE tmp_table LIKE td_kelas_jadwal_dtl;
ALTER TABLE tmp_table ADD COLUMN id_kelas_jadwal_dtl int(6) AUTO_INCREMENT PRIMARY KEY FIRST;
INSERT tmp_table (id_jns_jadwal_dtl, id_kelas_jadwal, id_jns_hari, id_jns_jam, jml_jam) SELECT id_jns_jadwal_dtl, id_kelas_jadwal, id_jns_hari, id_jns_jam, jml_jam FROM td_kelas_jadwal_dtl;
DROP TABLE td_kelas_jadwal_dtl;
RENAME TABLE tmp_table TO td_kelas_jadwal_dtl;

CREATE TABLE tmp_table LIKE tp_kelas_jadwal;
ALTER TABLE tmp_table MODIFY COLUMN id_kelas_jadwal int(6) AUTO_INCREMENT PRIMARY KEY;
INSERT tmp_table SELECT * FROM tp_kelas_jadwal;
DROP TABLE tp_kelas_jadwal;
RENAME TABLE tmp_table TO tp_kelas_jadwal;

CREATE TABLE tmp_table LIKE tr_jenis_ruangan;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_ruangan int(3) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM tr_jenis_ruangan;
DROP TABLE tr_jenis_ruangan;
RENAME TABLE tmp_table TO tr_jenis_ruangan;

CREATE TABLE tmp_table LIKE tr_jenis_skill;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_skill int(1) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM tr_jenis_skill;
DROP TABLE tr_jenis_skill;
RENAME TABLE tmp_table TO tr_jenis_skill;

CREATE TABLE tmp_table LIKE tr_jenis_status;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_status int(2) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM tr_jenis_status;
DROP TABLE tr_jenis_status;
RENAME TABLE tmp_table TO tr_jenis_status;

CREATE TABLE tmp_table LIKE tr_jenis_ujian;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_ujian int(2) AUTO_INCREMENT PRIMARY KEY;
INSERT tmp_table SELECT * FROM tr_jenis_ujian;
DROP TABLE tr_jenis_ujian;
RENAME TABLE tmp_table TO tr_jenis_ujian;

CREATE TABLE tmp_table LIKE tr_jenis_wali;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_wali int(2) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM tr_jenis_wali;
DROP TABLE tr_jenis_wali;
RENAME TABLE tmp_table TO tr_jenis_wali;

CREATE TABLE tmp_table LIKE tr_jenis_kompetensi;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_kompetensi int(3) AUTO_INCREMENT PRIMARY KEY;
INSERT tmp_table SELECT * FROM tr_jenis_kompetensi;
DROP TABLE tr_jenis_kompetensi;
RENAME TABLE tmp_table TO tr_jenis_kompetensi;

CREATE TABLE tmp_table LIKE tr_jenis_jadwal;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_jadwal int(3) AUTO_INCREMENT;
INSERT tmp_table SELECT * FROM tr_jenis_jadwal;
DROP TABLE tr_jenis_jadwal;
RENAME TABLE tmp_table TO tr_jenis_jadwal;

CREATE TABLE tmp_table LIKE tr_jenis_karyawan;
ALTER TABLE tmp_table MODIFY COLUMN id_jns_karyawan int(2) AUTO_INCREMENT;
INSERT INTO tmp_table (uraian, uraian_ar, keterangan) SELECT uraian, uraian_ar, keterangan FROM tr_jenis_karyawan;
DROP TABLE tr_jenis_karyawan;
RENAME TABLE tmp_table TO tr_jenis_karyawan;