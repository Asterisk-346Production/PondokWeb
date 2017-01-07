<!DOCTYPE html>
<html>
<body>
  <table style="width:100%">
    <thead>
      <tr>
        <td>Santri</td>
        <td>Pelajaran</td>
        <td>Ulangan1</td>
        <td>Ulangan2</td>
        <td>UTS</td>
        <td>Ulangan3</td>
        <td>Ulangan4</td>
        <td>UAS</td>
        <td>Semester</td>
        <td>Jumlah</td>
        <td>Rata2</td>
      </tr>
    </thead>
    <tbody>
      <?php
        $t_ul1 = 0; $t_ul2 = 0; $t_ul3 = 0; $t_ul4 = 0;
        $t_uts = 0; $t_uas = 0; $t_semester = 0;
        $t_total = 0; $t_avg = 0; $i=0;
        foreach ($data as $item):
          $i++;
          $t_ul1 = $t_ul1 + $item['n_ul1']; $t_ul2 = $t_ul2 + $item['n_ul2'];
          $t_ul3 = $t_ul3 + $item['n_ul3']; $t_ul4 = $t_ul4 + $item['n_ul4'];
          $t_uts = $t_uts + $item['n_uts']; $t_uas = $t_uas + $item['n_uas'];
          $t_semester = $t_semester + $item['n_semester']; $t_total = $t_total + $item['total'];
          $t_avg = $t_avg + $item['avg'];
      ?>
        <tr>
          <td><?php echo $item['nama']; ?></td>
          <td><?php echo $item['nm_pelajaran']; ?></td>
          <td><?php echo $item['n_ul1']; ?></td>
          <td><?php echo $item['n_ul2']; ?></td>
          <td><?php echo $item['n_uts']; ?></td>
          <td><?php echo $item['n_ul3']; ?></td>
          <td><?php echo $item['n_ul4']; ?></td>
          <td><?php echo $item['n_uas']; ?></td>
          <td><?php echo $item['n_semester']; ?></td>
          <td><?php echo $item['total']; ?></td>
          <td><?php echo $item['avg']; ?></td>
        </tr>
      <?php endforeach; ?>
        <tr>
          <td colspan="2"><center>Total Nilai</center></td>
          <td><?php echo $t_ul1; ?></td>
          <td><?php echo $t_ul2; ?></td>
          <td><?php echo $t_uts; ?></td>
          <td><?php echo $t_ul3; ?></td>
          <td><?php echo $t_ul4; ?></td>
          <td><?php echo $t_uas; ?></td>
          <td><?php echo $t_semester; ?></td>
          <td><?php echo $t_total; ?></td>
          <td><?php echo ($t_avg / $i); ?></td>
        </tr>
    </tbody>
  </table>

  <!-- <table>
    <tr>
      <td>Nama</td>
      <td><?php echo $nama ?></td>
    </tr>
    <tr>
      <td>Detail</td>
      <td><?php echo $detail ?></td>
    </tr>
    <tr>
      <td>Other Details</td>
      <td><?php echo $other ?></td>
    </tr>
  </table> -->

</body>
</html>