<div>
<h2> Área geral</h2>
	<div>
		<span>
			<?= $this->Html->link("Paciente", array('controller'=> 'pacientes', 'action'=> 'index'));?>
		</span>

		<span>
			<?= $this->Html->link("Administrador", array('controller'=> 'usuarios', 'action'=> 'index_login'));?>
		</span>

		<span>
			<?= $this->Html->link("Procedimentos", array('controller'=> 'procedimentos', 'action'=> 'indexgeral'));?>
		</span>
	</div>
</div>
