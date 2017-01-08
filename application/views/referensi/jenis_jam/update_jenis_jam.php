<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Update Jenis Jam</header>
      <div class="panel-body">
        <?php foreach($m_jenis_jam as $data) : ?>
          <?php echo form_open(base_url('referensi/referensi_jenis_jam/doUpdateReferensiJenisJam'), 'class="form-horizontal "'); ?>
            <input name="id" type="hidden" id="id" value="<?php echo $slug; ?>">
            <div class="form-group">
              <label class="col-sm-2 control-label">Jam Awal Pelajaran</label>
              <div class="col-sm-10">
                <input name="jam_awal" type="time" required="required" class="form-control" id="jam_awal" maxlength="60" value ="<?php echo $data['jam_awal'] ?>">
                <span class="help-block"><?php echo form_error('jam_awal'); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Jam Akhir Pelajaran</label>
              <div class="col-sm-10">
                <input name="jam_akhir" type="text" required="required" class="form-control" id="jam_akhir" maxlength="60" value ="<?php echo $data['jam_akhir'] ?>">
                <span class="help-block"><?php echo form_error('jam_akhir'); ?></span>
              </div>
            </div>
            <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
          <?php echo form_close(); ?>
        <?php endforeach; ?>
      </div>
    </section>
  </div>
</div>
