<?php
session_start() .
include __DIR__ . '/about.php';
if(isset($_POST['generatore'])){
    $userLength = $_POST['generatore'];
    $_SESSION['chiave'] = generatore($userLength);
    header('Location: session.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>


    <div class=" container">
        <h1>
            Generatore di password
        </h1>
        <form action="" method="POST">


            <div class="input-group mb-3">
                <input name="generatore" type="number" class="form-control" placeholder="inseriscie la lunghezza della password in numeri..." aria-label="Recipient's username" minlength="1" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Genera</button>
            </div>
            

        </form>

    </div>

</body>

</html>