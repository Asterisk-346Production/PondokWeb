<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert KKM</header>
      <div class="panel-body">
        <?php echo form_open(base_url('referensi/referensi_kkm/doInsertTrKKM'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tahun Ajaran</label>
          <div class="col-sm-10">
            <select name="id_ta" id="id_ta" required class="form-control m-bot15">
              <?php foreach ($m_tahun_ajaran as $data) {
                 echo '<option value="'.$data['id_ta'].'">'.$data['tahun_awal']." - ".$data['tahun_akhir'].'</option>';
              } ?>
            </select>
            <span class="help-block"><?php echo form_error('id_ta'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Pelajaran</label>
          <div class="col-sm-10">
            <select name="id_jns_pelajaran" id="id_jns_pelajaran" required class="form-control m-bot15">
              <?php foreach ($m_jenis_pelajaran as $data) {
                 echo '<option value="'.$data['id_jns_pelajaran'].'">'.$data['uraian'].'</option>';
              } ?>
            </select>
            <span class="help-block"><?php echo form_error('id_jns_pelajaran'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nilai</label>
          <div class="col-sm-10">
            <input name="nilai" type="text" required="required" class="form-control" id="nilai" maxlength="3">
            <span class="help-block"><?php echo form_error('nilai'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>