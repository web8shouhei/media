<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlogsController Controller
 *
 *
 * @method \App\Model\Entity\BlogsController[] paginate($object = null, array $settings = [])
 */
class BlogsControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $blogsController = $this->paginate($this->BlogsController);

        $this->set(compact('blogsController'));
        $this->set('_serialize', ['blogsController']);
    }

    /**
     * View method
     *
     * @param string|null $id Blogs Controller id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blogsController = $this->BlogsController->get($id, [
            'contain' => []
        ]);

        $this->set('blogsController', $blogsController);
        $this->set('_serialize', ['blogsController']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blogsController = $this->BlogsController->newEntity();
        if ($this->request->is('post')) {
            $blogsController = $this->BlogsController->patchEntity($blogsController, $this->request->getData());
            if ($this->BlogsController->save($blogsController)) {
                $this->Flash->success(__('The blogs controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blogs controller could not be saved. Please, try again.'));
        }
        $this->set(compact('blogsController'));
        $this->set('_serialize', ['blogsController']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blogs Controller id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blogsController = $this->BlogsController->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blogsController = $this->BlogsController->patchEntity($blogsController, $this->request->getData());
            if ($this->BlogsController->save($blogsController)) {
                $this->Flash->success(__('The blogs controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blogs controller could not be saved. Please, try again.'));
        }
        $this->set(compact('blogsController'));
        $this->set('_serialize', ['blogsController']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blogs Controller id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blogsController = $this->BlogsController->get($id);
        if ($this->BlogsController->delete($blogsController)) {
            $this->Flash->success(__('The blogs controller has been deleted.'));
        } else {
            $this->Flash->error(__('The blogs controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
