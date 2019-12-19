	<?php 
	class adminpanel_controller extends CI_Controller {
		function index(){
			$this->load->model('mymodel');
			$select = $this->mymodel->data();
			$this->load->view('adminpanel/index' , ['info' => $select]);
		}
		function insert(){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$this->mymodel->insert($input);
			$this->load->view('adminpanel/productinsert');
		}
		function deletedata($id){
			$this->load->model('mymodel');
			$okey = $this->mymodel->delete($id);
			if($okey == true){
				redirect('adminpanel_controller/index');
			}
		}
		function showupdate($id){
			$this->load->model('mymodel');
			$select = $this->mymodel->showupdate($id);
			$showcate = $this->mymodel->showcate();
			$showbrand = $this->mymodel->showbrand();
			$this->load->view('adminpanel/productupdate' , ['info'=>$select , 'pro_cate' => $showcate , 'brand' => $showbrand]);
		}
		function update($id){
			$inputs = $this->input->post();
			$this->load->model('mymodel');
			$check = $this->mymodel->updatedata($id , $inputs);
			if($check == true){
				redirect('adminpanel_controller/index');
			}
		}
		function removeproduct(){
			$ids = $this->input->post('checkboxes');
			$this->load->model('mymodel');
			$deleteload = $this->mymodel->removeproducts($ids);
			if($deleteload){
				redirect('adminpanel_controller/index');
			}
		}
		function viewcategory(){
			$this->load->model('mymodel');
			$this->mymodel->viewcategory();
			$showcate = $this->mymodel->showcate();
			$this->load->view('adminpanel/categories' , ['info' => $showcate]);
		}
		function showcate($id){
			$this->load->model('mymodel');
			$showcate = $this->mymodel->showcategory($id);
			$this->load->view('adminpanel/cateupdate.php' , ['info' => $showcate]);
		}
		function updatecate($id){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$check = $this->mymodel->updatecate($id , $input);
			if($check){
				redirect('adminpanel_controller/viewcategory');
			}
		}
		function addcate(){
			$this->load->view('adminpanel/addcate');
		}
		function insertcate(){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$true = $this->mymodel->insertcate($input);
			if($true){
				redirect('adminpanel_controller/viewcategory');
			}
		}
		function viewbrands(){
			$this->load->model('mymodel');
			$this->mymodel->viewbrands();
			$showbrands = $this->mymodel->showbrand();
			$this->load->view('adminpanel/brands' , ['info' => $showbrands]);
		}
		function showbrands($id){
			$this->load->model('mymodel');
			$showbrands = $this->mymodel->showbrands($id);
			$this->load->view('adminpanel/brandupdate' , ['info' => $showbrands]);
		}
		function updatebrands($id){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$check = $this->mymodel->updatebrands($id , $input);
			if($check){
				redirect('adminpanel_controller/viewbrands');
			}
		}
		function addbrand(){
		$this->load->view('adminpanel/addbrand');	
		}
		function insertbrand(){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$true = $this->mymodel->insertbrand($input);
			if($true){
				redirect('adminpanel_controller/viewbrands');
			}
		}
		function removebrand(){
			$ids = $this->input->post('checkboxes');
			$this->load->model('mymodel');
			$deleteload = $this->mymodel->removebrand($id);
			if($deleteload){
				redirect('adminpanel_controller/viewbrands');
			}
		}
		function customer(){
			$this->load->model('mymodel');
			$showcustomer = $this->mymodel->customer();
			$this->load->view('adminpanel/customer' , ['info' => $showcustomer]);
		}
		function cusinfo($id){
			$this->load->model('mymodel');
			$showinfo = $this->mymodel->custinfo($id);
			$orderdetail = $this->mymodel->vieworderdetail($id);
			$this->load->view('adminpanel/customerinfo' , ['info' => $showinfo , 'order_detail'=>$orderdetail]);
		}
		function cusupdate($id){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$check = $this->mymodel->cusupdate($id , $input);
			if($check){
				redirect("adminpanel_controller/cusinfo/$id");
			}
		}
		function discount($id){
			$input = $this->input->post();
			$this->load->model('mymodel');
			$data = $this->mymodel->discount($id , $input);
		}
		function logout(){
			$this->load->view('adminpanel/login');
		}
		function login(){
			$input = $this->input->post();
			$this->load->model('mymodel');
			 $check = $this->mymodel->login($input);
			 if($check){
			 	redirect('adminpanel_controller/index');
			 }else{
			 	redirect('adminpanel_controller/logout');
			 }

		}
}
?>
