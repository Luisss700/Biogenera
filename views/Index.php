<!DOCTYPE html>
<html>
<head>
<title>Iniciada</title>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link href="../Assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script src="../Assets/Bootstrap/js/bootstrap.min.js"></script> 
	<script src="../Controller/indexController.js"></script> 
	

    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<input type="text" class="form-control" placeholder="Nombre" id="ordenNombreCliente">
    		</div>
    		<div class="col-md-6">
    			<input type="text" class="form-control" placeholder="Nombre" id="ordenNombreCliente">
    		</div>
    		<br>
    		<br>
    	</div>
    	<div class="row">
    		<div class="col-md-4">
    			<input type="text" class="form-control" placeholder="Nombre" id="ordenNombreCliente">
    		</div>
    		<div class="col-md-4">
    			<input type="text" class="form-control" placeholder="Nombre" id="ordenNombreCliente">
    		</div>
    		<div class="col-md-4">
    			<input type="text" class="form-control" placeholder="Nombre" id="ordenNombreCliente">
    		</div>
    	</div>
    </div>

</body>
</html>
<Style>
.btnCerrajero {
	position:relative;
	box-shadow: 12px 11px 9px -4px #8a2121;
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	background-color:#c62d1f;
	border-radius:18px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:28px;
	font-weight:bold;
	font-style:italic;
	padding:32px 25px;
	text-decoration:none;
}
.btnCerrajero:hover {
	background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
	background-color:#f24437;
}
.btnCerrajero:active {
	position:relative;
	top:1px;
}

.imageLowLeft{ 
                position:absolute;                  
                bottom:0;                          
                right:0;                          
            }        
</Style>