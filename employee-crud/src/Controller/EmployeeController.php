<?php

namespace App\Controller;

use App\Entity\Employee;
use App\Form\EmployeeType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @Route("/employee")
 */
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
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $employee->setCreatedAt(new \DateTime());
            $employee->setUpdatedAt(new \DateTime());
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($employee);
            $entityManager->flush();
            // $this->addFlash('success', 'data inserted!');
            return $this->redirectToRoute('employee_list');
        }
        $this->addFlash('success', '');
        return $this->render('employee/new.html.twig', [
            'employee' => $employee,
            'form' => $form,
        ]);
    }
    /**
     * @Route("/list", name="employee_list", methods={"GET"})
     */
    public function list(): Response
    {
        $employeeRepository = $this->doctrine->getRepository(Employee::class);
        $employees = $employeeRepository->findBy([],['id'=>'DESC']);
        return $this->render('employee/list.html.twig', ['employees' => $employees]);
    }

    /**
     * @Route("/employee/edit/{id}", name="employee_edit",methods={"GET","PUT","POST"})
     */
    public function edit(Employee $employee, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $employee = $form->getData();
            $em->persist($employee);
            $em->flush();
            $this->addFlash('success', 'data updated!');
            return $this->redirectToRoute('employee_list', [
                'id' => $employee->getId(),
            ]);
        }
        $this->addFlash('success', '');
        return $this->render('employee/edit.html.twig', [
            'editform' => $form->createView(),
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="employee_delete", methods={"POST"})
     */
    public function delete(Request $request, Employee $employee, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $employee->getId(), $request->request->get('_token'))) {
            $em->persist($employee);
            $em->remove($employee);
            $em->flush();
        }

        return $this->redirectToRoute('employee_list', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/filter", name="employee_filter_ajax", methods={"GET"})
     */
    public function filterAjax(Request $request, EntityManagerInterface $em): Response
    {
        $salaryFilter = $request->query->get('salaryOperator', null);
        // dd($salaryFilter);
        $qb = $em->getRepository(Employee::class)->createQueryBuilder('e');

        // dd(get_class_methods($em));
        if ($salaryFilter) {

            $qb->andWhere('e.salary'. $salaryFilter .':salary')
                ->setParameter('salary', $request->query->get('salaryInput'));
        }
        $employees = $qb->getQuery()->getResult();
        return $this->render('employee/list.html.twig', [
            'employees' => $employees,
            
        ]);
    }
}
