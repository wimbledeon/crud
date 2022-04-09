<?php
include "koneksi.php";
include "add.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

<?php include_once "menu.php"; ?>


<div class="container">
 
    <h2>Input Biodata Mahasiswa</h2>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
            <a href="viewall.php" class="btn btn-info" role="button">Lihat Data</a>
            </span>
        </div> 
    </div>  
    <form action="" method="post">        
    <table class="table table-striped">
        <thead>
        <tr>
            <th>NIM</th>
            <th><input type="text" class="form-control" name="nim" id="nim" placeholder="NIM"></th>       
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>First Name</td>        
            <td><input type="text" class="form-control" name="namaDepan" id="namaDepan" placeholder="First Name"></td>       
        </tr>
        <tr>
            <td>Last Name</td>        
            <td><input type="text" class="form-control" name="namaBelakang" id="namaBelakang" placeholder="Last Name"></td>       
        </tr>
        <tr>
            <td>Email</td>        
            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email"></td>       
        </tr>
        </tbody>
    </table>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
            <button type="submit" class="btn btn-primary">ADD</button>
            </span>
        </div> 
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    </form>
</body>
</html>
