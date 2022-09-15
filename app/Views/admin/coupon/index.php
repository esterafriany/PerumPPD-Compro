<!-- Page Content  -->
<div id="content-page" class="content-page">
	<div class="container-fluid">
	   <div class="row">
		  <div class="col-lg-12">
			 <div class="iq-card">
				<div class="iq-card-header d-flex justify-content-between">
				   <div class="iq-header-title">
					  <h4 class="card-title">Order Summary</h4>
				   </div>
				   <div class="iq-card-header-toolbar d-flex align-items-center">
					  <div class="dropdown">
						 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
						 <i class="ri-more-2-fill"></i>
						 </span>
						 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#"><i class="ri-add-line mr-2"></i>Add</a>
							<a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download to Excel</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="iq-card-body">
				   <div class="table-responsive">
					  <table id="couponTable" class="table mb-0 table-borderless">
						 <thead>
							<tr>
							   <th scope="col">Coupon Code</th>
							   <th scope="col">Status</th>
							   <th scope="col">Action</th>

							</tr>
						 </thead>
						 
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
 
 <?= $this->include("js/admin/coupons")?>