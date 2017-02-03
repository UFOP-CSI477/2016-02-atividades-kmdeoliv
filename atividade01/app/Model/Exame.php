<?php

/* Exames são solicitados por procedimentos/paciente.

 */
class Exame extends AppModel{
  public $name = 'Exame';
	public $belongsTo = array('Paciente', 'Procedimento');

	public $validate = array(
 		 'data' => array(
 				 'required' => array(
 						 'rule' => array('notBlank'),
 						 'message' => 'Data é obrigatório'
 				 )
 		 ),
 		 'paciente_id' => array(
 				 'required' => array(
 						 'rule' => array('notBlank'),
 						 'message' => 'Paciente é obrigatorio'
 				 )
 		 ),
 		 'procedimento_id' => array(
 			 'required' => array(
 					 'rule' => array('notBlank'),
 					 'message' => 'Procedimento é obrigatório'
 			 )
 		 )
  );
}
