<?php
require_once './config/config.php';
$postDAO = new PostDAO();

$posts = $postDAO->findAll();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php if (isset($_GET['s'])) {
    echo '<div class="alert alert-success">
    <p>Vous êtes désormais inscrits</p>
  </div>';
} ?>

<section id="posts" class="container">
  <?php
    foreach ($posts as $post) {
        ?>
      <div class="post-item">
        <div class="post-author"> <?php echo $post->getAuthor(); ?></div>
        <div class="post-content"><?php echo $post->getContent(); ?></div>
        <div class="post-date"><?php echo $post->getCreatedAt(); ?></div>
      </div>
    <?php
    }
  ?>
</section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>