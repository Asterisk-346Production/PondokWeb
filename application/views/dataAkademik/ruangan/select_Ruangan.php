<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <a class="btn btn-primary" href="<?php echo base_url().'data_akademik/ruangan/addruangan/'; ?>"><i class="icon_plus_alt2"></i> Tambah Data</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-advance table-hover border-top" id="sample_2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Ruangan</th>
              <th>Nama Ruangan Arab</th>
              <th>Jenis Ruangan</th>
              <th>Jenis Ruangan Arab</th>
              <th>Jenis Ruangan English</th>
              <th>Alias</th>
              <th>Uraian Alias</th>
              <th>Kapasitas</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
           <?php var_dump($M_data_ruangan); ?>
            <?php $no=0; foreach ($M_data_ruangan as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nama_ar']; ?></td>
                <td><?php echo $data['uraian']; ?></td>
                <td><?php echo $data['uraian_ar']; ?></td>
                <td><?php echo $data['uraian_en']; ?></td>
                <td><?php echo $data['alias']; ?></td>
                <td><?php echo $data['ur_alias']; ?></td>
                <td><?php echo $data['kapasitas']; ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/ruangan/updateruangan/'.$data['id_ruangan']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/ruangan/deleteruangan/'.$data['id_ruangan']; ?>"><i class="icon_close_alt2"></i></a>
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
