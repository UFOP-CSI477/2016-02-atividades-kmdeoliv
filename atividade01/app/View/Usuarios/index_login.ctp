<div>
<h2>Acesso ao sistema administrativo</h2>
<span>
  <?= $this->Html->link("Voltar", array('controller'=> 'pages', 'action'=> 'display', 'home'));?>
</span>
</div>
<?php

echo $this->Form->create('Usuario', array('controller' => 'usuarios', 'url' => 'login','inputDefaults' => array(
    'div' => array('class' => 'form-group'))));

echo $this->Form->input('login',array('class' => 'form-control'));
echo $this->Form->input('senha',array('class' => 'form-control'));
echo $this->Form->end('Acessar');?>
