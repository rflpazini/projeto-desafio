<?php
include 'connect.php';

function consulta() {
    $sql = "SELECT * FROM carro";
    $query = mysql_query($sql);

    while ($sql = mysql_fetch_array($query)) {
		$id = $sql["Id"];
		$model = $sql["Modelo"];
    	$image = $sql["ImagemCarro"];

    	echo '<option data-img-src="' . $image . '" value="'. $id .'">
    			<h3>'. $model .'</h3>
    		  </option>';
	}
}

function compara($id1, $id2) {
    $sql = "SELECT * FROM carro WHERE Id IN (" . $id1 . ", " . $id2 . ")";
    $res = mysql_query($sql);

    $model1 = mysql_fetch_array($res);
    $model2 = mysql_fetch_array($res);

    $pontos1 = 0;
    $pontos2 = 0;


    if ($model1["Preco"] < $model2["Preco"]) {
        $pontos1++;
    } else if ($model1["Preco"] > $model2["Preco"]) {
        $pontos2++;
    }

    if ($model1["Cavalos"] > $model2["Cavalos"]) {
        $pontos1++;
    } else if ($model1["Cavalos"] < $model2["Cavalos"]) {
        $pontos2++;
    }

    if ($model1["ConsumoEtanol"] > $model2["ConsumoEtanol"]) {
        $pontos1++;
    } else if ($model1["ConsumoEtanol"] < $model2["ConsumoEtanol"]) {
        $pontos2++;
    }

    if ($model1["ConsumoGasolina"] > $model2["ConsumoGasolina"]) {
        $pontos1++;
    } else if ($model1["ConsumoGasolina"] < $model2["ConsumoGasolina"]) {
        $pontos2++;
    }

    if ($model1["Revisao"] < $model2["Revisao"]) {
        $pontos1++;
    } else if ($model1["Revisao"] > $model2["Revisao"]) {
        $pontos2++;
    }

    if ($model1["Seguro"] < $model2["Seguro"]) {
        $pontos1++;
    } else if ($model1["Seguro"] > $model2["Seguro"]) {
        $pontos2++;
    }

    echo '<div class="table-responsive card">
              <table class="table table-striped">
                <tr>
                  <td class="col-md-4">Modelo</td>
                  <th class="col-md-4">' . $model1["Modelo"] . '</th>
                  <th class="col-md-4">' . $model2["Modelo"] . '</th>
                </tr>
                <tbody> 
                    <tr>
                        <td>Preço</td>
                        <td>' . $model1["Preco"] . '</td>
                        <td>' . $model2["Preco"] . '</td>
                    </tr>
                    <tr>
                        <td>Cavalos</td>
                        <td>' . $model1["Cavalos"] . '</td>
                        <td>' . $model2["Cavalos"] . '</td>
                    </tr>
                    <tr>
                        <td>Consumo Etanol Km/L</td>
                        <td>' . $model1["ConsumoEtanol"] . '</td>
                        <td>' . $model2["ConsumoEtanol"] . '</td>
                    </tr>
                    <tr>
                        <td>Consumo Gasolina Km/L</td>
                        <td>' . $model1["ConsumoGasolina"] . '</td>
                        <td>' . $model2["ConsumoGasolina"] . '</td>
                    </tr>
                    <tr>
                        <td>Preço médio revisão</td>
                        <td>' . $model1["Revisao"] . '</td>
                        <td>' . $model2["Revisao"] . '</td>
                    </tr>
                    <tr>
                        <td>Preço médio seguro</td>
                        <td>' . $model1["Seguro"] . '</td>
                        <td>' . $model2["Seguro"] . '</td>
                    </tr>
                    <tr>
                        <td>Pontos</td>
                        <th>' . $pontos1 . '</th>
                        <th>' . $pontos2 . '</th>
                    </tr>
                </tbody>
              </table>
          </div>';
}

?>