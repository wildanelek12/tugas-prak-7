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
    ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
li.active{border-bottom:3px solid silver;}

.item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
.menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0px;margin-top:20px}
.btn-success{width:100%;border-radius:0px;}
.section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
.title-price{margin-top:30px;margin-bottom:0px;color:black}
.title-attr{margin-top:0px;margin-bottom:0px;color:black;}
.btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0px;}
.btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0px;}
div.section > div {width:100%;display:inline-flex;}
div.section > div > input {margin:0px;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
.attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
.attr.active,.attr2.active{ border:1px solid orange;}

@media (max-width: 426px) {
    .container {margin-top:100px;}
    .container > .row{padding:0px !important;}
    .container > .row > .col-xs-12.col-sm-5{
        padding-right:0px ;  
    }
    .container > .row > .col-xs-12.col-sm-9 > div > p{
        padding-left:0px !important;
        padding-right:0px !important;
    }
    .container > .row > .col-xs-12.col-sm-9 > div > ul{
        padding-left:10px !important;
     
    }          
    .section{width:104%;}
    .menu-items{padding-left:0px;}
}
</style>
</head>
<body>

    <div class="container" style="margin-top: 100px">
 <div class="row">
   <div class="col-xs-4 item-photo">



                <img class="img-responsive" width="400px" height="400px"  src="{{asset('image/').'/'.$filename}}" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray;">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3>{{$nama_barang}}</h3>  
                    

                    <!-- Precios -->
                    <h6 class="title-price"><small>Harga</small></h6>
                    <h3 style="margin-top:0px;">{{$harga}}</h3>

                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>Warna</small></h6>                  
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Varian</small></h6>                  
                        <div>
                            <div class="attr2">Coklat</div>
                            <div class="attr2">Abu"</div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>Jumlah</small></h6>                  
                        <div>
                            <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                            <input value="{{$jumlah_barang}}" />
                            <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                        </div>
                    </div>              

                    <!-- Botones de compra -->
                                    
                </div>                            

                
 </div>
</div>

</body>
</html>