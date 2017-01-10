<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <a class="btn btn-primary" href="<?php echo base_url().'data_akademik/santri/addSantri/'; ?>"><i class="icon_plus_alt2"></i> Tambah Data</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-advance table-hover border-top" id="sample_2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nisn</th>
              <th>Nama</th>
              <th>Nama Arab</th>
              <th>Jenis Santri</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Daerah</th>
              <th>Daerah Arab</th>
              <th>Tanggal Masuk</th> 
              <th>Tanggal Keluar</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($M_data_santri as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nisn'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td><?php echo $data['nama_ar'];?></td>
                <td><?php echo $data['keterangan'];?></td>
                <td><?php echo $data['tempat_lahir'];?></td>
                <td><?php echo $data['tgl_lahir'];?></td>
                <td><?php echo $data['daerah'];?></td>
                <td><?php echo $data['daerah_ar'];?></td>
                <td><?php echo $data['tgl_awal'];?></td>
                <td><?php echo $data['tgl_akhir'];?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/santri/updateSantri/'.$data['nis']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/santri/deleteSantri/'.$data['nis']; ?>"><i class="icon_close_alt2"></i></a>
                </div></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>

<!-- datatable -->
<script type="text/javascript" src="<?php echo base_url('assets/adminLte/assets/data-tables/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/adminLte/assets/data-tables/DT_bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/adminLte/js/dynamic-table.js')?>"></script>
