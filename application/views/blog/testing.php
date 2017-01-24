<!-- page start-->
<div class="panel-body">
  <?php echo form_open(base_url('data_akademik/kelas/doInsertKelasJadwal'), 'class="form-horizontal "'); ?>
  <div class="form-group">
    <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
    <div class="col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="combo[]" value="1">
          Option one is this and that&mdash;be sure to include why it's great
          <input type="hidden" name="combox1" value ="bismillah">
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="combo[]"" value="2">
          <input type="hidden" name="combox2" value ="allahhu akbar">
          Option one is this and that&mdash;be sure to include why it's great option one
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="combo[]"" value="3">
          <input type="hidden" name="combox3" value ="allahhu maha besar">
          Option one is this and that&mdash;be sure to include why it's perfect option one
        </label>
      </div>
    </div>
  </div>
  <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block', 'value' => 'Simpan')); ?>
  <?php echo form_close(); ?>
</div>
<!-- page end-->