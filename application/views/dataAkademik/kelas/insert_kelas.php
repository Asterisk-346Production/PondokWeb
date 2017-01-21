<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Kelas</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/kelas/doInsertKelas'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tahun Ajaran</label>
            <div class="col-sm-10">
              <select name="id_jns_ruangan" required id="id_jns_ruangan" class="form-control m-bot15">
                <?php foreach ($M_tahun_ajaran as $data) {
                   echo '<option value="'.$data['id_ta'].'">'.$data['tahun_awal'].' - '.$data['tahun_akhir'];'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Kelas</label>
            <div class="col-sm-10">
              <select name="id_jns_kelas" required id="id_jns_kelas" class="form-control m-bot15">
                <?php foreach ($M_jenis_kelas as $data) {
                   echo '<option value="'.$data['id_jns_kelas'].'">'.$data['uraian'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jumlah</label>
          <div class="col-sm-10">
            <input name="jumlah" type="number" required="required" class="form-control" id="jumlah" maxlength="60">
            <span class="help-block"><?php echo form_error('jumlah'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Awal Kelas</label>
          <div class="col-sm-10">
            <input name="tgl_awal" type="date" required="required" class="form-control" id="tgl_awal" maxlength="60">
            <span class="help-block"><?php echo form_error('tgl_awal'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Awal Akhir</label>
          <div class="col-sm-10">
            <input name="tgl_akhir" type="date" required="required" class="form-control" id="tgl_akhir" maxlength="60">
            <span class="help-block"><?php echo form_error('tgl_akhir'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
