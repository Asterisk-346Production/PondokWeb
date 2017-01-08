select * from 
td_bayanat bayanat, td_kelas_nilai kelas_nilai,
td_kelas_dtl kelas_detail, td_kelas_jadwal kelas_jadwal,
td_santri santri, tr_jenis_santri ref_santri
where
kelas_nilai.id_bayanat = bayanat.id_bayanat and
kelas_nilai.id_kelas_jadwal = kelas_jadwal.id_kelas_jadwal and
bayanat.id_kelas_jadwal = kelas_jadwal.id_kelas_jadwal and
bayanat.nis = kelas_nilai.nis and
santri.id_jns_santri = ref_santri.id_jns_santri and
kelas_detail.nis = santri.nis

