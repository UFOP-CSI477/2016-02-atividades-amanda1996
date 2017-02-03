<?php

class Procedimento extends AppModel{
  public $hasMany = 'Exame';
  public $belongsTo = 'Usuario';
}

 ?>
