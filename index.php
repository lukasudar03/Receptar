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
<main class="container">
    <section class="row">
        <div class="col-md-12 mb-3">
            <h2>Glavni ekran</h2>
            <form class="input-group mb-3" action="#">
                <input type="text" class="form-control" id="search" name="search" placeholder="Naziv recepta ili kategorija">
                <button type="submit" class="btn btn-primary">Pretraži</button>
            </form>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="david-holifield-kPxsqUGneXQ-unsplash.jpg"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Čokoladne tortice s marcipanom</h5>
                        <button type="button" class="btn btn-primary" id="btn">Pogledaj više...</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="jason-leung-AUAuEgUxg5Q-unsplash.jpg"  style="height: 317px; width: 430px;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ćufte u sosu</h5>
                        <button type="button" class="btn btn-primary" id="btn1">Pogledaj više...</button>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="elaine-kong-s6kv0FzGQCw-unsplash.jpg"   style="height: 317px; width: 430px;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Testo za palačinke</h5>
                        <button type="button" class="btn btn-primary" id="btn2">Pogledaj više...</button>
                    </div>
                </div>
            </div>



        <div class="col-md-6 d-none" id="recipe-screen">
            <h2>Recept: <span id="recipe-title"></span></h2>
            <img src="david-holifield-kPxsqUGneXQ-unsplash.jpg" alt="Slika recepta" id="recipe-image" class="img-fluid mb-3">
            <ul class="list-group">
                <h3>Sastojci:</h3>
                <li class="list-group-item"><b>ZA BISKVIT:</b></li>
                <li class="list-group-item">1 Dolcela Muffins čokoladni</li>
                <li class="list-group-item">1 jaje</li>
                <li class="list-group-item">100 ml ulja</li>
                <li class="list-group-item">150 ml vode</li>
                <li class="list-group-item"><b>ZA ČOKOLADNI GANACHE:</b></li>
                <li class="list-group-item">250 g čokolade</li>
                <li class="list-group-item">200 g mliječnog vrhnja za šlag</li>
                <li class="list-group-item">150 g marcipana</li>
                <li class="list-group-item">čokoladne strugotine za dekoraciju</li>


            </ul>
            <h3>Priprema:</h3>
            <ol class="list-group">

                <li class="list-group-item">
                <textarea style="width: 600px; height: 520px">
1) Za biskvit, mješavinu za kolač uspite u posudu pa dodajte jaje, ulje i vodu.
2) Sve zajedno miješajte električnom miješalicom (na srednjoj brzini) 2 - 3 minute dok se sastojci ne povežu u glatku smjesu.
3) Smjesu prelijte u pleh obložen papirom za pečenje veličine oko 30 x 38 cm i poravnajte.
4) Pecite u pećnici zagrijanoj na 180°C oko 12-14 minuta tj. dok čačkalica koju ubodete u kolač ne izađe čista.
5) Tijesto ohladite, a zatim izrežite 27 krugova promjera 5 cm.
6) Dok se kolač peče, pripremite čokoladni ganache.
7) Čokoladu nasjeckajte što sitnije pa je prelijte vrućim vrhnjem za šlag.
8) Ostavite da tako stoji 1 minutu nakon čega sve dobro izmiješajte pjenjačom.
9) Ohladite toliko da se čokolada počne stiskati (15-ak minuta).
10) Marcipan razvaljajte na debljinu oko 3 mm. Iz razvaljanog marcipana izrežite 9 krugova promjera 5 cm.
11) Na redu je slaganje tortica ovim redoslijedom: biskvit – ganache – biskvit – marcipan – biskvit.
12) Ganache je najlakše istiskivati pomoću slastičarske vrećice.
13) Složene tortice izvana premažite ostatkom ganachea.
14) Kad se ganache stisne, tortice uvaljajte u čokoladne strugotine ili mrvice i ukrasite po želji.
                </textarea>
                </li>


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


            <div class="col-md-6 d-none" id="recipe-screen1" >
                <h2>Recept: <span id="recipe-title"></span></h2>
                <img src="jason-leung-AUAuEgUxg5Q-unsplash.jpg"  style="height: 317px; width: 430px;" alt="Slika recepta" id="recipe-image" class="img-fluid mb-3">
                <ul class="list-group">
                    <h3>Sastojci:</h3>
                    <li class="list-group-item"><b>Ćufte:</b></li>
                    <li class="list-group-item">500 g mešanog mlevenog mesa</li>
                    <li class="list-group-item">1 jaje</li>
                    <li class="list-group-item">1 glavica crnog luka, sitno iseckanog</li>
                    <li class="list-group-item">2 kašike <prezli></prezli></li>
                    <li class="list-group-item">2 kašikice suvog biljnog začina</li>
                    <li class="list-group-item">2 kašikice mlevene slatke paprike</li>

                    <li class="list-group-item"><b>Sos:</b></li>
                    <li class="list-group-item">500 ml pasiranog soka od paradajza</li>
                    <li class="list-group-item">6 dl čaše vode</li>
                    <li class="list-group-item">50 ml ulja</li>
                    <li class="list-group-item">3 kašike brašna</li>
                    <li class="list-group-item">1 kašika šećera</li>



                </ul>
                <h3>Priprema:</h3>
                <ol class="list-group">

                    <li class="list-group-item">
                <textarea style="width: 600px; height: 200px">
1) Izmešati sve navedene sastojke za ćufte i ostaviti najmanje 1/2 sata u frižideru, zatim oblikovati loptice željene veličine.

2) Sos: Propržiti malo brašno na ulju, dodati pasirani paradajz, izmešati i polako dodavati vodu (sami odrediti gustinu sosa), zatim dodati začine.
Čim proključa, dodavati jednu po jednu lopticu mesa, smanjiti temperaturu (samo da krčka) i kuvati oko 40 minuta. Služiti uz pire krompir.
                </textarea>
                    </li>


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
    const btnLink1 = document.getElementById('btn1');
    const recipeScreen1 = document.getElementById('recipe-screen1');

    btnLink1.addEventListener('click', (event) => {
        recipeScreen1.classList.toggle('d-none');
    });
</script>
</body>
</html>

