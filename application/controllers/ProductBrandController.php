<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class ProductBrandController extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    

    function productBrandListing()
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
            
            $count = $this->product_model->productBrandListingCount($searchText);

            $returns = $this->paginationCompress( "productBrandListing/", $count, 5 );
            
            $data['productBrandRecords'] = $this->product_model->productBrandListing($searchText, $returns["page"], $returns["segment"]);


            $this->global['pageTitle'] = 'V-kart : Product Brand Listing';
            
            $this->loadViews("products/product_brand/product_brand_list", $this->global, $data, NULL);
        }
    }


    function addNewProductBrand()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $data['productType']       = $this->product_model->productType();


            $this->global['pageTitle'] = 'Vkart : Add New Product Brand';

            $this->loadViews("products/product_brand/add_new_product_brand", $this->global, $data);
        }
    }



    function addNewProductBrandData()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('p_type_id','Product Type Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('pbname','Product Brand Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('pbqty','Product Quantity','trim|required|max_length[128]|xss_clean');
            

            if($this->form_validation->run() == FALSE)
            {
                $this->addNewProductBrand();
            }
            else
            {
                $p_type_id       = $this->input->post('p_type_id');
                $brand_name      = ucwords(strtolower($this->input->post('pbname')));
                $brand_quantity  = $this->input->post('pbqty');


                $checkBrandData  = $this->product_model->checkProductBrandName($brand_name);

                if ($checkBrandData) {
                     $this->session->set_flashdata('error', 'Product Brand Name already exists');
                }else{
                    $prodBrandInfo = array('p_type_id'=>$p_type_id, 'brand_name'=>$brand_name, 'quantity'=>$brand_quantity, 'created_at'=>date('Y-m-d H:i:s'));
                
                    $result = $this->product_model->addNewProductBrand($prodBrandInfo);
                    
                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'New Product Brand created successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Product Brand creation failed');
                    }
                }
               
               
                
                redirect('addNewProductBrand');
            }
        }
    }

    function editProductBrand($brandTypeId)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
           
            $data['productType']        = $this->product_model->productType();
            $data['result']             = $this->product_model->getBrandTypeById($brandTypeId);

            $this->global['pageTitle']  = 'V-Kart : Edit New Product Type';
            $this->loadViews("products/product_brand/edit_product_brand", $this->global, $data);
            
        }
    }


    




     function updateProductBrandData($brandId)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('p_type_id','Product Type Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('pbname','Product Brand Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('pbqty','Product Quantity','trim|required|max_length[128]|xss_clean');
            

            if($this->form_validation->run() == FALSE)
            {
                redirect('editProductBrand/'.$brandId);
            }
            else
            {
                $p_type_id       = $this->input->post('p_type_id');
                $brand_name      = ucwords(strtolower($this->input->post('pbname')));
                $brand_quantity  = $this->input->post('pbqty');

                $checkBrandData  = $this->product_model->checkProductBrandNameForUpdate($brand_name,$brandId);


                if ($checkBrandData) {
                    $this->session->set_flashdata('error', 'Product Brand update failed');
                }else{

                    $prodBrandInfo = array('p_type_id'=>$p_type_id, 'brand_name'=>$brand_name, 'quantity'=>$brand_quantity);
                
                    $result = $this->product_model->updateProductBrandData($prodBrandInfo,$brandId);
                    
                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Product Brand updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Product Brand creation failed');
                    }

                }
               
               
                
                redirect('editProductBrand/'.$brandId);
            }
        }
    }



    

}

?>