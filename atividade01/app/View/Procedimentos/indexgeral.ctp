<div>
<h2>Procedimentos ordenados</h2>
	<span>
		<?= $this->Html->link("Voltar", array('controller'=> 'pages', 'action'=> 'display', 'home'));?>
	</span>
</div>

<table class="table">
<caption>Procedimentos</caption>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preco</th>

    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($procedimentos as $p): ?>
    <tr>
        <td><?php echo $p['Procedimento']['id']; ?></td>
        <td>
            <?php echo $p['Procedimento']['nome']; ?>
        </td>
        <td><?php echo $p['Procedimento']['preco']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($p); ?>
</table>
