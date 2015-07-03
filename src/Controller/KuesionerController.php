<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kuesioner Controller
 *
 * @property \App\Model\Table\KuesionerTable $Kuesioner */
class KuesionerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('kuesioner', $this->paginate($this->Kuesioner));
        $this->set('_serialize', ['kuesioner']);
    }

    /**
     * View method
     *
     * @param string|null $id Kuesioner id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kuesioner = $this->Kuesioner->get($id, [
            'contain' => []
        ]);
        $this->set('kuesioner', $kuesioner);
        $this->set('_serialize', ['kuesioner']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kuesioner = $this->Kuesioner->newEntity();
        if ($this->request->is('post')) {
            $kuesioner = $this->Kuesioner->patchEntity($kuesioner, $this->request->data);
            if ($this->Kuesioner->save($kuesioner)) {
                $this->Flash->success(__('The kuesioner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kuesioner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kuesioner'));
        $this->set('_serialize', ['kuesioner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kuesioner id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kuesioner = $this->Kuesioner->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kuesioner = $this->Kuesioner->patchEntity($kuesioner, $this->request->data);
            if ($this->Kuesioner->save($kuesioner)) {
                $this->Flash->success(__('The kuesioner has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kuesioner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kuesioner'));
        $this->set('_serialize', ['kuesioner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kuesioner id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kuesioner = $this->Kuesioner->get($id);
        if ($this->Kuesioner->delete($kuesioner)) {
            $this->Flash->success(__('The kuesioner has been deleted.'));
        } else {
            $this->Flash->error(__('The kuesioner could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
