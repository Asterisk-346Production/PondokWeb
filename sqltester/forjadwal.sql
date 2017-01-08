select a.id_kelas_jadwal,a.semester,ref_kelas.uraian,
a.tgl_ujian, ref_jadwal.uraian, ruangan.nama, 
ref_ruangan.id_jns_ruangan, ref_ruangan.uraian, 
ref_ruangan.uraian_ar, ref_ruangan.uraian, ref_ruangan.keterangan,
ref_hari.uraian, 
ref_jam.id_jns_jam, ref_jam.jam_awal, ref_jam.menit_awal, ref_jam.jam_akhir, ref_jam.menit_akhir,
b.jml_jam
from 
td_kelas_jadwal a, td_kelas_jadwal_dtl b ,
td_kelas c, td_kelas_dtl d,
tr_hari ref_hari,
tr_jenis_jadwal ref_jadwal, 
tr_jenis_jam ref_jam,
tr_jenis_kelas ref_kelas, 
tr_jenis_pelajaran ref_pelajaran,
tr_jenis_ruangan ref_ruangan,
td_ruangan_jadwal td_ruangan_jad,
td_ruangan ruangan
where 
a.id_kelas_jadwal = b.id_kelas_jadwal and
a.id_jns_pelajaran = ref_pelajaran.id_jns_pelajaran and
a.id_kelas = c.id_kelas and
c.id_kelas = d.id_kelas and
c.id_jenis_kelas = ref_kelas.id_jns_kelas and
a.id_jns_jadwal = ref_jadwal.id_jns_jadwal and
a.id_ruangan_jadwal = td_ruangan_jad.id_ruangan_jadwal and
td_ruangan_jad.id_ruangan =  ruangan.id_ruangan and
ruangan.id_jns_ruangan =  ref_ruangan.id_jns_ruangan and
b.id_jns_hari = ref_hari.id_jns_hari and
b.id_jns_jam = ref_jam.id_jns_jam

