<?php $this->layout('layout', [ 'title' => "Page d'accueil" ]); ?>

<div class="row">
  <div class="col-12 col-md-9">

    <div class="jumbotron">
      <h3>Bienvenue au paradis des chaussons</h3>
      <p class="lead">Pour toutes les tailles, toutes les formes ! Venez essayer notre nouvelle collection automne/hiver pour que vos petits pieds soient protégés au mieux</p>
    </div>

    <h2>Liste des produits</h2>

    <div class="row">

      <?php foreach($products as $product): ?>
        <?=$this->insert('partials/product', [ 'product' => $product ])?>
      <?php endforeach; ?>

    </div>
  </div>
  <div class="col-6 col-md-3">
    <h4>Panier</h4>
    <div id="cart" class="list-group">
      <?php if (count($cart) > 0) { ?>
        <?php foreach($cart as $line): ?>
          <a class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><?=$line['title']?></h5>
              <small class="price"><?=$line['price']?></small>
            </div>
            <small class="w-100">
              Quantité :
              <button data-id="<?=$line['id']?>" class="less" type="button">-</button>
              <?=$line['quantity']?>
              <button data-id="<?=$line['id']?>" class="buy" type="button">+</button>
            </small>
          </a>
        <?php endforeach; ?>
        <!-- TOTAL -->
        <a class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Total :</h5>
            <small class="price"><?=$total?></small>
          </div>
        </a>
        <a class="btn btn-success" href="<?=$router->generate('valid')?>">Acheter</a>
      <?php } else { ?>
        <p>C'est vide !</p>
      <?php } ?>
      <!-- VALIDER -->
    </div>
  </div>
</div>
