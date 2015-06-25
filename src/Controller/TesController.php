<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tes Controller
 *
 * @property \App\Model\Table\TesTable $Tes
 */
class TesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tes', $this->paginate($this->Tes));
        $this->set('_serialize', ['tes']);
    }

    /**
     * View method
     *
     * @param string|null $id Te id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $te = $this->Tes->get($id, [
            'contain' => []
        ]);
        $this->set('te', $te);
        $this->set('_serialize', ['te']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $te = $this->Tes->newEntity();
        if ($this->request->is('post')) {
            $te = $this->Tes->patchEntity($te, $this->request->data);
            if ($this->Tes->save($te)) {
                $this->Flash->success(__('The te has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The te could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('te'));
        $this->set('_serialize', ['te']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Te id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $te = $this->Tes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $te = $this->Tes->patchEntity($te, $this->request->data);
            if ($this->Tes->save($te)) {
                $this->Flash->success(__('The te has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The te could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('te'));
        $this->set('_serialize', ['te']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Te id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $te = $this->Tes->get($id);
        if ($this->Tes->delete($te)) {
            $this->Flash->success(__('The te has been deleted.'));
        } else {
            $this->Flash->error(__('The te could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
