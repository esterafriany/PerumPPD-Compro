<?= $this->include('admin/template/_partials/js')?>

<script>
	$(document).ready(function() {
		var $btn_add_kpi = $("#btn-add-kpi");
		var $btn_edit_kpi = $("#btn-edit-kpi");
		
		$('#couponTable').DataTable({
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
				'url': "<?=site_url('admin/CouponController/getCoupons')?>",
				'data': function(data) {
					console.log(data);
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
					data: 'code'
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
						return '<a href="#" class="btn btn-primary btn-sm"><i class="ri-edit-line mr-2"></i>Edit</a> &nbsp;'+
						'<a href="#" class="btn btn-danger btn-sm"><i class="ri-delete-bin-line"></i>Delete</a>';
						
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
    $btn_add_kpi.on("click", function (e) {
		var table = $('#kpiTable').DataTable();
        $.ajax({
				url : "<?php echo base_url('admin/KPIController/onAddKPI')?>",
				type: "POST",
				data: $('#form-add-kpi').serialize(),
				dataType: "JSON",

				success: function(response)
				{
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
		

	// // edit kpi
    $btn_edit_kpi.on("click", function (e) {
		var table = $('#kpiTable').DataTable();
        $.ajax({
				url : "<?=site_url('KPIController/onEditKPI')?>/" + document.getElementById('id').value,
				type: "POST",
				data: $('#form-edit-kpi').serialize(),
				dataType: "JSON",
				
				success: function(response)
				{
					//if success close modal and reload ajax table
					$('body').removeClass('modal-open');
					$('.modal-backdrop.show').css('opacity','0');
					$('.modal-backdrop').css('z-index','-1');
					$('#modal-add-kpi').modal('hide');
				
					swal({
					  title: "Sukses!",
					  text: "Data sukses diubah!",
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
					swal("Error","Gagal mengubah data. Pastikan semua field terisi","error");
				}
			});
		});
	});
	
	function edit_kpi(id){
	
	  //Ajax Load data from ajax
	  $.ajax({
		url : "<?=site_url('KPIController/onDetailKPI')?>/" + id,
		type: "GET",
		dataType: "JSON",
		success: function(data)
		{
			$('[name="id"]').val(data.id);
			$('[name="name"]').val(data.name);
			$('[name="description"]').val(data.description);
			$('[name="is_active"]').val(data.is_active);
			$('[name="level"]').val(data.level);
			$('[name="year"]').val(data.year);
 
			$('#modal-edit-kpi').modal('show');
			$('.modal-title').text('Edit KPI'); 
		},
		error: function (jqXHR, textStatus, errorThrown)
		{
			swal('Data Risk Category tidak ditemukan.');
		}
	  });
	}
	
	function delete_kpi(id){
		var table = $('#kpiTable').DataTable();
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
				url : "<?=site_url('KPIController/onDeleteKpi')?>/" + id,
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
