<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="logo.png" />
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
   body {
    background-color: 	#808080;
}

input {
    float: right;
    width: calc(100% - 00px);
}

    .card{
        margin-top: 300px ;
        margin-left: 350px ;
        width: 40%;
      }
	  button {
    float: right;
    width: calc(100% - 00px);
}
</style>

<div class="container">
   <div class="row mt-7">
           <div class="card col-md-">
               <div class="card-header ">
                 <h2 align = "center">REGISTER</h2>
               </div>
               <div class="card-body">
                 <form method="post" action="proses.php">
                     <div class="form-group">
                         <label for="nama">Nama</label>
                         <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" autocomplete="off" required>
                     </div>
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" name="email" placeholder="Masukkan email" autocomplete="off" required>
                     </div>
                     <div class="form-group">
                         <label for="user">username</label>
                         <input type="text" class="form-control" name="username"placeholder="Masukkan username" autocomplete="off" required>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Masukkan password" autocomplete="off" required>
                     </div>
                     <button type="submit" name="simpan">Simpan</button>
                 </form>
               </div>
       </div>
   </div>
</div>
</div>