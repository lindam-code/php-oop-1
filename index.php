<?php
  class User {
    public $name;
    public $surname;
    public $email;
    public $status = 'junior';
    public $role;

    function __construct($_name, $_surname,$_email)
    {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
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

  $user1 = new User('Sandra','Marchegiano','sandram@email.it');
  $user1->setStatus(16);
  $status = $user1->getStatus();
  $user1->role = 'member';
  echo 'Utente: ' . $user1->getGeneralInfo() . ' Status: ' . $user1->status . '<br>';

  $user2 = new User('Ennio','Baldassari','enniob@email.it');
  $user2->setStatus(35);
  $status = $user2->getStatus();
  $user2->role = 'visitor';
  echo 'Utente: ' . $user2->getGeneralInfo() . ' Status: ' . $user2->status . '<br>';
 ?>
