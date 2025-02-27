<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProjectRepository;

class EmployeeController extends AbstractController
{
   public function __construct(private ManagerRegistry $doctrine) {}
    /**
     * @Route("/new", name="employee_new", methods={"GET","POST"})
     */

    public function new(Request $request): Response
    {
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        // print_r(get_class_methods($form));
        $form->handleRequest($request);
        //  dd($form);
        if ($form->isSubmitted() && $form->isValid()) {
            // dd($form);
            // 
            $employee->setCreatedAt(new \DateTime());
            $employee->setUpdatedAt(new \DateTime());
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($employee);
            $entityManager->flush();
            // $employee = $form->getData();
           
            // $em = $this->getDoctrine()->getManager();  
            // $data = $em->getRepository('AppBundle:Employee\new')->find($id);
            // $em->persist($employee);
            // $em->flush();
            //$bk = $this->doctrine->getRepository(Employee)->findAll();

            
        //return $this->render('employee/new.html.twig', array('data' => $bk));
            return $this->redirectToRoute('employee_list');
        }
        return $this->render('employee/new.html.twig', [
            // 'form' => $form->createView(),
            'employee' => $employee,
            'form' => $form,
        ]);
    }
/** 
   * @Route("/display", name="employee_display",method={"GET","POST"}) 
*/ 
public function displayAction() { 
    $bk = $this->doctrine->getManager();

    return $this->render('books/display.html.twig', array('data' => $bk)); 
 }

}
