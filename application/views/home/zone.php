<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">ZONE</h2>
                        <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#add_zone">
                            <i class="zmdi zmdi-plus"></i>add Purok</button>
                    </div>
                </div>
                <div class="col"><br/></div>
            </div>
            <div class="row">    
                <div class="col-lg-12">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        
                        <div class="table-responsive ">
                            <table class="table table-top-campaign display dataTable" id="datatable">
                                <thead>
                                    <tr>
                                        <td>Purok</td>
                                        <td>Purok Leader</td>
                                        <td>Total Household</td>
                                        <td></td>    
                                    </tr>
                                </thead>
                                <tbody id="list_purok">
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--  END TOP CAMPAIGN-->
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- add modal -->
<div class="modal fade" id="add_zone" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Zone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Purok</strong>
                            <small> Form</small>
                        </div>
                        <form  method="post" class="form-horizontal" name="purok_form">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Purok</label>
                                    <input type="text" name="purok" id="purok" placeholder="Enter Purok name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Purok Leader</label>
                                    <input type="text" name="purok_leader" id="purok_leader" placeholder="Purok Leader name" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!-- edit modal -->
<div class="modal fade" id="edit_zone" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edit Zone</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Purok</strong>
                            <small> Form</small>
                        </div>
                        <form  method="post" class="form-horizontal" name="purok_edit_form">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Purok</label>
                                    <input type="text" name="edit_purok" id="edit_purok" placeholder="Enter Purok name" class="form-control">
                                    <input type="hidden" name="edit_purok_id" id="edit_purok_id"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="country" class=" form-control-label">Purok Leader</label>
                                    <input type="text" name="edit_purok_leader" id="edit_purok_leader" placeholder="Purok Leader name" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="edit_save">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- end edit modal -->
</div>
</div>

<script type="text/javascript">
    // list_purok();
    
    function list_purok()
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url()?>zone/list_purok',
            async: true,
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr class="tr-shadow" id="'+data[i].id+'">'+
                        '<td>'+data[i].purok+'</td>'+
                        '<td>'+data[i].purok_leader+'</td>'+
                        '<td>'+data[i].totalhousehold+'</td>'+
                        '<td>'+
                        '<div class="table-data-feature">'+
                        '<button class="item item_edit" data-toggle="tooltip" title="Edit" data-id="'+data[i].id+'" data-purok="'+data[i].purok+'" data-purok_leader="'+data[i].purok_leader+'"><i class="zmdi zmdi-edit"></i></button>'+
                        '&nbsp;&nbsp;'+
                        '<button class="item item_delete" data-toggle="tooltip" title="Delete" data-id="'+data[i].id+'"><i class="zmdi zmdi-delete"></i></button>'+
                        '</div>'+
                        '</td></tr>';
                }
                $('#list_purok').html(html);
            },
            error:function(e){
                alert(e);
            }
        });
    }
    function filter_purok(search){
        return  $.ajax({
                type: 'ajax',
                url : '<?= base_url()?>zone/search_purok/'+search,
                async: true,
                dataType: 'json',
                success: function(data){
                    console.log(data.status);
                },
                error:function(e){
                    alert(e);
                }
            });
        }
    
    $(document).ready(function(){
        
        var datatable = $('#datatable').DataTable({
            
            'processing': true,
            // 'paging': false,
            "serverSide" : true,
            'serverMethod': 'post',
            "ajax": {
                url : "<?= site_url("zone/purok_list")?>",          
            },
            "order"      : [
                [1,"asc"]
            ],
            "columns"    : [
                null,
                null,
                null,
                { orderable: false },
            ],
            
        });

        $('#save').click(function() {
            var purok           = $('#purok').val();
            var purok_leader    = $('#purok_leader').val();

            filter_purok(purok).done(function(data){
                if (data.status) {
                    swal({
                        title: 'Submission Failed',
                        text: 'Purok Name already Exist!', 
                        type: 'warning',
                    });
                }
                else{
                    if ( purok =="" || purok_leader ==""){
                        swal({
                        title: 'Submission Failed',
                        text: 'Empty Field Required!', 
                        type: 'warning',
                    });
                    }
                    else{
                        $.ajax({
                            url:    '<?=base_url()?>zone/add_purok',
                            method: 'POST',
                            data: {
                                purok:purok,
                                purok_leader:purok_leader
                            },
                            dataType : 'json',
                            success:function(response){
                                if (response.status) {
                                    swal({
                                    title: 'Success',
                                    text: 'Purok Added Successfully!', 
                                    type: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    });

                                    $('form[name="purok_form"]')[0].reset();
                                    $('#add_zone').modal('hide');
                                    // list_purok();
                                    datatable.ajax.reload();
                                }
                            },
                            error:function(e){
                                alert(e);
                            }
                        });
                        
                    }
                }
            })
            
        });

        $("#list_purok").on('click', '.item_edit', function(){
            var id = $(this).data('id');
            var purok = $(this).data('purok');
            var purok_leader = $(this).data('purok_leader');
            
            $('#edit_zone').modal('show');

            $('[name="edit_purok"]').val(purok);
            $('[name="edit_purok_id"]').val(id);
            $('[name="edit_purok_leader"]').val(purok_leader);
            
        });
        $('#edit_save').click(function(){
            var id = $('#edit_purok_id').val();
            var purok = $('#edit_purok').val();
            var purok_leader = $('#edit_purok_leader').val();

            filter_purok(purok).done(function(data){
                if (data.status) {
                   swal({
                        title: 'Submission Failed',
                        text: 'Purok Name already Exist!', 
                        type: 'warning',
                    });
                }
                else{
                    if ((purok=='') || purok_leader=='') {
                        swal({
                        title: 'Submission Failed',
                        text: 'Please Fill all Field', 
                        type: 'warning',
                        });
                    }
                    else{
                        $.ajax({
                            url : '<?= base_url()?>zone/edit_zone',
                            method : 'POST',
                            data : {
                                id:id,
                                purok:purok,
                                purok_leader:purok_leader,                
                            },
                            dataType : 'json',
                            success:function(response){
                                if (response.status) {
                                    swal({
                                    title: 'Success',
                                    text: 'Purok Details Updated', 
                                    type: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    });

                                    $('form[name="purok_edit_form"]')[0].reset();
                                    $('#edit_zone').modal('hide');
                                    // list_purok();
                                    datatable.ajax.reload();
                                }
                            },
                            error:function(e){
                                alert(e);
                            }
                        });
                    }
                }
            })
            
        });
        $("#list_purok").on('click', '.item_delete', function(){
            var id = $(this).data('id');
            
            Swal.fire({
                title: 'Are you sure you want to delete this Purok??',
                text: 'this will delete all Household under this zone too!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('zone/delete_purok')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                        if(data.status){
                            swal({
                            title: 'Success',
                            text: 'Purok Deleted Successfully', 
                            type: 'success',
                            timer: 1000,
                            showConfirmButton: false,
                            });

                            datatable.ajax.reload();
                        }
                    },
                    error:function(e){
                        alert(e);
                    }
                });
                return false;
                
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: 'Cancelled',
                    text: '', 
                    type: 'error',
                    timer: 800,
                    showConfirmButton: false,
                });
                }
            });
        });
    });
    
</script>