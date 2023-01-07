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

      <?php echo "ini data " ?>

      </div>
    </div>
  </div>

<!-- ----------------------------------------------------------------------------------------------------------------- -->

  <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data obat</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <div class="my-2"></div>

      <?php echo "ini data " ?>

      </div>
    </div>
  </div>

  <!----------------------------------------------------------------------------------------------------------------- -->
