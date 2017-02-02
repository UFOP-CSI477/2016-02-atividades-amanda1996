<?php

class Paciente extends AppModel{
  public $hasMany = 'Exame';//um paciente pode ter vários exames
}

 ?>
