<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Testingpdf extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
      $this->load->library('ckeditor');
      $this->load->library('ckfinder');
    }

    function index()
    {        
        
        $pdfFilePath = 'test.pdf';
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML("Hello!");
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }

}?>