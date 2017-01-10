<?php foreach($m_santri as $input){ ?>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">update Santri</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/santri/doUpdateSantri'), 'class="form-horizontal "'); ?>
        <input name="nis" type="hidden" id="nis" value="<?php echo $slug; ?>">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nisn Santri</label>
          <div class="col-sm-10">
            <input name="nisn" type="text" required="required" class="form-control" id="nisn" maxlength="60" value="<?php echo $input['nisn']; ?>">
            <span class="help-block"><?php echo form_error('nisn'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Santri</label>
            <div class="col-sm-10">
              <select name="id_jns_santri" required id="id_jns_santri" class="form-control m-bot15">
                <?php foreach ($m_jenis_santri as $data) {
                   echo '<option value="'.$data['id_jns_santri'].'">'.$data['uraian'].'</option>';
                } ?>
              </select>
              <span class="help-block"><?php //echo form_error('idtype'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input name="nama" type="text" required="required" class="form-control" id="nama" maxlength="60" value="<?php echo $input['nama']; ?>">
            <span class="help-block"><?php echo form_error('nama'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama Arab</label>
          <div class="col-sm-10">
            <input name="nama_ar" type="text" required="required" class="form-control" id="nama_ar" maxlength="60" value="<?php echo $input['nama_ar']; ?>">
            <span class="help-block"><?php echo form_error('nama_ar'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tempat lahir</label>
          <div class="col-sm-10">
            <input name="tempat_lahir" type="text" required="required" class="form-control" id="tempat_lahir" maxlength="60" value="<?php echo $input['tempat_lahir']; ?>">
            <span class="help-block"><?php echo form_error('tempat_lahir'); ?></span>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal lahir</label>
          <div class="col-sm-10">
            <input name="tgl_lahir" type="date" required="required" class="form-control" id="tgl_lahir" maxlength="60" value="<?php echo $input['tgl_lahir']; ?>">
            <span class="help-block"><?php echo form_error('tgl_lahir'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Daerah Santri</label>
          <div class="col-sm-10">
            <input name="daerah" type="text" required="required" class="form-control" id="daerah" maxlength="60" value="<?php echo $input['daerah']; ?>">
            <span class="help-block"><?php echo form_error('daerah'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Daerah Santri Arab</label>
          <div class="col-sm-10">
            <input name="daerah_ar" type="text" required="required" class="form-control" id="daerah_ar" maxlength="60"  value="<?php echo $input['daerah_ar']; ?>">
            <span class="help-block"><?php echo form_error('daerah_ar'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Masuk</label>
          <div class="col-sm-10">
            <input name="tgl_awal" type="date" required="required" class="form-control" id="tgl_awal" maxlength="60"  value="<?php echo $input['tgl_awal']; ?>">
            <span class="help-block"><?php echo form_error('tgl_awal'); ?></span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tanggal Keluar</label>
          <div class="col-sm-10">
            <input name="tgl_akhir" type="date" class="form-control" id="tgl_akhir" maxlength="60" value="<?php echo $input['tgl_akhir']; ?>">
            <span class="help-block"><?php echo form_error('tgl_akhir'); ?></span>
          </div>
        </div>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
<?php }?>