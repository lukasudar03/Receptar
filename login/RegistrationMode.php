<?php
include('nav.php'); // Replace 'nav.php' with the correct path if it's in a different location
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0svjQEgQWvzfUxbSTs/LMQsjPbmTTGWNyLwxWMsgBoxXt4xymMqTpyblrOnJQJPFPk" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Moj frižider</h2>
            <p>Unesite sastojke koje imate u frižideru, a mi ćemo vam predložiti recepte koje možete pripremiti.</p>
            <form id="my-fridge-form" class="mb-3">
                <div class="form-group">
                    <label for="ingredients">Sastojci:</label>
                    <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="npr. jaja, brašno, mlijeko">
                </div>
                <button type="submit" class="btn btn-primary">Pronađi recepte</button>
            </form>
            <div id="my-fridge-results" class="card-deck"></div>
        </div>
    </div>
</div>

</body>
</html>
