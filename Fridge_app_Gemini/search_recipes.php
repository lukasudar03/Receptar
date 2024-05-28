<?php
include 'config.php';

if (isset($_POST['ingredients'])) {
    $ingredients = $_POST['ingredients'];
    $ingredient_list = explode(',', $ingredients);
    $ingredient_list = array_map('trim', $ingredient_list);

    if (count($ingredient_list) > 0) {
        $placeholders = implode(',', array_fill(0, count($ingredient_list), '?'));
        $stmt = $pdo->prepare("SELECT id FROM ingredients WHERE name IN ($placeholders)");
        $stmt->execute($ingredient_list);
        $ingredient_ids = $stmt->fetchAll(PDO::FETCH_COLUMN);

        if (count($ingredient_ids) > 0) {
            $placeholders = implode(',', array_fill(0, count($ingredient_ids), '?'));

            // Find recipes with at most 2 missing ingredients
            $stmt = $pdo->prepare("
                SELECT r.id, r.name, r.instructions, COUNT(ri.ingredient_id) AS matched
                FROM recipes r
                JOIN recipe_ingredients ri ON r.id = ri.recipe_id
                WHERE ri.ingredient_id IN ($placeholders)
                GROUP BY r.id, r.name, r.instructions
                HAVING matched >= (SELECT COUNT(*) FROM recipe_ingredients WHERE recipe_id = r.id) - 2
            ");
            $stmt->execute($ingredient_ids);
            $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if ($recipes) {
                foreach ($recipes as $recipe) {
                    // Find missing ingredients
                    $stmt = $pdo->prepare("
                        SELECT i.name
                        FROM ingredients i
                        JOIN recipe_ingredients ri ON i.id = ri.ingredient_id
                        WHERE ri.recipe_id = ? AND i.id NOT IN ($placeholders)
                    ");
                    $stmt->execute(array_merge([$recipe['id']], $ingredient_ids));
                    $missing = $stmt->fetchAll(PDO::FETCH_COLUMN);

                    echo "<div class='recipe'>";
                    echo "<h2>" . htmlspecialchars($recipe['name']) . "</h2>";
                    echo "<p>" . htmlspecialchars($recipe['instructions']) . "</p>";
                    if ($missing) {
                        echo "<p>Missing ingredients: <strong>" . htmlspecialchars(implode(', ', $missing)) . "</strong></p>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p>No recipes found with the given ingredients.</p>";
            }
        } else {
            echo "<p>No ingredients matched your search.</p>";
        }
    } else {
        echo "<p>Please enter at least one ingredient.</p>";
    }
}
?>
