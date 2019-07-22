<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class   DefaultController  extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/index.html.twig');
    }




    /**
     * @Route("/about", name="about")
     */
    public function about (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/about.html.twig');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function skills (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/skills.html.twig');
    }

    /**
     * @Route("/service", name="service")
     */
    public function service (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/service.html.twig');
    }

    /**
     * @Route("/experience", name="experience")
     */
    public function experience (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/experience.html.twig');
    }

    /**
     * @Route("/education", name="education")
     */
    public function education (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/education.html.twig');
    }



    /**
     * @Route("/interet", name="interet")
     */
    public function interet (Request $request)

    {
        //recuperation form interet de backend : connecte 3ala base , findall, nab3et objet lil page interet.html.twig
        $em = $this->getDoctrine()->getManager();

        $interets = $em->getRepository('AppBundle:interet')->findAll();
        // replace this example code with whatever you need
        return $this->render('front-end/interet.html.twig', array(
            'interets'=>$interets));
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact (Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('front-end/contact.html.twig');
    }


}
