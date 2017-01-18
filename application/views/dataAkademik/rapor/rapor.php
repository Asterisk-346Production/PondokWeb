<!DOCTYPE html>
<html>
<body>
  <div style="text-align:center; width:100%;">
    <h2><b> كشف الدرجات </b></h2>
    <h2><b> معهد الرضى سنتول للتربية الإسلامية الحديثة </b></h2>
    <?php foreach ($santri as $value) {
      echo "<h2><b> ".$value['tahun_akhir']."/".$value['tahun_awal']." : العام الدراسي  </b></h2>";
    } ?>
  </div>
  <br/>
  <table style="width:100%; text-align: right;">
    <tr>
      <?php foreach ($santri as $value) {
        echo "<td>Don't know about this (ruangan?)</td>";
        echo "<td>".$value['uraian']." : الفصل </td>";
        echo "<td>".$value['nama_ar']." : اسم الطالب </td>";
      } ?>
    </tr>
  </table>
  <div>
    <div style="width:50%; float:left;">
      <table style="width:100%;">
        <thead>
          <tr>
            <th colspan="3"> الدرجة التي حصلت عليها الطالب </th>
            <th rowspan="2"> المواد </th>
          </tr>
          <tr>
            <td> الحروف </td>
            <td> الدرجات </td>
            <td> معدل الدرجات </td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($nilai1 as $value) {
            echo '<tr>';
            echo '<td rowspan="2"> - </td>';
            echo '<td rowspan="2">'.$value['nilai'].'</td>';
            echo '<td>'.$value['pelajaranAr'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.$value['pelajaranEn'].'</td>';
            echo '</tr>';
          } ?>
          <tr>
            <td rowspan="2"> - </td>
            <td colspan="2" rowspan="2"> 1054 </td>
            <td> مجموع الدرجات لأول السنة </td>
          </tr>
          <tr>
            <td> First Semester Total Mark </td>
          </tr>
          <tr>
            <td rowspan="2"> - </td>
            <td colspan="2" rowspan="2"> 1710 </td>
            <td> مجموع الدرجات لآخر السنة  </td>
          </tr>
          <tr>
            <td> Second Semester Total Mark </td>
          </tr>
          <tr>
            <td rowspan="2"> - </td>
            <td colspan="2" rowspan="2"> 2764 </td>
            <td> المجموع الكلي </td>
          </tr>
          <tr>
            <td> Total </td>
          </tr>
          <tr>
            <td rowspan="2"> - </td>
            <td colspan="2" rowspan="2"> 71 </td>
            <td> معدل الدرجات </td>
          </tr>
          <tr>
            <td> Average </td>
          </tr>
          <tr>
            <td rowspan="2"> - </td>
            <td colspan="2" rowspan="2"> - </td>
            <td> الترتيب العلمي </td>
          </tr>
          <tr>
            <td> Position </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="width:50%; float:left;">
      <table style="width:100%;">
        <thead>
          <tr>
            <th colspan="3"> الدرجة التي حصلت عليها الطالب </th>
            <th rowspan="2"> المواد </th>
          </tr>
          <tr>
            <td> الحروف </td>
            <td> الدرجات </td>
            <td> معدل الدرجات </td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($nilai2 as $value) {
            echo '<tr>';
            echo '<td rowspan="2"> - </td>';
            echo '<td rowspan="2">'.$value['nilai'].'</td>';
            echo '<td>'.$value['pelajaranAr'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>'.$value['pelajaranEn'].'</td>';
            echo '</tr>';
          } ?>
        </tbody>
      </table>
    </div>
    <div style="clear: both;"></div>
  </div>
  <div>
    <table style="width:100%;">
      <tr>
        <td style="text-align: right;"> تقدير الدرجات </td>
        <td style="text-align: right;"> الشخصية </td>
      </tr>
    </table>
  </div>
  <div>
    <table style="width:100%;">
      <tr>
        <td> جيد </td>
        <td> 605-609 </td>
        <td> ضعيف جدا </td>
        <td> 100-309 </td>
        <td> ثمانون </td>
        <td> 80 </td>
        <td> لسلوك </td>
      </tr>
      <tr>
        <td> جيد جدا </td>
        <td> 700-704 </td>
        <td> ضعيف </td>
        <td> 400-505 </td>
        <td> ثمانون </td>
        <td> 80 </td>
        <td> النظافة </td>
      </tr>
      <tr>
        <td> ممتاز </td>
        <td> 804-100 </td>
        <td> مقبول </td>
        <td> 506-604 </td>
        <td> ثمانون </td>
        <td> 80 </td>
        <td> المواظفة </td>
      </tr>
    </table>
  </div>
  <div>
    <table style="width:100%;">
      <tr>
        <td style="text-align: right;"> تقدير الدرجات </td>
        <td style="text-align: right;"> الشخصية </td>
      </tr>
    </table>
  </div>
  <div>
    <table style="width:100%;">
      <tr>
        <td> - </td>
        <td> المرض </td>
        <td> - </td>
        <td> الجدية في المذاكرة </td>
      </tr>
      <tr>
        <td> - </td>
        <td> الاستئذان </td>
        <td> - </td>
        <td> مراعة الصحة </td>
      </tr>
      <tr>
        <td> - </td>
        <td> الآخر </td>
        <td> - </td>
        <td> مراعة المواظبة والتبكير </td>
      </tr>
    </table>
  </div>
  <div style="text-align:right; width:100%;">
    <p> تحريرا بمعهد الرضى سنتول: 14 يوليو 2016 </p>
  </div>
  <table style="width: 100%;">
    <thead>
      <tr>
        <td> ? </td>
        <td> ? </td>
        <td> ? </td>
      </tr>
    </thead>
    <tbody>
      <tr style="height: 30px;"></tr>
      <tr>
        <td> ? </td>
        <td> ? </td>
        <td> ? </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
