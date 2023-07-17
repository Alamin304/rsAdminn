<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('plancontent') ?>

<div class="dash-container">
<div class="dash-content">
<div class="page-header">
   <div class="page-block">
      <div class="row align-items-center">
         <div class="col-auto">
            <div class="page-header-title">
               <h4 class="m-b-10">Manage Plan</h4>
            </div>
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a href="https://demo.rajodiya.com/erpgo-saas/account-dashboard">Dashboard</a></li>
               <li class="breadcrumb-item">Plans</li>
            </ul>
         </div>

         <div class="col">
            <div class="float-end">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
               <i class="ti ti-plus"></i>
               </button>
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="myModalLabel">Create New Plan</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <form method="POST" id="addplan" action="" class="form-horizontal" role="form">
                              <div class="form-group">
                                 <label for="name">Name:</label>
                                 <input type="text" class="form-control" name="planname" id="name" placeholder="Enter your Plan name">
                                 <span style="color:red;" id= "nameErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="price">Price:</label>
                                 <input type="number" class="form-control" name="price" id="price" placeholder="">
                                 <span style="color:red;" id= "priceErr"></span>
                              </div>
                              <div class="form-control">
                                 <label for="duration">Duration:</label>
                                 <select name="duration" id="duration">
                                    <option value="Lifetime">Lifetime</option>
                                    <option value="Per Month">Per Month</option>
                                    <option value="Per Years">Per Years</option>
                                 </select>
                                 <span style="color:red;" id= "durationErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxuser">Maximum Users:</label>
                                 <input type="number" class="form-control" name="mxuser" id="mxuser" placeholder="">
                                 <span style="color:red;" id= "mxuserErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxcustomer">Maximum Customers:</label>
                                 <input type="number" class="form-control" name="mxcustomer" id="mxcustomer" placeholder="">
                                 <span style="color:red;" id= "mxcustomerErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxvendor">Maximum Vendors:</label>
                                 <input type="number" class="form-control" name ="mxvendor" id="mxvendor" placeholder="">
                                 <span style="color:red;" id= "mxvendorErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxclient">Maximum Clients:</label>
                                 <input type="number" class="form-control" name="mxclient" id="mxclient" placeholder="">
                                 <span style="color:red;" id= "mxclientErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="strli">Storage Limit:</label>
                                 <input type="number" class="form-control" name="storlimit" id="storlimit" placeholder="">
                                 <span style="color:red;" id= "strliErr"></span>
                              </div>
                              <div class="form-group">
                                 <Description for="description">
                                 Description:</label>
                                 <div class="form-group">
                                    <textarea id="description" class="form-control" name="description" rows="5"></textarea>
                                    <span style="color:red;" id= "descriptionErr"></span>
                                 </div>
                              </div>

                              <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="crm" id="crm" value="1">
                                 <label class="form-check-label" for="crm">CRM</label>
                                 <span style="color:red;" id= "crmErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" name="project" id="project" value="1">
                                 <label class="form-check-label" for="project">Project</label>
                                 <span style="color:red;" id="projectErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" name="hrm" id="hrm" value="1">
                                 <label class="form-check-label" for="hrm">HRM</label>
                                 <span style="color:red;" id= "hrmErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" name="account" id="account" value="1">
                                 <label class="form-check-label" for="account">Account</label>
                                 <span style="color:red;" id= "accountErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" name="pos" id="pos" value="1">
                                 <label class="form-check-label" for="pos">POS</label>
                                 <span style="color:red;" id= "posErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" role="switch" name="chatgpt" id="chatgpt" value="1">
                                 <label class="form-check-label" for="chatgpt">ChatGPT</label>
                                 <span style="color:red;" id= "chatgptErr"></span>
                              </div>

                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php foreach ($data as $value): ?>
<div class="row">
<div class="plan_card">
   <div class="card price-card price-1 wow animate__fadeInUp" data-wow-delay="0.2s" style="
      visibility: visible;
      animation-delay: 0.2s;
      animation-name: fadeInUp;
      ">
      <div class="card-body">
         <span class="price-badge bg-primary"><?php echo $value['planname']; ?></span>
         <h1 class="mb-4 f-w-600 ">$<?php echo $value['price']; ?>
            <small class="text-sm">/<?php echo $value['duration']; ?></small>
         </h1>
         <p class="mb-0">
            Duration : <?php echo $value['duration']; ?><br/>
         </p>
         <div class="row ">
            <div class="col-6">
               <ul class="list-unstyled my-5">
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span><?php echo $value['mxusers']; ?> Users</li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span><?php echo $value['mxcustomer']; ?> Customers</li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span><?php echo $value['mxvendor']; ?> Vendors</li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span><?php echo $value['mxclient']; ?> Clients</li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span><?php echo $value['storlimit']; ?> MB  Storage</li>
               </ul>
            </div>
            <div class="col-6">
               <ul class="list-unstyled my-5">
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['CRM']; ?></li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['project']; ?></li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['HRM']; ?></li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['account']; ?></li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['POS']; ?></li>
                  <li class="white-sapce-nowrap"><span class="theme-avtar"><i class="text-primary ti ti-circle-plus"></i></span>Enable <?php echo $value['chatGPT']; ?></li>
               </ul>
            </div>
         </div>


         <!-- <div class="col-4">
            <a title="Edit Plan" href="#" class="btn btn-primary btn-icon m-1" data-size="lg" data-url="<?php// echo base_url('edit_plan/' . $value['id']); ?>" data-ajax-popup="true" data-title="Edit Plan" data-toggle="tooltip" data-original-title="Edit">
            <i class="ti ti-edit">Edit</i>
            </a>
         </div> -->

                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" onclick="redirectToEdit(<?php// echo $value['id']; ?>)">
                     <i class="ti ti-edit">Edit</i>
                  </button> -->
                  <!-- <a href="<?php //echo base_url('edit_plan/' . $value['id']); ?>" title="Edit this Plan"> 
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                  <i class="ti ti-edit">Edit</i>
                  </button></a> -->


               <div class="col">
               <div class="float-end">
               <input type="hidden" class="editplan" value="<?= $value['id']; ?>">

               <button type="button" data-id="<?= $value['id']; ?>" class="btn btn-primary editplan">Edit</button>
               <div id="Modal<?= $value['id'];?>" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Plan</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="updateplan<?= $value['id']; ?>" action="" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="planname" id="name" value="<?= $value['planname']; ?>">
                                <span style="color:red;" id="nameErr"></span>
                            </div>
                              <div class="form-group">
                                 <label for="price">Price:</label>
                                 <input type="number" class="form-control" name="price" id="price"  value="<?=$value['price']; ?>">
                                 <span style="color:red;" id= "priceErr"></span>
                              </div>
                              <div class="form-control">
                                 <label for="duration">Duration:</label>
                                 <select name="duration" id="duration">
                                    <option value="Lifetime">Lifetime</option>
                                    <option value="Per Month">Per Month</option>
                                    <option value="Per Years">Per Years</option>
                                 </select>
                                 <span style="color:red;" id= "durationErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxuser">Maximum Users:</label>
                                 <input type="number" class="form-control" name="mxuser" id="mxuser"  value="<?=$value['mxusers']; ?>">
                                 <span style="color:red;" id= "mxuserErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxcustomer">Maximum Customers:</label>
                                 <input type="number" class="form-control" name="mxcustomer" id="mxcustomer" value="<?=$value['mxcustomer']; ?>">
                                 <span style="color:red;" id= "mxcustomerErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxvendor">Maximum Vendors:</label>
                                 <input type="number" class="form-control" name ="mxvendor" id="mxvendor"  value="<?=$value['mxvendor']; ?>">
                                 <span style="color:red;" id= "mxvendorErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="mxclient">Maximum Clients:</label>
                                 <input type="number" class="form-control" name="mxclient" id="mxclient"  value="<?=$value['mxclient']; ?>">
                                 <span style="color:red;" id= "mxclientErr"></span>
                              </div>
                              <div class="form-group">
                                 <label for="strli">Storage Limit:</label>
                                 <input type="number" class="form-control" name="storlimit" id="storlimit" placeholder="" value="<?=$value['storlimit']; ?>">
                                 <span style="color:red;" id= "strliErr"></span>
                              </div>
                              <div class="form-group">
                                 <Description for="description">
                                 Description:</label>
                                 <div class="form-group">
                                    <textarea id="description" class="form-control" name="description" rows="5" value="<?=$value['description']; ?>"> </textarea>
                                    <span style="color:red;" id= "descriptionErr"></span>
                                 </div>
                              </div>

                              <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" name="crm" id="crm" <?php if(isset($value['crm']) && $value['crm']) echo 'checked';?> value="1" >
                                 <label class="form-check-label" for="crm">CRM</label>
                                 <span style="color:red;" id= "crmErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" name="project" id="project" <?php if(isset($value['project']) && $value['project']) echo 'checked';?> value="1" >
                                 <label class="form-check-label" for="project">Project</label>
                                 <span style="color:red;" id="projectErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" name="hrm" id="hrm" <?php if(isset($value['hrm']) && $value['hrm']) echo 'checked';?> value="1">
                                 <label class="form-check-label" for="hrm">HRM</label>
                                 <span style="color:red;" id= "hrmErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" name="account" id="account" <?php if(isset($value['account']) && $value['account']) echo 'checked';?> value="1">
                                 <label class="form-check-label" for="account">Account</label>
                                 <span style="color:red;" id= "accountErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" name="pos" id="pos" <?php if(isset($value['pos']) && $value['pos']) echo 'checked';?> value="1" >
                                 <label class="form-check-label" for="pos">POS</label>
                                 <span style="color:red;" id= "posErr"></span>
                              </div>

                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" name="chatgpt" id="chatgpt" <?php if(isset($value['chatgpt']) && $value['chatgpt']) echo 'checked';?> value="1">
                                 <label class="form-check-label" for="chatgpt">ChatGPT</label>
                                 <span style="color:red;" id= "chatgptErr"></span>
                              </div>

                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


      </div>
   </div>
</div>
<?php endforeach; ?> 



<!-- <script>
  function redirectToEdit(id) {
    window.location.href = "<?php //echo base_url('edit_plan/'); ?>" + id;
  }
</script> -->




      <script>
               $(document).ready(function() {
               $('#addplan').submit(function(e) {e.preventDefault();

               var nameErr = $('#nameErr');
               var priceErr = $('#priceErr');
               var durationErr = $('#durationErr');
               var mxuserErr = $('#mxuserErr');
               var mxcustomerErr = $('#mxcustomerErr');
               var mxvendorErr = $('#mxvendorErr');
               var mxclientErr = $('#mxclientErr');
               var strliErr = $('#strliErr');
               var descriptionErr = $('#descriptionErr');
               // var crmErr = $('#crmErr');
               // var projectErr = $('#projectErr');
               // var hrmErr = $('#hrmErr');
               // var accountErr = $('#accountErr');
               // var posErr = $('#posErr');
               // var chatgptErr = $('#chatgptErr');
               

            $.ajax({
               url: "<?php echo base_url('add_plan') ?>",
               type: "POST",
               data: $('#addplan').serialize(),
               dataType: "json",
               success: function(response)
               {
               nameErr.text(response.planname ? response.planname.message : '');
               priceErr.text(response.price ? response.price.message : '');
               durationErr.text(response.duration ? response.duration.message : '');
               mxuserErr.text(response.mxuser ? response.mxuser.message : '');
               mxcustomerErr.text(response.mxcustomer ? response.mxcustomer.message : '');
               mxvendorErr.text(response.mxvendor ? response.mxvendor.message : '');
               mxclientErr.text(response.mxclient ? response.mxclient.message : '');
               strliErr.text(response.storlimit ? response.storlimit.message : '');
               descriptionErr.text(response.description ? response.description.message : '');
               // crmErr.text(response.CRM ? response.CRM.message : '');
               // projectErr.text(response.project? response.project.message : '');
               // hrmErr.text(response.HRM ? response.HRM.message : '');
               // accountErr.text(response.account ? response.account.message : '');
               // posErr.text(response.POS ? response.POS.message : '');
               // chatgptErr.text(response.chatGPT ? response.chatGPT.message : '');

               if (response.success) {
               alert(response.success.message);
               $('#addplan')[0].reset();
               window.location.reload();
                        }
               }
               });
               });
               });
      </script>



            


            
            <script>

               $(document).ready(function() {
               $('.editplan').click(function() {
                  var attributeId = $(this).data('id');
                  $('#Modal' + attributeId).modal('show');

                  $('#updateplan' + attributeId).submit(function(e) {
                     e.preventDefault();
                     var url = "<?php echo base_url('update_plan/'); ?>" + attributeId;
                     $.ajax({
                     url:url,
                     type: "POST",
                     data: $(this).serialize(),
                     dataType: "json",
                     success: function(response) {
                        if (response.success) {
                           alert(response.message);
                           window.location.reload();
                        }
                     }
                     });
                  });
               });
               });

            </script>




                <!-- <script>
                    $(document).ready(function() {
                    $('#updateplan').submit(function(e) {e.preventDefault();

                  $.ajax({
                     url: "<?php // echo base_url('update_plan/'.$value['id'])?>",
                     type: "POST",
                     data: $('#updateplan').serialize(),
                     dataType: "json",
                     success: function(response)
                      {

                     if (response.success) {
                     alert(response.message);
                     
                               }
                      }
                    });
                 });
             });
            </script> -->


       




<?= $this->endSection() ?>