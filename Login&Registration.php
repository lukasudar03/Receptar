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
                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Prijava</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Registracija</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h2>Prijava</h2>
                    <form class="mb-3">

                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">E-mail adresa</label>
                            <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nećemo nikome deliti vašu e-mail adresu.</div>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Lozinka</label>
                            <input type="password" class="form-control" id="loginPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Prijavi se</button>
                    </form>
                    <a href="#">Zaboravili ste lozinku?</a>
                </div>
                <div class="tab-pane fade " id="register" role="tabpanel" aria-labelledby="register-tab">
                    <h2>Registracija</h2>
                    <form>
                        <!--
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">E-mail adresa</label>
                            <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nećemo nikome deliti vašu e-mail adresu.</div>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Lozinka</label>
                            <input type="password" class="form-control" id="registerPassword">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Ponovo lozinka</label>
                            <input type="password" class="form-control" id="confirmPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Registruj se</button>-->

                        <div class="pt-3 field">
                            <label for="registerFirstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="registerFirstname"
                                   placeholder="Enter firstname" name="firstname">
                            <small></small>
                        </div>

                        <div class="pt-3 field">
                            <label for="registerLastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="registerLastname"
                                   placeholder="Enter lastname" name="lastname">
                            <small></small>
                        </div>

                        <div class="pt-3 field">
                            <label for="registerEmail" class="form-label">E-mail address</label>
                            <input type="text" class="form-control" id="registerEmail"
                                   placeholder="Enter valid e-mail address" name="email">
                            <small></small>
                        </div>

                        <div class="pt-3 field">
                            <label for="registerPassword" class="form-label">Password <i class="bi bi-eye-slash-fill"
                                                                                         id="passwordEye"></i></label>
                            <input type="password" class="form-control passwordVisibiliy" name="password" id="registerPassword"
                                   placeholder="Password (min 8 characters)">
                            <small></small>
                            <span id="strengthDisp" class="badge displayBadge">Weak</span>
                        </div>

                        <div class="pt-3 field">
                            <label for="registerPasswordConfirm" class="form-label">Password confirm</label>
                            <input type="password" class="form-control" name="passwordConfirm" id="registerPasswordConfirm"
                                   placeholder="Password again">
                            <small></small>
                        </div>

                        <div class="pt-3">
                            <input type="hidden" name="action" value="register">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-primary resetButton" >Cancel</button>
                        </div>
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


