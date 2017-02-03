<div>
<h2>Adicionar exame</h2>
	<span>
		<?= $this->Html->link("Logout", array('controller'=> 'pacientes', 'action'=> 'logout'));?>
	</span>
</div>




<?php
//$usuario = $this->Session->read('Usuario');

/*if ($usuario) {
    echo $usuario[0]['Usuario']['tipo'];
}*/

?>

<table class="table">
<caption>Procedimentos disponíveis</caption>
	<tr>
		<th>Nome</th>
		<th>Id</th>
		<th>Preco</th>
	</tr>

	 <?php foreach($proced as $p): ?>

		<tr>
			<td>
				<?php echo $p['Procedimento']['nome']; ?>
			</td>

			<td>
				<?= $p['Procedimento']['id']; ?>
			</td>

      <td>
        <?= $p['Procedimento']['preco']; ?>
      </td>
		</tr>

	<?php endforeach; ?>

</table>

 <?php

    echo $this->Form->create('Exame',array( 'inputDefaults' => array(
        'div' => array('class' => 'form-group'),
    )));
    echo $this->Form->input('data',array('class' => 'form-control'));
    echo $this->Form->input('procedimento_id',array('class' => 'form-control'));
    echo $this->Form->end('Salvar exame',array('class' => 'btn btn-default', 'type' =>'submit','div' => false));

  ?>
