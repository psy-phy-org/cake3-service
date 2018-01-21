<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Service\TestService;

class PracticesController extends AppController
{
    public $name = 'Practices';
    public $autoRender = false;
    public function index()
    {
        echo '<p>This is a practice of CakePHP.</p>';

        $service = new TestService();
        $service->hello();
    }
}
