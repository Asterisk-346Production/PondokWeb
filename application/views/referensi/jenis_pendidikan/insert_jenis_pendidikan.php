<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Jenis Karyawan</header>
      <div class="panel-body">
        <?php echo form_open(base_url('referensi/referensi_jenis_pendidikan/doInsertReferensiJenisPendidikan'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Uraian Jenis Pendidikan</label>
          <div class="col-sm-10">
            <input name="uraian" type="text" required="required" class="form-control" id="uraian" maxlength="60">
            <span class="help-block"><?php echo form_error('uraian'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Fl_ Formal</label>
          <div class="col-sm-10">
            <select name="fl_formal" id ="fl_formal" class="form-control m-bot15">
              <option value="Y">Y</option>
              <option value="T">T</option>
            </select>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
