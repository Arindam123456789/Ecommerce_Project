<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class HomeController extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('product_model');
        $this->load->model('Home_Model');
        //$this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        //echo "string"; die();
        $this->global['pageTitle'] = 'V-Mart : Homepage';

        $data['productList']    = $this->Home_Model->getProductDetails();

        $data['categoryList']   = $this->Home_Model->getCategoryDetails();

        foreach ($data['categoryList'] as $key => $value) {
           $brandList = $this->Home_Model->getBrandList($value['id']);

           $data['categoryList'][$key]['brand_list'] = $brandList;
        }

        $data['brandList']      = $this->Home_Model->getBrandDetails();

        $data['productName']   = $this->Home_Model->getProduct();
        
        
       
        $this->load->view("index", $data );
    }

     public function explore_product_details()
    {
      
      $this->global['pageTitle'] = 'V-Kart : Homepage';

        $data['productList']    = $this->Home_Model->getProductDetails();

        $data['categoryList']   = $this->Home_Model->getCategoryDetails();

        foreach ($data['categoryList'] as $key => $value) {
           $brandList = $this->Home_Model->getBrandList($value['id']);

           $data['categoryList'][$key]['brand_list'] = $brandList;
        }

        $data['brandList']      = $this->Home_Model->getBrandDetails();

        $data['productName']   = $this->Home_Model->getProduct();
        


      $this->load->view('shop',$data);
    }


    public function BuyingGate(){

      $data['price']    = $this->Home_Model->BuyingGatDetails();


    }

   public function buynow($a)
   {
     $email = $this->session->userdata('email');
     $this->session->set_userdata('p_id',$a);
     $prodid=$this->session->userdata('p_id');
     $this->product_model->update_order($a); 

       $cartdata['itemquan']=$this->product_model->noofitems($a);
       // echo "<pre>";print_r($cartdata);exit;
       $cartdata['cartdetails']=$this->product_model->cartdtl();
      
      $this->load->view('itemdetails',$cartdata);
     
    }


   public function add_to_cart()
   {

    // $email = $this->session->userdata('email');
    $totalprice=$this->input->post('price');
    $quantity=$this->input->POST('quant');
    $itemstock=$this->input->POST('itemstock');
    $itemst=$itemstock-$quantity;
    $brand=$this->input->post('brandname');

    $this->product_model->addtocart($totalprice,$quantity);
    $addcart['cartvalue']=$this->product_model->cartdtl2();
    $this->product_model->update_quantity($itemstock,$brand);


   
    if(!empty($addcart['cartvalue']))
    {
    $this->load->view('user_cart',$addcart);
    }
    else
    {
      ?>

      <script type="text/javascript">
        alert(" Your Cart Is Empty! Go Back!");
         var url="<?php echo  base_url().'HomeController/index'; ?>";
         window.location = url;
      </script>

      <?php
    }
   }

  
 


public function checkoutdtl()
{
  $this->form_validation->set_rules('email','Email','required');
  $this->form_validation->set_rules('title','Title','required');
  $this->form_validation->set_rules('fstname','First Name','required');
  $this->form_validation->set_rules('lstname','Last Name','required');
  $this->form_validation->set_rules('add1','Address','required');
  $this->form_validation->set_rules('country','country','required');
  $this->form_validation->set_rules('state','state','required');
  $this->form_validation->set_rules('password','Password','required');
  $this->form_validation->set_rules('contact','Contact','required');
          if($this->form_validation->run() == FALSE)
          {
             $this->load->view('checkout');
          }
          else
          {
            // $email=$this->session->userdata('email');
            $checkoutdetails=array(
                                    "email"=>$this->input->post('email'),
                                    "title"=>$this->input->post('title'),
                                    "first_name"=>$this->input->post('fstname'),
                                    "last_name"=>$this->input->post('lstname'),
                                    "address"=>$this->input->post('add1'),
                                    "country"=>$this->input->post('country'),
                                    "state"=>$this->input->post('state'),
                                    "password"=>$this->input->post('password'),
                                    "contact"=>$this->input->post('contact'),
                                    "checkouttime"=>$this->input->post('checkouttime'),
                                    
                                   );
           // $this->load->model('user_model');

            $response=$this->user_model->insert_checkout_data($checkoutdetails);


              if($response==true)
              {
                ?>

                <script>
                      confirm("order has been successfully placed");
                       var url="<?php echo  base_url().'HomeController/index'; ?>";
                        window.location = url;
                </script>

              <?php
                 
                  }

               else
                  {
                    ?>
                      <script>
                      alert('failed to checkout');
                      </script>
                      <?php
                      redirect('./HomeController/index');
                  }



          }

}




public function site_user_login()
    {

        
        $this->load->view('user_login');
    }


   function registration()
   {
       $this->load->view('User_registration');
   }


  public function user_registration(){



    $this->form_validation->set_rules('uname', 'NAME','required');
    $this->form_validation->set_rules('umail', 'EMAIL-ID','required|valid_email');
    $this->form_validation->set_rules('upass', 'PASSWORD','required|min_length[5]');
    $this->form_validation->set_rules('uadd',  'ADDRESS','required|min_length[10]');
    $this->form_validation->set_rules('uphone','MOBILE NUMBER','required|exact_length[10]|numeric');
    $this->form_validation->set_rules('upin',  'Pincode NUMBER','required|numeric');
    $this->form_validation->set_rules('uloc',   'PRESENT LOCATION','required');
    $this->form_validation->set_rules('ugen','GENDER','required');

    $pass=sha1($this->input->post('upass'));

       

         
         if ($this->form_validation->run() == FALSE)
          {
             $this->load->view('user_registration');
          }
          else
          {
            $insertArray = array(

                      'name'=>$this->input->post('uname'),
                      'email'=>$this->input->post('umail'),
                      'password'=>$this->input->post('upass'),
                      'address'=>$this->input->post('uadd'),
                      'mobile'=>$this->input->post('uphone'),
                      'pincode'=>$this->input->post('upin'),
                      'location'=>$this->input->post('uloc'),
                      'gender'=>$this->input->post('ugen'),

                      );

            $this->load->model('user_model');

            $response=$this->user_model->insertuser($insertArray);

              if($response==true)
                  {
              ?>

                <script>
                      alert('Successfully registered');
                </script>

              <?php
                      $this->load->view('user_login');
                  }

               else
                  {
                    ?>
                      <script>
                      alert('failed to register');
                      </script>
                      <?php
                      redirect('./User_Controller/registration');
                  }





          }

  }

  public function user_login()
  {


      $this->form_validation->set_rules('umail','Email','required');
      $this->form_validation->set_rules('upass','Password','required|min_length[8]');

      if ($this->form_validation->run()== FALSE)
      {
        $this->load->view('user_login');

      }
      else
      {

        $useremail=$this->input->post('umail');
        $data = array(

                      "email" => $this->input->post('umail'),
                      "password" => $this->input->post('upass')


                    );
        
        $result['check'] = $this->user_model->user_val($data);




        if (!empty($result['check'])) 
        {
          $session_data= array(
                                   "email" => $useremail
                               );

          $this->session->set_userdata($session_data);
          redirect(base_url().'HomeController/enter');
         
        }
        else
        {
          $this->session->set_flashdata('error','Invalid Username or password');
           redirect(base_url().'HomeController/user_login');
         
        }
      }


    }

   public function enter()
   {
     if($this->session->userdata('email')!= '')
     {
        echo '&nbsp;<h4>Welcome  - '.$this->session->userdata('email') .'</h4>';

        $this->global['pageTitle'] = 'V-Kart : Homepage';

        $data['productList']    = $this->Home_Model->getProductDetails();

        $data['categoryList']   = $this->Home_Model->getCategoryDetails();

        foreach ($data['categoryList'] as $key => $value) {
           $brandList = $this->Home_Model->getBrandList($value['id']);

           $data['categoryList'][$key]['brand_list'] = $brandList;
        }

        $data['brandList']      = $this->Home_Model->getBrandDetails();

        $data['productName']   = $this->Home_Model->getProduct();
        
       
        $this->load->view("index", $data );
       
     }
     else
    {
         
          redirect(base_url().'HomeController/user_login');
     }
   }


 public function logout()
 {
  $this->session->unset_userdata('email');
  redirect(site_url());
 }


public function cart_op()
{
  $this->load->view('user_cart');
}

public function checkout()
{
  $this->load->view('checkout');
}

public function contact_Us()
{
  $this->load->view('contact_us');
}

public function about_Us()
{
  $this->load->view('about_Us');
}








    
}

?>