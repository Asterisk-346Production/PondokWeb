<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <a class="btn btn-primary" href="<?php echo base_url().'data_akademik/bayanat/addBayanat/'; ?>"><i class="icon_plus_alt2"></i> Tambah Data</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-advance table-hover border-top" id="sample_2">
          <thead>
            <tr>
              <th>No</th>
              <th>Jadwal Kelas</th>
              <th>Tanggal Ujian</th>
              <th>Nis</th>
              <th>Nama Santri</th>
              <th>Nomor Bayanat</th>
              <th>Nilai</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($M_bayanat as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['id_kelas_jadwal']." ".$data['tgl_ujian'] ?></td>
                <td><?php echo $data['tgl_ujian']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nomor']; ?></td>
                <td><?php echo $data['nilai']; ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/bayanat/updateBayanat/'.$data['id_bayanat']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/bayanat/deleteBayanat/'.$data['id_bayanat']; ?>"><i class="icon_close_alt2"></i></a>
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
