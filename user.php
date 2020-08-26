<?php
  class User {
    public $name;
    public $surname;
    public $email;
    public $status = 'junior';
    public $role;

    function __construct($_name, $_surname,$_email,$_role)
    {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
      $this->role = $_role;
    }
    function getGeneralInfo()
    {
      return $this->name . ' ' . $this->surname . ' Email: ' . $this->email . ' Role: ' . $this->role;
    }
    public function setStatus($eta)
    {
      if ($eta > 22) {
        $this->status = 'senior';
      }
    }
    public function getStatus()
    {
      return $this->status;
    }
  }
 ?>
