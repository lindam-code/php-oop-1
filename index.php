<?php
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/Employee.php');

  // Metodo 2 creazione degli users da un array
  $users = [
    [
      'name' => 'Sandra',
      'surname' => 'Marchegiano',
      'email' => 'sandram@email.it',
      'eta' => '16'
    ],
    [
      'name' => 'Ennio',
      'surname' => 'Baldassari',
      'email' => 'enniob@email.it',
      'eta' => '35'
    ]
  ];
  ?>
    <h2>Utenti Base</h2>
    <div>
    <?php
      foreach ($users as $user) {
        $utente = new User($user['name'],$user['surname'],$user['email'],$user['eta']);
        ?>
        <ul>
          <li><?php echo $utente->getGeneralInfo() ?></li>
        </ul>
    <?php
    }
    ?>
  </div>
  <?php

  // Creazione di Employees
  $employee1 = new Employee('Vita','Snella','vitas@email.it','18');
  $employee1->setLivello(18);
  $employee1->setStatus(18);
  $employee2 = new Employee('Billo','Ballo','billob@email.it','32');
  $employee2->setLivello(20);
  $employee2->setStatus(20);
  $employee3 = new Employee('Ci','Sei','cis@email.it','33');
  $employee3->setLivello(33);
  $employee3->setStatus(33);

  ?>
  <div>
    <h2>Impiegati</h2>
        <ul>
          <li><?php echo $employee1->getGeneralInfo() . ' Livello: ' . $employee1->getLivello() ?></li>
          <li><?php echo $employee2->getGeneralInfo() . ' Livello: ' . $employee2->getLivello() ?></li>
          <li><?php echo $employee3->getGeneralInfo() . ' Livello: ' . $employee3->getLivello() ?></li>
        </ul>
  </div>
  <?php

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
