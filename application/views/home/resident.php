<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#add_resident">
                            <i class="zmdi zmdi-plus"></i>add Resident</button>
                    </div>
                </div>
                <div class="col"><br/></div>
            </div>
            <div class="row">    
                <div class="col-lg-12">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">RESIDENTS LIST</h3>
                        <div class="table-responsive table-data">
                            <table class="table table-top-campaign" id="datatable">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Address</td>
                                        <td>Birthday</td>
                                        <td>Gender</td>
                                        <td>Occupation</td>
                                        <td></td>    
                                    </tr>
                                </thead>
                                <tbody id="list_resident">
                                   
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
 <!-- modal -->
<!-- <div class="modal fade" id="add_zone" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
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
</div> -->
<!-- end modal -->
    <div class="modal fade" id="add_resident" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
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
                                            <select name="purok" id="purok" class="form-control">
                                                <option value="0">Please select</option>
                                                <?php foreach ($puroks as $purok) {?>
                                                    <option value="<?=$purok['id']?>"><?=$purok['purok']?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6" id="prefetch">
                                        <label for="company" class=" form-control-label">Household No.</label>
                                        <input type="text" id="householdNo" placeholder="Enter Household Number" class="form-control typeahead col-lg-12" maxlength="8" />
                                    </div>
                                </div>
                                <div class="form-group" style="border-top:1px solid gray"></div>

                                <div class="row form-group">
                                    <div class="form-group col-lg-6">
                                        <div class="col col-md-12">
                                            <label for="firstName" class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <input type="text" id="firstName" placeholder="Enter First Name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="lastName" class=" form-control-label">Last Name</label>
                                        <input type="text" id="lastName" placeholder="Enter Last Name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="form-group col-lg-6">
                                        <div class="col col-md-12">
                                            <label for="middleName" class=" form-control-label">Middle Name</label>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <input type="text" id="middleName" placeholder="Enter Middle Name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="qualifier" class=" form-control-label">Qualifier</label>
                                        <input type="text" id="qualifier" placeholder="Enter Last Name" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group" style="border-top:1px solid gray"></div>
                                <div class="row form-group">
                                    <div class="col col-lg-6">
                                        <label for="addressNumber" class=" form-control-label">ADDRESS Number</label>
                                        <input type="text" id="addressNumber" placeholder="Enter Address Number" class="form-control">
                                    </div>
                                    <!-- <div class="col col-lg-4">
                                        <label for="street" class=" form-control-label">Street</label>
                                        <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                    </div> -->
                                    <div class="col col-lg-6">
                                        <label for="subdivision" class=" form-control-label">Subdivision</label>
                                        <input type="text" id="addressSubd" placeholder="Enter Subdivision" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" style="border-top:1px solid gray"></div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="birthPlace" class=" form-control-label">Birth Place</label>
                                            <input type="text" id="birthPlace" placeholder="Enter Place of Birth" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="postal-code" class=" form-control-label">Birth Date</label>
                                            <div class='input-group date' id='birthdate' data-target-input="nearest">
                                                <input type='text' class="form-control datetimepicker-input" data-target="#birthdate"/>
                                                <div class="input-group-append" data-target="#birthdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-lg-6">
                                       <div class="col col-md-3">
                                                <label class=" form-control-label">Gender</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input type="radio" id="male" name="gender" value="male" class="form-check-input" checked="checked">Male
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input type="radio" id="female" name="gender" value="female" class="form-check-input">Female
                                                    </label>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md-6">
                                        <div class="col col-md-6">
                                            <label for="select" class=" form-control-label">Civil Status</label>
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <select name="status" id="status" class="form-control">
                                                <option value="0">Please select</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="live-in">Live-In</option>
                                                <option value="widdow">Widdow</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Citizenship" class=" form-control-label">Citizenship</label>
                                            <input type="text" id="citizen" value="Filipino" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="job" class=" form-control-label">Occupation</label>
                                            <input type="text" id="job" placeholder="Enter Occupation" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="border-top:1px solid gray"></div>
                                <div class="row form-group">
                                    <div class="col col-md-12">
                                        <label for="job" class=" form-control-label">Remarks</label>
                                        <input type="text" id="remarks" placeholder="Enter Remarks" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveResident">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#birthdate').datetimepicker({
            maxDate: new Date,
            // minDate: new Date(),
            format: 'L',
        });
        var datatable = $('#datatable').DataTable({
            "pageLength" : 10,
            "ajax":{
                url : "<?= site_url("resident/list_resident") ?>",
                type: 'GET'
            },
        });

        // typeahead
        var sample_data = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch:'<?php echo base_url(); ?>resident/fetch',
            remote:{
                url:'<?php echo base_url(); ?>resident/fetch/%QUERY',
                wildcard:'%QUERY'
            }
        });
          
        $('#prefetch .typeahead').typeahead(null, {
            name: 'sample_data',
            display: 'name',
            source:sample_data,
            limit:10,
            templates:{
                suggestion:Handlebars.compile('<div class="col-md-12" style="padding-right:5px; padding-left:5px; " >{{name}}</div></div>')
            }
        });

        // ----------
        $("#saveResident").click(function(){

            var purok = $('#purok').val();
            var householdNo = $('#householdNo').val();
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var middleName = $('#middleName').val();
            var qualifier = $('#qualifier').val();
            var addressNumber = $('#addressNumber').val();
            // var street = $('#street').val();
            var addressSubd = $('#addressSubd').val();
            var birthPlace = $('#birthPlace').val();
            var birthdate = $("#birthdate").data('date');
            var gender = $('input[name=gender]:checked').val();
            var status = $('#status').val();
            var citizen = $('#citizen').val();
            var job = $('#job').val();
            var remarks =$('#remarks').val();

            console.log("purok id: "+purok);
            console.log("household: "+householdNo);
            console.log("birthday: "+birthdate);
                        

            validate_household(purok,householdNo).done(function(data){
                if (data.status) {
                    if (purok == 0) 
                    {
                        swal({
                            title: 'Submission Failed',
                            text: 'Please select Purok!', 
                            type: 'warning',
                        });
                        
                    }
                    else
                    {
                        $.ajax({
                            url:    '<?=base_url()?>resident/add_resident',
                            method: 'POST',
                            data: {
                                purok:purok,
                                householdNo:householdNo,
                                firstName:firstName,
                                lastName:lastName,
                                middleName:middleName,
                                qualifier:qualifier,
                                addressNumber:addressNumber,
                                // street:street,
                                addressSubd:addressSubd,
                                birthPlace:birthPlace,
                                birthdate:birthdate,
                                gender:gender,
                                status:status,
                                citizen:citizen,
                                job:job,
                                remarks:remarks
                            },
                            dataType : 'json',
                            success:function(response){
                                if (response.status) {
                                    
                                    swal({
                                        title: 'Success',
                                        text: 'Resident Added Successfully!', 
                                        type: 'success',
                                        timer: 1000,
                                        showConfirmButton: false,
                                    });

                                    // $('form[name="household_form"]')[0].reset();
                                    // $('#add_resident').modal('hide');
                                    datatable.ajax.reload();                                
                                }
                            },
                            error:function(e){
                                alert(e);
                            }
                        });
                    }
                }else{
                    swal({
                        title: 'Submission Failed',
                        text: 'Household Not Exist! Please Register Household first!', 
                        type: 'warning',
                    });
                }
            });
        });
        $("#list_resident").on('click','.delete_resident',function(){
            var id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure you want to delete this Resident??',
                text: 'this will delete Permanently!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.value) {
                $.ajax({
                    type : "POST",
                    url  : "<?= base_url('resident/delete_resident')?>",
                    dataType : "JSON",
                    data : {id:id},
                    success: function(data){
                        if(data.status){
                            swal({
                            title: 'Success',
                            text: 'Resident Deleted Successfully', 
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
        })
    });

    //list_resident();
    
    function list_resident()
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url()?>resident/list_resident',
            async: true,
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="'+data[i].id+'">'+
                        '<td>'+data[i].firstName+'</td>'+
                        '<td>'+data[i].purok+'</td>'+
                        '<td>'+data[i].birthdate+'</td>'+
                        '<td>'+data[i].gender+'</td>'+
                        '<td>'+data[i].job+'</td>'+
                        '<td>'+'<span class="more edit_purok" data-id="'+data[i].id+'" data-name="'+data[i].firstName+'"><i class="zmdi zmdi-edit"></i></span>'+
                        '&nbsp;&nbsp;'+
                        '<span class="more item_delete" data-id="'+data[i].id+'"><i class="zmdi zmdi-delete"></i></span>'+
                        '</td></tr>';
                }
                $('#list_resident').html(html);
            },
            error:function(e){
                alert(e);
            }
        });
    }
    function validate_household(purok, household){
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
    
       
</script>