<?php

namespace Hackathon\Models;

use Hackathon\Framework\Model;

class Cart extends Model {

  public function __construct () {

    if (empty($_SESSION['cart'])) $this->init();
  }

  public function init () {

    $_SESSION['cart'] = [];
  }

  public function add ($product) {

    if (!isset($_SESSION['cart'][$product->id])) {

      $_SESSION['cart'][$product->id] = [
        'id' => $product->id,
        'title' => $product->title,
        'quantity' => 0,
        'price' => $product->price
      ];
    }

    $_SESSION['cart'][$product->id]['quantity']++;
  }

  public function remove ($productId) {

    if (isset($_SESSION['cart'][$productId])) {

      if ($_SESSION['cart'][$productId]['quantity'] > 1) {

        $_SESSION['cart'][$productId]['quantity']--;

      } else {

        unset($_SESSION['cart'][$productId]);
      }
    }
  }

  public function getList() {

    return array_values($_SESSION['cart']);
    // SOUHAITE : [ {id...quantity}, {id:...} ]
    // ACTUELLEMENT : { id:{...}, id:{...} }
  }

  public function save ($data) {

    $db = self::getDb();

    // Enregistrer les informations de commandes (nom, prénom, ...)
    $sql = 'INSERT INTO orders (firstname, lastname, email, address, comment) VALUES (:firstname, :lastname, :email, :address, :comment)';

    $res = $db->prepare($sql);
    $res->bindValue(':firstname', $data['firstname']);
    $res->bindValue(':lastname', $data['lastname']);
    $res->bindValue(':email', $data['email']);
    $res->bindValue(':address', $data['address']);
    $res->bindValue(':comment', $data['comment']);
    $res->execute();

    $orderId = $db->lastInsertId();

    // Enregistrer les lignes de commandes
    $products = $this->getList();

    foreach ($products as $line) {

      $sql2 = 'INSERT INTO order_line (order_id, product_id, quantity) VALUES (:orderId, :productId, :quantity)';

      $res2 = $db->prepare($sql2);
      $res2->bindValue(':orderId', $orderId);
      $res2->bindValue(':productId', $line['id']);
      $res2->bindValue(':quantity', $line['quantity']);
      $res2->execute();
    }

    $this->init();
  }
}
