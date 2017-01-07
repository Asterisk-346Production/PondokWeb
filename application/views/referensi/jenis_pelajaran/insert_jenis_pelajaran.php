<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Jenis Pelajaran</header>
      <div class="panel-body">
        <?php echo form_open(base_url('referensi/referensi_jenis_pelajaran/doInsertReferensiJenisPelajaran'), 'class="form-horizontal "'); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Pelajaran</label>
            <div class="col-sm-10">
              <input name="uraian" type="text" required="required" class="form-control" id="uraian" maxlength="60">
              <span class="help-block"><?php echo form_error('uraian'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Pelajaran English</label>
            <div class="col-sm-10">
              <input name="uraian_en" type="text" required="required" class="form-control" id="uraian_en" maxlength="60">
              <span class="help-block"><?php echo form_error('uraian_en'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Pelajaran Arab</label>
            <div class="col-sm-10">
              <input name="uraian_ar" type="text" required="required" class="form-control" id="uraian_ar" maxlength="60">
              <span class="help-block"><?php echo form_error('uraian_ar'); ?></span>
            </div>
          </div>
          <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
