<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">Insert Santri Nilai</header>
      <div class="panel-body">
        <?php echo form_open(base_url('data_akademik/santri_nilai/doInsertSantriNilai'), 'class="form-horizontal "'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Santri</label>
          <div class="col-sm-10">
            <select name="nis" required id="nis" class="form-control m-bot15">
              <?php foreach ($M_santri as $data) {
                 echo '<option value="'.$data['nis'].'">'.$data['nis'].' - '.$data['nama'].'</option>';
              } ?>
            </select>
            <span class="help-block"><?php echo form_error('nis'); ?></span>
          </div>
        </div>
        <?php foreach ($M_jenis_pelajaran as $jp_list) { ?>
        <div class="row">
          <label class="col-sm-3 control-label"><?php echo $jp_list['uraian']; ?></label>
          <input name="id" type="hidden" id="id" value="<?php echo $jp_list['id_jns_pelajaran']; ?>">
          <div class="col-sm-9">
            <div class="form-group">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Jenis Jadwal</label>
                  <div class="col-sm-8">
                    <select name="jenis_jadwal" required id="jenis_jadwal" class="form-control m-bot15">
                      <?php foreach ($M_jenis_jadwal as $jj_list) {
                         echo '<option value="'.$jj_list['id_jns_jadwal'].'">'.$jj_list['uraian'].'</option>';
                      } ?>
                    </select>
                    <span class="help-block"><?php echo form_error('jenis_jadwal'); ?></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input name="nilai_akhir" type="text" required="required" class="form-control" id="nilai_akhir" maxlength="3" placeholder="Nilai Akhir">
                    <span class="help-block"><?php echo form_error('nilai_akhir'); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
        <?php echo form_close(); ?>
      </div>
    </section>
  </div>
</div>
