<?php
  class Employee extends User {
    public $level = 'junior';

    public function setLivello($eta)
    {
      if ($eta > 30) {
        $this->level = 'senior';
      }
    }
    public function getLivello()
    {
      return $this->level;
    }

    public function setStatus()
    {
      $this->status = 'Employee always can comment!!';
    }

    public function getStatus()
    {
      return $this->status;
    }
  }
 ?>
