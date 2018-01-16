<?php $this->layout('layout', [ 'title' => "Confirmation de votre commande" ]); ?>

<div class="row">
  <div class="col-12 col-md-12">
    <div class="jumbotron">
      <h3>Confirmation de votre commande</h3>
      <p class="lead">Votre commande a bien été prise en compte. Vous recevrez vos chaussons dans les plus bref délais !</p>
      <a href="<?=$router->generate('home')?>">Retour à l'accueil</a>
    </div>
  </div>
</div>
