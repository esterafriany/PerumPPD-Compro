<?= $this->include('admin/template/_partials/js')?>
<script src="http://cdn.ckeditor.com/4.3.4/standard/ckeditor.js"></script>
<script>
	$(document).ready(function() {
		var $btn_add_faq = $("#btn-add-faq");
		var $btn_edit_faq = $("#btn-edit-faq");
		
		$('#pressReleaseTable').DataTable({
			'processing': true,
			'serverSide': true,
			'serverMethod': 'post',
			lengthMenu: [5, 10, 20, 50, 100],
			"iDisplayLength": 5,
			language: {
				emptyTable: "Belum ada Coupon.",
				zeroRecords: "Tidak ada Data Coupon ditemukan.",
			},
			'ajax': {
				'url': "<?=site_url('admin/FaqController/getFaqs')?>",
				'data': function(data) {
					
					// CSRF Hash
					var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
					var csrfHash = $('.txt_csrfname').val(); // CSRF hash

					return {
						data: data,
						[csrfName]: csrfHash // CSRF Token
					};
				},
				dataSrc: function(data) {

					// Update token hash
					$('.txt_csrfname').val(data.token);

					// Datatable data
					return data.aaData;
				}
			},
			'columns': [
				{
					data: 'question'
				},
				{
					data: 'answer'
				},
				{
					data:  'is_active',
					render: function (data, type, item) {
						if (item.is_active == "0") {
							return '<div class="badge badge-pill badge-danger">Tidak Aktif</div>';
						} else if (item.is_active == "1") {
							return '<div class="badge badge-pill badge-success">Aktif</div>';
						} else {
							return '<div class="badge badge-pill badge-info">-</div>';
						}
					},					
				},
				{
					data: 'is_active',
					render: function (data, type, item) {
						return '<button onclick="edit_faq('+item.id+')" class="btn btn-primary btn-sm"><i class="ri-edit-line mr-2"></i>Edit</button> &nbsp;'+
						'<button onclick="delete_faq('+item.id+')" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line"></i>Delete</button>';
						
					},
				},
			],
			columnDefs: [
                {
                    render: function (data, type, full, meta) {
                        return "<div class='text-wrap width-200'>" + data + "</div>";
                    },
                    targets: [1]
                }
            ]
		});
	
		// add kpi
		$btn_add_faq.on("click", function (e) {
			var table = $('#faqTable').DataTable();
			for (instance in CKEDITOR.instances) {
				CKEDITOR.instances[instance].updateElement();
			}
			$.ajax({
				url : "<?php echo base_url('Admin/FaqController/onAddFaq')?>",
				type: "POST",
				data: $('#form-add-faq').serialize(),
				dataType: "JSON",

				success: function(response){
					console.log(response);
					//if success close modal and reload ajax table
					//$('body').removeClass('modal-open');
					$('.modal-backdrop.show').css('opacity','0');
					$('.modal-backdrop').css('z-index','-1');
					$('#modal-add-group').modal("hide");
				   
					swal({
					  title: "Sukses!",
					  text: "Data sukses ditambah/diubah!",
					  type: "success",
					  confirmButtonText: "OK"
					},
					function(isConfirm){
					  if (isConfirm) {
						table.ajax.reload(null, false);
					  }
					});
				  
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Error","Gagal menambah data. Pastikan semua field terisi.","error");
				}
			});
		});

		$btn_edit_faq.on("click", function (e) {
			var table = $('#faqTable').DataTable();
			for (instance in CKEDITOR.instances) {
				CKEDITOR.instances[instance].updateElement();
			}
			$.ajax({
				url : "<?php echo base_url('Admin/FaqController/onEditFaq')?>",
				type: "POST",
				data: $('#form-add-faq').serialize(),
				dataType: "JSON",

				success: function(response){
					console.log(response);
					//if success close modal and reload ajax table
					//$('body').removeClass('modal-open');
					$('.modal-backdrop.show').css('opacity','0');
					$('.modal-backdrop').css('z-index','-1');
					$('#modal-add-group').modal("hide");
				   
					swal({
					  title: "Sukses!",
					  text: "Data sukses ditambah/diubah!",
					  type: "success",
					  confirmButtonText: "OK"
					},
					function(isConfirm){
					  if (isConfirm) {
						table.ajax.reload(null, false);
					  }
					});
				  
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Error","Gagal menambah data. Pastikan semua field terisi.","error");
				}
			});
		});
	
	});
	
	function add_press_release(){
		$('[name="id"]').val("");
		$('[name="is_active"]').val("");
		$('[name="question"]').val("");
		CKEDITOR.instances.answer.setData("");
		$("#btn-edit-faq").hide();
		$("#btn-add-faq").show();

		$('#press_release_form').modal('show');
		$('.modal-title').text('Tambah Press Release');
    }

	function edit_faq(id){
	  //Ajax Load data from ajax
	  $.ajax({
		url : "<?=site_url('Admin/FAQController/onDetailFAQ')?>/" + id,
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{
			console.log(data);
			$('[name="id"]').val(data.id);
			$('[name="question"]').val(data.question);
			//$('[name="answer"]').val(data.answer);
			CKEDITOR.instances.answer.setData(data.answer);
			$('[name="is_active"]').val(data.is_active);
			$("#btn-add-faq").hide();
			$("#btn-edit-faq").show();
			
			$('#faq_form').modal('show');
			$('.modal-title').text('Edit FAQ'); 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			swal('Data FAQ tidak ditemukan.');
		}
	  });
	}
	
	function delete_faq(id){
		var table = $('#faqTable').DataTable();
		swal({
			title: "Apakah anda yakin ingin hapus?",
			text: "Data akan dihapus tidak dapat di-recover!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes",
			closeOnConfirm: false
		},
		function () {
			// ajax delete data from database
			  $.ajax({
				url : "<?=site_url('Admin/FAQController/onDeleteFAQ')?>/" + id,
				type: "POST",
				dataType: "JSON",
				success: function(data)
				{
					swal({
					  title: "Terhapus!",
					  text: "Data berhasil dihapus!",
					  type: "success",
					  confirmButtonText: "OK"
					},
					function(isConfirm){
					  if (isConfirm) {
						table.ajax.reload(null, false);
					  }
					});
				   
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					swal("Oops..","Data gagal dihapus.","error");
				}
			});
			
		});
		
	}
</script>
