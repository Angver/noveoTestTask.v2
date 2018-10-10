<?php

namespace App\Controller\Rest;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RestController
 * @package App\Controller
 */
class UsersController extends Controller
{
    /**
     * Get users list
     *
     * @param Request $request Request
     *
     * @return Response
     */
    public function getUsersList(Request $request): Response
    {
        return $this->json([]);
    }

    public function addUser(Request $request): Response
    {
        return $this->json([]);
    }
}