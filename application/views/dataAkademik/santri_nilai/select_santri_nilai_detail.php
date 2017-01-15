  	<div class="col-lg-12">
     <section class="panel">
       <?php
       var_dump($M_data_santri_nilai_detail);
        foreach ($M_data_santri as $data): ?>
         <header class="panel-heading">
         Detail <?php echo $data['nama']; ?>
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
           <tr>
             <td>Jenis Santri</td>
             <td><?php echo $data['uraian'];?></td>
           </tr>
           <tr>
             <td>Nama Arab</td>
             <td><?php echo $data['nama_ar'] ?></td>
           </tr>  
           <tr>
             <td>Tempat Lahir</td>
             <td><?php echo $data['tempat_lahir']; ?></td>
           </tr>  
           <tr>
             <td>Tanggal Lahir</td>
             <td><?php echo $data['tgl_lahir']; ?></td>
           </tr>  
           <tr>
             <td>Tanggal Masuk</td>
             <td><?php echo $data['tgl_awal']; ?></td>
           </tr>  
           <tr>
             <td>Daerah</td>
             <td><?php echo $data['daerah']; ?></td>
           </tr>
             <tr>
             <td>Daerah Arab</td>
             <td><?php echo $data['daerah_ar']; ?></td>
           </tr>
            <tr>
             <td>Tanggal Keluar</td>
             <td><?php echo $data['tgl_akhir'];?></td>
           </tr>
           <tr>
             <td colspan="2">
               <div class="btn-group">
                 <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri/updateSantri/'.$data['nis']; ?>"><i class="icon_pencil-edit"></i>&nbsp;Update Data Santri</a>
                 <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri_nilai/addTdSantriNilai'; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Data Nilai</a>
              <!--    <a class="btn btn-success" href="<?php echo base_url().'setoran/add_setoran/'.$data['id']; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Data Wali</a> -->
               </div>
             </td>
           </tr>
         </table>
       <?php endforeach; ?>

       <header class="panel-heading tab-bg-primary">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#santri">
              <i class="icon-truck"></i>
              &nbsp;Data Wali Santri
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
          <div id="rapor" class="tab-pane active">
            <table class="table table-striped table-advance table-hover border-top" id="sample_3">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jadwal</th>
                  <th>Pelajaran</th>
                  <th>Nilai</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=0; foreach ($M_data_santri_nilai_detail as $data): ?>
                <tr>
                  <td><?php echo ++$no; ?></td>
                  <td><?php echo $data['jenis_jadwal']; ?></td>
                  <td><?php echo $data['nm_pelajaran']; ?></td>
                  <td><?php echo $data['nilai_akhir']; ?></td>
                  <td><div class="btn-group">
                    <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri_nilai/updateTdSantriNilai/'.$data['nis']; ?>"><i class="icon_pencil-edit"></i></a>
                    <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/santri_nilai/deleteSantriNilai/'.$data['nis']; ?>"><i class="icon_close_alt2"></i></a>
                  </div></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div id="santri" class="tab-pane">
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
                <td><?php echo $data['pelajaran']; ?></td>
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