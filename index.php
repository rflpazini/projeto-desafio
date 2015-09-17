<?php
include 'config/connect.php';

function consulta() {
    $sql = "SELECT * FROM carro";
    $query = mysql_query($sql);
    while ($sql = mysql_fetch_array($query)) {
	$id = $sql["Id"];
	$model = $sql["Modelo"];
    $image = $sql["Url"];
        
	echo '<div class="col-sm-6 col-md-4">
	           <div class="thumbnail" value="'. $id .'">
	               <a href="#" target="_blank">
	                   <img src="holder.js/400x200" alt="...">
	                      <div class="caption">
	                          <h3>'. $model .'</h3>
	                          <p>...</p>
	                      </div>
	               </a>
                </div>
	       </div>';
    }
}
?>

<html lang="pt-Br">

<head>
    <meta author="Rafael Pazini">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Comparação de veículos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/material.css">
    <!-- Fonts -->
</head>

<body>
    <div class="bg-header blue">
    	<div class="container">
    		<h1 class="title-header">Compare os carros</h1>
    	</div>
    </div>
    <!-- nav -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /nav
 -->
    <button id="compare" class="btn-floating btn-large waves-effect waves-light red pull-right btn-action-header">
        <i class="medium mdi-content-report"></i>
    </button>
    <div class="container">
        <section id="cars" class="card">
        <div class="row">
        <?php 
            consulta();
        ?>
        </div>
        </section>
    </div>
    <!-- JS -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
	<script src="assets/js/custom.js"></script>

    <script src="assets/js/holder.min.js"></script>
</body>
</html>