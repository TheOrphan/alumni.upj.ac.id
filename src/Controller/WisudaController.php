<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wisuda Controller
 *
 * @property \App\Model\Table\WisudaTable $Wisuda */
class WisudaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('wisuda', $this->paginate($this->Wisuda));
        $this->set('_serialize', ['wisuda']);
    }

    /**
     * View method
     *
     * @param string|null $id Wisuda id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wisuda = $this->Wisuda->get($id, [
            'contain' => []
        ]);
        $this->set('wisuda', $wisuda);
        $this->set('_serialize', ['wisuda']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wisuda = $this->Wisuda->newEntity();
        if ($this->request->is('post')) {
            $wisuda = $this->Wisuda->patchEntity($wisuda, $this->request->data);
            if ($this->Wisuda->save($wisuda)) {
                $this->Flash->success(__('The wisuda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wisuda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wisuda'));
        $this->set('_serialize', ['wisuda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wisuda id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wisuda = $this->Wisuda->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wisuda = $this->Wisuda->patchEntity($wisuda, $this->request->data);
            if ($this->Wisuda->save($wisuda)) {
                $this->Flash->success(__('The wisuda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wisuda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('wisuda'));
        $this->set('_serialize', ['wisuda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wisuda id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wisuda = $this->Wisuda->get($id);
        if ($this->Wisuda->delete($wisuda)) {
            $this->Flash->success(__('The wisuda has been deleted.'));
        } else {
            $this->Flash->error(__('The wisuda could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
