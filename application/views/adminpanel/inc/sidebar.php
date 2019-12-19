
	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <ul class="side-menu-list">
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon fa fa-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
	            <ul>
	                <li><a href="index.html"><span class="lbl">Default</span><span class="label label-custom label-pill label-danger">new</span></a></li>
	            </ul>
	        </li>
	         <li class="grey with-sub">
	            <span>
	                <i class="font-icon fa fa-link"></i>
	                <span class="lbl">Category</span>
	            </span>
	            <ul>
	                <li><?= anchor('adminpanel_controller/viewcategory' , 'Category') ?></li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon fa fa-grav"></i>
	                <span class="lbl">Brands</span>
	            </span>
	            <ul>
	                <li><?= anchor('adminpanel_controller/viewbrands' , 'Brands') ?></li>
	            </ul>
	        </li>
	        <li class="grey with-sub">
	            <span>
	                <i class="font-icon fa fa-user-md"></i>
	                <span class="lbl">Customers</span>
	            </span>
	            <ul>
	                <li><?= anchor('adminpanel_controller/customer' , 'Customer Data') ?></li>
	            </ul>
	        </li>
	        	
	    
	</nav><!--.side-menu-->
