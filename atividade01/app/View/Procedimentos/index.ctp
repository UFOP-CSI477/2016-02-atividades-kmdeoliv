<div>
<h2>Procedimentos</h2>
<span>
  <?= $this->Html->link("Voltar", array('controller'=> 'pages', 'action'=> 'display', 'home'));?>
</span>
</div>

<?php echo $this->Html->link(
    'Adicionar procedimento',
    array('controller' => 'procedimentos', 'action' => 'add')
); ?>
<br>
<br>
<table class="table">

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preco</th>
        <th>Acao</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($procedimentos as $p): ?>
    <tr>
        <td><?php echo $p['Procedimento']['id']; ?></td>
        <td>
            <?php echo $p['Procedimento']['nome']; ?>
        </td>
        <td><?php echo $p['Procedimento']['preco']; ?></td>
        <td>
          <?php echo $this->Form->postLink(
                'Deletar',
                array('action' => 'delete', $p['Procedimento']['id']),
                array('confirm' => 'Confirmar exclusao?'));
            ?>
             <?php echo $this->Html->link('Editar', array('action' => 'edit', $p['Procedimento']['id']));?>
       </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($p); ?>
</table>
