<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('partials/navbar');
        $this->load->view('home');
        $this->load->view('partials/footer');
    }

    public function details()
    {
        $this->load->view('partials/navbar');
        $this->load->view('product/details');
        $this->load->view('partials/footer');
    }

    public function cart()
    {
        $this->load->view('partials/navbar');
        $this->load->view('cart');
        $this->load->view('partials/footer');
    }

    public function checkout()
    {
        $this->load->view('partials/navbar');
        $this->load->view('checkout');
        $this->load->view('partials/footer');
    }
}
