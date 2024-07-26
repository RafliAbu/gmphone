<?php
include "session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>GM Phone</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      body {
       font-family: 'Inter', sans-serif !important;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
                <table id="example1" class="table table-bordered table-striped caption-top">
  <center><h1>Tabel histori customer</h1></center>              
   <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama customer</th>
							              <th>Brand & Model</th>
                            <th>IMEI</th>
                            <th>Sistem Operasi</th>
                        </tr>
                    </thead>

                    <?php
      $tampil="select * from smartphones";
			$query= mysqli_query($konek_db,$tampil);
      $id=0;
                while($hasil=mysqli_fetch_array($query)){
                  $id++;
					echo "
          <tr>
          <td>".$hasil[0]."</td>
          <td>".$hasil[1]."</td>
          <td>".$hasil[2]."</td>
          <td>".$hasil[3]."</td>
          <td>".$hasil[4]."</td>";
                   }
                  
					?>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
  </body>
</html>
