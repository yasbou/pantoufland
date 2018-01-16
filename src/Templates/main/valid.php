<?php $this->layout('layout', [ 'title' => "Validation de votre commande" ]); ?>

<div class="row">
  <div class="col-12 col-md-12">

    <div class="jumbotron">
      <h3>Validation de votre commande</h3>
      <p class="lead">Votre commande est presque terminée, il ne reste qu'à saisir vos informations pour la livraison :</p>
    </div>

  </div>

  <div class="col-6 col-md-6">

    <!-- FORMULAIRE DE COMMANDE -->
    <!-- Nom/prénom, email, adresse postale, commentaire -->
    <form action="<?=$router->generate('valid')?>" method="post">
      <div class="form-group">
        <label for="">Nom</label>
        <input class="form-control" type="text" name="lastname" value="">
      </div>
      <div class="form-group">
        <label for="">Prénom</label>
        <input class="form-control" type="text" name="firstname" value="">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email" value="">
      </div>
      <div class="form-group">
        <label for="">Adresse</label>
        <input class="form-control" type="text" name="address" value="">
      </div>
      <div class="form-group">
        <label for="">Commentaire</label>
        <textarea name="comment" rows="8" cols="80"></textarea>
      </div>
      <button type="submit" name="button">J'achète</button>
    </form>

    <!-- RÉCAPITULATIF DU PANIER -->

    <!-- BOUTON "J'achète" -->

  </div>
</div>
