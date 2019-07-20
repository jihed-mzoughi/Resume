<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
 * @Route("/dashboard",name="dashboard")
 */
    public function indexAction()
    {
        return $this->render('AdminBundle/views/BaseAdminDashboard.html.twig');
    }


}
