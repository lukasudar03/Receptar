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
</head>
<body>
<header class="container d-flex flex-column align-items-center py-3">
    <h1>Recept Aplikacija</h1>
    <p class="lead">Pronađite savršene recepte za vaš sledeći obrok!</p>
</header>
<main class="container py-4">
    <section class="row">
        <div class="col-md-6 mb-3">
            <h2>Glavni ekran</h2>
            <form class="input-group mb-3" action="#">
                <input type="text" class="form-control" id="search" name="search" placeholder="Naziv recepta ili kategorija">
                <button type="submit" class="btn btn-primary">Pretraži</button>
            </form>
            <div class="card-group gap-3">
                <div class="card">
                    <img class="card-img-top" src="images/david-holifield-kPxsqUGneXQ-unsplash.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Čokoladne tortice s marcipanom</h5>
                        <button type="button" class="btn btn-primary" id="btn">Pogledaj više...</button>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-6 d-none" id="recipe-screen">
            <h2>Recept: <span id="recipe-title"></span></h2>
            <img src="images/recipe-placeholder.jpg" alt="Slika recepta" id="recipe-image" class="img-fluid mb-3">
            <ul class="list-group">
                <h3>Sastojci:</h3>
                <li class="list-group-item">Sastojak 1 (količina)</li>
                <li class="list-group-item">Sastojak 2 (količina)</li>
                <li class="list-group-item">Sastojak 3 (količina)</li>
            </ul>
            <h3>Priprema:</h3>
            <ol class="list-group">
                <li class="list-group-item">Korak 1</li>
                <li class="list-group-item">Korak 2</li>
                <li class="list-group-item">Korak 3</li>
            </ol>
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Ocene i komentari:</h3>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="rating">5</span>
                        <span class="text-muted">Korisnik 1</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="rating">4</span>
                        <span class="text-muted">Korisnik 2</span>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<script>
    const btnLink = document.getElementById('btn');
    const recipeScreen = document.getElementById('recipe-screen');

    btnLink.addEventListener('click', (event) => {
        recipeScreen.classList.toggle('d-none');
    });

</script>
</body>
</html>

