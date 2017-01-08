<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Jenis Beasiswa</header>
      <div class="panel-body">
        <?php echo form_open(base_url('referensi/referensi_jenis_beasiswa/doInsertReferensiJenisBeasiswa'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Uraian Jenis Beasiswa</label>
          <div class="col-sm-10">
            <input name="uraian" type="text" required="required" class="form-control" id="uraian" maxlength="60">
            <span class="help-block"><?php echo form_error('uraian'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Donatur</label>
          <div class="col-sm-10">
            <input name="donatur" type="text" required="required" class="form-control" id="donatur" maxlength="60">
            <span class="help-block"><?php echo form_error('donatur'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jumlah</label>
          <div class="col-sm-10">
            <input name="jumlah" type="number" step="any" required="required" class="form-control" id="jumlah" maxlength="60">
            <span class="help-block"><?php echo form_error('jumlah'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
