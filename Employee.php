<?php
  class Employee extends User {
    public $level = 'junior';

    public function setLivello($eta)
    {
      if ($eta > 22) {
        $this->level = 'senior';
      }
    }
    public function getLivello()
    {
      return $this->level;
    }
  }
 ?>
