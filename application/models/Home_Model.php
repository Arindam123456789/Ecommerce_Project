<?php

class Home_Model extends CI_Model
{

	public function getProductDetails(){
		$res=$this->db->query("select * from products ORDER By RAND() limit 9");
		return $res->result_array();
	}


	function getCategoryDetails()
    {
        $this->db->select('*');
        $this->db->from('product_type as pt');
        //$this->db->join('product_brand as pb', 'pt.id = pb.p_type_id');
        $query = $this->db->get();
        $result = $query->result_array();        
        return $result;
    }

    public function getBrandDetails(){
        $res=$this->db->query("select * from product_brand");
        return $res->result_array();
    }

    public function getProductName(){
        $res=$this->db->query("select * from products");
        return $res->result_array();
    }

    public function getBrandList($cat_id){
        $res=$this->db->query("select id,brand_name from product_brand where p_type_id='$cat_id'");
        return $res->result_array();
    }

    public function getProduct(){
        $res=$this->db->query("select * from products");
        return $res->result_array();
    }

    public function BuyingGatDetails(){

         $res=$this->db->query("select * from products");
        return $res->result_array();


    }

}


?>