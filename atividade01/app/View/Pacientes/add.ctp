<h2>Cadastrar paciente</h2>

<?php
//$usuario = $this->Session->read('Usuario');
//Debugger::dump($usuario);
/*if ($usuario) {
    echo $usuario[0]['Usuario']['tipo'];
}*/



echo $this->Form->create('Paciente',array( 'inputDefaults' => array(
    'div' => array('class' => 'form-group'),
)));
echo $this->Form->input('nome',array('class' => 'form-control'));
echo $this->Form->input('login',array('class' => 'form-control'));
echo $this->Form->input('senha',array('class' => 'form-control'));
echo $this->Form->end('Cadastrar');


?>
