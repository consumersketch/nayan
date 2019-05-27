<?php
// helper function for getting product name using product id
function getProductName($pid)
{
	$ci=& get_instance();
	$ci->load->database(); 
	$sql = "select product_description from products where product_id='".$pid."'";
	
	$query = $ci->db->query($sql);
	$row = $query->result();
	if(count($row)>0){
	  return $row[0]->product_description;
	}else {
		return '';
	}	
}
// helper function for getting total clients count
function getClientsCount()
{
	$ci=& get_instance();
	$ci->load->database();
	$sql = "select count(client_id) as totalClient from clients";
	$query = $ci->db->query($sql);
	$row = $query->result_array();
	return $row[0]['totalClient'];
}
// helper function for getting total products count
function getProductsCount()
{
	$ci=& get_instance();
	$ci->load->database();
	$sql = "select count(product_id) as totalProducts from products";
	$query = $ci->db->query($sql);
	$row = $query->result_array();
	return $row[0]['totalProducts'];
}

?>