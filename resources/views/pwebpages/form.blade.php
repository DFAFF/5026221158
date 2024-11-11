<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showalert(){
        alert("Selamat anda menang undian 10 milyar rupiah");
    }

    function validateform(){
        var nrp =document.getElementById("nrpku") ; //Baca Objek

        if (nrp.value.length != 10){
            alert("NRP harus 10 digit");
            nrp.focus();
            return false ;
        }
        
        if(isNaN(nrp.value) == true){
            alert("NRP harus angka");
            nrp.focus();
            return false ;
        }

        
    }

</script>
</head>

<body>
  <div class="container">
    <form action="https://www.google.co.id" method="get" onsubmit="return validateform();">
        <div class="input-group">
          <span class="input-group-text">NRP </span>
          <input type="text" class="form-control" placeholder="Isikan 10 digit NRP kalian ! " name="nrp"  id="nrpku">
        </div>
        <div class="input-group">
            <span class="input-group-text">Nama </span>
            <input type="text" class="form-control" placeholder="Isikan nama lengkap kalian ! " name="nama"  id="nama">
          </div>
          <div class="input-group">
            <span class="input-group-text">Umur </span>
            <input type="text" class="form-control" placeholder="Isikan umur kalian ! " name="umur"  id="umur">
          </div>
        <input type="reset" class="btn btn-warning" value="Reset">
        <input type="submit" class="btn btn-success" value="Kirim">
        <input type="button" class="btn btn-default" value="alert" onclick="showalert();">
    </form>
  </div>
</body>

</html>