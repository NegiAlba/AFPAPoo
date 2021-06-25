<?php
  $title = 'AFPA SN MVC - Profile page';
  
  ob_start();
?>

<h2><?= $username; ?>'s profile</h2>
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



