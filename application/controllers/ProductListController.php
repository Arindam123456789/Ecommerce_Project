<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class ProductListController extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
        $this->load->model('product_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'V-Kart : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */


    public function editProductList($productid)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
           
            $data['productType']        = $this->product_model->getproduct($productid);
           // $data['result']             = $this->product_model->getProductTypeById($productid);

            $this->global['pageTitle']  = 'V-Kart : Edit New Product Type';
            $this->loadViews("products/product_list/edit_product_list", $this->global, $data);
            
        }
    }


    function UpdateProductData()
    {
       if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $prodid=$this->input->post('productid');
           
            $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|JPG';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10241;
                $config['max_height']           = 7628;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('p_image')) {
                    $data =  $this->upload->data();
                    $image_name =  $data['file_name'];
                }else{
                    $image_name = "";

                }


          $update_prod_data=array(

                                   'p_name'=>$this->input->post('product_name'),
                                   'price'=>$this->input->post('product_price'),
                                   'p_descrption'=>$this->input->post('product_description'),
                                   'image'=>$image_name
                                 );

          


           $result = $this->product_model->update_product_data($update_prod_data,$prodid);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Product data updated successfully');
                    redirect('productListing');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Product data updation failed');
                    redirect('productListing');
                }
        } 
    }

    function productListing()
    {

        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->product_model->productListingCount($searchText);

            $returns = $this->paginationCompress( "productListing/", $count, 5 );
            
            $data['productRecords'] = $this->product_model->productListing($searchText, $returns["page"], $returns["segment"]);

            /*echo "<pre>";
            print_r($data['productRecords']);
            die;*/
            
            $this->global['pageTitle'] = 'V-Kart : Product Type Listing';
            
            $this->loadViews("products/product_list/product_list", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewProduct()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            

            $data['productType']       = $this->product_model->productType();

            $data['productBrand']      = $this->product_model->productBrand();

           // $data['productName']      = $this->product_model->productName();

            $this->global['pageTitle'] = 'V-KART : Add New Product';

            $this->loadViews("products/product_list/add_new_product", $this->global, $data);
        }
    }






  
    /**
     * This function is used to add new user to the system
     */
    function addNewProductData()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('type_id','Product Type Name','trim|required');

            $this->form_validation->set_rules('brand_id','Product Brand Name','trim|required');

            $this->form_validation->set_rules('product_name','Product Name','trim|required');

            $this->form_validation->set_rules('product_price','Product Price','trim|required');


            $this->form_validation->set_rules('product_description','Product Description','trim|required');

            //$this->form_validation->set_rules('p_image','Product Image','trim|required');


            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNewProductData();
            }
            else
            {
                $type_id             = $this->input->post('type_id');
                $brand_id            = $this->input->post('brand_id');  
                $product_name        = $this->input->post('product_name');
                $product_price       = $this->input->post('product_price'); 
                $product_description = $this->input->post('product_description');

               

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|JPG';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10241;
                $config['max_height']           = 7628;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('p_image')) {
                    $data =  $this->upload->data();
                    $image_name =  $data['file_name'];
                }else{
                    $image_name = "";

                }

                
                
                

               
                $productInfo = array(
                                        'p_type_id'      => $type_id, 
                                        'p_brand_id'     => $brand_id,
                                        'p_name'         => $product_name,
                                        'p_descrption'   => $product_description,
                                        'price'          => $product_price,
                                        'p_slug'         => $type_id.'_'.$brand_id.'_'.$product_price,
                                        'image'          => $image_name,
                                        'created_at'     => date('Y-m-d H:i:s')
                                    );
                
                $result = $this->product_model->addNewProduct($productInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Product created successfully');
                    redirect('productListing');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Product creation failed');
                    redirect('addNewProductData');
                }
                
                
            }
        }
    }

    public function products(){

        $data['image'] = $this->load->product_model->productFetch();
    }


     public function deleteProduct($productId){

        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $deleteProduct = $this->product_model->deleteProduct($productId);

            if ($deleteProduct) {
                $this->session->set_flashdata('success', 'Product successfully deleted');
                
            }else{
                 $this->session->set_flashdata('error', 'Product not deleted');
            }

            redirect('productListing');


        }

     }

}

?>