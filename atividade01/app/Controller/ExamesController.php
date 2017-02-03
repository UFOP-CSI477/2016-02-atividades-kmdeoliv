<?php

class ExamesController extends AppController
{

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    /* Busca todos os exames. Variável procedimentos esta recebendo todos os procedimentos. Cada método é uma página html (view) */
    public function index()
    {
        $this->set('exames', $this->Exame->find('all'));
    }

    public function add()
    {

			$procedimentos = $this->Exame->Procedimento->find('all');
			$this->set('proced',$procedimentos);
			$this->set('procedimentos', $this->Exame->Procedimento->find('list',array('fields'=>array('nome'))));

        if (empty($this->request->data)) {

        } else {
            //pega o paciente que está logado
            $paciente = $this->Session->read('Paciente');

            //requisita chave estrangeira para inserir no formulario.
            $this->request->data['Exame']['paciente_id'] = $paciente[0]['Paciente']['id'];


            //insere procedimento
            if ($this->Exame->save($this->request->data)) {
                $this->Flash->set('Exame inserido com sucesso!');
                $this->redirect(array(
                    'controller' => 'exames',
                    'action' => 'view'
                ));
            }
        }
    }


    public function view()
    {
      $paciente_id = $this->Session->read('Paciente');

        //Procura paciente_id
				$this->set('exames', $this->Exame->find('all',
	    array('conditions'=> array('Paciente.id' => $paciente_id[0]['Paciente']['id']), 'order' => array('Exame.data DESC','Procedimento.nome ASC' )),
	    array('recursive' => 2)));

    }


    function edit($id = null) {

        $this->set('procedimentos', $this->Exame->Procedimento->find('list',array('fields'=>array('nome'))));
        $paciente = $this->Session->read('Paciente');
        $this->Exame->id = $id;
        $this->Exame->paciente_id = $paciente[0]['Paciente']['id'];


        if ($this->request->is('get')) {
            $this->request->data = $this->Exame->findById($id);
        } else {
                if ($this->Exame->save($this->request->data)) {
                $this->Flash->success('Seu procedimento foi alterado.');
                $this->redirect(array('action' => 'view'));
            }
        }
    }

    function delete($id) {

      if (!$this->request->is('post')) {
          throw new MethodNotAllowedException();
      }
      if ($this->Exame->delete($id)) {
          $this->Flash->success('O exame de id ' . $id . ' foi deletado.');
          $this->redirect(array('action' => 'view'));
      }
    }




}
