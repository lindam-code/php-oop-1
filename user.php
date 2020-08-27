<?php
  class User {
    public $name;
    public $surname;
    public $email;
    public $eta;
    public $status = 'Comments are prohibited!!';

    public function __construct($_name, $_surname,$_email,$eta)
    {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
    }

    public function getGeneralInfo()
    {
      return $this->name . ' ' . $this->surname . ' Email: ' . $this->email . 'Status: ' . $this->status;
    }

    public function setStatus($eta)
    {
      if($eta > 21) {
        $this->status = 'Can comment!!';
      }
    }

    public function getStatus()
    {
      return $this->status;
    }

  }
 ?>
