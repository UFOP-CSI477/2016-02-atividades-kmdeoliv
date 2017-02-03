<h2>Acesso ao sistema do paciente</h2>


<?php

echo $this->Form->create('Paciente', array('controller' => 'pacientes', 'url' => 'login','inputDefaults' => array(
    'div' => array('class' => 'form-group'))));

echo $this->Form->input('login',array('class' => 'form-control'));
echo $this->Form->input('senha',array('class' => 'form-control'));

echo $this->Form->end('Acessar');


 ?>
