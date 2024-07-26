<?php
include('koneksi.php');

if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GM Phone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="img/2.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
</head>


<!--   Akhir bagian Menu pada Header -->



<section class="bg-white dark:bg-gray-900 ">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">

      <div class="w-full p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Detail Kerusakan</h5>
 
    <form method="POST">
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Berikut adalah hasil diagnosa dari kerusakan smartphone kamu</p>
      <form method="POST">
      			<br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID :</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='idkerusakan' readonly value='".$data['idkerusakan']."'><br>";
                    }
                ?>
     		 </div>
                  </form>


        <div class="form-group"  method="POST">
      			<br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kerusakan:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='namakerusakan' readonly value='".$data['namakerusakan']."'><br>";
                    }
                ?>
     		 </div>
        </div>



        <div class="form-group"  method="POST">
      			<br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis smartphone:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='jensihp' readonly value='".$data['jenishp']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        <div class="form-group"  method="POST">
      			<br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciri Kerusakan:</label>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan p, basispengetahuan b where p.idkerusakan='".$_GET['id']."' and p.namakerusakan=b.namakerusakan";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<input type='text'  class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='jenishp' readonly value='".$data['gejala']."'><br>";
                    }
                ?>
     		 </div>
        </div>
        <div class="form-group"  method="POST">
      			<br><label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cara Mengatasi :</label><br>
      		<div class="col-sm-10">
                <?php
                       $tampil = "SELECT * FROM kerusakan where idkerusakan='".$_GET['id']."'";
                       $sql = mysqli_query ($konek_db,$tampil);
                       while($data = mysqli_fetch_array ($sql))
                    {
                       echo "<textarea  rows='8' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500' id='penanganan'  readonly>".$data['caramengatasi']."</textarea><br>";
                    }
                ?>
     		 </div>
          <button> <a href="diagnosa.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</a></button>
          <script type="text/javascript">
        window.print();
        </script>
        
    </div>  
    </div>
          
  </div>
</div>

</body>
</html>
