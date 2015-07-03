<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Berita Controller
 *
 * @property \App\Model\Table\BeritaTable $Berita */
class BeritaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('berita', $this->paginate($this->Berita));
        $this->set('_serialize', ['berita']);
    }

    /**
     * View method
     *
     * @param string|null $id Beritum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $beritum = $this->Berita->get($id, [
            'contain' => []
        ]);
        $this->set('beritum', $beritum);
        $this->set('_serialize', ['beritum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $beritum = $this->Berita->newEntity();
        if ($this->request->is('post')) {
            $beritum = $this->Berita->patchEntity($beritum, $this->request->data);
            if ($this->Berita->save($beritum)) {
                $this->Flash->success(__('The beritum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The beritum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('beritum'));
        $this->set('_serialize', ['beritum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Beritum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $beritum = $this->Berita->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $beritum = $this->Berita->patchEntity($beritum, $this->request->data);
            if ($this->Berita->save($beritum)) {
                $this->Flash->success(__('The beritum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The beritum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('beritum'));
        $this->set('_serialize', ['beritum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Beritum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $beritum = $this->Berita->get($id);
        if ($this->Berita->delete($beritum)) {
            $this->Flash->success(__('The beritum has been deleted.'));
        } else {
            $this->Flash->error(__('The beritum could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
