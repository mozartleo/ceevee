<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiController extends Controller
{
    /**
     * @Route("api/tasks")
     * @return JsonResponse
     */
    public function getTasks()
    {
        return JsonResponse::create([
            ['id' => 1, 'title' => 'Task #1', 'status' => 0],
            ['id' => 2, 'title' => 'Task #2', 'status' => 1],
            ['id' => 3, 'title' => 'Task #3', 'status' => 1],
            ['id' => 4, 'title' => 'Task #4', 'status' => 0],
            ['id' => 5, 'title' => 'Task #5', 'status' => 1]
        ]);
    }
}