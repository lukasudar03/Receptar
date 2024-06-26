<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Recipe App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/Receptar/index.php">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Receptar/login/RegistrationMode.php">Pretraga</a>
                </li>
                <li class="nav-item">
                    <?php if(isset($_SESSION['email'])): ?>
                    <a class="nav-link text-white" href="/Receptar/login/logout-user.php">Logout</a>
                    <?php else: ?>
                    <a class="nav-link text-white" href="/Receptar/login/home.php">Login</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-fPpDmEehkUTbCyjZjUwjCW7rYW5WElIqaxzspAAR4xBEjBwHHg4zGuCbCjB33A1X" crossorigin="anonymous"></script>

</body>
</html>
