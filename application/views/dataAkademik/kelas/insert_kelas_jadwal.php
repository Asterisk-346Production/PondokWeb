  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">Insert Kelas Jadwal</header>
        <div class="panel-body">
          <?php echo form_open(base_url('data_akademik/kelas/doInsertKelasJadwal'), 'class="form-horizontal "'); ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Pelajaran</label>
            <div class="col-sm-10">
              <select name="id_jns_pelajaran" required id="id_jns_pelajaran" class="form-control m-bot15">
                <?php foreach ($M_jenis_pelajaran as $data) {
                 echo '<option value="'.$data['id_jns_pelajaran'].'">'.$data['uraian'].'</option>';
               } ?>
             </select>
           </div>
         </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Jenis Jadwal</label>
          <div class="col-sm-10">
            <select name="id_jns_jadwal" required id="id_jns_jadwal" class="form-control m-bot15">
              <?php foreach ($M_jenis_jadwal as $data) {
               echo '<option value="'.$data['id_jns_jadwal'].'">'.$data['uraian'].'</option>';
             } ?>
           </select>
         </div>
       </div>
       <input name="id" type="hidden" id="id" value="<?php echo $slug; ?>">
       <div class="form-group">
        <label class="col-sm-2 control-label">Tempat Pelaksanaan</label>
        <div class="col-sm-10">
          <select name="id_ruangan" required id="id_ruangan" class="form-control m-bot15">
            <?php foreach ($M_ruangan as $data) {
             echo '<option value="'.$data['id_ruangan'].'">'.$data['uraian'].' - '.$data['nama'].'</option>';
           } ?>
         </select>
       </div>
     </div>
     <div class="form-group">
      <label class="col-sm-2 control-label">Semester</label>
      <div class="col-sm-10">
        <select name="semester" required id="semester" class="form-control m-bot15">
          <option value="1">Semester - 1</option>
          <option value="2">Semester - 2</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal Ujian</label>
      <div class="col-sm-10">
        <input name="tgl_ujian" type="date" class="form-control" id="tgl_ujian" maxlength="60">
        <span class="help-block"><?php echo form_error('tgl_ujian'); ?></span>
      </div>
    </div>
    <!-- edit here tommorrow -->
    <div class="form-group">
      <label class="control-label col-lg-2" for="inputSuccess">Detail Hari</label>
      <div class="col-lg-10">
      <?php foreach ($M_jenis_hari as $jh_list):?>
        <div class="checkbox">
          <div class ="form-group">
            <div class="col-md-2">
              <input type="checkbox" id="combo<?php echo $jh_list['id_jns_hari']; ?>" name="combo[]" value="<?php echo $jh_list['id_jns_hari']; ?>">
              <label><?php echo $jh_list['uraian']; ?></label>
            </div>
            <div class="col-md-10">
              <div class="form-group">
                <div class ="col-sm-6">
                  <div class ="col-sm-4">
                    <label>Jenis Jam</label>
                  </div>
                  <div class ="col-sm-8">
                    <select name ="jenis_jam<?php echo $jh_list['id_jns_hari']; ?>" required class="form-control" disabled ="true" id="jenis_jam<?php echo $jh_list['id_jns_hari']; ?>">
                    <option value ="">---</option>
                      <?php foreach ($M_jenis_jam as $jj_list) {
                        echo '<option value="'.$jj_list['id_jns_jam'].'">'.$jj_list['jam_awal'].':'.$jj_list['menit_awal'].' - '.$jj_list['jam_akhir'].':'.$jj_list['menit_akhir'].'</option>';
                      } ?>
                    </select>
                    <!-- <span class="help-block"><?php //echo form_error('jenis_jam'); ?></span> -->
                  </div>
                </div>
                <div class ="col-sm-6">
                  <input name="jumlah_jam<?php echo $jh_list['id_jns_hari']; ?>" type="number" disabled="true" class="form-control" id="jumlah_jam<?php echo $jh_list['id_jns_hari']; ?>" maxlength="3" placeholder="Jumlah Jam">
                </div>
              </div>
            </div>
          </div>
        </div>
  <script type="text/javascript">
      $("#combo<?php echo $jh_list['id_jns_hari']; ?>").change(function(){
     $("#jumlah_jam<?php echo $jh_list['id_jns_hari']; ?>").prop("disabled", !$(this).is(':checked'));
     $("#jenis_jam<?php echo $jh_list['id_jns_hari']; ?>").prop("disabled",!$(this).is(':checked'));
  });
    </script>
      <?php endforeach; ?>
      </div>
    </div>
    <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
    <?php echo form_close(); ?>
  </div>
</section>
</div>
</div>
<!--   <script type="text/javascript">
    $('#combo1').change(function(){
   $("#jumlah_jam1").prop("disabled", !$(this).is(':checked'));
   $("#jenis_jam1").prop("disabled",!$(this).is(':checked'));
});
  </script> -->