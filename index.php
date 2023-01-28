<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assest/styles/styles.css">

</head>
<body>
    <div class="row contenedor">
        <h1>Cálculo de área</h1>
        <div class="cont-form">
            <div class="mb-3">
                <label for="base" class="form-label">Base</label>
                <input type="number" class="form-control" id="base" name="base">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Altura</label>
                <input type="number" class="form-control" id="altura" name="altura">
            </div>
            <button type="submit" class="btn btn-primary" id="submit">Calcular</button>
            <br>
            <div id="resultado" class="resultado"></div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assest/js/functions.js"></script>
</body>
</html>