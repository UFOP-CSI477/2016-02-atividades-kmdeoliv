<?php

class Paciente extends AppModel{


	 public $validate = array(
			 'nome' => array(
					 'required' => array(
							 'rule' => array('notBlank'),
							 'message' => 'Nome é obrigatório'
					 )
			 ),
			 'senha' => array(
					 'required' => array(
							 'rule' => array('notBlank'),
							 'message' => 'Senha é obrigatória'
					 )
			 ),
			 'login' => array(
				 'required' => array(
						 'rule' => array('notBlank'),
						 'message' => 'Login é obrigatório'
				 )
			 )
	 );


	//public function beforeSave($options = array()) {
	//    if (isset($this->data[$this->alias]['senha'])) {
  //	        $this->data[$this->alias]['senha'] = md5($this->data[$this->alias]['senha']);
	//    }
	//    return true;
	//}

}
