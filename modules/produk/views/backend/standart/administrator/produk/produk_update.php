

    <link href="<?= BASE_ASSET; ?>/fine-upload/fine-uploader-gallery.min.css" rel="stylesheet">
    <script src="<?= BASE_ASSET; ?>/fine-upload/jquery.fine-uploader.js"></script>
    <?php $this->load->view('core_template/fine_upload'); ?>
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
        Produk        <small>Edit Produk</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a href="<?= site_url('administrator/produk'); ?>">Produk</a></li>
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
                            <h3 class="widget-user-username">Produk</h3>
                            <h5 class="widget-user-desc">Edit Produk</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/produk/edit_save/'.$this->uri->segment(4)), [
                            'name' => 'form_produk',
                            'class' => 'form-horizontal form-step',
                            'id' => 'form_produk',
                            'method' => 'POST'
                        ]); ?>

                        <?php
                        $user_groups = $this->model_group->get_user_group_ids();
                        ?>

                                                    
                        
                        <div class="form-group group-nama_produk  ">
                                <label for="nama_produk" class="col-sm-2 control-label">Nama Produk                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="" value="<?= set_value('nama_produk', $produk->nama_produk); ?>">
                                    <small class="info help-block">
                                        <b>Input Nama Produk</b> Max Length : 255.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-deskripsi_produk  ">
                                <label for="deskripsi_produk" class="col-sm-2 control-label">Deskripsi Produk                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <textarea id="deskripsi_produk" name="deskripsi_produk" rows="10" cols="80"> <?= set_value('deskripsi_produk', $produk->deskripsi_produk); ?></textarea>
                                    <small class="info help-block">
                                        </small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-harga  ">
                                <label for="harga" class="col-sm-2 control-label">Harga                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="harga" id="harga" placeholder="" value="<?= set_value('harga', $produk->harga); ?>">
                                    <small class="info help-block">
                                        <b>Input Harga</b> Max Length : 12.</small>
                                </div>
                            </div>
                        
                        
                                                    
                        
                        <div class="form-group group-id_kategori">
                                <label for="id_kategori" class="col-sm-2 control-label">Id Kategori                                    <i class="required">*</i>
                                    </label>
                                <div class="col-sm-8">
                                    <select class="form-control chosen chosen-select-deselect" name="id_kategori" id="id_kategori" data-placeholder="Select Id Kategori">
                                        <option value=""></option>
                                        <?php
                                        $conditions = [
                                            ];
                                        ?>
                                        <?php foreach (db_get_all_data('kategori', $conditions) as $row): ?>
                                        <option <?= $row->id == $produk->id_kategori ? 'selected' : ''; ?> value="<?= $row->id ?>"><?= $row->nama_kategori; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="info help-block">
                                        <b>Input Id Kategori</b> Max Length : 2.</small>
                                </div>
                            </div>


                        
                        
                                                    
                        
                        <div class="form-group group-photo  ">
                                <label for="photo" class="col-sm-2 control-label">Photo                                    </label>
                                <div class="col-sm-8">
                                    <div id="produk_photo_galery"></div>
                                    <input class="data_file data_file_uuid" name="produk_photo_uuid" id="produk_photo_uuid" type="hidden" value="<?= set_value('produk_photo_uuid'); ?>">
                                    <input class="data_file" name="produk_photo_name" id="produk_photo_name" type="hidden" value="<?= set_value('produk_photo_name', $produk->photo); ?>">
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

    <script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function() {

        "use strict";
        
    window.event_submit_and_action = '';
            
    
      
      
      
        
        
    CKEDITOR.replace('deskripsi_produk');
    var deskripsi_produk = CKEDITOR.instances.deskripsi_produk;
        
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
                    window.location.href = BASE_URL + 'administrator/produk';
                }
            });

        return false;
    }); /*end btn cancel*/

    $('.btn_save').click(function() {
        $('.message').fadeOut();
        $('#deskripsi_produk').val(deskripsi_produk.getData());
        
    var form_produk = $('#form_produk');
    var data_post = form_produk.serializeArray();
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
            url: form_produk.attr('action'),
            type: 'POST',
            dataType: 'json',
            data: data_post,
        })
        .done(function(res) {
            $('form').find('.form-group').removeClass('has-error');
            $('form').find('.error-input').remove();
            $('.steps li').removeClass('error');
            if (res.success) {
                var id = $('#produk_image_galery').find('li').attr('qq-file-id');
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

                        var params = {};
            params[csrf] = token;

            $('#produk_photo_galery').fineUploader({
                template: 'qq-template-gallery',
                request: {
                    endpoint: BASE_URL + '/administrator/produk/upload_photo_file',
                    params: params
                },
                deleteFile: {
                    enabled: true, // defaults to false
                    endpoint: BASE_URL + '/administrator/produk/delete_photo_file'
                },
                thumbnails: {
                    placeholders: {
                        waitingPath: BASE_URL + '/asset/fine-upload/placeholders/waiting-generic.png',
                        notAvailablePath: BASE_URL + '/asset/fine-upload/placeholders/not_available-generic.png'
                    }
                },
                session: {
                    endpoint: BASE_URL + 'administrator/produk/get_photo_file/<?= $produk->id; ?>',
                    refreshOnRequest: true
                },
                multiple: false,
                validation: {
                    allowedExtensions: ["*"],
                    sizeLimit: 0,
                                    },
                showMessage: function(msg) {
                    toastr['error'](msg);
                },
                callbacks: {
                    onComplete: function(id, name, xhr) {
                        if (xhr.success) {
                            var uuid = $('#produk_photo_galery').fineUploader('getUuid', id);
                            $('#produk_photo_uuid').val(uuid);
                            $('#produk_photo_name').val(xhr.uploadName);
                        } else {
                            toastr['error'](xhr.error);
                        }
                    },
                    onSubmit: function(id, name) {
                        var uuid = $('#produk_photo_uuid').val();
                        $.get(BASE_URL + '/administrator/produk/delete_photo_file/' + uuid);
                    },
                    onDeleteComplete: function(id, xhr, isError) {
                        if (isError == false) {
                            $('#produk_photo_uuid').val('');
                            $('#produk_photo_name').val('');
                        }
                    }
                }
            }); /*end photo galey*/
            

    

    async function chain() {
            }

    chain();




    }); /*end doc ready*/
</script>