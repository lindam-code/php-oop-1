<?php
  class User {
    public $name;
    public $surname;
    public $email;
    public $eta;
    public $status = 'Comments are prohibited!!';

    public function __construct($_name, $_surname,$_email,$_eta)
    {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
      $this->eta = $_eta;
      $this->setStatus();
    }

    public function getGeneralInfo()
    {
      return $this->name . ' ' . $this->surname . ' Email: ' . $this->email . ' Status: ' . $this->status;
    }

    public function setStatus()
    {
      if($this->eta > 21) {
        $this->status = 'Can comment!!';
      }
    }

    public function getStatus()
    {
      return $this->status;
    }

  }
 ?>
