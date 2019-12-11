<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="overview-wrap">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-account-calendar"></i>Households</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#add_household">
                            <i class="zmdi zmdi-plus"></i>ADD HOUSEHOLD</button>
                    </div>
                </div>
                <div class="col"><br/></div>
            </div>
            <!-- DATA TABLE-->           
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- USER DATA-->
                    <div class="user-data m-b-30">
                        <!-- <div class="filters m-b-45">
                            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All</option>
                                    <option value="">Products</option>
                                    <option value="">Services</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div> -->
                        <div class="top-campaign">
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-top-campaign display dataTable" id="datatables">
                                    <thead>
                                        <tr>
                                            <th>Household Number</th>
                                            <th>Purok</th>
                                            <th>Total Member</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="list_household">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END USER DATA-->
                </div>
            </div>           
            <!-- END DATA TABLE-->
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>
    </div>
</div>
            <!-- modal -->
            <!-- <div class="modal fade" id="add_resident" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Add Resident</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Resident</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="form-group col-lg-6">
                                                <div class="col col-md-12">
                                                    <label for="select" class=" form-control-label">Zone</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="company" class=" form-control-label">Household No.</label>
                                                <input type="number" id="company" placeholder="Enter your company name" class="form-control">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Street</label>
                                            <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                    <input type="text" id="city" placeholder="Enter your city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                                    <input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" id="country" placeholder="Country name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
                    </div>
                </div>
            </div> -->
            <!-- end modal -->
    <!-- modal -->
<div class="modal fade" id="add_household" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Add Household</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Household</strong>
                            <small> Form</small>
                        </div>
                        <form  method="post" class="form-horizontal" name="household_form">
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="purok" class=" form-control-label">Purok</label>
                                    <select name="purok" id="purok" class="form-control">
                                        <option value="0">Please select</option>
                                        <?php foreach ($puroks as $purok) {?>
                                            <option value="<?=$purok['id']?>"><?=$purok['purok']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="street" class=" form-control-label">Household No.</label>
                                    <input type="number" name="household" id="household" placeholder="Enter Household Number" class="form-control">
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
<div class="modal fade" id="edit_household" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Edit Household</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Household</strong>
                            <small> Form</small>
                        </div>
                        <form  method="post" class="form-horizontal" name="household_edit_form" >
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="purok" class=" form-control-label">Purok</label>
                                    <select name="purok_edit" id="purok_edit" class="form-control" disabled="disabled">
                                        <option value="0">Please select</option>
                                        <?php foreach ($puroks as $purok) {?>
                                            <option value="<?=$purok['id']?>"><?=$purok['purok']?></option>
                                        <?php } ?>
                                    </select>
                                    
                                </div>
                                 <div class="form-group">
                                    <label for="street" class=" form-control-label">Household No.</label>
                                    <input type="number" name="household_edit" id="household_edit" placeholder="Enter Household Number" class="form-control">
                                    <input type="hidden" name="edit_household_id" id="edit_household_id"  class="form-control">
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
<script type="text/javascript">
    // list_household();
    
    function list_household()
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url()?>household/list_household',
            async: true,
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr class="tr-shadow" id="'+data[i].id+'">'+
                        '<td>'+data[i].householdNum+'</td>'+
                        '<td>'+data[i].purok+'</td>'+
                        '<td>'+data[i].totalhouseholdmember+'</td>'+
                        '<td>'+
                        '<div class="table-data-feature">'+
                        '<button class="item add_member" data-toggle="tooltip" title="Add" data-id="'+data[i].id+'" data-name="'+data[i].household+'"><i class="zmdi zmdi-plus"></i></button>'+
                        '&nbsp;&nbsp;'+
                        '<button class="item item_edit" data-toggle="tooltip" title="Edit" data-id="'+data[i].id+'"><i class="zmdi zmdi-edit"></i></button>'+
                        '&nbsp;&nbsp;'+
                        '<button class="item item_delete" data-toggle="tooltip" title="Delete" data-id="'+data[i].id+'"><i class="zmdi zmdi-delete"></i></button>'+
                        '</div>'+
                        
                        '</td></tr>';
                }
                $('#list_household').html(html);
            },
            error:function(e){
                alert(e);
            }
        });
    }
    function filter_household(purok,household){
        return  $.ajax({
            type: 'ajax',            
            url : '<?= base_url()?>household/search_household/',
            method: 'POST',
            data: {purok:purok, household:household},
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
        var table = $('#datatables').DataTable({
            'pageLength' : 10,
            // "paging" :false,
            'processing': true,
            'order' :[],
            'serverSide': true,
            'serverMethod': 'post',
            'ajax' : {
                url : "<?= site_url("household/show")?>",
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
            var household    = $('#household').val();

            filter_household(purok,household).done(function(data){
                if (data.status) {
                    swal({
                        title: 'Submission Failed',
                        text: 'Household already Exist!', 
                        type: 'warning',
                    });
                }else{
                    if ( purok == 0 ){
                         swal({
                            title: 'Submission Failed',
                            text: 'Please Select Purok!', 
                            type: 'warning',
                        });
                    }
                    else if(household =="")
                    {
                         swal({
                            title: 'Submission Failed',
                            text: 'Household Field is Empty!', 
                            type: 'warning',
                        });
                    }
                    else{
                        $.ajax({
                            url:    '<?=base_url()?>household/add_household',
                            method: 'POST',
                            data: {
                                purok:purok,
                                household:household
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

                                    $('form[name="household_form"]')[0].reset();
                                    $('#add_household').modal('hide');
                                    table.ajax.reload();                        
                                }
                            },
                            error:function(e){
                                alert(e);
                            }
                        });
                    }
                }
            });
        });
        $('#list_household').on('click', '.item_edit',function(){
            var id = $(this).data('id');
            var purok = $(this).data('purok_id');
            var householdNum = $(this).data('asd');

            $('#edit_household').modal('show');

            $('[name="purok_edit"]').val(purok);
            $('[name="edit_household_id"]').val(id);
            $('[name="household_edit"]').val(householdNum);

        });
        $('#edit_save').click(function(){
            var id = $('#edit_household_id').val();
            var purok = parseInt($('#purok_edit').val());
            var householdNum = $('#household_edit').val();

            filter_household(purok,householdNum).done(function(data){
                if (data.status) {
                    swal({
                        title: 'Submission Failed',
                        text: 'Household already Exist!', 
                        type: 'warning',
                    });
                }
                else{
                    if ( purok == 0 ){
                         swal({
                            title: 'Submission Failed',
                            text: 'Please Select Purok!', 
                            type: 'warning',
                        });
                    }
                    else if(householdNum =="")
                    {
                         swal({
                            title: 'Submission Failed',
                            text: 'Household Field is Empty!', 
                            type: 'warning',
                        });
                    }
                    else{
                        $.ajax({
                            url:    '<?=base_url()?>household/update_household',
                            method: 'POST',
                            data: {
                                id:id,
                                purok:purok,
                                householdNum:householdNum
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

                                    $('form[name="household_edit_form"]')[0].reset();
                                    $('#edit_household').modal('hide');
                                    table.ajax.reload();                        
                                }
                            },
                            error:function(e){
                                alert(e);
                            }
                        });
                    }   
                }
            });
        });
        $("#list_household").on('click', '.item_delete', function(){
            var id = $(this).data('id');
            var purok_id = $(this).data('purok_id');
            var householdNum = $(this).data('asd');

            console.log("household id: "+id);
            console.log("purok id: "+purok_id);
            console.log("household Num: "+householdNum);
            
            
            Swal.fire({
                title: 'Are you sure you want to delete this Household??',
                text: 'this will delete all Residents under this Household too!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('household/delete_household')?>",
                    dataType : "JSON",
                    data : {
                        id:id,
                        purok_id:purok_id,
                        householdNum:householdNum,
                    },
                    success: function(data){
                        if(data.status){
                            swal({
                            title: 'Success',
                            text: 'Household Deleted Successfully', 
                            type: 'success',
                            timer: 1000,
                            showConfirmButton: false,
                            });

                            table.ajax.reload();
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