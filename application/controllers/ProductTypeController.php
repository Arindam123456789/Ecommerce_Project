<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (ProductController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class ProductTypeController extends BaseController
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
        $this->global['pageTitle'] = 'V-kart : Dashboard';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function productTypeListing()
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
            
            $count = $this->product_model->productTypeListingCount($searchText);

			$returns = $this->paginationCompress( "productTypeListing/", $count, 5 );
            
            $data['productTypeRecords'] = $this->product_model->productTypeListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'CodeInsect : Product Type Listing';
            
            $this->loadViews("products/product_type/product_type_list", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewProductType()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            
            $this->global['pageTitle'] = 'V-Kart : Add New Product Type';

            $this->loadViews("products/product_type/addNewProductType", $this->global, NULL);
        }
    }

  
    /**
     * This function is used to add new user to the system
     */
    function addNewProductTypeData()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('ptname','Product Type Name','trim|required|max_length[128]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNewProductType();
            }
            else
            {
                $prodTypeName = ucwords(strtolower($this->input->post('ptname')));

                $checkProductType = $this->product_model->checkProductType($prodTypeName);

                if ($checkProductType) {
                    $this->session->set_flashdata('error', 'Product type name already exist');
                }else{

                    $prodTypeInfo = array('type_name'=>$prodTypeName, 'created_at'=>date('Y-m-d H:i:s'));
                
                    $result = $this->product_model->addNewProductType($prodTypeInfo);
                    
                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'New Product Type created successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Product type creation failed');
                    }

                }
               
               
                
                redirect('addNewProductType');
            }
        }
    }

     function editProductType($prodTypeId)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
           
             
            $data['result']             = $this->product_model->getProductTypeById($prodTypeId);

            $this->global['pageTitle']  = 'V-Kart : Edit New Product Type';

            $this->loadViews("products/product_type/edit_product_type", $this->global, $data);
            
        }
    }


    function editProductTypeData($prodTypeId)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('ptname','Product Type Name','trim|required|max_length[128]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
               redirect('editProductType/'.$prodTypeId);
            }
            else
            {
                $prodTypeName = ucwords(strtolower($this->input->post('ptname')));

                $checkProductType = $this->product_model->checkProductTypeForEdit($prodTypeName,$prodTypeId);

                if ($checkProductType) {
                    $this->session->set_flashdata('error', 'Product type name already exist');
                }else{

                    $prodTypeInfo = array('type_name'=>$prodTypeName);
                    
                    $result = $this->product_model->editProductTypeData($prodTypeId,$prodTypeInfo);
                    
                    if($result > 0)
                    {
                        $this->session->set_flashdata('success', 'Product Type updated successfully');
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Product type updated failed');
                    }
                }
                
                redirect('editProductType/'.$prodTypeId);
            }
        }
    }

    
}

?>