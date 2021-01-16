<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS UAS</title>

    <!-- CSS BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">UAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <!-- <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div> -->
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
        <pre>
        <form method="POST" action="output.php">
        **Pemesanan Tiket Maskapai**
        ==================================
        Nama Pemesan : <input type="text" name="nama_pemesan" id="nama_pemesan">

        Jumlah Tiket : <input type="number" id="jumlah_tiket" name="jumlah_tiket" min="1" max="10">


        Kelas       : <select name="kelas" id="kelas">
                      <option value="EKONOMI">EKONOMI</option>
                    <option value="BISNIS">BISNIS</option>
                    <option value="EKSEKUTIF">EKSEKUTIF</option>
                    </select>

        Tujuan       : <select  name="tujuan" id="tujuan">
                    <option value="BALI">BALI</option>
                    <option value="TANGERANG">TANGERANG</option>
                    <option value="PADANG">PADANG</option>
                    </select>

        Bagasi      : <input class="form-check-input" type="radio" name="bagasi" id="bagasi"value="5">5Kg

                    <input class="form-check-input" type="radio" name="bagasi" value="10">10Kg

                    <input class="form-check-input" type="radio" name="bagasi" value="15">15Kg

        Asuransi    : <input class="form-check-input" type="checkbox" name="asu[]" id="asu" value="Asuransi Jiwa">Asuransi Jiwa
                    <input class="form-check-input" type="checkbox" name="asu[]" id="asu" value="Asuransi Kecelekaan">Asuransi Kecelakan
                    <input class="form-check-input" type="checkbox" name="asu[]" id="asu" value="Asuransi Keterlambatan">Asuransi Keterlambatan

        <input class="btn btn-info" type="submit" value="SUBMIT"> <input class="btn btn-danger" type="reset" value="Batal">
        </form>
        </pre>
    </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>