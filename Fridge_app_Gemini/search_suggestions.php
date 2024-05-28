<?php
include 'config.php';

if (isset($_POST['query'])) {
    $query = $_POST['query'];
    $stmt = $pdo->prepare("SELECT name FROM ingredients WHERE name LIKE ?");
    $stmt->execute(["%$query%"]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        foreach ($result as $row) {
            echo "<li>" . htmlspecialchars($row['name']) . "</li>";
        }
    } else {
        echo "<li>No match found</li>";
    }
}
?>
