<div>
<h2> Área do paciente</h2>
	<div>
		<span >
			<?= $this->Html->link("Cadastro", array('controller'=> 'pacientes', 'action'=> 'add'));?>
		</span>

		<span>
			<?= $this->Html->link("Login", array('controller'=> 'pacientes', 'action'=> 'index_login'));?>
		</span>

		<span>
			<?= $this->Html->link("Voltar", array('controller'=> 'pages', 'action'=> 'display', 'home'));?>
		</span>
	</div>
</div>
