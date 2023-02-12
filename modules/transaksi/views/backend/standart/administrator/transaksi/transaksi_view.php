<script type="text/javascript">
function domo(){
   $('*').bind('keydown', 'Ctrl+e', function() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function() {
      $('#btn_back').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<section class="content-header">
   <h1>
      Transaksi      <small><?= cclang('detail', ['Transaksi']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/transaksi'); ?>">Transaksi</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
   </ol>
</section>
<section class="content">
   <div class="row" >
     
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">

               <div class="box box-widget widget-user-2">
                  <div class="widget-user-header ">
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <h3 class="widget-user-username">Transaksi</h3>
                     <h5 class="widget-user-desc">Detail Transaksi</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal form-step" name="form_transaksi" id="form_transaksi" >
                  
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-id"><?= _ent($transaksi->id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Produk Id </label>

                        <div class="col-sm-8">
                        <span class="detail_group-produk_id"><?= _ent($transaksi->produk_id); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Harga </label>

                        <div class="col-sm-8">
                        <span class="detail_group-harga"><?= _ent($transaksi->harga); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Qty </label>

                        <div class="col-sm-8">
                        <span class="detail_group-qty"><?= _ent($transaksi->qty); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Total </label>

                        <div class="col-sm-8">
                        <span class="detail_group-total"><?= _ent($transaksi->total); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Status </label>

                        <div class="col-sm-8">
                        <span class="detail_group-status"><?= _ent($transaksi->status); ?></span>
                        </div>
                    </div>
                                        
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nama Produk </label>

                        <div class="col-sm-8">
                        <span class="detail_group-nama_produk"><?= _ent($transaksi->nama_produk); ?></span>
                        </div>
                    </div>
                                        
                    <br>
                    <br>


                     
                         
                    <div class="view-nav">
                        <?php is_allowed('transaksi_update', function() use ($transaksi){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit transaksi (Ctrl+e)" href="<?= site_url('administrator/transaksi/edit/'.$transaksi->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Transaksi']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/transaksi/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Transaksi']); ?></a>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
$(document).ready(function(){

    "use strict";
    
   
   });
</script>