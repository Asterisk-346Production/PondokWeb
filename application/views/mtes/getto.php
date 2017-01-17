<!DOCTYPE html>
<html>
<body>
  <table style="width:100%">
    <thead>
      <tr>
        <td>Santri</td>
        <?php foreach($data as $items):?>
        <td><?php echo $items['uraian'];?></td>
      <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <?php
        // $t_ul1 = 0; $t_ul2 = 0; $t_ul3 = 0; $t_ul4 = 0;
        // $t_uts = 0; $t_uas = 0; $t_semester = 0;
        // $t_total = 0; $t_avg = 0; $i=0;
        // foreach ($data as $item):
        //   $i++;
        //   $t_ul1 = $t_ul1 + $item['n_ul1']; $t_ul2 = $t_ul2 + $item['n_ul2'];
        //   $t_ul3 = $t_ul3 + $item['n_ul3']; $t_ul4 = $t_ul4 + $item['n_ul4'];
        //   $t_uts = $t_uts + $item['n_uts']; $t_uas = $t_uas + $item['n_uas'];
        //   $t_semester = $t_semester + $item['n_semester']; $t_total = $t_total + $item['total'];
        //   $t_avg = $t_avg + $item['avg'];
      ?>
        <tr>
          
        </tr>
      <?php //endforeach; ?>
      <?php foreach ($data as $item):?>
        <tr>
        <td><?php echo $item['nama'];?></td>
        <td><?php echo $item['nilai_akhir'];?></td>
        </tr>
      <?php endforeach; ?>  
    </tbody>
  </table>
</body>
</html>
