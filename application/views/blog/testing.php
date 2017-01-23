   <!-- page start-->
    <div class="row">
     <div class="col-lg-12">
       <section class="panel">
         <header class="panel-heading">
           Detail : Testing Interface
         </header>
         <table>
           <tr>
             <td>Kode Pemilik</td>
             <td>111222</td>
           </tr>
           <tr>
             <td>Nama Lengkap</td>
             <td>Rio Suga</td>
           </tr>
           <tr>
             <td>Alamat</td>
             <td>Jombang</td>
           </tr>
           <tr>
             <td>Nomor Telepon</td>
             <td>08155368010100</td>
           </tr>
           <tr>
             <td colspan="2">
              <div class="btn-group">
               <a class="btn btn-success" href="#"><i class="icon_pencil-edit"></i>&nbsp;Update Data Pemilik</a>
               <a class="btn btn-success" href="#"><i class="icon-plus-sign"></i>&nbsp;Buat Data Kendaraan</a>
               <a class="btn btn-success" href="#"><i class="icon-plus-sign"></i>&nbsp;Buat Data Setoran</a>
             </div>
           </td>
         </tr>
       </table>
       <header class="panel-heading tab-bg-primary">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#kendaraan">
              <i class="icon-truck"></i>
              &nbsp;Kendaraan
            </a>
          </li>
          <li>
            <a data-toggle="tab" href="#setoran">
              <i class="icon-money"></i>
              &nbsp;Setoran
            </a>
          </li>
        </ul>
      </header>
      <div class="panel-body">
        <div class="tab-content">
          <div id="kendaraan" class="tab-pane active">
            <table class="table table-striped table-advance table-hover border-top" id="sample_3">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nomor Plat</th>
                  <th>Tahun</th>
                  <th>Tarif per Jam</th>
                  <th>Status Rental</th>
                  <th>ID Type</th>
                  <th>ID Pemilik</th>
                  <th><i class="icon_cogs"></i> Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>KA160621</td>
                  <td>2016</td>
                  <td>2,000</td>
                  <td>T</td>
                  <td>KA-11</td>
                  <td>PTKAI</td>
                  <td><div class="btn-group">
                    <a class="btn btn-success" href="#"><i class="icon_pencil-edit"></i></a>
                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                  </div></td>
                </tr>
            </tbody>
          </table>
        </div>
        <div id="setoran" class="tab-pane">
          <table class="table table-striped table-advance table-hover border-top" id="sample_2">
            <thead>
              <tr>
                <th>No</th>
                <th>Nomor Setoran</th>
                <th>Tanggal Setoran</th>
                <th>Jumlah</th>
                <th>ID Pemilik</th>
                <th>ID Karyawan</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>000001</td>
                <td>23-01-2016</td>
                <td>Rp. 5,600</td>
                <td>111000</td>
                <td>114514</td>
                <td><div class="btn-group">
                  <a class="btn btn-success" href="#"><i class="icon_pencil-edit"></i></a>
                  <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                </div></td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
</div>
</div>
<!-- page end-->