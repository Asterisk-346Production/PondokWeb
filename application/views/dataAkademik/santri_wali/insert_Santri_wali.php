<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Santri</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/santri/doInsertSantri'), 'class="form-horizontal "'); ?>
       <div class="form-group">
          <label class="col-sm-2 control-label">Nis Santri</label>
            <div class="col-sm-10">
              <select name="nis" required id="nis" class="form-control m-bot15">
                <?php foreach ($M_data_santri as $data) {
                   echo '<option value="'.$data['nis'].'">'.$data['nis'].' - '.$data['nama'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Wali</label>
            <div class="col-sm-10">
              <select name="id_jns_wali" required id="id_jns_wali" class="form-control m-bot15">
                <?php foreach ($M_jenis_santri_wali as $data) {
                   echo '<option value="'.$data['id_jns_wali'].'">'.$data['uraian'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input name="nama" type="text" required="required" class="form-control" id="nama" maxlength="60">
            <span class="help-block"><?php echo form_error('nama'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Arab</label>
          <div class="col-sm-10">
            <input name="nama_ar" type="text" required="required" class="form-control" id="nama_ar" maxlength="60">
            <span class="help-block"><?php echo form_error('nama_ar'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input name="alamat" type="text" required="required" class="form-control" id="alamat" maxlength="60">
            <span class="help-block"><?php echo form_error('alamat'); ?></span>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Nomor Telepon</label>
          <div class="col-sm-10">
            <input name="no_telp" type="date" required="required" class="form-control" id="no_telp" maxlength="60">
            <span class="help-block"><?php echo form_error('no_telp'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nomor Telepon Alternative</label>
          <div class="col-sm-10">
            <input name="no_telp2" type="text" required="required" class="form-control" id="no_telp2" maxlength="60">
            <span class="help-block"><?php echo form_error('no_telp2'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Email/label>
          <div class="col-sm-10">
            <input name="email" type="email" required="required" class="form-control" id="email" maxlength="60">
            <span class="help-block"><?php echo form_error('email'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">FL wali</label>
          <div class="col-sm-10">
            <input name="fl_wali" type="date" required="required" class="form-control" id="fl_wali" maxlength="60">
            <span class="help-block"><?php echo form_error('fl_wali'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
