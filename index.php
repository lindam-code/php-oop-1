<?php
  require_once(__DIR__ . '/user.php');
  // Metodo 2 creazione degli users da un array
  $users = [
    [
      'name' => 'Sandra',
      'cognome' => 'Marchegiano',
      'email' => 'sandram@email.it',
      'role' => 'member'
    ],
    [
      'name' => 'Ennio',
      'cognome' => 'Baldassari',
      'email' => 'enniob@email.it',
      'role' => 'visitor'
    ]
  ];

  foreach ($users as $user) {
    $utente = new User($user['name'],$user['surname'],$user['email'],$user['role']);
    echo $utente->getGeneralInfo() . '<br>';
  }

  // Metodo 1 di creazione manuale degli users
  // $user1 = new User('Sandra','Marchegiano','sandram@email.it','member');
  // $user1->setStatus(16);
  // $status = $user1->getStatus();
  // echo 'Utente: ' . $user1->getGeneralInfo() . ' Status: ' . $user1->status . '<br>';
  //
  // $user2 = new User('Ennio','Baldassari','enniob@email.it','visitor');
  // $user2->setStatus(35);
  // $status = $user2->getStatus();
  // echo 'Utente: ' . $user2->getGeneralInfo() . ' Status: ' . $user2->status . '<br>';
 ?>
