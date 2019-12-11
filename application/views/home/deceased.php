<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                    
                    </div>
                </div>
                <div class="col"><br/></div>
            </div>
            <div class="row">    
                <div class="col-lg-12">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">DECEASED LIST</h3>
                        <div class="table-responsive table-data">
                            <table class="table table-top-campaign" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Birthday</th>
                                        <th>Gender</th>
                                        <th>Died On</th>
                                        <th></th>    
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
    <!-- edit modal -->
    <div class="modal fade" id="edit_resident" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">EDIT Resident</h5>
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
                                <input type="hidden" id="resID" class="form-control "  />
                            </div>
                            <form  method="post" class="form-horizontal" name="resident_edit_form" >
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="form-group col-lg-6">
                                            <div class="col col-md-12">
                                                <label for="select" class=" form-control-label">Zone</label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <select name="edit_purok" id="edit_purok" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <?php foreach ($puroks as $purok) {?>
                                                        <option value="<?=$purok['id']?>"><?=$purok['purok']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6" id="prefetch">
                                            <label for="company" class=" form-control-label">Household No.</label>
                                            <input type="text" id="edit_householdNo" placeholder="Enter Household Number" class="form-control typeahead col-lg-12" maxlength="8" />
                                        </div>
                                    </div>
                                    <div class="form-group" style="border-top:1px solid gray"></div>

                                    <div class="row form-group">
                                        <div class="form-group col-lg-6">
                                            <div class="col col-md-12">
                                                <label for="firstName" class=" form-control-label">First Name</label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <input type="text" id="edit_firstName" placeholder="Enter First Name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="lastName" class=" form-control-label">Last Name</label>
                                            <input type="text" id="edit_lastName" placeholder="Enter Last Name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="form-group col-lg-6">
                                            <div class="col col-md-12">
                                                <label for="middleName" class=" form-control-label">Middle Name</label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <input type="text" id="edit_middleName" placeholder="Enter Middle Name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="qualifier" class=" form-control-label">Qualifier</label>
                                            <input type="text" id="edit_qualifier" placeholder="Enter Last Name" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="form-group" style="border-top:1px solid gray"></div>
                                    <div class="row form-group">
                                        <div class="col col-lg-6">
                                            <label for="addressNumber" class=" form-control-label">ADDRESS Number</label>
                                            <input type="text" id="edit_addressNumber" placeholder="Enter Address Number" class="form-control">
                                        </div>
                                        <!-- <div class="col col-lg-4">
                                            <label for="street" class=" form-control-label">Street</label>
                                            <input type="text" id="street" placeholder="Enter street name" class="form-control">
                                        </div> -->
                                        <div class="col col-lg-6">
                                            <label for="subdivision" class=" form-control-label">Subdivision</label>
                                            <input type="text" id="edit_addressSubd" placeholder="Enter Subdivision" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group" style="border-top:1px solid gray"></div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="birthPlace" class=" form-control-label">Birth Place</label>
                                                <input type="text" id="edit_birthPlace" placeholder="Enter Place of Birth" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="postal-code" class=" form-control-label">Birth Date</label>
                                                <div class='input-group date' id='edit_birthdate' data-target-input="nearest">
                                                    <input type='text' class="form-control datetimepicker-input" data-target="#edit_birthdate"/>
                                                    <div class="input-group-append" data-target="#edit_birthdate" data-toggle="datetimepicker">
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
                                                            <input type="radio" id="male" name="edit_gender" value="male" class="form-check-input" checked="checked">Male
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="female" name="edit_gender" value="female" class="form-check-input">Female
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
                                                <select name="edit_status" id="edit_status" class="form-control">
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
                                                <input type="text" id="edit_citizen" value="Filipino" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="job" class=" form-control-label">Occupation</label>
                                                <input type="text" id="edit_job" placeholder="Enter Occupation" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="border-top:1px solid gray"></div>
                                    <div class="row form-group">
                                        <div class="col col-md-12">
                                            <label for="job" class=" form-control-label">Remarks</label>
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="deceased" class="form-check-label ">
                                                        <input type="checkbox" id="deceased" name="deceased" value="deceased" class="form-check-input">Deceased
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text" id="edit_remarks" placeholder="Enter Remarks" class="form-control">
                                         
                                                <div class="form-group died_div">
                                                    <label for="postal-code" class=" form-control-label">Died On:</label>
                                                    <div class='input-group died' id='died' data-target-input="nearest">
                                                        <input type='text' class="form-control datetimepicker-input" data-target="#died"/>
                                                        <div class="input-group-append" data-target="#died" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        </div>
                                                </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="updateResident">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end edit modal -->
    <!-- view profile modal -->
    <div class="modal fade" id="resident_profile" tabindex="1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-user"></i>
                                <strong class="card-title pl-2">Profile Card</strong>
                                
                            </div>
                            <form  method="post" class="form-horizontal" name="resident_edit_form" >
                                <div class="card-body card-block">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="<?=base_url()?>image/icon/avatar-01.jpg" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1" id="fullName"></h5>
                                        <div class="location text-sm-center">
                                            <i class="fa fa-map-marker"></i><input type="text" id="address">
                                        </div>
                                        <h5 class="text-sm-center mt-2 mb-1" id="houseNumber"></h5>
                                    </div>
                                    <hr>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Birth Place:</i></td>
                                                    <td><span id="view_bdp"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Birth Date:</i></td>
                                                    <td><span id="view_bday"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Gender:</i></td>
                                                    <td><span id="view_gender"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Status:</i></td>
                                                    <td><span id="view_status"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Citizenship:</i></td>
                                                    <td><span id="view_citizen"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Occupation:</i></td>
                                                    <td><span id="view_job"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Remarks:</i></td>
                                                    <td><span id="view_remark"></span></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-map-marker"> Died On:</i></td>
                                                    <td><span id="view_died_on"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                
                                <!--  END TOP CAMPAIGN-->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        var remarks = '';

        var datatable = $('#datatable').DataTable({
            "pageLength" : 10,
            'processing': true,
            "paging" :false,
            "ajax":{
                url : "<?= site_url("deceased/list_deceased") ?>",
                type: 'GET'
            },
        });
        $('#edit_birthdate').datetimepicker({
            maxDate: new Date,
            // minDate: new Date(),
            format: 'L',
        });
        $('#died').datetimepicker({
            maxDate: new Date,
            format: 'L',
        });

        $("#list_resident").on('click','.edit_resident',function(){
            var id = $(this).data('id');
            // alert(id);
            fetch_resident(id);
        });
        // update
        $("#updateResident").click(function(){

            var id = $('#resID').val();
            var purok = $('#edit_purok').val();
            var householdNo = $('#edit_householdNo').val();
            var firstName = $('#edit_firstName').val();
            var lastName = $('#edit_lastName').val();
            var middleName = $('#edit_middleName').val();
            var qualifier = $('#edit_qualifier').val();
            var addressNumber = $('#edit_addressNumber').val();
            var addressSubd = $('#edit_addressSubd').val();
            var birthPlace = $('#edit_birthPlace').val();
            var birthdate = $("#edit_birthdate").data('date');
            var gender = $('input[name=edit_gender]:checked').val();
            var status = $('#edit_status').val();
            var citizen = $('#edit_citizen').val();
            var job = $('#edit_job').val();
            if (remarks != "deceased") {
                remarks = $('#edit_remarks').val();
            }else{
                remarks = 'deceased';
            }
            var died_on = $("#died").data('date');

            // console.log("purok id: "+purok);
            // console.log("household: "+householdNo);
            // console.log("birthday: "+birthdate);
            // console.log('remarks: '+remarks);
                        

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
                            url:    '<?=base_url()?>resident/update_resident',
                            method: 'POST',
                            data: {
                                id:id,
                                purok:purok,
                                householdNo:householdNo,
                                firstName:firstName,
                                lastName:lastName,
                                middleName:middleName,
                                qualifier:qualifier,
                                addressNumber:addressNumber,
                                addressSubd:addressSubd,
                                birthPlace:birthPlace,
                                birthdate:birthdate,
                                gender:gender,
                                status:status,
                                citizen:citizen,
                                job:job,
                                remarks:remarks,
                                died_on:died_on,
                            },
                            dataType : 'json',
                            success:function(response){
                                if (response.status) {
                                    
                                    swal({
                                        title: 'Success',
                                        text: 'Resident Updated Successfully!', 
                                        type: 'success',
                                        timer: 1000,
                                        showConfirmButton: false,
                                    });

                                    $('form[name="resident_edit_form"]')[0].reset();
                                    $('#edit_resident').modal('hide');
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
        });
         $("#list_resident").on('click','.view_resident',function(){
            var id = $(this).data('id');
            view_resident(id);
        });
      
    });
  
   
    function fetch_resident(id)
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url()?>resident/select_resident/'+id,
            async: true,
            dataType: 'json',
            success: function(data){
                $('#edit_resident').modal('show');
                var i;
                for (i = 0; i < data.length; i++) {
                    console.log(data[i].firstName);
                    $('#resID').val(data[i].id);
                    $('#edit_purok').val(data[i].purokID);
                    $('#edit_householdNo').val(data[i].householdID);
                    $('#edit_firstName').val(data[i].firstName);
                    $('#edit_lastName').val(data[i].lastName);
                    $('#edi_middleName').val(data[i].middleName);
                    $('#edit_qualifier').val(data[i].qualifier);
                    $('#edit_addressNumber').val(data[i].addressNumber);
                    $('#edit_addressSubd').val(data[i].addressSubd);
                    $('#edit_birthPlace').val(data[i].birthPlace);
                    $('#edit_birthdate').val(data[i].birthdate);
                    $('input[name="edit_gender"][value="' + data[i].gender + '"]').prop('checked', true);
                    $('#edit_status').val(data[i].civilStatus);
                    $('#edit_citizen').val(data[i].citizenship);
                    $('#edit_job').val(data[i].job);
                    $('#edit_remarks').val(data[i].remarks);
                    $('#died').val(data[i].died_on);

                }
            },
            error:function(e){
                alert(e);
            }
        });
    }
    function view_resident(id)
    {
        $.ajax({
            type: 'ajax',
            url : '<?= base_url()?>resident/select_resident/'+id,
            async: true,
            dataType: 'json',
            success: function(data){
                $('#resident_profile').modal('show');
                var i;
                for (i = 0; i < data.length; i++) {
                    console.log(data[i].firstName);
                    // $('#resID').val(data[i].id);
                    $('#fullName').text(" "+data[i].firstName+" "+data[i].middleName+" "+data[i].lastName+" "+data[i].qualifier )
                    $('#address').val(" "+data[i].purok+", San Teodoro");
                    $('#houseNumber').text("Household: "+data[i].householdID);

                    $('#view_bdp').text(" "+data[i].birthPlace);
                    $('#view_bday').text(" "+data[i].birthdate);
                    $('#view_gender').text(" "+data[i].gender);
                    $('#view_status').text(" "+data[i].civilStatus);
                    $('#view_citizen').text(" "+data[i].citizenship);
                    $('#view_job').text(" "+data[i].job);
                    $('#view_remark').text(" "+data[i].remarks);
                    $('#view_died_on').text(" "+data[i].died_on);

                }
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