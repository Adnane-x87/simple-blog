<?php
include "db.php"; 


if (isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];

    try {
        $query = $pdo->prepare("INSERT INTO `simple-blog` (`title`, `author`, `content`) VALUES (?, ?, ?)");
        $query->execute([$title, $author, $content]);
        header("Location: index.php");

       
        echo "Data entered successfully!";
    } catch (PDOException $e) {
        echo "An error occurred while entering data: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple blog</title>
</head>
<style>
   body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f5f7fa;
        margin: 0;
        padding: 20px;
        color: #333;
    }

    .new-post {
        background-color: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 40px auto;
    }

    .new-post h2 {
        color: #2c3e50;
        margin-top: 0;
        margin-bottom: 25px;
        font-size: 28px;
        text-align: center;
    }

    .new-post form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    label {
        font-weight: 600;
        color: #2c3e50;
        font-size: 16px;
    }

    input,
    textarea {
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        width: 100%;
        font-family: inherit;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
    }

    textarea {
        min-height: 150px;
        resize: vertical;
    }

    button {
        padding: 12px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
    }
</style>
<body>
    <section class="new-post">
        <h2>Add a new post</h2>
        <form action="" method="POST">
          <label for="title">title:</label>
          <input type="text" id="title" name="title" required />

          <label for="content">content</label>
          <textarea id="content" name="content" rows="5" required></textarea>

          <label for="author">author :</label>
          <input type="text" id="author" name="author" required />
         <button type="submit" name="submit">add</button>
        </form>
      </section>
</body>
</html>