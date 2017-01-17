<!DOCTYPE html>
<html>
<body>
  <div style="text-align:center; width:100%;">
    <h2><b>Blanko Nilai Ujian Tulis Pondok</b></h2>
    <h2><b>Kulliyatu-l-mu'allimin Islamiyah</b></h2>
    <h2><b>Pondok Pesantren Modern Ar-Ridho Sentul</b></h2>
    <h3><b>TAHUN PELAJARAN : <?php echo $ta; ?></b></h3>
  </div>

  <br/>
  <table style="width:100%">
    <tr>
      <td>Materi: <?php echo $pelajaran; ?></td>
      <td>Kelas: <?php echo $kelas; ?></td>
    </tr>
  </table>
  <table style="width:100%; border:1px black solid">
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Angka</td>
        <td>Keterangan</td>
      </tr>
    </thead>
    <tbody>
      <?php
        $i=0; $t_smester=0;
        foreach ($data as $item):
          $i++; $t_smester=$t_smester + $item['nilai_akhir'];
      ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $item['nama'];?></td>
          <td><?php echo $item['nilai_akhir']; ?></td>
          <td><?php echo $item['uraian']; ?></td>
        </tr>
      <?php endforeach; ?>
      <?php
        if($i<40){
          $n=$i;
          for ($n; $n <= $jml_siswa; $n++) {
            ?>
              <tr>
                <td><?php echo $n; ?></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            <?php
          }
        }
      ?>
    </tbody>
  </table>
  <br/>
  <table>
    <tr>
      <td>Jumlah Siswa</td>
      <td>:</td>
      <td><?php echo $i; ?></td>
    </tr>
    <tr>
      <td>Jumlah Nilai</td>
      <td>:</td>
      <td><?php echo $t_smester; ?></td>
    </tr>
    <tr>
      <td>Nilai Rata-rata</td>
      <td>:</td>
      <td><?php echo ($t_smester / $i); ?></td>
    </tr>
  </table>
  <br/>

  <div style="text-align:center; width:100%;">
    <p>Guru Mata Pelajaran</p>
    <br/>
    <br/>
    <br/>
    <p>______________________________</p>
  </div>
</body>
</html>
