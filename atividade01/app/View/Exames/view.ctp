<?php// Debugger::dump($exames);?>

<div>
  <h2>Listar exames</h2>
  <span>
  	<?= $this->Html->link("Logout", array('controller'=> 'pacientes', 'action'=> 'logout'));?>
  </span>
</div>


 <?php echo $this->Html->link('Adicionar exames', array('action' => 'add'));?>

<table class="table">
 <caption>Exames inseridos</caption>
 <?php
 $preco = 0;
 $quantidade = 0;
 foreach($exames as $p): ?>
   <tr>
     <th>Nome</th>
     <th>Preço</th>
     <th>Data</th>
     <th>Ação</th>
   </tr>

   <tr>
     <td>
       <?php echo $p['Procedimento']['nome']; ?>
     </td>

     <td>
       <?php
        echo $p['Procedimento']['preco'];
        $preco = $preco + $p['Procedimento']['preco'];
        $quantidade = $quantidade + 1;
       ?>

     </td>
     <td>
       <?php echo $p['Exame']['data']; ?>
     </td>
     <td>
       <?php echo $this->Html->link(' Editar', array('action' => 'edit', $p['Exame']['id']));?>
       <?php echo $this->Form->postLink(
             'Deletar ',
             array('action' => 'delete', $p['Exame']['id']),
             array('confirm' => 'Confirmar exclusão?'));
         ?>

    </td>
   </tr>



<?php endforeach; ?>

</table>

 <p class="bg-info"><?= 'Total dos exames inseridos é '. $preco?></p>
 <p class="bg-info"><?= 'A quantidade total de exames é '. $quantidade?></p>
