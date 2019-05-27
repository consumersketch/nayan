<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function __construct() {
		parent::__construct ();
		// set date default time zone
		date_default_timezone_set('Asia/Calcutta');
		
		// Load database
		$this->load->model ('InvoiceModel');
	}
	// get all invoice records
	public function invoiceList()
	{
		$data['invoiceList']=$this->InvoiceModel->invoiceList();
		$data['clientsList']=$this->InvoiceModel->clientsList();
		$this->load->view('invoiceList', $data);   
	}
	// get invoice records using ajax
	public function getInvoiceList()
	{
		
		$invoiceList=$this->InvoiceModel->getInvoiceList();
		return  $invoiceList;
	}
	
	// get products of client using ajax
	public function getProducts()
	{
		$productList=$this->InvoiceModel->getProducts();
		return $productList;
	}
	
	
}
?>
