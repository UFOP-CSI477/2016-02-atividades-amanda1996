<?php

class Exame extends AppModel{
  public $belongsTo = array('Procedimento','Paciente');//muitos exames partencem a um paciente
}

 ?>
