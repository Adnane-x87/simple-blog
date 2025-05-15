<?php
include "db.php";

$id = $title = $author = $content = '';
$success_message = '';
$error_message = '';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    
    try {
        $query = $pdo->prepare("SELECT * FROM `simple-blog` WHERE id = ?");
        $query->execute([$id]);
        $blog = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($blog) {
            $title = htmlspecialchars($blog['title']);
            $author = htmlspecialchars($blog['author']);
            $content = htmlspecialchars($blog['content']);
        } else {
            $error_message = "Blog not found!";
        }
    } catch (PDOException $e) {
        $error_message = "Database error: " . $e->getMessage();
    }
} else {
    $error_message = "No blog ID specified!";
}

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $title = htmlspecialchars(trim($_POST['title']));
    $author = htmlspecialchars(trim($_POST['author']));
    $content = htmlspecialchars(trim($_POST['content']));

    try {
        if (empty($title) || empty($author) || empty($content)) {
            throw new Exception("Please fill in all required fields (title, author, content).");
        }

        $query = $pdo->prepare("UPDATE `simple-blog` SET title=?, author=?, content=? WHERE id=?");
        $query->execute([$title, $author, $content, $id]);

        $success_message = "Blog updated successfully!";
        header("Refresh: 2; URL=index.php");
    } catch (PDOException $e) {
        $error_message = "Database error: " . $e->getMessage();
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Post</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .edit-post {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 40px auto;
        }

        .edit-post h2 {
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 28px;
            text-align: center;
        }

        .edit-form {
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

        input {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            width: 100%;
            font-family: inherit;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
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
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .alert {
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <section class="edit-post">
        <h2>Edit Blog Post</h2>
           
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
        <?php endif; ?>
        
        <?php if (!empty($error_message)): ?>
            <div class="alert alert-error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form class="edit-form" action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $title; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="content">Content:</label>
                <input type="text" id="content" name="content" value="<?php echo $content; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" value="<?php echo $author; ?>" required>
            </div>
            
            <button type="submit" name="update">Update Post</button>
        </form>
    </section>
</body>
</html>
