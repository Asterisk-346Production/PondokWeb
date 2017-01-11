<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Tahun Ajaran</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/tahun_ajaran/doInsertTdTahunAjaran'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Waktu Awal Ajaran</label>
          <div class="col-sm-10">
            <input name="tanggal_awal" type="date" required="required" class="form-control" id="tanggal_awal" maxlength="60">
            <span class="help-block"><?php echo form_error('tanggal_awal'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Waktu Akhir Ajaran</label>
          <div class="col-sm-10">
            <input name="tanggal_akhir" type="date" required="required" class="form-control" id="tanggal_akhir" maxlength="60">
            <span class="help-block"><?php echo form_error('tanggal_akhir'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
