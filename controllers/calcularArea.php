<?php

require_once '../models/CalcularArea.php';

$objArea = new CalcularArea();

if(isset($_POST['base']) && ($_POST['altura'])){
$base = $_POST['base'];
$altura = $_POST['altura'];
$objArea = $objArea->calcular($base, $altura);
} else {
    echo "error en los datos";
}






?>