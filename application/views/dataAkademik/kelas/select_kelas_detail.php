<div class="col-lg-12">
  <section class="panel">
    <?php
    //  var_dump($M_data_santri_nilai_detail);
    foreach ($M_data_kelas as $data): ?>
    <header class="panel-heading">
      Detail <?php echo $data['uraian']; ?>
    </header>
    <div class="row" style="margin: 0px;">
      <div class="col-sm-9">
        <table>
          <tr>
            <td>Jumlah</td>
            <td><?php echo $data['jumlah']; ?></td>
          </tr>
          <tr>
          <tr>
            <td>Tanggal Kelas Digunakan</td>
            <td><?php echo $data['tgl_awal']; ?></td>
          </tr>
          <tr>
            <td>Tanggal Akhir Kelas Digunakan</td>
            <td><?php echo $data['tgl_akhir']; ?></td>
          </tr>
          <tr>
            <td>Tahun Ajaran</td>
            <td><?php echo $data['tahun_awal'].' - '.$data['tahun_akhir'];?></td>
          </tr>
          <tr>
            <td>Tanggal Awal Tahun Ajaran</td>
            <td><?php echo $data['ta_tgl_awal']; ?></td>
          </tr>
            <tr>
            <td>Tanggal Akhir Tahun Ajaran</td>
            <td><?php echo $data['ta_tgl_akhir']; ?></td>
          </tr>
            <td colspan="2">
              <div class="btn-group">
                <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/updateKelas/'.$data['id_kelas']; ?>"><i class="icon_pencil-edit"></i>&nbsp;Update Daftar Santri</a>
                <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/addKelasDetail/'.$data['id_kelas']; ?>"><i class="icon-plus-sign"></i>&nbsp;Tambah Santri ke Dalam Kelas</a>
                <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/addTdKelasJadwal'; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Jadwal Kelas</a>
                 <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/addTdKelasWali'; ?>"><i class="icon-plus-sign"></i>&nbsp;Buat Wali Kelas</a>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  <?php endforeach; ?>

  <header class="panel-heading tab-bg-primary">
    <ul class="nav nav-tabs">
      <li class="active">
        <a data-toggle="tab" href="#kelas_detail">
          <i class="icon-truck"></i>
          &nbsp;List Santri
        </a>
      </li>
      <li>
        <a data-toggle="tab" href="#kelas_wali">
          <i class="icon-money"></i>
          &nbsp;Daftar Wali Kelas
        </a>
      </li>
      <li>
        <a data-toggle="tab" href="#kelas_jadwal">
          <i class="icon-money"></i>
          &nbsp;Daftar Jadwal Kelas
        </a>
      </li>
    </ul>
  </header>
  <div class="panel-body">
    <div class="tab-content">
      <div id="kelas_detail" class="tab-pane active">
        <table class="table table-striped table-advance table-hover border-top" id="sample_3">
          <thead>
            <tr>
              <th>No</th>
              <th>Nis</th>
              <th>Nama</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($M_data_kelas_list_santri as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/updateTdSantriNilai/'.$data['nis'].'/data[id_kelas]';; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/kelas/deleteSantriNilai/'.$data['nis'].'/data[id_kelas]'; ?>"><i class="icon_close_alt2"></i></a>
                </div></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
        <div id="kelas_wali" class="tab-pane">
        <table class="table table-striped table-advance table-hover border-top" id="sample_3">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nomor Telepon</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo 'lalala'; ?></td>
                <td><?php echo  'yyeye'; ?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/updateTdSantriNilai/1'; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/kelas/deleteSantriNilai/1'; ?>"><i class="icon_close_alt2"></i></a>
                </div></td>
              </tr>
          </tbody>
        </table>
      </div>
      <div id="kelas_jadwal" class="tab-pane">
        <table class="table table-striped table-advance table-hover border-top" id="sample_3">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Jadwal</th>
              <th>Jenis Pelajaran</th>
              <th>Tanggal Ujian</th>
              <th>Jenis Ruangan</th>
              <th>Ruangan</th>
              <th>Hari</th>
              <th>Semester</th>
              <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($M_data_kelas_jadwal as $data): ?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $data['uraian_jj']; ?></td>
                <td><?php echo $data['uraian_jp']; ?></td>
                <td><?php echo $data['tgl_ujian'];?></td>
                <td><?php echo $data['uraian_jr']?></td>
                <td><?php echo $data['nama_kelas'];?></td>
                <td><?php echo $data['uraian_jh'];?></td>
                <td><?php echo $data['semester'];?></td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="<?php echo base_url().'data_akademik/kelas/updateTdSantriNilai/'.$data['id_kelas_jadwal']; ?>"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="<?php echo base_url().'data_akademik/kelas/deleteSantriNilai/'.$data['id_kelas_jadwal']; ?>"><i class="icon_close_alt2"></i></a>
                </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</div>

<!-- datatable -->
<script type="text/javascript" src="<?php echo base_url('assets/adminLte/assets/data-tables/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/adminLte/assets/data-tables/DT_bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/adminLte/js/dynamic-table.js')?>"></script>