<div class="col-lg-12">
  <section class="panel">
    <?php
    //  var_dump($M_data_santri_nilai_detail);
    foreach ($M_data_santri as $data): ?>
    <header class="panel-heading">
      Detail <?php echo $data['nama']; ?>
    </header>
    <div class="row" style="margin: 0px;">
      <div class="col-sm-9">
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
      </div>
      <div class="col-sm-3">
        <div class="row">
          <center>
            Download Rapor PDF
          </center>
        </div>
        <br />
        <div class="row">
          <div class="col-md-12">
            <?php echo form_open('data_akademik/rapor/getRapor'); ?>
            <div class="row">
              <div class="ccol-md-12">
                <input type="hidden" id="idSantri" name="idSantri" value="<?php echo $data['nis']; ?>" />
                <center>
                  <select id="ta" name="ta" class="form-control m-bot15">
                    <?php foreach ($forSemesterTA as $key) {
                      echo '<option value="'.$key['id_kelas_jadwal'].'">'.$key['tgl_ujian'].'</option>';
                    } ?>
                  </select>
                </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <center>
                  <input type="submit" class="btn btn-primary btn-sm" value="GET REPORT"/>
                </center>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <header class="panel-heading tab-bg-primary">
    <ul class="nav nav-tabs">
      <li>
        <a data-toggle="tab" href="#santri">
          <i class="icon-truck"></i>
          &nbsp;Data Wali Santri
        </a>
      </li>
      <li class="active">
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
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nis']; ?></td>
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
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nisn']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nis']; ?></td>
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
