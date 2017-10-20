<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Admin/AppAdminsController Controller
 *
 *
 * @method \App\Model\Entity\Admin/AppAdminsController[] paginate($object = null, array $settings = [])
 */
class AppAdminsController extends AppController {

  public function beforeFilter(Event $event) {
      parent::beforeFilter($event);
      $this->viewBuilder()->layout('admin');
  }
}
