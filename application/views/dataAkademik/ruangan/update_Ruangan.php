<?php foreach ($m_ruangan as $input){ ?>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Update Ruangan</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/ruangan/doUpdateRuangan'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <input name="id" type="hidden" id="id" value="<?php echo $slug; ?>">
          <label class="col-sm-2 control-label">Nama Ruangan</label>
          <div class="col-sm-10">
            <input name="nama" type="text" required="required" class="form-control" id="nama" maxlength="60" value ="<?php echo $input['nama']; ?>">
            <span class="help-block"><?php echo form_error('nama'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Ruangan Arab</label>
          <div class="col-sm-10">
            <input name="nama_ar" type="text" required="required" class="form-control" id="nama_ar" maxlength="60" value ="<?php echo $input['nama_ar']; ?>">
            <span class="help-block"><?php echo form_error('nama_ar'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Ruangan</label>
            <div class="col-sm-10">
              <select name="id_jns_ruangan" required id="id_jns_ruangan" class="form-control m-bot15">
                <?php foreach ($m_jenis_ruangan as $data) {
                   echo '<option value="'.$data['id_jns_ruangan'].'">'.$data['uraian'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Alias</label>
          <div class="col-sm-10">
            <input name="alias" type="text" required="required" class="form-control" id="alias" maxlength="60" value ="<?php echo $input['alias']; ?>">
            <span class="help-block"><?php echo form_error('alias'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Uraian Alias</label>
          <div class="col-sm-10">
            <input name="ur_alias" type="text" required="required" class="form-control" id="ur_alias" maxlength="60" value ="<?php echo $input['ur_alias']; ?>">
            <span class="help-block"><?php echo form_error('ur_alias'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Kapasitas</label>
          <div class="col-sm-10">
            <input name="kapasitas" type="number" required="required" class="form-control" id="kapasitas" maxlength="60" value ="<?php echo $input['kapasitas']; ?>">
            <span class="help-block"><?php echo form_error('kapasitas'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
<?php } ?>