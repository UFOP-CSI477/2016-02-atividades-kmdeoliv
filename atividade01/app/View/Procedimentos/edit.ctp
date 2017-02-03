<div>
<h2>Editar procedimento</h2>
	<span>
		<?= $this->Html->link("Logout", array('controller'=> 'usuarios', 'action'=> 'logout'));?>
	</span>
</div>
<?php
    echo $this->Form->create('Procedimento', array('url' => 'edit','inputDefaults' => array(
        'div' => array('class' => 'form-group'))));
    echo $this->Form->input('nome',array('class' => 'form-control'));
    echo $this->Form->input('preco',array('class' => 'form-control'));
    echo $this->Form->end('Salvar exame');
