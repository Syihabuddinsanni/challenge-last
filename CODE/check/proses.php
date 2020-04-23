<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style media="screen">
   body {
    background-color: 	#808080;
}
label {
    float: left;

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
  </head>
  <body>

    <div class="header">
      <div class="bayangan">
      </div>
      <h1>
	   <div class="card col-md-">
               <div class="card-header ">
        Kesimpulan
      </h1>
    </div>
    <div class="about">
      <div class="container">
          <div class="left">
            <p>
		
              <?php
              include '../koneksi.php';

              if(isset($_POST['Submit']))
              {
                $nama = $_POST['nama'];
                $umur = $_POST['umur'];
               
                $suhu = $_POST['suhu'];
                $sql = "INSERT INTO daftar (nama,umur,suhu)
                        Values ('$nama','$umur','$suhu')";
                $res = mysqli_query($koneksi, $sql);


                if(isset($_POST['suhu'])) {
                  $suhu = $_POST['suhu'];
                  if ($suhu >37 ){
                    echo "<font color = 'white'>Anda memiliki kemungkinan positif corona, suhu tubuh Anda tinggi segera Pergi ke dokter untuk pengecekan dan
					Perawatan lebih lanjut</font>";
                  }else{
                    echo "<font color = 'white'>Anda kemungkinan besar negatif corona, suhu tubuh Anda normal</font>";
                  }
                }
              }
                ?>
            </p>
					<p><a class="btn btn-primary btn-lg" href="http://localhost/corona/check/index.php" role="button">Cek Ulang</a></p>
          </div>

        </div>
      </div>
  </body>
</html>