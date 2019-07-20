<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class   DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }




    /**
     * @Route("/about", name="about")
     */
    public function about (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function skills (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/skills.html.twig');
    }

    /**
     * @Route("/service", name="service")
     */
    public function service (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/service.html.twig');
    }

    /**
     * @Route("/experience", name="experience")
     */
    public function experience (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/experience.html.twig');
    }

    /**
     * @Route("/education", name="education")
     */
    public function education (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/education.html.twig');
    }



    /**
     * @Route("/interet", name="interet")
     */
    public function interet (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/interet.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig');
    }


}
