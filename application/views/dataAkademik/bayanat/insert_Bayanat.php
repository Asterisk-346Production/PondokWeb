<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Bayanat</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/bayanat/doInsertBayanat'), 'class="form-horizontal "'); ?>
           <div class="form-group">
          <label class="col-sm-2 control-label">Pilih Nis Santri</label>
            <div class="col-sm-10">
              <select name="nis" required id="nis" class="form-control m-bot15">
                <?php foreach ($M_santri as $data) {
                   echo '<option value="'.$data['nis'].'">'.$data['nis']." - ".$data['nama'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nomor Bayanat</label>
          <div class="col-sm-10">
            <input name="nomor" type="text" required="required" class="form-control" id="nomor" maxlength="60">
            <span class="help-block"><?php echo form_error('nomor'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pilih Jadwal Kelas</label>
            <div class="col-sm-10">
              <select name="id_kelas_jadwal" required id="id_kelas_jadwal" class="form-control m-bot15">
                <?php foreach ($M_kelas_jadwal as $data) {
                   echo '<option value="'.$data['id_kelas_jadwal'].'">'.$data['tgl_ujian'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nilai</label>
          <div class="col-sm-10">
            <input name="nilai" type="text" required="required" class="form-control" id="nilai" maxlength="60">
            <span class="help-block"><?php echo form_error('nilai'); ?></span>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Ujian</label>
          <div class="col-sm-10">
            <input name="tgl_ujian" type="date" required="required" class="form-control" id="tgl_ujian" maxlength="60">
            <span class="help-block"><?php echo form_error('tgl_ujian'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
