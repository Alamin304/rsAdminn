<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('recaptchsettingcontent') ?>

 <!--ReCaptcha Settings-->
 <div id="recaptcha-settings" class="card">
                        <form method="POST" action="https://demo.rajodiya.com/erpgo-saas/recaptcha-settings" accept-charset="UTF-8">
                            <input type="hidden" name="_token" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="mb-2">ReCaptcha Settings</h5>
                                        <a href="https://phppot.com/php/how-to-get-google-recaptcha-site-and-secret-key/"
                                           target="_blank" class="text-dark">
                                            <small>(How to Get Google reCaptcha Site and Secret key)</small>
                                        </a>
                                    </div>
                                    <div class="col switch-width text-end">
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" data-toggle="switchbutton" data-onstyle="primary" class="" name="recaptcha_module" id="recaptcha_module"  >
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
                                            <input class="form-control" placeholder="Enter Google Recaptcha Key" name="google_recaptcha_key" type="text" value="************************" id="google_recaptcha_key">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="google_recaptcha_secret" class="form-label">Google Recaptcha Secret</label>
                                            <input class="form-control" placeholder="Enter Google Recaptcha Secret" name="google_recaptcha_secret" type="text" value="************************" id="google_recaptcha_secret">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="form-group">
                                    <input class="btn btn-print-invoice  btn-primary m-r-10" type="submit" value="Save Changes">
                                </div>
                            </div>
                        </form>

                    </div>

<?= $this->endSection() ?>