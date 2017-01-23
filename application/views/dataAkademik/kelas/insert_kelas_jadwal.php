  <div class="row">
    <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">Insert Kelas Jadwal</header>
        <div class="panel-body">
          <?php echo form_open(base_url('data_akademik/kelas/doInsertKelas'), 'class="form-horizontal "'); ?>
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
        <input name="tgl_ujian" type="date" required="required" class="form-control" id="tgl_ujian" maxlength="60">
        <span class="help-block"><?php echo form_error('tgl_ujian'); ?></span>
      </div>
    </div>
    <!-- edit here tommorrow -->
    <?php 
    $i = 0;
    foreach ($M_jenis_hari as $jh_hari) { 
      $i++;?>
      <div class="row">
        <label class="col-sm-3 control-label"><?php echo $jh_hari['uraian']; ?></label>
        <input name="id_jns_hari<?php echo $i; ?>" type="hidden" id="id_jns_hari<?php echo $i; ?>" value="<?php echo $jh_hari['id_jns_hari']; ?>">
        <div class="col-sm-9">
          <div class="form-group">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="col-sm-4 control-label">Jenis Jadwal</label>
                <div class="col-sm-8">
                <select name="id_jns_hari<?php echo $i; ?>" required id="id_jns_hari<?php echo $i; ?>" class="form-control m-bot15">
                    <?php foreach ($M_jenis_jam as $jj_list) {
                     echo '<option value="'.$jj_list['id_jns_jam'].'">'.$jj_list['uraian'].'</option>';
                   } ?>
                 </select>
                 <span class="help-block"><?php echo form_error('id_jns_jam'); ?></span>
               </div>
             </div>
           </div>
           <div class="col-sm-6">
            <div class="form-group">
              <div class="col-sm-12">
                <input name="jumlah_jam<?php echo $i; ?>" type="text" required="required" class="form-control" id="jumlah_jam<?php echo $i; ?>" maxlength="3" placeholder="Jumlah Jam">
                <span class="help-block"><?php echo form_error('jumlah_jam'); ?></span>
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
  <!-- <script type="text/javascript">
    $('#to-left').click(function(){
    $('#myField').val('');
  });
  </script> -->