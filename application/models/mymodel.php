<?php 
	class mymodel extends CI_model {
		function selectdata(){
			$query = $this->db->get('register');
			return $query->result();
		}
		function singleproduct($id){
			$query = $this->db->get_where('register', array('product_id' => $id));
			return $query->result();
		}
		function selectcategory($category){
			$select = $this->db->get_where('register' , array('product_cate' => $category));
			return $select->result();

		}
		function cartproducts($id){
			$query = $this->db->get_where('register' , ['product_id'=>$id]);
			return $query->result();
		}
		function wishlistview(){
			$select = $this->db->get('wishlist');
			return $select->result();
		}
		function data(){
			$que = $this->db->get('register');
			return $que->result();	
		}
		function delete($id){
			 $data = $this->db->delete('register', array('product_id' => $id));
			return true;
		}
		function showupdate($id){
			$query = $this->db->get_where('register' , ['product_id'=>$id]);
			return $query->result();
		}
		function showcate(){
			$query = $this->db->get('category');
			return $query->result();
		}
		function showbrand(){
			$query = $this->db->get('brands');
			return $query->result();
		}
		function updatedata($id , $input){
		$this->db->where('product_id', $id);
		$this->db->update('register', $input);
		return true;
		}
		function insert($input){
			$this->db->insert('register' , $input);
			return true;
		}
		function removeproducts($ids){
			$this->db->where_in('product_id', $ids);
			$this->db->delete('register');
			return true;
		}
		function viewcategory(){
			$query = $this->db->get('category');
			return $query->result();
		}
		function showcategory($id){
			$query = $this->db->get_where('category' , ['cate_id'=>$id]);
			return $query->result();
		}
		function updatecate($id , $input){
			$this->db->update('category', $input, "cate_id = $id");
			return true;
		}
		function insertcate($input){
			$this->db->insert('category' , $input);
			return true;
			
		}
		function viewbrands(){
			$query = $this->db->get('brands');
			return $query->result();
		}
		function showbrands($id){
			$query = $this->db->get_where('brands' , ['brand_id'=> $id]);
			return $query->result();
		}
		function updatebrands($id , $input){
			$this->db->update('brands', $input, "brand_id = $id");
			return true;
		}
		function insertbrand($input){
			$this->db->insert('brands' , $input);
			return true;
		}
		function removebrand($id){
			$this->db->where_in('brand_id', $id);
			$this->db->delete('brands');
			return true;
		}
		function customer(){
			$query = $this->db->get('customers_information');
			return $query->result();
		}
		function custinfo($id){
			$query = $this->db->get_where('customers_information' , ['customer_id'=>$id]);
			return $query->result();
		}
		function cusupdate($id , $input){
			$this->db->update('customers_information', $input, "customer_id = $id");
			return true;		
		}
		function vieworderdetail($id){
			$query = $this->db->get_where('order_information' , ['customer_id'=>$id]);
			return $query->result();
		}
		function checkpro($input , $trackno){
			$this->db->insert('customers_information' , $input);
			$cust_data = $this->db->get_where('customers_information', array('track_NO' => $trackno))->result();

			$cust_id = $cust_data[0]->customer_id;


			foreach($this->cart->contents() as $cartdata){
				$pro_id = $cartdata['id'];
				$pro_name = $cartdata['name'];
				$pro_price = $cartdata['price'];
				$img = $cartdata['image'];
				$pro_qty = $cartdata['qty'];
				$item_total = $cartdata['subtotal'];

				$data = array(
			        'customer_id' => $cust_id,
			        'product_id' => $pro_id,
			        'product_name' => $pro_name,
			        'product_price' => $pro_price,
			        'Image' => $img,
			        'item_quantity' => $pro_qty,
			        'per_item_total' => $item_total,
			        'track_NO' => $trackno
				);

				$this->db->insert('order_information', $data);
				return true;
			}
		}
		function trackorderview($input){
			$query = $this->db->get_where('order_information' , ['track_NO'=>$input]);
			return $query->result();
		}
		function discount($id , $input){
			$this->db->update('customers_information', $input, array('customer_id' => $id));
			echo "Product Confirm";
			echo anchor('adminpanel_controller/customer' , 'product_confirm');
		}	
		function login($input){
			$query = $this->db->get_Where('admins', $input )->result();
			if($query){
				return true;
			}else {
				return false;
			}

		}
		function contentpage(){
			$query = $this->db->get_Where('content_page');
			return $query->result();

		}
	}
 ?>	