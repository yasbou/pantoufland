<?php

namespace Hackathon\Framework;

use Hackathon\Framework\Database;

class Model {

  static protected $table;

  public static function findAll() {

    $db = self::getDb();
    $sql = 'SELECT * FROM ' . static::$table;
    $res = $db->query($sql);
    return $res->fetchAll(\PDO::FETCH_CLASS, static::class);
  }

  public static function find($itemId) {

    $db = self::getDb();

    $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id LIMIT 1';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $itemId);
    $query->execute();

    return $query->fetchObject(static::class);
  }

  public static function getDb () {

    return Database::getDb();
  }
}
