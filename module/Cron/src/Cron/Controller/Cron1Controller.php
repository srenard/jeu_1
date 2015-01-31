<?php
namespace Cron\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class Cron1Controller extends AbstractActionController
{
    public function autoAction()
    {
        return new ViewModel();
    }
}