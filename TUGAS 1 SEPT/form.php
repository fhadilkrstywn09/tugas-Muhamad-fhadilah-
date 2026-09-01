<?php
include_once("navbar.php");
?>

<!-- awal konten -->
<div class="container">
  
<!-- awal kolom -->
<div class="container">
  <div class="row align-items-start">
    <div class="col-2">
     <!-- One of three columns -->
    </div>
    <div class="col-8">
      <br>
      <!--awal card -->
       <div class="card">
  <div class="card-header">
   <h3>FORM</h3> 
  </div>
  <div class="card-body">
  <!-- awal form -->
    <form>
  <div class="mb-3">
    <label for="exampleInputnamadepan" class="form-label">nama depan</label>
    <input type="text" class="form-control" id="exampleInputnamadepan" aria-describedby="namadepanHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputnamabelakang" class="form-label">nama belakang</label>
    <input type="text" class="form-control" id="exampleInputnamabelakang" aria-describedby="namabelakangHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputkelas" class="form-label">kelas</label>
    <input type="text" class="form-control" id="exampleInputkelas" aria-describedby="kelasHelp">
</div>
  <button type="submit" class="btn btn-primary">kirim</button>
    </form>
  <!-- akhir form -->
    
  </div>
       </div>
      <!-- akhir card -->
      
    </div>
    <div class="col-2">
     <!-- One of three columns -->
    </div>
  </div>
</div>
<!-- akhir kolom -->

</div>
<!-- akhir konten -->

<?php include("footer.php"); ?>
