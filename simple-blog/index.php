<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>simple blog</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <style>
  
.btn {
  display: inline-block;
  background-color: #2ecc71;
  color: white;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 4px;
  font-weight: 500;
  position: absolute;
  left: 50px;
  top: 100px;
  transition: all 0.3s ease;
  border: none;
  cursor: pointer;
  font-size: 0.95em;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
</style>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
        </ul>
      </nav>
      <a href="login.php" class="login" style="text-decoration: none;">login</a>
      <a href="login.php" class="logout" style="text-decoration: none;width: 79px;">logout</a>
    </header>

    <main>
       <a href="create.php" class="btn">Add a post</a><br><br>
      <section class="blog-posts">
        <div class="post">
            <?php
        include "db.php"; 
        
        try {
          $sql = "SELECT * FROM  `simple-blog`";
          $result = $pdo->query($sql); 
          if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
              echo " <div class='post'>
                      <h6>" . $row['id'] . "</h6>
                      <h2>" . $row['title'] . "</h2>
                      <h4>" . $row['author'] . "</h4>
                      <p>" . $row['content'] . "</p>
                        <a class='edit' style='color: white; text-decoration: none;' href='edit.php?id=" . $row['id'] ."'>Edit</a>
                        <a class='delete' style='color: white; text-decoration: none;' href='delete.php?id=" . $row['id'] . "'>Delete</a>
                  
                    </div>";
            }
          } else {
            echo "<div><h6 colspan='5'>No results found</h6></div>"; 
          }
        } catch (PDOException $e) {
          die("Invalid query: " . $e->getMessage()); 
        }
        ?>
              </div>
      </section>

    </main>

    <footer>
      <p>© 2025 Adnane. All Rights Reserved.</p>
    </footer>
  </body>
</html>
