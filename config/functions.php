<?php
function add($modelo, $preco, $cavalos, $conEtanol, $conGasolina, $revisao, $seguro, $url) {
	$sql = "INSERT INTO carro(Modelo, Preco, Cavalos, ConsumoEtanol, ConsumoGasolina, Revisao, Seguro, ImagemCarro)
			values ('$modelo', '$preco', '$cavalos', '$conEtanol', '$conGasolina', '$revisao', '$seguro', '$url')";
	mysql_query($sql);
}
?>