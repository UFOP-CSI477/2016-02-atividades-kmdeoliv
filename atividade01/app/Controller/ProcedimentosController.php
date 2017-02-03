<?php

class ProcedimentosController extends AppController
{
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index()
    {
        $this->set('procedimentos', $this->Procedimento->find('all'));

    }

    public function indexgeral()
    {
        $this->set('procedimentos', $this->Procedimento->find('all', array('order' => array('Procedimento.nome ASC'))));

    }

    public function add()
    {     $usuario = $this->Session->read('Usuario');



         if( $usuario[0]['Usuario']['tipo']==1){
           if (empty($this->request->data)) {

           } else {
               $this->request->data['Procedimento']['usuario_id'] = $usuario[0]['Usuario']['id'];
               if ($this->Procedimento->save($this->request->data)) {
                   $this->Flash->set('Procedimento inserido com sucesso!');
                   $this->redirect(array(
                       'action' => 'index'
                   ));
               }
           }

         }else{
            $this->Flash->set('Voce nao tem premissao para realizar essa operacao!');

         }
    }

    function edit($id = null) {
        $usuario = $this->Session->read('Usuario');
        if( $usuario[0]['Usuario']['tipo']==1){
          $this->Procedimento->id = $id;
          $this->Procedimento->usuario_id =  $usuario[0]['Usuario']['id'];

              if ($this->request->is('get')) {
                  $this->request->data = $this->Procedimento->findById($id);
              } else {
                  if ($this->Procedimento->save($this->request->data)) {
                      $this->Flash->success('Procedimento alterado');
                      $this->redirect(array('action' => 'index'));
                  }
              }
        }else{
           $this->Flash->set('Voce nao tem permissao para realizar essa operacao!');
        }

    }

    function delete($id) {
      $usuario = $this->Session->read('Usuario');
      if( $usuario[0]['Usuario']['tipo']==1){
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }


        if ($this->Procedimento->delete($id)) {
            $this->Flash->success('O exame de id ' . $id . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
        }
      }else{
         $this->Flash->set('Voce nao tem premissao para realizar essa operacao!');

      }



    }
}
