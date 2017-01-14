  	<div class="col-lg-12">
     <section class="panel">
       <?php foreach ($M_data_santri_nilai_detail as $data): ?>
         <header class="panel-heading">
         Detail <?php echo $data['santri']; ?>
         </header>
         <table>
           <tr>
             <td>Nis</td>
             <td><?php echo $data['nis']; ?></td>
           </tr>
           <tr>
             <td>Nisn</td>
             <td><?php echo $data['nisn']; ?></td>
           </tr>
        <!--    <tr>
             <td>Alamat</td>
             <td><?php echo $data['AlmtPemilik']; ?></td>
           </tr>
           <tr>
             <td>Nomor Telepon</td>
             <td><?php echo $data['TelpPemilik']; ?></td>
           </tr> -->
        <!--    <tr>
             <td colspan="2"><div class="btn-group">
               <a class="btn btn-success" href="<?php echo base_url().'pemilik/change_pemilik/'.$data['id']; ?>"><i class="icon_pencil-edit"></i>&nbsp;Update Data Pemilik</a>
               <a class="btn btn-success" href="<?php echo base_url().'kendaraan/add_kendaraan/'.$data['id']; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Data Kendaraan</a>
               <a class="btn btn-success" href="<?php echo base_url().'setoran/add_setoran/'.$data['id']; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Data Setoran</a>
             </div></td>
           </tr> -->
         </table>
       <?php endforeach; ?>

       <header class="panel-heading tab-bg-primary">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#santri">
              <i class="icon-truck"></i>
              &nbsp;Data Santri
            </a>
          </li>
          <li>
            <a data-toggle="tab" href="#rapor">
              <i class="icon-money"></i>
              &nbsp;Nilai Rapor Santri
            </a>
          </li>
        </ul>
      </header>
      <div class="panel-body">
        <div class="tab-content">
          <div id="santri" class="tab-pane active">
            <table class="table table-striped table-advance table-hover border-top" id="sample_3">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Pelajaran</th>
                  <th>Nilai</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=0; foreach ($M_data_santri_nilai_detail as $data): ?>
                <tr>
                  <td><?php echo ++$no; ?></td>
                  <td><?php echo $data['nis']; ?></td>
                  <td><?php echo $data['santri']; ?></td>
                  <td><?php echo $ddata['nilai_akhir']; ?></td>
                  <td><?php echo $data['pelajaran']; ?></td>
                  <td><div class="btn-group">
                    <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri_nilai/updateTdSantriNilai/'.$data['nis']; ?>"><i class="icon_pencil-edit"></i></a>
                    <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/santri_nilai/deleteSantriNilai/'.$data['nis']; ?>"><i class="icon_close_alt2"></i></a>
                  </div></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div id="setoran" class="tab-pane">
          <table class="table table-striped table-advance table-hover border-top" id="sample_2">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nisn</th>
                <th>Nis</th>
                <th>Nama_ar</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0; foreach ($M_data_santri_nilai_detail as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['santri']; ?></td>
                <td><?php echo $data['nisn']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama_ar']; ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri_nilai/updateTdSantriNilai/'.$data['nis']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/santri_nilai/deleteSantri/'.$data['nis']; ?>"><i class="icon_close_alt2"></i></a>
                </div></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</div>
</div>