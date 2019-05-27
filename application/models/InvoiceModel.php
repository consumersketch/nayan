<?php
class InvoiceModel extends CI_Model {

	// Read data from database to show data in invoice list page
	public function invoiceList()
	{
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->join('invoicelineitems', 'invoices.invoice_num = invoicelineitems.invoice_num');
		$this->db->join('products', 'invoicelineitems.product_id = products.product_id');
		$this->db->order_by("invoice_date", "desc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	// Read data using ajax from database to show data in invoice list page
	public function getInvoiceList()
	{
		$clientId=$this->input->post('clientId');
		$product=$this->input->post('product');
		$invoicePeriod=$this->input->post('invoicePeriod');
		
		$this->db->select('*');
		$this->db->from('invoices');
		$this->db->join('invoicelineitems', 'invoices.invoice_num = invoicelineitems.invoice_num');
		$this->db->join('products', 'invoicelineitems.product_id = products.product_id');
		
			
			if($clientId!=''){
			 $this->db->where('invoices.client_id', $clientId);
			}
			
			if($product!=''){
				$this->db->where('invoicelineitems.product_id', $product);
			}
			// condition for getting Last Month to Date records
			if($invoicePeriod=='LastMonthtoDate'){
				$lastMonthDate=date("Y-m-d", strtotime("first day of previous month"));
				$currentDate=date('Y-m-d');
				$this->db->where('invoices.invoice_date>=', $lastMonthDate);
				$this->db->where('invoices.invoice_date<=', $currentDate);
			}
			
			// condition for getting This Month records
			if($invoicePeriod=='ThisMonth'){
				$firstDayCurrMonth=date('Y-m-01');
				$lastDayCurrMonth=date('Y-m-t');
				$this->db->where('invoices.invoice_date>=', $firstDayCurrMonth);
				$this->db->where('invoices.invoice_date<=', $lastDayCurrMonth);
			}
			
			// condition for getting This Year records
			if($invoicePeriod=='ThisYear'){
				$firstDateCurrYear=date("Y-m-d", strtotime("first day of january"));
				$lastDateCurrYear=date("Y-m-d", strtotime("last day of december"));
				$this->db->where('invoices.invoice_date>=', $firstDateCurrYear);
				$this->db->where('invoices.invoice_date<=', $lastDateCurrYear);
				
			}
			
			// condition for getting Last Year records
			if($invoicePeriod=='LastYear'){
				$firstDatePrevYear=date("Y-m-d", strtotime("first day of previous year"));
				$lastDatePrevYear=date("Y-m-d", strtotime("last day of previous year"));
				$this->db->where('invoices.invoice_date>=', $firstDatePrevYear);
				$this->db->where('invoices.invoice_date<=', $lastDatePrevYear);
			}
			
		$this->db->order_by("invoice_date", "desc");
		$query = $this->db->get();
		$invoiceList=$query->result_array();
		
		echo json_encode($invoiceList);
	}
	// get client list in dropdown
	public function clientsList() {
		$this->db->select('*');
		$this->db->from('clients');
		$query = $this->db->get();
		return $query->result_array();
		
	}
	
	// get productlist of client using ajax in dropdown
	public function getProducts() {
		$clientId=$this->input->post('clientId');
		    
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('products.client_id', $clientId);
		$query = $this->db->get();
		$productList=$query->result_array();
		echo json_encode($productList);
		
	}
	
}

?>