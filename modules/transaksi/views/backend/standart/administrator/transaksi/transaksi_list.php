<script type="text/javascript">
function domo(){
 
   $('*').bind('keydown', 'Ctrl+a', function() {
       window.location.href = BASE_URL + '/administrator/Transaksi/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<section class="content-header">
   <h1>
      <?= cclang('transaksi') ?><small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><?= cclang('transaksi') ?></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <div class="box box-widget widget-user-2">
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php is_allowed('transaksi_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', [cclang('transaksi')]); ?>  (Ctrl+a)" href="<?=  site_url('administrator/transaksi/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', [cclang('transaksi')]); ?></a>
                        <!-- <?php }) ?>
                        <?php is_allowed('transaksi_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> <?= cclang('transaksi') ?> " href="<?= site_url('administrator/transaksi/export?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                                                <?php is_allowed('transaksi_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf <?= cclang('transaksi') ?> " href="<?= site_url('administrator/transaksi/export_pdf?q='.$this->input->get('q').'&f='.$this->input->get('f')); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?> -->
                                             </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username"><?= cclang('transaksi') ?></h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', [cclang('transaksi')]); ?>  <i class="label bg-yellow"><?= $transaksi_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_transaksi" id="form_transaksi" action="<?= base_url('administrator/transaksi/index'); ?>">
                  


                     <!-- /.widget-user -->
                  <div class="row">
                     <div class="col-md-8">
                                                <div class="col-sm-2 padd-left-0 " >
                           <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                                                         <option value="delete">Delete</option>
                                                      </select>
                        </div>
                        <div class="col-sm-2 padd-left-0 ">
                           <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                        </div>
                                                <div class="col-sm-3 padd-left-0  " >
                           <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                        </div>
                        <div class="col-sm-3 padd-left-0 " >
                           <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                              <option value=""><?= cclang('all'); ?></option>
                               <option <?= $this->input->get('f') == 'produk_id' ? 'selected' :''; ?> value="produk_id">Produk Id</option>
                            <option <?= $this->input->get('f') == 'harga' ? 'selected' :''; ?> value="harga">Harga</option>
                            <option <?= $this->input->get('f') == 'qty' ? 'selected' :''; ?> value="qty">Qty</option>
                            <option <?= $this->input->get('f') == 'total' ? 'selected' :''; ?> value="total">Total</option>
                            <option <?= $this->input->get('f') == 'nama_cust' ? 'selected' :''; ?> value="nama_cust">Nama Cust</option>
                            <option <?= $this->input->get('f') == 'status' ? 'selected' :''; ?> value="status">Status</option>
                            <option <?= $this->input->get('f') == 'payment' ? 'selected' :''; ?> value="payment">Payment</option>
                            <option <?= $this->input->get('f') == 'kasir_id' ? 'selected' :''; ?> value="kasir_id">Kasir Id</option>
                            <option <?= $this->input->get('f') == 'created_at' ? 'selected' :''; ?> value="created_at">Created At</option>
                            <option <?= $this->input->get('f') == 'nama_produk' ? 'selected' :''; ?> value="nama_produk">Nama Produk</option>
                           </select>
                        </div>
                        <div class="col-sm-1 padd-left-0 ">
                           <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                           Filter
                           </button>
                        </div>
                        <div class="col-sm-1 padd-left-0 ">
                           <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/transaksi');?>" title="<?= cclang('reset_filter'); ?>">
                           <i class="fa fa-undo"></i>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                           <?= $pagination; ?>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive"> 

                  <br>
                  <table class="table table-bordered table-striped dataTable" id="table">
                     <thead>
                        <tr class="">
                                                     <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                                                    <th data-field="produk_id"data-sort="1" data-primary-key="0"> <?= cclang('produk_id') ?></th>
                           <th data-field="harga"data-sort="1" data-primary-key="0"> <?= cclang('harga') ?></th>
                           <th data-field="qty"data-sort="1" data-primary-key="0"> <?= cclang('qty') ?></th>
                           <th data-field="total"data-sort="1" data-primary-key="0"> <?= cclang('total') ?></th>
                           <th data-field="nama_cust"data-sort="1" data-primary-key="0"> <?= cclang('nama_cust') ?></th>
                           <th data-field="status"data-sort="1" data-primary-key="0"> <?= cclang('status') ?></th>
                           <th data-field="payment"data-sort="1" data-primary-key="0"> <?= cclang('payment') ?></th>
                           <th data-field="kasir_id"data-sort="1" data-primary-key="0"> <?= cclang('kasir_id') ?></th>
                           <th data-field="created_at"data-sort="1" data-primary-key="0"> <?= cclang('created_at') ?></th>
                           <th data-field="updated_at"data-sort="1" data-primary-key="0"> <?= cclang('updated_at') ?></th>
                           <th data-field="nama_produk"data-sort="1" data-primary-key="0"> <?= cclang('nama_produk') ?></th>
                           <th>Action</th>                        </tr>
                     </thead>
                     <tbody id="tbody_transaksi">
                     <?php foreach($transaksis as $transaksi): ?>
                        <tr>
                                                       <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $transaksi->id; ?>">
                           </td>
                                                       
                           <td><span class="list_group-produk_id"><?= _ent($transaksi->produk_id); ?></span></td> 
                           <td><span class="list_group-harga"><?= _ent($transaksi->harga); ?></span></td> 
                           <td><span class="list_group-qty"><?= _ent($transaksi->qty); ?></span></td> 
                           <td><span class="list_group-total"><?= _ent($transaksi->total); ?></span></td> 
                           <td><span class="list_group-nama_cust"><?= _ent($transaksi->nama_cust); ?></span></td> 
                           <!-- <td><span class="list_group-status"><?= _ent($transaksi->status); ?></span></td>  -->
                           <td><input type="checkbox" name="status" data-user-id="<?= $transaksi->id; ?>" class="transaksi-switch-status" <?= $transaksi->status === 'done' ? '' : 'checked'; ?>></td>
                           <td><input type="checkbox" name="payment" data-user-id="<?= $transaksi->id; ?>" class="payment-switch-status" <?= $transaksi->payment === 'paid' ? '' : 'checked'; ?>></td>
                           <td><span class="list_group-kasir_id"><?= _ent($transaksi->kasir_id); ?></span></td> 
                           <td><span class="list_group-created_at"><?= _ent($transaksi->created_at); ?></span></td> 
                           <td><span class="list_group-updated_at"><?= _ent($transaksi->updated_at); ?></span></td> 
                           <td><span class="list_group-nama_produk"><?= _ent($transaksi->nama_produk); ?></span></td> 
                           <td width="200">
                            
                                                              <?php is_allowed('transaksi_view', function() use ($transaksi){?>
                                                              <!-- <a href="<?= site_url('administrator/transaksi/view/' . $transaksi->id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?> -->
                              <?php }) ?>
                              <?php is_allowed('transaksi_update', function() use ($transaksi){?>
                              <!-- <a href="<?= site_url('administrator/transaksi/edit/' . $transaksi->id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a> -->
                              <?php }) ?>
                              <?php is_allowed('transaksi_delete', function() use ($transaksi){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/transaksi/delete/' . $transaksi->id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>

                           </td>                        </tr>
                      <?php endforeach; ?>
                      <?php if ($transaksi_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Transaksi data is not available
                           </td>
                         </tr>
                      <?php endif; ?>

                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
             
            </div>
            </form>            
         </div>
      </div>
   </div>
</section>


<script>
  $(document).ready(function(){

    "use strict";
   
    
      
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_transaksi').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/transaksi/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });
    initSortable('transaksi', $('table.dataTable'));
  }); /*end doc ready*/
</script>

<script>
   $(document).ready(function () {

"use strict";
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });

    $('.transaksi-switch-status').switchButton({
        labels_placement: 'right',
        on_label: 'progress',
        off_label: 'done'
    });

    $(document).on('change', 'input.transaksi-switch-status', function () {
        var status = 'progress';
        var id = $(this).attr('data-user-id');
        var data = [];

        if ($(this).prop('checked')) {
            status = 'done';
        }

        data.push({
            name: csrf,
            value: token
        });
        data.push({
            name: 'status',
            value: status
        });
        data.push({
            name: 'id',
            value: id
        });

        $.ajax({
            url: BASE_URL + '/administrator/transaksi/set_status',
            type: 'POST',
            dataType: 'JSON',
            data: data,
        })
            .done(function (data) {
                if (data.success) {
                    toastr['success'](data.message);
                    location.reload();
                } else {
                    toastr['warning'](data.message);
                }

            })
            .fail(function () {
                toastr['error']('Error update status');
            });
    });

}); /*end doc ready*/
</script>

<script>
   $(document).ready(function () {

"use strict";
$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });

    $('.payment-switch-status').switchButton({
        labels_placement: 'right',
        on_label: 'unpaid',
        off_label: 'paid'
    });

    $(document).on('change', 'input.payment-switch-status', function () {
        var payment = 'unpaid';
        var id = $(this).attr('data-user-id');
        var data = [];

        if ($(this).prop('checked')) {
            payment = 'paid';
        }

        data.push({
            name: csrf,
            value: token
        });
        data.push({
            name: 'payment',
            value: payment
        });
        data.push({
            name: 'id',
            value: id
        });

        $.ajax({
            url: BASE_URL + '/administrator/transaksi/set_status_payment',
            type: 'POST',
            dataType: 'JSON',
            data: data,
        })
            .done(function (data) {
                if (data.success) {
                    toastr['success'](data.message);
                    location.reload();
                } else {
                    toastr['warning'](data.message);
                }

            })
            .fail(function () {
                toastr['error']('Error update status payment');
            });
    });

}); /*end doc ready*/
</script>

<script>
   $(document).ready(function() {
    selesai();
});
 
function selesai() {
	setTimeout(function() {
		// update();
		// selesai();
      location.reload();
	}, 10000);
}

// function update() {
// 	$.getJSON(BASE_URL + '/administrator/transaksi/get', function(data) {
// 		$("#table").empty();
// 		var no = 1;
// 		$.each(data.result, function() {
// 			$("#table").append("<tr><td>"+(no++)+"</td><td>"+this['produk_id']+"</td><td>"+this['harga']+"</td></tr>");
// 		});
// 	});
// $.ajax({
//             url: BASE_URL + '/administrator/transaksi/get',
//             type: 'GET',
//             dataType: 'JSON',
//             data: data,
//         })
//             .done(function (data) {
//                 if (data.success) {
//                     toastr['success'](data.message);
//                     location.reload();
//                 } else {
//                     toastr['warning'](data.message);
//                 }

//             })
//             .fail(function () {
//                 toastr['error']('Error update status');
//             });
// }
</script>