<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Jenis Ruangan</header>
      <div class="panel-body">
        <?php foreach ($m_jenis_ruangan as $data): ?>
          <?php echo form_open(base_url('referensi/referensi_jenis_ruangan/doUpdateReferensiJenisRuangan'), 'class="form-horizontal "'); ?>
          <input name="id" type="hidden" id="id" value="<?php echo $slug; ?>">
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Ruangan</label>
            <div class="col-sm-10">
              <input name="uraian" type="text" required="required" class="form-control" id="uraian" maxlength="60" value ="<?php echo $data['uraian']; ?>">
              <span class="help-block"><?php echo form_error('uraian'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Ruangan Arab</label>
            <div class="col-sm-10">
              <input name="uraian_ar" type="text" required="required" class="form-control" id="uraian_ar" maxlength="60" value ="<?php echo $data['uraian_ar']; ?>">
              <span class="help-block"><?php echo form_error('uraian_ar'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Uraian Jenis Ruangan English</label>
            <div class="col-sm-10">
              <input name="uraian_en" type="text" required="required" class="form-control" id="uraian" maxlength="60" value ="<?php echo $data['uraian_en']; ?>">
              <span class="help-block"><?php echo form_error('uraian_en'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
              <input name="keterangan" type="text" required="required" class="form-control" id="keterangan" maxlength="60" value ="<?php echo $data['keterangan']; ?>">
              <span class="help-block"><?php echo form_error('keterangan'); ?></span>
            </div>
          </div>
          <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
          <?php echo form_close(); ?>
        <?php endforeach; ?>
      </div>
    </section>
  </div>
</div>
