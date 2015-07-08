<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Iluniprodi Controller
 *
 * @property \App\Model\Table\IluniprodiTable $Iluniprodi */
class IluniprodiController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('iluniprodi', $this->paginate($this->Iluniprodi));
        $this->set('_serialize', ['iluniprodi']);
    }

    /**
     * View method
     *
     * @param string|null $id Iluniprodi id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iluniprodi = $this->Iluniprodi->get($id, [
            'contain' => []
        ]);
        $this->set('iluniprodi', $iluniprodi);
        $this->set('_serialize', ['iluniprodi']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iluniprodi = $this->Iluniprodi->newEntity();
        if ($this->request->is('post')) {
            $iluniprodi = $this->Iluniprodi->patchEntity($iluniprodi, $this->request->data);
            if ($this->Iluniprodi->save($iluniprodi)) {
                $this->Flash->success(__('The iluniprodi has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iluniprodi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iluniprodi'));
        $this->set('_serialize', ['iluniprodi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Iluniprodi id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iluniprodi = $this->Iluniprodi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iluniprodi = $this->Iluniprodi->patchEntity($iluniprodi, $this->request->data);
            if ($this->Iluniprodi->save($iluniprodi)) {
                $this->Flash->success(__('The iluniprodi has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iluniprodi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iluniprodi'));
        $this->set('_serialize', ['iluniprodi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Iluniprodi id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iluniprodi = $this->Iluniprodi->get($id);
        if ($this->Iluniprodi->delete($iluniprodi)) {
            $this->Flash->success(__('The iluniprodi has been deleted.'));
        } else {
            $this->Flash->error(__('The iluniprodi could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
