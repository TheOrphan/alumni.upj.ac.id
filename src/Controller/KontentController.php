<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kontent Controller
 *
 * @property \App\Model\Table\KontentTable $Kontent */
class KontentController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('kontent', $this->paginate($this->Kontent));
        $this->set('_serialize', ['kontent']);
    }

    /**
     * View method
     *
     * @param string|null $id Kontent id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kontent = $this->Kontent->get($id, [
            'contain' => []
        ]);
        $this->set('kontent', $kontent);
        $this->set('_serialize', ['kontent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kontent = $this->Kontent->newEntity();
        if ($this->request->is('post')) {
            $kontent = $this->Kontent->patchEntity($kontent, $this->request->data);
            if ($this->Kontent->save($kontent)) {
                $this->Flash->success(__('The kontent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kontent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kontent'));
        $this->set('_serialize', ['kontent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kontent id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kontent = $this->Kontent->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kontent = $this->Kontent->patchEntity($kontent, $this->request->data);
            if ($this->Kontent->save($kontent)) {
                $this->Flash->success(__('The kontent has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kontent could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kontent'));
        $this->set('_serialize', ['kontent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kontent id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kontent = $this->Kontent->get($id);
        if ($this->Kontent->delete($kontent)) {
            $this->Flash->success(__('The kontent has been deleted.'));
        } else {
            $this->Flash->error(__('The kontent could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
