<!DOCTYPE html>
<html>
<body>
  <table style="width:100%">
    <thead>
      <tr>
        <td>Santri</td>
        <?php foreach($subject as $items):?>
          <td><?php echo $items['uraian_en'];?></td>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($scores as $item):?>
        <tr>
          <td><?php echo $item['santri'];?></td>
          <?php $i=0; foreach($subject as $items):?>
            <td><?php echo $item['subject'.++$i];?></td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
