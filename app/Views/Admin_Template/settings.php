<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('settingcontent') ?> 

 
  <!--Site Settings-->
  <div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#brand-settings" role="tab" aria-controls="v-pills-home" aria-selected="true">Brand Setting</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#email-settings" role="tab" aria-controls="v-pills-profile" aria-selected="false">Email Setting</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#recaptcha-settings" role="tab" aria-controls="v-pills-messages" aria-selected="false">ReCaptch Setting</a>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="brand-settings" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="card">
          <div class="card-header">
            <h5>Brand Settings</h5>
          </div>
          <div class="card-body">
          <?php foreach ($data1 as $value1): ?>
          <form method="POST" action=" " id="brandsetting" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Logo dark</h5>
                  </div>
                  <div class="card-body pt-0">
                    <div class=" setting-card">
                      <div class="logo-content mt-4">
                      <img style="width:40px; height:40px;" src="<?= base_url('photos/'. $value1['logo_dark']) ?>" class="big-logo img_setting">
                      </div>
                      <div class="choose-files mt-5">
                        <label for="full_logo">
                          <div class=" bg-primary company_logo_update">
                            <i class="ti ti-upload px-1"></i>Choose file here
                          </div>
                          <input type="file" name="logo_dark" id="full_logo" class="form-control file" data-filename="full_logo">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Logo Light</h5>
                  </div>
                  <div class="card-body pt-0">
                    <div class=" setting-card">
                      <div class="logo-content mt-4">
                      <img style="width:40px; height:40px;" src="<?= base_url('photos/'. $value1['logo_light']) ?>" class="big-logo img_setting">
                      </div>
                      <div class="choose-files mt-5">
                        <label for="logo_light">
                          <div class=" bg-primary dark_logo_update">
                            <i class="ti ti-upload px-1"></i>Choose file here
                          </div>
                          <input type="file" class="form-control file" name="logo_light" id="logo_light" data-filename="logo_light">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Favicon</h5>
                  </div>
                  <div class="card-body pt-0">
                    <div class=" setting-card">
                      <div class="logo-content mt-4">
                      <img style="width:40px; height:40px;" src="<?= base_url('photos/'. $value1['favicon']) ?>" class="big-logo img_setting">
                      </div>
                      <div class="choose-files mt-5">
                        <label for="favicon">
                          <div class="bg-primary company_favicon_update">
                            <i class="ti ti-upload px-1"></i>Choose file here
                          </div>
                          <input type="file" class="form-control file" id="favicon" name="favicon" data-filename="favicon">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="title_text" class="form-label">Title Text</label>
                    <input class="form-control" placeholder="Title Text" name="title_text" type="text" id="title_text" value="<?=$value1['title_text']; ?>">
                    <span style="color:red;" id="titleErr"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="footer_text" class="form-label">Footer Text</label>
                    <input class="form-control" placeholder="Enter Footer Text" name="footer_text" type="text" id="footer_text" value="<?=$value1['footer_text']; ?>">
                    <span style="color:red;" id="footerErr"></span>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="default_language" class="form-label text-dark">Default Language</label>
                    <div class="changeLanguage">
                    <select name="default_language" id="default_language" class="form-control select">
                    <option value="Arabic" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Arabic') echo 'selected'; ?>>ARABIC</option>
                    <option value="Chinese" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Chinese') echo 'selected'; ?>>CHINESE</option>
                    <option value="Danish" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Danish') echo 'selected'; ?>>DANISH</option>
                    <option value="German" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'German') echo 'selected'; ?>>GERMAN</option>
                    <option value="English" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'English') echo 'selected'; ?>>ENGLISH</option>
                    <option value="Spanish" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Spanish') echo 'selected'; ?>>SPANISH</option>
                    <option value="French" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'French') echo 'selected'; ?>>FRENCH</option>
                    <option value="Hebrew" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Hebrew') echo 'selected'; ?>>HEBREW</option>
                    <option value="Italian" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Italian') echo 'selected'; ?>>ITALIAN</option>
                    <option value="Japanese" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Japanese') echo 'selected'; ?>>JAPANESE</option>
                    <option value="Dutch" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Dutch') echo 'selected'; ?>>DUTCH</option>
                    <option value="Polish" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Polish') echo 'selected'; ?>>POLISH</option>
                    <option value="Portuguese" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Portuguese') echo 'selected'; ?>>PORTUGUESE</option>
                    <option value="Russian" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Russian') echo 'selected'; ?>>RUSSIAN</option>
                    <option value="Turkish" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Turkish') echo 'selected'; ?>>TURKISH</option>
                    <option value="Portuguese (Brazil)" <?php if(isset($value1['default_language']) && $value1['default_language'] == 'Portuguese (Brazil)') echo 'selected'; ?>>PORTUGUESE (BRAZIL)</option>
                    </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="form-group col-2">
              <div class="custom-control custom-switch">
                <label class="text-dark mb-1 mt-3" for="SITE_RTL">Enable RTL</label>
                <div class="">
                  <input type="checkbox" name="SITE_RTL" id="SITE_RTL" <?php if(isset($value1['RTL']) && $value1['RTL']) echo 'checked';?> data-toggle="switchbutton" data-onstyle="primary">
                  <label class="custom-control-label" for="SITE_RTL"></label>
                </div>
              </div>
            </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="text-dark mb-1 mt-3" for="display_landing_page">Enable Landing Page</label>
                    <div class="form-check form-switch d-inline-block">
                      <input type="checkbox" name="display_landing_page" class="form-check-input" id="display_landing_page" <?php if(isset($value1['landing_page']) && $value1['landing_page']) echo 'checked';?> data-toggle="switchbutton" data-onstyle="primary">
                      <label class="form-check-label" for="display_landing_page"></label>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="text-dark mb-1 mt-3" for="signup_button">Enable Sign-Up Page</label>
                    <div class="">
                      <input type="checkbox" name="enable_signup" id="enable_signup" <?php if(isset($value1['signup_page']) && $value1['signup_page']) echo 'checked';?> data-toggle="switchbutton" data-onstyle="primary">
                      <label class="form-check-label" for="enable_signup"></label>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="form-group">
                    <label class="text-dark mb-1 mt-3" for="email_verification">Email Verification</label>
                    <div class="">
                      <input type="checkbox" name="email_verification" id="email_verification" <?php if(isset($value1['email_verification']) && $value1['email_verification']) echo 'checked';?> data-toggle="switchbutton" data-onstyle="primary">
                      <label class="form-check-label" for="email_verification"></label>
                    </div>
                  </div>
                </div>
              </div>
              <h4 class="small-title">Theme Customizer</h4>
              <div class="setting-card setting-logo-box p-3">
                <div class="row">
                  <div class="col-lg-4 col-xl-4 col-md-4">
                    <h6 class="mt-2">
                      <i data-feather="credit-card" class="me-2"></i>Primary color settings
                    </h6>
                    <hr class="my-2" />
                    <div class="theme-color themes-color" id="themeColorSetting">
                  <label for="favcolor">Select your color:</label>
                  <input type="color" id="favcolor" name="color_setting" value="<?= $value1['color_setting']; ?>"><br><br>
                  <input type="text" id="colorValue" name="color_setting" value="<?= $value1['color_setting']; ?>">
                </div>
                  </div>
                  <div class="col-lg-4 col-xl-4 col-md-4">
                    <h6 class="mt-2">
                      <i data-feather="layout" class="me-2"></i>Sidebar settings
                    </h6>
                    <hr class="my-2" />
                    <div class="form-check form-switch ">
                      <input type="checkbox" class="form-check-input" id="cust-theme-bg" name="cust_theme_bg" <?php if(isset($value1['sidebar_setting']) && $value1['sidebar_setting']) echo 'checked';?> />
                      <label class="form-check-label f-w-600 pl-1" for="cust-theme-bg">Transparent layout</label>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-4 col-md-4">
                    <h6 class="mt-2 ">
                      <i data-feather="sun" class="me-2"></i>Layout settings
                    </h6>
                    <hr class="my-2 " />
                    <div class="form-check form-switch mt-2 ">
                      <input type="checkbox" class="form-check-input" id="cust-darklayout" name="cust_darklayout" <?php if(isset($value1['layout_setting']) && $value1['layout_setting']) echo 'checked';?> />
                      <label class="form-check-label f-w-600 pl-1" for="cust-darklayout">Dark Layout</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
            </form> 
            <?php endforeach; ?> 
          </div>
          <!--Email Settings-->
        </div>
</div>
        <div class="tab-pane fade" id="email-settings" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="card">
            <div class="card-header">
              <h5>Email Settings</h5>
            </div>
            <div class="card-body">
            <?php foreach ($data2 as $value2): ?>
                <form method="POST" id="emailsetting" action=" " accept-charset="UTF-8">
                  <input name="_token" type="hidden" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">
                  <input type="hidden" name="_token" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_driver" class="form-label">Mail Driver</label>
                        <input class="form-control" placeholder="Enter Mail Driver" name="mail_driver" type="text" id="mail_driver" value="<?=$value2['mail_driver']; ?>" >
                        <span style="color:red;" id="driverErr"></span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_host" class="form-label">Mail Host</label>
                        <input class="form-control " placeholder="Enter Mail Host" name="mail_host" type="text" id="mail_host" value="<?=$value2['mailhost']; ?>">
                        <span style="color:red;" id="hostErr"></span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_port" class="form-label">Mail Port</label>
                        <input class="form-control" placeholder="Enter Mail Port" name="mail_port" type="text" id="mail_port" value="<?=$value2['mailport']; ?>">
                        <span style="color:red;" id="portErr"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_username" class="form-label">Mail Username</label>
                        <input class="form-control" placeholder="Enter Mail Username" name="mail_username" type="text" id="mail_username" value="<?=$value2['mailuser_name']; ?>">
                        <span style="color:red;" id="usernameErr"></span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_password" class="form-label">Mail Password</label>
                        <input class="form-control" placeholder="Enter Mail Password" name="mail_password" type="password" id="mail_password" value="<?=$value2['mail_password']; ?>">
                        <span style="color:red;" id="passwordErr"></span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_encryption" class="form-label">Mail Encryption</label>
                        <input class="form-control" placeholder="Enter Mail Encryption" name="mail_encryption" type="text" id="mail_encryption" value="<?=$value2['mail_encryption']; ?>">
                        <span style="color:red;" id="encryptionErr"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_from_address" class="form-label">Mail From Address</label>
                        <input class="form-control" placeholder="Enter Mail From Address" name="mail_from_address" type="text" id="mail_from_address" value="<?=$value2['mail_address']; ?>">
                        <span style="color:red;" id="addressErr"></span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="mail_from_name" class="form-label">Mail From Name</label>
                        <input class="form-control" placeholder="Enter Mail From Name" name="mail_from_name" type="text" id="mail_from_name" value="<?=$value2['mail_name']; ?>">
                        <span style="color:red;" id="mailnameErr"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card-footer d-flex justify-content-end">
                      <!-- <div class="form-group me-2">
                        <a href="#" data-url="https://demo.rajodiya.com/erpgo-saas/test-mail" data-ajax-popup="true" data-title="Send Test Mail" class="btn btn-primary "> Send Test Mail </a>
                      </div> -->
                      <div class="form-group">
                      <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
                <?php endforeach; ?> 
              </div>
            </div>
          </div>
        <div class="tab-pane fade" id="recaptcha-settings" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <div class="card">
          <?php foreach ($data as $value): ?>
            <form method="POST" action=" " id="recaptch" accept-charset="UTF-8">
              <input type="hidden" name="_token" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">
              <div class="card-header">
                <div class="row">
                  <div class="col-6">
                    <h5 class="mb-2">ReCaptcha Settings</h5>
                    <a href="https://phppot.com/php/how-to-get-google-recaptcha-site-and-secret-key/" target="_blank" class="text-dark">
                      <small>(How to Get Google reCaptcha Site and Secret key)</small>
                    </a>
                  </div>
                  <div class="col switch-width text-end">
                    <div class="form-group mb-0">
                      <div class="custom-control custom-switch">
                        <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary" class="" name="recaptcha_module" id="recaptcha_module">
                        <label class="custom-control-label" for="recaptcha_module"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
              
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="google_recaptcha_key" class="form-label">Google Recaptcha Key</label>
                        <input class="form-control" placeholder="Enter Google Recaptcha Key" name="google_recaptcha_key" type="password" id="google_recaptcha_key" value="<?=$value['google_key']; ?>">
                        <span style="color:red;" id="keyErr"></span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="google_recaptcha_secret" class="form-label">Google Recaptcha Secret</label>
                        <input class="form-control" placeholder="Enter Google Recaptcha Secret" name="google_recaptcha_secret" type="password" id="google_recaptcha_secret" value="<?=$value['google_secret']; ?>">
                        <span style="color:red;" id="secretErr"></span>
                      </div>
                    </div>
                  </div>
           
                <div class="card-footer text-end">
                  <div class="form-group">
                     <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
          
               </div>
           </form>
           <?php endforeach; ?> 
       </div>
    </div>
</div>



<!-- ----Brand Settings update ------ -->

             <script>
                $(document).ready(function() {
                  $('#favcolor').change(function() {
                  var selectedColor = $(this).val();
                  console.log('Selected color:', selectedColor);
                  $('#colorValue').val(selectedColor);
                });

                $('#brandsetting').submit(function(e) {
                    e.preventDefault();
                    
                    

                    $.ajax({
                      url: "<?php echo base_url('update_brand_setting/').$value1['id']?>",
                      type: "POST",
                      processData: false,
                      contentType: false,
                      data: new FormData(this),
                      dataType: "json",
                      success: function(response) {
                          if (response.success) {
                            alert(response.message);
                            // window.location.reload();
                          }
                      }
                    });
                });
              });
            </script>


<script>

// $(document).ready(function() {
//     $('#colorValue').change(function() {
//         var selectedColor = $(this).val();
//         console.log('Selected color:', selectedColor);
//     });

//     $('#brandsetting').submit(function(e) {
//         e.preventDefault();

//         var colorValue = $('#colorValue').val();

//         $.ajax({
//             url: "<?php //echo base_url('update_brand_colore/').$value1['id']?>",
//             type: "POST",
//             data: {
//                 color_setting: colorValue
//             },
//             dataType: "json",
//             success: function(response) {
//                 if (response.success) {
//                     alert(response.message);
                    
//                 }
//             }
//         });
//     });
// });
// </script>


<!-- ------For Brand Setting------ -->

<!-- <script>
  $(document).ready(function() {
    $('#brandsetting').submit(function(e) {
      e.preventDefault();
      var titleErr = $('#titleErr');
      var footerErr = $('#footerErr');
      $.ajax({
        url: " <?php //echo base_url('brand_setting') ?> ",
        type: "POST",
        processData: false,
        contentType: false,
        data: new FormData(this),
        dataType: "json",
        success: function(response) {
          titleErr.text(response.title_text ? response.title_text.message : '');
          footerErr.text(response.footer_text ? response.footer_text.message : '');

          if (response.success) {
            alert(response.success.message);
            $('#brandsetting')[0].reset();
          }
        }
      });
    });
  });
</script> -->


<!-- ----Email Settings update ------ -->

             <script>
                    $(document).ready(function() {
                    $('#emailsetting').submit(function(e) {e.preventDefault();
                  $.ajax({
                     url: "<?php echo base_url('update_email_setting/').$value2['id']?>",
                     type: "POST",
                     data: $('#emailsetting').serialize(),
                     dataType: "json",
                     success: function(response)
                      {

                     if (response.success) {
                     alert(response.message);
                     window.location.reload();
                     
                               }
                      }
                    });
                 });
             });
            </script>


<!-- ------For Email Setting------ -->

<!-- <script>
  $(document).ready(function() {
    $('#emailsetting').submit(function(e) {
      e.preventDefault();
      var driverErr = $('#driverErr');
      var hostErr = $('#hostErr');
      var portErr = $('#portErr');
      var usernameErr = $('#usernameErr');
      var passwordErr = $('#passwordErr');
      var encryptionErr = $('#encryptionErr');
      var addressErr = $('#addressErr');
      var mailnameErr = $('#mailnameErr');
      $.ajax({
        url: " <?php// echo base_url('email_setting') ?> ",
        type: "POST",
        data: $('#emailsetting').serialize(),
        dataType: "json",
        success: function(response) {
          driverErr.text(response.mail_driver ? response.mail_driver.message : '');
          hostErr.text(response.mail_host ? response.mail_host.message : '');
          portErr.text(response.mail_port ? response.mail_port.message : '');
          usernameErr.text(response.mail_username ? response.mail_username.message : '');
          passwordErr.text(response.mail_password ? response.mail_password.message : '');
          encryptionErr.text(response.mail_encryption ? response.mail_encryption.message : '');
          addressErr.text(response.mail_from_address ? response.mail_from_address.message : '');
          mailnameErr.text(response.mail_from_name ? response.mail_from_name.message : '');

          if (response.success) {
            alert(response.success.message);
            $('#emailsetting')[0].reset();
          }
        }
      });
    });
  });
</script> -->


<!-- ----Recaptch Settings------ -->



<!-- <script>
  $(document).ready(function() {
    $('#recaptch').submit(function(e) {
      e.preventDefault();
      var keyErr = $('#keyErr');
      var secretErr = $('#secretErr');
      $.ajax({
        url: " <?php //echo base_url('recaptch_setting') ?> ",
        type: "POST",
        data: $('#recaptch').serialize(),
        dataType: "json",
        success: function(response) {
          keyErr.text(response.google_recaptcha_key ? response.google_recaptcha_key.message : '');
          secretErr.text(response.google_recaptcha_secret ? response.google_recaptcha_secret.message : '');

          if (response.success) {
            alert(response.success.message);
            $('#recaptch')[0].reset();
          }
        }
      });
    });
  });
</script> -->

<!-- ----Recaptch Settings update ------ -->

             <script>
                    $(document).ready(function() {
                    $('#recaptch').submit(function(e) {e.preventDefault();
                  $.ajax({
                     url: "<?php echo base_url('update_recaptch_setting/').$value['id']?>",
                     type: "POST",
                     data: $('#recaptch').serialize(),
                     dataType: "json",
                     success: function(response)
                      {

                     if (response.success) {
                     alert(response.message);
                     window.location.reload();
                     
                               }
                      }
                    });
                 });
             });
            </script>




<?= $this->endSection() ?>