<?php 
   include("config.php");

   if(!isset($_GET['id'])) {
      header("Location: list-siswa.php");
   }

   $id = $_GET['id'];

   $sql = "SELECT * FROM calon_siswa WHERE id = $id";
   $query = mysqli_query($db, $sql);
   $siswa = mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1) {
      die("Data tidak ditemukan!");
   }

?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulir edit</title>
</head>
<body>
   <header>
      <h3>Formulir edit data</h3>
   </header>

   <form action="proses-edit.php" method="post">
      <fieldset>
         <input type="hidden" name="id" value="<?php echo $siswa['id']?>">

         <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama']?>">
         </p>

         <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat"><?php echo $siswa['alamat']?></textarea>
         </p>

         <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == "laki-laki") ? "checked": "" ?> >Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == "perempuan") ? "checked": "" ?> >perempuan</label>
         </p>

         <p>
            <label for="agama">Agama</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
               <option <?php echo ($agama == "Islam") ? "selected": "" ?> >Islam</option>
               <option <?php echo ($agama == "Kristen") ? "selected": "" ?> >Kristen</option>
               <option <?php echo ($agama == "Protestan") ? "selected": "" ?> >Protestan</option>
               <option <?php echo ($agama == "Hindu") ? "selected": "" ?> >Hindu</option>
               <option <?php echo ($agama == "Buddha") ? "selected": "" ?> >Buddha</option>
            </select>
         </p>

         <p>
            <label for="sekolah_asal">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" placeholder="sekolah_asal" value="<?php echo $siswa['sekolah_asal']?>">
         </p>

         <p>
            <input type="submit" value="Simpan" name="simpan">
         </p>

      </fieldset>
   </form>
   
</body>
</html>