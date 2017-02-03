<div>
<h2>Editar exame</h2>
	<span>
		<?= $this->Html->link("Logout", array('controller'=> 'pacientes', 'action'=> 'logout'));?>
	</span>
</div>
<?php
    echo $this->Form->create('Exame', array('url' => 'edit','inputDefaults' => array(
        'div' => array('class' => 'form-group'))));
    echo $this->Form->input('procedimento_id',array('class' => 'form-control'));
	
    echo $this->Form->end('Salvar exame');
