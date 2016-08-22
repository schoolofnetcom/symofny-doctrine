<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class TaskController extends Controller
{

    /**
     * @Route("/task/new")
     */
    public function newAction()
    {
        $task = new Task(); 
        $task->setName("My First Task");
        $task->setFinished(true);
        $task->setDueDate(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($task);
        $em->flush();

        return new Response("<html><body>Task has been created</body></html>");
    }
    
    /**
     * @Route("/task/show/{id}", name="task_show")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository("AppBundle:Task")->find($id);

        if(!$task) {
            throw $this->createNotFoundException("Task not found");
        }

        return $this->render('task/show.html.twig', ['task'=>$task]);
    }

    /**
     * @Route("/task/{name}")
     */
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();

        $tasks = $em->getRepository('AppBundle\Entity\Task')
            ->findAll();

        return $this->render('task/index.html.twig', [
            'name' => $name,
            'tasks' => $tasks
        ]);
    }



    /**
     * @Route("/tasks.json")
     * @Method("GET")
     */
    public function apiAction()
    {
        $tasks = [
            'Call Mari',
            'Follow up Mathew',
            'Pay Amazon Bill'
        ];

        return new JsonResponse($tasks);
    }

}