<?php
  class User {
    public $name;
    public $surname;
    public $email;

    function __construct($_name, $_surname,$_email)
    {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
    }
    
    function getGeneralInfo()
    {
      return $this->name . ' ' . $this->surname . ' Email: ' . $this->email;
    }

  }
 ?>
