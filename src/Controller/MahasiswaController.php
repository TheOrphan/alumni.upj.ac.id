<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mahasiswa Controller
 *
 * @property \App\Model\Table\MahasiswaTable $Mahasiswa */
class MahasiswaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('mahasiswa', $this->paginate($this->Mahasiswa));
        $this->set('_serialize', ['mahasiswa']);
    }

    /**
     * View method
     *
     * @param string|null $id Mahasiswa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mahasiswa = $this->Mahasiswa->get($id, [
            'contain' => []
        ]);
        $this->set('mahasiswa', $mahasiswa);
        $this->set('_serialize', ['mahasiswa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mahasiswa = $this->Mahasiswa->newEntity();
        if ($this->request->is('post')) {
            $mahasiswa = $this->Mahasiswa->patchEntity($mahasiswa, $this->request->data);
            if ($this->Mahasiswa->save($mahasiswa)) {
                $this->Flash->success(__('The mahasiswa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mahasiswa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mahasiswa'));
        $this->set('_serialize', ['mahasiswa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mahasiswa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mahasiswa = $this->Mahasiswa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mahasiswa = $this->Mahasiswa->patchEntity($mahasiswa, $this->request->data);
            if ($this->Mahasiswa->save($mahasiswa)) {
                $this->Flash->success(__('The mahasiswa has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mahasiswa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mahasiswa'));
        $this->set('_serialize', ['mahasiswa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mahasiswa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mahasiswa = $this->Mahasiswa->get($id);
        if ($this->Mahasiswa->delete($mahasiswa)) {
            $this->Flash->success(__('The mahasiswa has been deleted.'));
        } else {
            $this->Flash->error(__('The mahasiswa could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
