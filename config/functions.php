<?php
function consulta() {
    $sql = "SELECT * FROM carro";
    $query = mysql_query($sql);

    while ($sql = mysql_fetch_array($query)) {
		$id = $sql["Id"];
		$model = $sql["Modelo"];
    	$image = $sql["Url"];

    	echo '<option data-img-src="holder.js/300x200" value="'. $id .'">
    			<h3>'. $model .'</h3>
    		  </option>';
	}
}

// function compara() {
// 	$sql = "SELECT * FROM carro WHERE Id = '$id'";

// 	if($cavalos ) {

// 	}

// }
?>