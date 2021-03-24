<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Psr\Log\LoggerInterface;

class LoggerSampleController extends AbstractController
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/logger/sample", name="logger_sample")
     */
    public function index(): Response
    {
        $this->logger->log("info", "test");

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/LoggerSampleController.php',
        ]);
    }
}
