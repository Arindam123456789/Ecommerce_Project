<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{



  //###################  Product Type Controller Model Funcion #####################//

    function productTypeListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('product_type');
        if(!empty($searchText))
         {
            $likeCriteria = "(type_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return count($query->result());
    }



  function update_order($p_id)
  {
      $a = '';
      if($this->session->userdata('email')!=''){
      $email = $this->session->userdata['email'];
      $data = array('user_email' => $email, 'product_id'=> $p_id);
      $this->session->set_userdata('p_id',$p_id);
      $this->db->insert('cart',$data);
    }
    else 
    {
      if($this->session->userdata('p_id')=='')
      {
      $a .= $p_id;
      $this->session->set_userdata('p_id',$a);
       }
    else
     {
      $b = $this->session->userdata('p_id');
      $a .= ",".$p_id;
      $b .= $a;
      $this->session->set_userdata('p_id',$b);
      }
    }
    }

    public function cartdtl()
    {

       
         $email = $this->session->userdata('email');
        $query=$this->db->query("SELECT products.p_name, products.p_type_id, products.price, products.image,cart.product_id from products INNER JOIN cart ON products.id=cart.product_id WHERE cart.status=0 AND cart.user_email='".$email."'");

       return $query->result_array();
    
    }


    public function noofitems($pid)
    {
      $query=$this->db->query("SELECT products.p_descrption, product_brand.quantity from products INNER JOIN product_brand ON products.p_brand_id=product_brand.id WHERE products.id='$pid'");

      return $query->result_array(); 
    }

    public function cartdtl2()
    {

       
         $email = $this->session->userdata('email');
        $query=$this->db->query("SELECT products.p_name, products.p_type_id, products.price, products.image,cart.product_id,cart.orderedquantity from products INNER JOIN cart ON products.id=cart.product_id WHERE cart.status=1 AND cart.user_email='".$email."'");

       return $query->result_array();
    
    }


    public function addtocart($totalprice,$orderedquantity)
   {
    $email = $this->session->userdata('email');
    // $totalprice=$this->input->post('price');
    // echo $totalprice;exit;
     // $this->db->query("UPDATE cart SET status=1 WHERE cart.status=0 AND user_email='".$email ."'");
     // $query1=$this->db->query("UPDATE  cart SET totalprice= $totalprice WHERE cart.status=0 AND user_email='".$email ."'");
     //echo $query1->result();
     $data = array(

           'status'=>1,
          'totalprice'=>$totalprice,
          'orderedquantity'=>$orderedquantity
          
     );
     $this->db->set($data);
     $this->db->where('status',0);
     $this->db->where('totalprice',0);
     $this->db->where('orderedquantity',0);

     $this->db->where('user_email',$email);
     $query1=$this->db->update('cart');
     return $query1;


      // return $this->db->affected_rows();
    // return $query1->result_array();
   }
    




    function productTypeListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('product_type');
         if(!empty($searchText)) {
            $likeCriteria = "(type_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    function checkProductType($prodTypeName){
      $this->db->select('*');
      $this->db->from('product_type');
      $this->db->where("type_name ='".$prodTypeName."'");   

      $res  = $this->db->get();

      if($res->num_rows()>0)
      {
        return  true;
      }
      else
      {
        return false;
      }
    }
    
   
    function addNewProductType($prodTypeInfo)
    {
        $this->db->insert('product_type', $prodTypeInfo);
        
        $insert_id = $this->db->insert_id();
        
        return $insert_id;
    }


    function getProductTypeById($prodTypeId)
    {
      $this->db->select('*');
      $this->db->from('product_type');
      $this->db->where('id ='.$prodTypeId);

      $query  = $this->db->get();
      $result = $query->row_array();
      return $result;
    }

    function checkProductTypeForEdit($prodTypeName,$prodTypeId){
      $this->db->select('*');
      $this->db->from('product_type');
      $this->db->where("type_name ='".$prodTypeName."'");
      $this->db->where('id !='.$prodTypeId);   

      $res  = $this->db->get();

      if($res->num_rows()>0)
      {
        return  true;
      }
      else
      {
        return false;
      }
    }


    function editProductTypeData($prodTypeId,$prodTypeInfo){
      $this->db->where('id', $prodTypeId);
      $this->db->update('product_type', $prodTypeInfo);

      return TRUE;
    }
  
   


    //###################  End Product Type Controller Model Funcion #####################//




    //###################  Brand Controller Model Funcion #####################//
    function productBrandListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('product_brand');
        if(!empty($searchText)) {
            $likeCriteria = "(brand_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return count($query->result());
    }


    public function update_quantity($itemst,$brand)
    {
      // $brandinfo=array()
      $this->db->set('quantity',$itemst);
      $this->db->where('brand_name',$brand);
      $query=$this->db->update('product_brand');
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    function productBrandListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('product_brand as pb');
        $this->db->join('product_type as pt', 'pt.id = pb.p_type_id');
         if(!empty($searchText)) {
            $likeCriteria = "(brand_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    function productType(){
        $this->db->select('*');
        $this->db->from('product_type');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    function getproduct($productid)
    {

      $this->db->select('*');
      $this->db->from('products');
      $this->db->where('id='.$productid);

      $query  = $this->db->get();
      $result = $query->row_array();
      return $result;

    }

    function update_product_data($update_prod_data,$prodid)
    {
      $this->db->where('id', $prodid);
      $output= $this->db->update('products', $update_prod_data);
      
      if($output)
      {
      return TRUE;
      }
      else
      {
        return false;
      }

    }
    
    function productBrand(){
        $this->db->select('*');
        $this->db->from('product_brand');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


     function checkProductBrandName($brand_name){
        $this->db->select('*');
        $this->db->from('product_brand');
        $this->db->where("brand_name ='".$brand_name."'");   

        $res  = $this->db->get();

        if($res->num_rows()>0)
        {
          return  true;
        }
        else
        {
          return false;
        }
    }


    function addNewProductBrand($prodBrandInfo)
    {
        $this->db->insert('product_brand', $prodBrandInfo);
        
        $insert_id = $this->db->insert_id();
        
        return $insert_id;
    }



    function getBrandTypeById($brandId)
    {
      $this->db->select('*');
      $this->db->from('product_brand');
      $this->db->where('id ='.$brandId);

      $query  = $this->db->get();
      $result = $query->row_array();
      return $result;
    }


     function checkProductBrandNameForUpdate($brand_name,$brandId){
      $this->db->select('*');
      $this->db->from('product_brand');
      $this->db->where("brand_name ='".$brand_name."'");
      $this->db->where('id !='.$brandId);   

      $res  = $this->db->get();

      if($res->num_rows()>0)
      {
        return  true;
      }
      else
      {
        return false;
      }
    }


    function updateProductBrandData($prodBrandInfo,$brandId){
      $this->db->where('id', $brandId);
      $this->db->update('product_brand', $prodBrandInfo);

      return TRUE;
    }


    //###################  End Product Brand Controller Model Funcion #####################//






    //################### Product Controller Model Funcion #####################//
    function productListingCount($searchText = '')
    {
        $this->db->select('*');
        $this->db->from('products');
        if(!empty($searchText)) {
            $likeCriteria = "(p_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return count($query->result());
    }


  
    function productListing($searchText = '', $page, $segment)
    {
        $this->db->select('*');
        $this->db->from('products');
         if(!empty($searchText)) {
            $likeCriteria = "(p_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


  


    function addNewProduct($productInfo)
    {
      $this->db->insert('products', $productInfo);
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }


    function deleteProduct($productId){
      $this->db->where('id', $productId);
      $delete = $this->db->delete('products');

      if ($delete) {
        return true;
      }else{
        return false;
      }


    }


    //###################  End Product Controller Model Funcion #####################//
    

    

}