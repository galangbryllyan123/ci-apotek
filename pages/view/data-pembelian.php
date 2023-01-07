<?php 

if($_SESSION['level']!="Admin" AND $_SESSION['level']!="Apoteker" ){
  
  // header("location:../../error/page_403.html");  
echo "<META HTTP-EQUIV='Refresh'
CONTENT='0; URL=pages/error/index.html'>";
}

?>
     <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                  <div class="my-2"></div>
                  <a href="?p=form-pembelian" class="btn btn-dark"><span class="icon text-white-50"><i class="fas fa-folder-open"></i></span><span class="text"></span><strong>Tambah data </strong></a><p />

                <table class="table " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="100px">No. nota</th>
                      <th>Waktu order</th>
                      <th>Jatuh tempo</th>
                      <th>Status</th>
                      <th>Bayar</th>
                      <th>Sisa</th>
                      <th style="text-align : center" >Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th width="100px">No. nota</th>
                      <th>Waktu order</th>
                      <th>Jatuh tempo</th>
                      <th>Status</th>
                      <th>Bayar</th>
                      <th>Sisa</th>
                      <th style="text-align : center" >Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

