<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class TestController extends AppController
{
    public function index()
    {
        $this->set(['title' => 'Test Controller']);
    }

    public function view($id)
    {
        $this->set(['id' => $id]);

        #$url = Router::url(['controller' => 'Test', 'action' => 'view', 'id' => $id]);
        $url = Router::url(['_name' => 'test']);
        $this->set(['url' => $url]);
    }
}
