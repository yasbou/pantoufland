<div class="col-6 col-lg-4 productsList">
  <div class="card">
    <img class="card-img-top" src="assets/img/<?=$product->thumbnail?>" alt="">
    <div class="card-block">
      <h4 class="card-title"><?=$product->title?></h4>
      <p class="card-text"><?=$product->short_desc?>... <a class="details" data-toggle="popover" title="<?=$product->title?>" data-content="<?=$product->long_desc?>">détails</a></p>
      <a href="#" data-id="<?=$product->id?>" class="btn btn-primary buy">Acheter</a>
    </div>
  </div>
</div>
