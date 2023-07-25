<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('editCRMcontent') ?>


   
            <div class="modal-body">
            <?php foreach ($data as $value): ?>
                <form id="myForm">
                    <div class="form-group">
                        <label for="emailInput">Preferred Email Address:</label>
                        <input type="email" class="form-control" id="emailInput" name="email" value="<?=$value['preferred_email_address']; ?>">
                        <span style="color:red;" id="emailErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Preferred Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?=$value['preferred_password']; ?>">
                        <span style="color:red;" id="passwordErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">First Name:</label>
                        <input type="text" class="form-control" id="nameInput" name="firstname" value="<?=$value['first_name']; ?>">
                        <span style="color:red;" id="nameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">Last Name:</label>
                        <input type="text" class="form-control" id="nameInput" name="lastname" value="<?=$value['last_name']; ?>">
                        <span style="color:red;" id="lastnameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?=$value['phone']; ?>">
                        <span style="color:red;" id="phoneErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="street">Street Address:</label>
                        <input type="text" class="form-control" id="street" name="street" value="<?=$value['street_address']; ?>">
                        <span style="color:red;" id="streetErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code:</label>
                        <input type="text" class="form-control" id="zip" name="zip" value="<?=$value['zip_code']; ?>">
                        <span style="color:red;" id="zipErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" value="<?=$value['city']; ?>">
                        <span style="color:red;" id="cityErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" id="state" name="state" value="<?=$value['state']; ?>">
                        <span style="color:red;" id="stateErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="note">Special requests ( Notes ):</label>
                        <textarea type="text" class="form-control" id="note" name="note" value="<?=$value['notes']; ?>"></textarea>
                        <span style="color:red;" id="noteErr"></span>
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                </form>
                <?php endforeach; ?> 
            </div>
          


            <script>
                    $(document).ready(function() {
                    $('#myForm').submit(function(e) {e.preventDefault();
                  $.ajax({
                     url: "<?php echo base_url('update_CRM/').$value['id']?>",
                     type: "POST",
                     data: $('#myForm').serialize(),
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