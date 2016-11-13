<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends CI_Controller {
	function index()
	{
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');
    $url = $_SERVER['HTTP_REFERER'];
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'stonestoday@gmail.com', //isi dengan gmailmu!
      'smtp_pass' => 'egalotong', //isi dengan password gmailmu!
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from($email);
    $this->email->to('stonestoday@gmail.com'); //email tujuan. Isikan dengan emailmu!
    $this->email->subject($subjek);
    $this->email->message($pesan);
    if($this->email->send())
    {
      echo 'Email sent. <a href="'.$url.'">KEMBALI</a>';
    }
    else
    {
      show_error($this->email->print_debugger());
    }
	}	
}?>