<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function empresa(){
        $this->load->view('empresa');
    }

    public function contacto()
    {
        $this->load->view('contacto');
    }

    public function calidad()
    {
        $this->load->view('calidad');
    }

    public function enlatados()
    {
        $this->load->view('enlatados');
    }

    public function granos()
    {
        $this->load->view('granos');
    }

    public function harinasfree()
    {
        $this->load->view('harinas_free');
    }

    public function harinas()
    {
        $this->load->view('harinas');
    }

    public function historia()
    {
        $this->load->view('historia');
    }

    public function mision()
    {
        $this->load->view('mision');
    }

    public function noticias()
    {
        $this->load->view('noticias');
    }

    public function precocidos()
    {
        $this->load->view('precocidos');
    }

    public function procesados()
    {
        $this->load->view('procesados');
    }

    public function proceso()
    {
        $this->load->view('proceso');
    }

    public function vision()
    {
        $this->load->view('vision');
    }
}
