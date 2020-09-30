<?php

class BlogController extends Controller
{
    /**
     * @Route("/Blog", name="Blog")
     */

     public function index()
     {
         return $this->render('Blog/index.html.twig', [
             'controller_name' = 'BlogController'
         ]);
     }
}