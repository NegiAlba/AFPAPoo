<?php
  $title = 'AFPA SN MVC - Homepage';
  
  ob_start();
?>

<section class="new-post container mt-4">
  <form action="" method="post">
    <label for="inputNewPost" class="form-label">Express yourself</label>
    <input type="text" id="inputNewPost" name="new_content" class="form-control" aria-describedby="newpostHelper">
    <div id="newpostHelper" class="form-text">
      Write your post here and share it with the world !
    </div>
    <button type="submit" name="new_submit" class="btn btn-secondary">Post</button>
  </form>
</section>

<section id="posts" class="container mt-4">
  <?php
    foreach ($posts as $post) {
        ?>
      <div class="card my-2">
        <div class="card-header">
          <?php echo $post->getAuthor(); ?>
        </div>
        <div class="card-body">
          <p class="card-text"><?php echo $post->getContent(); ?></p>
        </div>
        <div class="card-footer">
          <?php echo $post->getCreatedAt(); ?>
        </div>
    </div>
    <?php
    }
  ?>
</section>

<?php
  $content = ob_get_clean();
  require '../templates/base.php';
?>



