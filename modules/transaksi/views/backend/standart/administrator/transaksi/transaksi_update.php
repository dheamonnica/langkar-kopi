

<script type="text/javascript">
    function domo() {

        $('*').bind('keydown', 'Ctrl+s', function() {
            $('#btn_save').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+x', function() {
            $('#btn_cancel').trigger('click');
            return false;
        });

        $('*').bind('keydown', 'Ctrl+d', function() {
            $('.btn_save_back').trigger('click');
            return false;
        });

    }

    jQuery(document).ready(domo);
</script>
<section class="content-header">
    <h1>
        Transaksi        <small>Edit Transaksi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/transaksi'); ?>">Transaksi</a></li>
        <li class="active">Edit</li>
    </ol>
</section>

<style>

</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-body ">
                    <div class="box box-widget widget-user-2">
                        <div class="widget-user-header ">
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <h3 class="widget-user-username">Transaksi</h3>
                            <h5 class="widget-user-desc">Edit Transaksi</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/transaksi/edit_save/'.$this->uri->segment(4)), [
                            'name' => 'form_transaksi',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_transaksi',
                            'method' => 'POST'
                        ]); ?>

                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>

                                                    
                        
                        <div class="form-group group-produk_id  ">
                                <label for="produk_id" class="col-sm-2 control-label">Produk Id                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="produk_id" id="produk_id" placeholder="" value="<?= set_value('produk_id', $transaksi->produk_id); ?>">
                                    <small class="info help-block">
                                        <b>Input Produk Id</b> Max Length : 11.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-harga  ">
                                <label for="harga" class="col-sm-2 control-label">Harga                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="" value="<?= set_value('harga', $transaksi->harga); ?>">
                                    <small class="info help-block">
                                        <b>Input Harga</b> Max Length : 12.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-qty  ">
                                <label for="qty" class="col-sm-2 control-label">Qty                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="qty" id="qty" placeholder="" value="<?= set_value('qty', $transaksi->qty); ?>">
                                    <small class="info help-block">
                                        <b>Input Qty</b> Max Length : 12.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-total  ">
                                <label for="total" class="col-sm-2 control-label">Total                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="total" id="total" placeholder="" value="<?= set_value('total', $transaksi->total); ?>">
                                    <small class="info help-block">
                                        <b>Input Total</b> Max Length : 12.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-nama_cust  ">
                                <label for="nama_cust" class="col-sm-2 control-label">Nama Cust                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_cust" id="nama_cust" placeholder="" value="<?= set_value('nama_cust', $transaksi->nama_cust); ?>">
                                    <small class="info help-block">
                                        <b>Input Nama Cust</b> Max Length : 255.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group ">
                                <label for="status" class="col-sm-2 control-label">Status                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select" name="status" id="status" data-placeholder="Select Status">
                                        <option value=""></option>
                                        <option <?= $transaksi->status == "0" ? 'selected' :''; ?> value="0">On Progress</option>
                                        <option <?= $transaksi->status == "1" ? 'selected' :''; ?> value="1">Done</option>
                                                                            </select>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                                                
                                                    <div class="message"></div>
                                                <div class="row-fluid col-md-7 container-button-bottom">
                            <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                                <i class="fa fa-save"></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                                <i class="ion ion-ios-list-outline"></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>

                            <div class="custom-button-wrapper">

                                                        </div>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                                <i class="fa fa-undo"></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                                <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg">
                                <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                                                <?= form_close(); ?>
                        </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {

        "use strict";
        
    window.event_submit_and_action = '';
            
    
      
      
      
        
        
    
    $('#btn_cancel').click(function() {
        swal({
                title: "Are you sure?",
                text: "the data that you have created will be in the exhaust!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                cancelButtonText: "No!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = BASE_URL + 'administrator/transaksi';
                }
            });

        return false;
    }); /*end btn cancel*/

    $('.btn_save').click(function() {
        $('.message').fadeOut();
        
    var form_transaksi = $('#form_transaksi');
    var data_post = form_transaksi.serializeArray();
    var save_type = $(this).attr('data-stype');
    data_post.push({
        name: 'save_type',
        value: save_type
    });

    
      
    data_post.push({
        name: 'event_submit_and_action',
        value: window.event_submit_and_action
    });

    $('.loading').show();

    $.ajax({
            url: form_transaksi.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            $('form').find('.form-group').removeClass('has-error');
            $('form').find('.error-input').remove();
            $('.steps li').removeClass('error');
            if (res.success) {
                var id = $('#transaksi_image_galery').find('li').attr('qq-file-id');
                if (save_type == 'back') {
                    window.location.href = res.redirect;
                    return;
                }

                $('.message').printMessage({
                    message: res.message
                });
                $('.message').fadeIn();
                $('.data_file_uuid').val('');

            } else {
                if (res.errors) {
                    parseErrorField(res.errors);
                }
                $('.message').printMessage({
                    message: res.message,
                    type: 'warning'
                });
            }

        })
        .fail(function() {
            $('.message').printMessage({
                message: 'Error save data',
                type: 'warning'
            });
        })
        .always(function() {
            $('.loading').hide();
            $('html, body').animate({
                scrollTop: $(document).height()
            }, 2000);
        });

    return false;
    }); /*end btn save*/

    

    

    async function chain() {
            }

    chain();




    }); /*end doc ready*/
</script>