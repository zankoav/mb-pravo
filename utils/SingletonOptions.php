<?php
class SingletonOptions
{
  private static $_instance = null;
  private static $options;
  private function __construct(){
    self::$options= get_option(THEME_NAME.'_theme_options');
  }

  private function __clone(){}

  static public function getInstance(){

    if(is_null(self::$_instance)){
      self::$_instance = new self();
    }

    return self::$_instance;
  }
  static public function getOptions(){
    if(is_null(self::$_instance)){
      self::$_instance= new self();
    }
    return self::$options;
  }
}