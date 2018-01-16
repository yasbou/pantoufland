<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>

    <div class="container">
      <h1><a href="<?=$router->generate('home')?>">Pantoufland</a></h1>
      <?=$this->section('content') ?>
      <?=$this->insert('partials/footer')?>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    const BASE_PATH = "<?= $BASE_PATH ?>";
    </script>
    <script type="text/javascript" src="assets/js/popover.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
  </body>
</html>
