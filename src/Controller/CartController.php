<?php

namespace Hackathon\Controller;

use Hackathon\Framework\Controller;
use Hackathon\Models\Cart;
use Hackathon\Models\Product;

class CartController extends Controller {

  public function add () {

    // On reçoit l'ID du produit ajouté
    // On prend l'ID du produit, on vérifie qu'il existe
    $productId = $_POST['product'];

    $product = Product::find($productId);

    if (empty($product)) {

      echo json_encode([ 'error' => "Ce produit n'existe pas" ]);
      exit();
    }

    // Si il existe, je le met en session
    $cart = new Cart();
    $cart->add($product);

    echo json_encode($cart->getList());
  }

  public function remove () {

    $productId = $_POST['product'];

    $cart = new Cart();
    $cart->remove($productId);

    echo json_encode($cart->getList());
  }

  public function valid () {

    $errors = [];

    if (isset($_POST['lastname'])) {

      if (empty($_POST['lastname'])
        || empty($_POST['firstname'])
        || empty($_POST['email'])
        || empty($_POST['address'])) {

          // Retourner une erreur
          $errors[] = "Veuillez saisir tous les champs obligatoires";

        } else {

          $cart = new Cart();
          $cart->save($_POST);

          $this->redirect('confirm');
        }
    }

    echo $this->template->render('main/valid', [ 'errors' => $errors ]);
  }

  public function confirm () {

    echo $this->template->render('main/confirm');
  }
}
