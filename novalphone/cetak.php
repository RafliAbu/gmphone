<?php
include('koneksi.php');

if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>
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