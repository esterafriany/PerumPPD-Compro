<!-- Page Content  -->
<div id="content-page" class="content-page">
	<div class="container-fluid">
	   <div class="row">
		  <div class="col-lg-12">
			 <div class="iq-card">
				<div class="iq-card-header d-flex justify-content-between">
				   <div class="iq-header-title">
					  <h4 class="card-title"><?=$title?></h4>
				   </div>
				   <div class="iq-card-header-toolbar d-flex align-items-center">
					  <div class="dropdown">
						 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
						 <i class="ri-more-2-fill"></i>
						 </span>
						 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
							<button class="dropdown-item" data-toggle="modal" onclick="add_press_release()"><i class="ri-add-line mr-2"></i>Add</button>
							<a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download to Excel</a>
						 	<!-- Button trigger modal -->

						</div>
					  </div>
				   </div>
				</div>
				<div class="iq-card-body">
				   <div class="table-responsive">
					  <table id="pressReleaseTable" class="table mb-0 table-borderless">
						 <thead>
							<tr>
							   <th scope="col">Title</th>
							   <th scope="col">Content</th>
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
 
 <div class="modal fade" id="press_release_form">
	<div class="modal-dialog modal-lg">
		<?= $this->include("admin/faq/create")?>
	</div>
</div>

<script>
    CKEDITOR.replace('answer');
    // $(document).ready(function(){
    //     $.fn.modal.Constructor.prototype.enforceFocus = function () {
    //         modal_this = this
    //         $(document).on('focusin.modal', function (e) {
    //             if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
    //             // add whatever conditions you need here:
    //             &&
    //             !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
    //                 modal_this.$element.focus()
    //             }
    //         })
    //     };

    // });
</script>
  