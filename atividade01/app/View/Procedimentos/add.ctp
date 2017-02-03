<div>
<h2>Adicionar procedimento</h2>
	<span>
		<?= $this->Html->link("Logout", array('controller'=> 'usuarios', 'action'=> 'logout'));?>
	</span>
</div>

<?php
//$usuario = $this->Session->read('Usuario');

/*if ($usuario) {
    echo $usuario[0]['Usuario']['tipo'];
}*/




echo $this->Form->create('Procedimento',array('inputDefaults' => array(
    'div' => array('class' => 'form-group'))));
echo $this->Form->input('nome',array('class' => 'form-control'));
echo $this->Form->input('preco',array('class' => 'form-control'));
//echo $this->Form->input('usuario_id');
echo $this->Form->end('Salvar procedimento');
?>
