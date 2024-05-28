<?php
include('../nav.php'); // Replace 'nav.php' with the correct path if it's in a different location
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept Aplikacija - Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="../JS/scypt.js"></script>

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
<!--<script>-->
<!--    // Select the link elements by their IDs-->
<!--    const loginLink = document.getElementById("login-tab");-->
<!--    const registerLink = document.getElementById("register-tab");-->
<!---->
<!--    // Select all tab content divs using the class selector-->
<!--    const tabContentDivs = document.querySelectorAll(".tab-pane");-->
<!---->
<!--    // Function to activate a specific tab-->
<!--    function activateTab(tabId) {-->
<!--        // Loop through all tab content divs-->
<!--        tabContentDivs.forEach(function(tabDiv) {-->
<!--            // Remove classes "show" and "active" from all divs-->
<!--            tabDiv.classList.remove("show", "active");-->
<!--        });-->
<!---->
<!--        // Get the tab content div element by its ID-->
<!--        const targetDiv = document.getElementById(tabId);-->
<!---->
<!--        // Add classes "show" and "active" to the target tab's content div-->
<!--        targetDiv.classList.add("show", "active");-->
<!--    }-->
<!---->
<!--    // Add event listeners for click events on both links-->
<!--    loginLink.addEventListener("click", function (event) {-->
<!--        event.preventDefault();-->
<!--        activateTab("login"); // Activate the "Login" tab content-->
<!--    });-->
<!---->
<!--    registerLink.addEventListener("click", function (event) {-->
<!--        event.preventDefault();-->
<!--        activateTab("register"); // Activate the "Register" tab content-->
<!--    });-->
<!--</script>>-->

<script>
    // Select the link elements by their IDs
    const loginLink = document.getElementById("login-tab");
    const registerLink = document.getElementById("register-tab");

    // Select all tab content divs using the class selector
    const tabContentDivs = document.querySelectorAll(".tab-pane");

    // Function to activate a specific tab
    function activateTab(tabId) {
        // Loop through all tab content divs
        tabContentDivs.forEach(function(tabDiv) {
            // Remove classes "show" and "active" from all divs and links
            tabDiv.classList.remove("show", "active");
            const linkedNav = document.querySelector(`a[href="#${tabDiv.id}"]`); // Find linked nav element
            linkedNav.classList.remove("active");
        });

        // Get the tab content div element by its ID
        const targetDiv = document.getElementById(tabId);

        // Add classes "show" and "active" to the target tab's content div and linked nav element
        targetDiv.classList.add("show", "active");
        const linkedNav = document.querySelector(`a[href="#${tabDiv.id}"]`); // Find linked nav element
        linkedNav.classList.add("active");
    }

    // Add event listeners for click events on both links
    loginLink.addEventListener("click", function (event) {
        event.preventDefault();
        activateTab("login"); // Activate the "Login" tab content
    });

    registerLink.addEventListener("click", function (event) {
        event.preventDefault();
        activateTab("register"); // Activate the "Register" tab content
    });
</script>


