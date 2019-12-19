<?php 
	class sebian_controller extends CI_Controller {
		// function __construct() {
		//     parent::__construct();
		//     $this->load->model('example');
		// }
		function index(){
			$this->load->model('mymodel');
			$select = $this->mymodel->selectdata();
			$this->load->view('sebian/index' , ['info'=>$select]);
		}
		function singleproduct($id , $category){
			$this->load->model('mymodel');
			$select = $this->mymodel->singleproduct($id);
			$select2 = $this->mymodel->selectcategory($category);
			$this->load->view('sebian/single-product' , ['info'=>$select , 'categories'=> $select2]);
		}
		function viewcart(){
			$this->load->view('sebian/cart');
		}
		function cartdata($id){
			$this->load->model('mymodel');
			$prodata = $this->mymodel->cartproducts($id);
			$name = $prodata[0]->product_name;
			$price = $prodata[0]->product_price;
			$img = $prodata[0]->product_lg_img;
			$data = array(
		        'id'      => $id,
		        'qty'     => 1,
		        'price'   => $price,
		        'name'    => $name,
		        'image'    => $img
			);

			$this->cart->insert($data);
			redirect('sebian_controller/viewcart');
		}
		function changeqty($id , $qty){
			$data = array(
			        'rowid' => $id,
			        'qty'   => $qty
			);
			if($this->cart->update($data)){
				redirect('sebian_controller/viewcart');
			}
		}
		function wishlistview(){
			$this->load->model('mymodel');
			$select = $this->mymodel->wishlistview();
			$this->load->view('sebian/wishlist' , ['info' => $select]);
		}
		function checkout(){
			$this->load->view('sebian/checkout');
		}
		function checkpro(){
			$input = $this->input->post();
			$track_no = $this->input->post('track_NO');
			$this->load->model('mymodel');
			$comp = $this->mymodel->checkpro($input , $track_no);
			if($comp == true){
				redirect('sebian_controller/trackorder');
			}
		}
		function trackorder(){
			$this->load->view('sebian/trackorder');
		}
		function trackorderview(){
			$input = $this->input->post('track');
			$this->load->model('mymodel');
			$check = $this->mymodel->trackorderview($input);
			$this->load->view('sebian/trackorder' , ['info'=>$check]);
		}
		function content_page(){
			$this->load->model('mymodel');
			$contentdata = $this->mymodel->contentpage();
			$this->load->view('sebian/content' , ['contentinfo' => $contentdata]	);
		}
	}
 ?>