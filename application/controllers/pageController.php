<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageCOntroller extends CI_Controller {

    public function index()
    {
        echo "This is the index page from pageController  --- HOME IN URL";
    }

    public function about()
    {
        echo "This is the about page from pageController";
    }
}