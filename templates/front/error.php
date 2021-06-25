<?php
  $title = 'AFPA SN MVC - Error';
  
  ob_start();
?>

<section id="error" class="container mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Erreur Inattendue</h1>
            <p class="col-md-8 fs-4">Une erreur est parvenue.</p>
            <a href="./"><button class="btn btn-primary btn-lg" type="button">Retour à la page d'accueil</button></a>
        </div>
    </div>
</section>

<?php
  $content = ob_get_clean();
  require '../templates/base.php';
?>



