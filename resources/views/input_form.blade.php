
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style type="text/css">
    body{
        padding: 200px;
    }

</style>
</head>
<body>
<form action="{{url('/proses-form')}}">
    <div class="form-group">
        <label for="inputEmail">Nama Barang</label>
        <input name="namaBarang" type="text" class="form-control" id="inputEmail" placeholder="Nama Barang">
    </div>
    <div class="form-group">
        <label for="inputEmail">Jumlah Barang</label>
        <input name="jumlahBarang" type="text" class="form-control" id="jumlahBarang" placeholder="Jumlah Barang">
    </div>
    <div class="form-group">
        <label for="inputEmail">Harga Barang</label>
        <input name="hargaBarang" type="text" class="form-control" id="hargaBarang" placeholder="Harga Barang">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>