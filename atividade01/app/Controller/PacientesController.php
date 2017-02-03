<?php

class PacientesController extends AppController
{

    public $helpers = array('Form');
    public $components = array('Flash');

		public function index()
    {

    }


    public function index_login()
    {

    }

    //tratar Login
    public function validar()
    {
        //$paciente = $this->Paciente->findAllByLoginAndSenha($this->data['Paciente']['login'], md5($this->data['Paciente']['senha']));
        $paciente = $this->Paciente->findAllByLoginAndSenha($this->data['Paciente']['login'],$this->data['Paciente']['senha']);

        if (!empty($paciente))
            return $paciente;
        else
            return false;
    }
    public function login()
    {
        if (!empty($this->data['Paciente']['login'])) {
            //Validar
            $paciente = $this->validar();
            //retorna false se o paciente nao acessou
            if ($paciente != false) {
                $this->Flash->set('Acesso realizado com sucesso por paciente!');
                $this->Session->write('Paciente', $paciente);
                $this->redirect(array(
                    'controller' => 'exames',
                    'action' => 'view'
                ));
                exit();
            } else {
                $this->Flash->set('Paciente e/ou senha inválidos!');
                $this->redirect(array(
                    'action' => 'index_login'
                ));
                exit();
            }

        } else {
            $this->redirect(array(
                'action' => 'index_login'
            ));
            exit();
        }

    }

		public function add() {
      if ($this->Session->valid()) {
          $this->Session->destroy(); // Destrói
      }
        if ($this->request->is('post')) {
            if ($this->Paciente->save($this->request->data)) {
                $this->Flash->success('Seu cadastro foi criado');
                $this->redirect(array('action' => 'index_login'));
            }
        }
    }

    public function logout()
    {
        if ($this->Session->valid()) {
            $this->Session->destroy(); // Destrói
            $this->redirect('/'); // Redireciona o usuário
        }
    }
}
