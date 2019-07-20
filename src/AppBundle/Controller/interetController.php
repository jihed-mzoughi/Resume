<?php

namespace AppBundle\Controller;

use AppBundle\Entity\interet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Interet controller.
 *
 * @Route("admin/interet")
 */
class interetController extends Controller
{
    /**
     * Lists all interet entities.
     *
     * @Route("/", name="admin_interet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interets = $em->getRepository('AppBundle:interet')->findAll();


        return $this->render('interet/index.html.twig', array(
            'interets' => $interets,
        ));
    }

    /**
     * Creates a new interet entity.
     *
     * @Route("/new", name="admin_interet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)

    {

        $interet = new Interet();
        $form = $this->createForm('AppBundle\Form\interetType', $interet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($interet);
            $em->flush();

            return $this->redirectToRoute('admin_interet_show', array('id' => $interet->getId()));
        }

        return $this->render('interet/new.html.twig', array(
            'interet' => $interet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a interet entity.
     *
     * @Route("/{id}", name="admin_interet_show")
     * @Method("GET")
     */
    public function showAction(interet $interet)
    {
        $deleteForm = $this->createDeleteForm($interet);

        return $this->render('interet/show.html.twig', array(
            'interet' => $interet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing interet entity.
     *
     * @Route("/{id}/edit", name="admin_interet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, interet $interet)
    {
        $deleteForm = $this->createDeleteForm($interet);
        $editForm = $this->createForm('AppBundle\Form\interetType', $interet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_interet_edit', array('id' => $interet->getId()));
        }

        return $this->render('interet/edit.html.twig', array(
            'interet' => $interet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a interet entity.
     *
     * @Route("/{id}", name="admin_interet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, interet $interet)
    {
        $form = $this->createDeleteForm($interet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($interet);
            $em->flush();
        }

        return $this->redirectToRoute('admin_interet_index');
    }

    /**
     * Creates a form to delete a interet entity.
     *
     * @param interet $interet The interet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(interet $interet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_interet_delete', array('id' => $interet->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
