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
  * {
        margin:0; 
        padding:0;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:#C0C0C0;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#d68d9a;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
 
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
     </style>

</head>
<body>	
	<nav>
    <ul>
        <li><a href="http://localhost/corona/">Home</a></li>
        <li><a href="http://localhost/corona/corona/index.php">Covid</a></li>
        <li><a href="http://localhost/corona/corona/about.php">About Creator</a></li>
    </ul>
</nav>
   <div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
	
				<div class="header">
      <div class="bayangan">
      </div>
      <h1>
		COVID CHECKER
      </h1>
    </div>
    <div class="about">

      <div class="container">
        <form action="proses.php" method="POST">
          <div class="col-10 label">
            <label for="" ><font color = "black">Nama : </font></label>
            <br><input type="text" name="nama" autocomplete = "off"/><br>
          </div>
          <div class="col-10 label">
            <label for=""><font color = "black">Umur : </font></label>
            <br><input type="text" name="umur"/><br>
          </div>
		   <div class="col-10 label">
          <label for=""><font color = "black">Suhu Tubuh :</font></label>
          <br><input type="text" name="suhu" placeholder="derajat"> <br>
        </div>
        <div class="col-10 label">
        <div class="col-10 label">
          <label for=""><font color = "black">1. Apakah Anda Kesulitan bernafas ,Nyeri dada yang parah,Sulit untuk bangun,Merasa kebingungan,Penurunan kesadaran</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">2. Apakah Anda mengalami Nafas yang pendek saat istirahat, Ketidakmampuan untuk berbaring karena kesulitan bernafas,Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">3. Apakah Anda mengalami Demam , Batuk , Bersin , Sakit Tenggorokan , Sulit Bernafas</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label>
          <select class="form-control" name="">
            <option value="1">Ya / Tidak</option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
     
          <label>
          <br><input type="submit" name="Submit" value="Submit" class = "btn btn-primary"><br>
           </label>
        </div>
        </form>
              </div>
        </div>
    </div>
  </body>
</html>
			</center>
		</div>
		
    