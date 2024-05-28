<!DOCTYPE html>
<html>
<head>
    <title>Moj frižider</title>
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#ingredient").keyup(function(){
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'search_suggestions.php',
                        method: 'POST',
                        data: {query: query},
                        success: function(data) {
                            $('#ingredientList').fadeIn();
                            $('#ingredientList').html(data);
                        }
                    });
                } else {
                    $('#ingredientList').fadeOut();
                    $('#ingredientList').html("");
                }
            });

            $(document).on('click', 'li', function(){
                var ingredient = $(this).text();
                var currentIngredients = $('#ingredient').val();
                if (currentIngredients === "") {
                    $('#ingredient').val(ingredient);
                } else {
                    $('#ingredient').val(currentIngredients + ', ' + ingredient);
                }
                $('#ingredientList').fadeOut();
            });
        });
    </script>
</head>
<body>
<div class="container">
    <h1>Moj frižider</h1>
    <form method="POST" action="search_recipes.php">
        <input type="text" name="ingredients" id="ingredient" placeholder="Unesite namirnice">
        <div id="ingredientList"></div>
        <button type="submit">Pretraga</button>
    </form>
    <div id="recipeResults">
        <?php
        if (isset($_POST['ingredients'])) {
            include 'search_recipes.php';
        }
        ?>
    </div>
</div>
</body>
</html>
