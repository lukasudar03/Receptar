<?php
include('nav.php'); // Replace 'nav.php' with the correct path if it's in a different location
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept Aplikacija - Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="JS/scypt.js"></script>

</head>
<body>
<header class="container d-flex flex-column align-items-center py-3">
    <h1>Recept Aplikacija</h1>
    <p class="lead">Pronađite savršene recepte za vaš sledeći obrok!</p>
</header>
<main class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="nav nav-tabs mb-3 justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Resetuj Lozinku</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h2>Zaboravljena lozinka</h2>
                    <form class="mb-3">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Molimo Vas unesite vašu email adresu</label>
                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Dalje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>