<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <a class="btn btn-primary" href="<?php echo base_url().'referensi/referensi_jenis_jam/addReferensiJenisJam/'; ?>"><i class="icon_plus_alt2"></i> Tambah Data</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-advance table-hover border-top" id="sample_2">
          <thead>
            <tr>
              <th>No</th>
              <th>Jam Awal Pelajaran</th>
              <th>Jam Akhir Pelajaran</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($m_jenis_jam as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['jam_awal'].":".$data['menit_awal'] ?></td>
                <td><?php echo $data['jam_akhir'].":".$data['menit_akhir'] ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'referensi/referensi_jenis_jam/updateReferensiJenisJam/'.$data['id_jns_jam']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'referensi/referensi_jenis_jam/deleteReferensiJenisJam/'.$data['id_jns_jam']; ?>"><i class="icon_close_alt2"></i></a>
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