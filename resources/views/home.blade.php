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
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}


table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
.btn-md{
	margin-top:20px; 
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12"><h2 align="center">Data Barang </h2></div>
                </div>
                <div class="row">
                	<div class="col-sm-6 "></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" id="input-search"placeholder="Search&hellip;">
                      
                        </div>
                    </div>
                    <div class="col-sm-2">
                               <button class="btn btn-primary" id="btn-search">Search</button>
                    </div>
                </div>
            </div>
              
            <div class="row">
           		<div class="col-sm-2" align="center">
           			<div class="group-btn">
	           			<a href="/home"><button type="button" class="btn btn-primary btn-md btn-block" >Home</button></a>

	           			<a href="/input-form"><button type="button"  class="btn btn-primary btn-md btn-block">Insert</button></a>



	           			<a href="/delete"><button type="button" class="btn btn-primary btn-md btn-block">Delete</button></a>
	           			<a href="/sortNama"><button type="button" class="btn btn-primary btn-md btn-block">Sort By Nama</button></a>
                        <a href="/sortJumlah"><button type="button" class="btn btn-primary btn-md btn-block">Sort By Jumlah</button></a>
           			</div>
           		</div>
           		<div class="col-sm-10 ">
           			
           		
	         	  <table class="table table-hover">
	                <thead class="thead-light">
	                    <tr>
	                        <th>No</th>
	                        <th>Nama Barang </th>
	                        <th>Jumlah Barang</th>
	                        <th>Harga Barang </th>
                            <th> </th>
                            <th> </th>

	                    </tr>
	                </thead>
	                <tbody>
                        <?php $count = 1; ?>
                        @if(isset($shows))
                            @foreach($shows as $barangss)
                            <tr>
                                <td> {{$count}}</td>
                                <td> {{$barangss->nama_barang}}</td>
                                <td> {{$barangss->jumlah_barang}}</td>
                                <td> {{$barangss->harga_barang}}</td>
                                <td> <a href="/deleteItem/{{$barangss->nama_barang}}"><button class="btn btn-primary">Delete</button></td>
                             <td> <a href="/detailItem/{{$barangss->nama_barang}}"><button class="btn btn-primary">Detail</button></td>
                            </tr>
                            <?php $count++; ?>
                            @endforeach
                        @endif

                            
	                </tbody>
	            </table>
	            </div>
            </div>
        </div>
    </div>  
</div>
<script>
    $(document).ready(function(){
        $("#btn-search").click(function () {
            document.location = "/search/"+$("#input-search").val();
        })


    })
    
</script> 
</body>
</html>