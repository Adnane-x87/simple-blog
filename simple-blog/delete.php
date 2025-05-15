<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; 

    try {
        $query = "DELETE FROM `simple-blog` WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: Could not execute the query.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: ID is missing.";
}
?>