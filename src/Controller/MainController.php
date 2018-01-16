<?php

namespace Hackathon\Controller;

use Hackathon\Framework\Controller;
use Hackathon\Models\Product;
use Hackathon\Models\Cart;

class MainController extends Controller {

  public function home() {

    $cart = new Cart();

    // Products -> liste des produits
    $products = Product::findAll();

    $cartList = $cart->getList();

    $total = 0;
    foreach ($cartList as $line) {
      $total += ($line['price'] * $line['quantity']);
    }

    echo $this->template->render('main/home', [
      'products' => $products,
      'cart' => $cartList,
      'total' => $total
    ]);
  }
}
