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

    public function noticia($noticia)
    {
        if($noticia === 'celiaquia'){
            $this->load->view('que-es-cilaquia');
        }
        elseif($noticia === 'alimentos-sin-gluten'){
            $this->load->view('alimentos-sin-gluten');
        }
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

    public function sendmail()
    {
        $nombres = $this->input->post('nombres');
        $telefono = $this->input->post('telefono');
        $email = $this->input->post('email');
        $compania = $this->input->post('compania');
        $mensaje = $this->input->post('mensaje');
        $email_body = "<html><body><p><Strong>Datos del Cliente</Strong></p><p><Strong>Nombres:</Strong> $nombres</p><p><Strong>Teléfono:</Strong> $telefono</p><p><Strong>Compañia:</Strong> $compania</p><br/><p><Strong>Mensaje</Strong></p><p>$mensaje</p></body></html>";
        $this->email->from($email);
        $this->email->to('soporte@cerealeslapradera.com');
        $this->email->subject('Mensaje de '.$nombres.' <'.$email.'>');
        $this->email->message($email_body);
        $this->email->send();
        echo "<script>alert('Mensaje enviado');</script>";
        echo "<script>window.location.href='".base_url("index.php")."';</script>";
    }
}
