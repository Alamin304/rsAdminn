<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('emailsettingcontent') ?>

<!--Email Settings-->
<div id="email-settings" class="card">
   <div class="card-header">
      <h5>Email Settings</h5>
   </div>
   <div class="card-body">
      <form method="POST" action="https://demo.rajodiya.com/erpgo-saas/email-settings" accept-charset="UTF-8">
         <input name="_token" type="hidden" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">
         <input type="hidden" name="_token" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_driver" class="form-label">Mail Driver</label>
                  <input class="form-control" placeholder="Enter Mail Driver" name="mail_driver" type="text" value="smtp" id="mail_driver">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_host" class="form-label">Mail Host</label>
                  <input class="form-control " placeholder="Enter Mail Host" name="mail_host" type="text" value="mail.example.com" id="mail_host">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_port" class="form-label">Mail Port</label>
                  <input class="form-control" placeholder="Enter Mail Port" name="mail_port" type="text" value="465" id="mail_port">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_username" class="form-label">Mail Username</label>
                  <input class="form-control" placeholder="Enter Mail Username" name="mail_username" type="text" value="test@example.com" id="mail_username">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_password" class="form-label">Mail Password</label>
                  <input class="form-control" placeholder="Enter Mail Password" name="mail_password" type="text" value="test123" id="mail_password">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_encryption" class="form-label">Mail Encryption</label>
                  <input class="form-control" placeholder="Enter Mail Encryption" name="mail_encryption" type="text" value="ssl" id="mail_encryption">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_from_address" class="form-label">Mail From Address</label>
                  <input class="form-control" placeholder="Enter Mail From Address" name="mail_from_address" type="text" value="test@example.com" id="mail_from_address">
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="mail_from_name" class="form-label">Mail From Name</label>
                  <input class="form-control" placeholder="Enter Mail From Name" name="mail_from_name" type="text" value="Test" id="mail_from_name">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="card-footer d-flex justify-content-end">
               <div class="form-group me-2">
                  <a href="#" data-url="https://demo.rajodiya.com/erpgo-saas/test-mail" data-ajax-popup="true"
                     data-title="Send Test Mail" class="btn btn-primary ">
                  Send Test Mail
                  </a>
               </div>
               <div class="form-group">
                  <input class="btn btn-primary" type="submit" value="Save Changes">
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<?= $this->endSection() ?>