<?php

namespace Hackathon\Framework;

class Database {

  private static $config;
  private static $db;

  public static function setConfig ($config) {

    self::$config = $config;
  }

  public static function getDb() {

    self::$db = new \PDO(
      "mysql:host=" . self::$config['dbhost'] . ";dbname=" . self::$config['dbname'].";charset=utf8",
      self::$config['dbuser'],
      self::$config['dbpassword']
    );

    return self::$db;
  }
}
