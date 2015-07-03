<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InfoWisuda Controller
 *
 * @property \App\Model\Table\InfoWisudaTable $InfoWisuda */
class InfoWisudaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('infoWisuda', $this->paginate($this->InfoWisuda));
        $this->set('_serialize', ['infoWisuda']);
    }

    /**
     * View method
     *
     * @param string|null $id Info Wisuda id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $infoWisuda = $this->InfoWisuda->get($id, [
            'contain' => []
        ]);
        $this->set('infoWisuda', $infoWisuda);
        $this->set('_serialize', ['infoWisuda']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $infoWisuda = $this->InfoWisuda->newEntity();
        if ($this->request->is('post')) {
            $infoWisuda = $this->InfoWisuda->patchEntity($infoWisuda, $this->request->data);
            if ($this->InfoWisuda->save($infoWisuda)) {
                $this->Flash->success(__('The info wisuda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The info wisuda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('infoWisuda'));
        $this->set('_serialize', ['infoWisuda']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Info Wisuda id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $infoWisuda = $this->InfoWisuda->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infoWisuda = $this->InfoWisuda->patchEntity($infoWisuda, $this->request->data);
            if ($this->InfoWisuda->save($infoWisuda)) {
                $this->Flash->success(__('The info wisuda has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The info wisuda could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('infoWisuda'));
        $this->set('_serialize', ['infoWisuda']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Info Wisuda id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $infoWisuda = $this->InfoWisuda->get($id);
        if ($this->InfoWisuda->delete($infoWisuda)) {
            $this->Flash->success(__('The info wisuda has been deleted.'));
        } else {
            $this->Flash->error(__('The info wisuda could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
