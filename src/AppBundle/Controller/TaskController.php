<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{

    /**
     * @Route("/task/shows", name="task_show")
     */
    public function showAction()
    {
        return $this->render('task/show.html.twig');
    }

    /**
     * @Route("/task/{name}")
     */
    public function indexAction($name)
    {
        $tasks = [
            'Call Mari',
            'Follow up Mathew',
            'Pay Amazon Bill'
        ];

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