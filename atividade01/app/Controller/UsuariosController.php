<?php

class UsuariosController extends AppController
{

    public $helpers = array('Form');
    public $components = array('Flash');

    public function index_login()
    {

    }

    //tratar Login
    public function validar()
    {
        $usuario = $this->Usuario->findAllByLoginAndSenha($this->data['Usuario']['login'],$this->data['Usuario']['senha']);

        if (!empty($usuario))
            return $usuario;
        else
            return false;
    }
    public function login()
    {
        if (!empty($this->data['Usuario']['login'])) {
            //Validar
            $usuario = $this->validar();
            //retorna false se o usuario nao acessou
            if ($usuario != false) {

                    $this->Session->write('Usuario', $usuario);
                    $this->redirect(array(
                        'controller' => 'procedimentos',
                        'action' => 'index'
                    ));
                    exit();

            } else {
                $this->Flash->set('Usuário e/ou senha inválidos!');
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
    public function logout()
    {
        if ($this->Session->valid()) {
            $this->Session->destroy(); // Destrói
            $this->redirect('/'); // Redireciona o usuário
        }
    }
}
