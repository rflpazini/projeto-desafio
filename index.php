<?php
include 'config/functions.php';
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
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="bg-header blue">
    	<div class="container">
    		<h1 class="title-header">Compare os carros</h1>
    	</div>
    </div>
    <button id="compare" class="btn-floating btn-large waves-effect waves-light red pull-right btn-action-header">
        <i class="medium mdi-content-report"></i>
    </button>
    <button id="create-pdf" class="btn-floating btn-large waves-effect waves-light red pull-right btn-action-header hide">
        <i class="medium mdi-action-language"></i>
    </button>
    <div class="container">
        <section id="cars" class="card">
            <select multiple="multiple" class="image-picker show-html">
                <?php 
                    consulta();
                ?>
            </select>
        </section>
        <section class="result">
            <div id="table"></div>
            <button id="again"class="btn btn-primary waves-effect waves-light pull-right">Outras comparações</button>
        </section>
        
    </div>

    <!-- JS -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script src="assets/js/image-picker.js"></script>
	<script src="assets/js/custom.js"></script>

    <script src="assets/js/holder.min.js"></script>

    <script>
        $('select').imagepicker({
            limit: 2,
            show_label: true,
            selected: function(option) {
                var values = this.val();
                return values;
            }
        });
    </script>
</body>
</html>