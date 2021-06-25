<?php
require_once './config/config.php';

if(!isset($_GET['username'])){
    return header('Location:index.php');
}
$postDAO = new PostDAO();
$userDAO = new UserDAO();
$user = $userDAO->setUser();
$username = $_GET['username'];

$posts = $postDAO->findByUser($username);
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
    <h1>Profile page of <?php echo $username; ?> </h1>

    <?php if (isset($_GET['c'])) {
    echo '<div class="alert alert-success">
    <p>Vous êtes désormais connectés</p>
  </div>';
}elseif (isset($_GET['d'])) {
  echo '<div class="alert alert-primary">
  <p>Vous êtes désormais déconnectés</p>
</div>';
}
 ?>
    
<section class="new-post container mt-4">
  <form action="process.php" method="post">
    <label for="inputNewPost" class="form-label">Express yourself</label>
    <input type="text" id="inputNewPost" name="new_content" class="form-control" aria-describedby="newpostHelper">
    <div id="newpostHelper" class="form-text">
      Write your post here and share it with the world !
    </div>
    <button type="submit" name="new_submit" class="btn btn-secondary">Post</button>
  </form>
</section>
<hr>
<section id="posts" class="container">
  <?php
    foreach ($posts as $post) {
        ?>
      <div class="post-item my-2">
        <div class="post-content"><?php echo $post->getContent(); ?></div>
        <div class="post-date"><?php echo $post->getCreatedAt(); ?></div>
        <?php if($username === $user->getUsername()){
            echo '<button class="btn-danger btn">Delete Post</button>';
        }
        ?>
      </div>
      <hr>
    <?php
    }
  ?>
</section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>