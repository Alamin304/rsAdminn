<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('brandsettingcontent') ?>

<!--Site Settings-->
<div id="brand-settings" class="card">
                        <div class="card-header">
                            <h5>Brand Settings</h5>
                        </div>
                        <form method="POST" action="https://demo.rajodiya.com/erpgo-saas/systems" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="dWkrDdZJThDjeUDdSQnpRdoJQaFVKi8LosSlA7hL">

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Logo dark</h5>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class=" setting-card">
                                                <div class="logo-content mt-4">
                                                    <img id="image" src="https://demo.rajodiya.com/erpgo-saas/storage/uploads/logo//logo-dark.png"
                                                         class="big-logo">
                                                </div>
                                                <div class="choose-files mt-5">
                                                    <label for="full_logo">
                                                        <div class=" bg-primary company_logo_update"> <i
                                                                class="ti ti-upload px-1"></i>Choose file here
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
                                                    <img id="image1" src="https://demo.rajodiya.com/erpgo-saas/storage/uploads/logo//logo-light.png"
                                                         class="big-logo img_setting">
                                                </div>
                                                <div class="choose-files mt-5">
                                                    <label for="logo_light">
                                                        <div class=" bg-primary dark_logo_update"> <i
                                                                class="ti ti-upload px-1"></i>Choose file here
                                                        </div>
                                                        <input type="file" class="form-control file" name="logo_light" id="logo_light"
                                                               data-filename="logo_light">
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
                                                    <img id="image2" src="https://demo.rajodiya.com/erpgo-saas/storage/uploads/logo//favicon.png" width="50px"
                                                         class="img_setting">
                                                </div>
                                                <div class="choose-files mt-5">
                                                    <label for="favicon">
                                                        <div class="bg-primary company_favicon_update"> <i
                                                                class="ti ti-upload px-1"></i>Choose file here
                                                        </div>
                                                        <input type="file" class="form-control file"  id="favicon" name="favicon"
                                                               data-filename="favicon">
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
                                            <input class="form-control" placeholder="Title Text" name="title_text" type="text" value="ERPGo SaaS" id="title_text">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="footer_text" class="form-label">Footer Text</label>
                                            <input class="form-control" placeholder="Enter Footer Text" name="footer_text" type="text" value="© Copyright ERPGo SaaS" id="footer_text">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="default_language" class="form-label text-dark">Default Language</label>
                                            <div class="changeLanguage">
                                                <select name="default_language" id="default_language" class="form-control select">
                                                                                                            <option  value="Arabic">
                                                            ARABIC</option>
                                                                                                            <option  value="Chinese">
                                                            CHINESE</option>
                                                                                                            <option  value="Danish">
                                                            DANISH</option>
                                                                                                            <option  value="German">
                                                            GERMAN</option>
                                                                                                            <option  value="English">
                                                            ENGLISH</option>
                                                                                                            <option  value="Spanish">
                                                            SPANISH</option>
                                                                                                            <option  value="French">
                                                            FRENCH</option>
                                                                                                            <option  value="Hebrew">
                                                            HEBREW</option>
                                                                                                            <option  value="Italian">
                                                            ITALIAN</option>
                                                                                                            <option  value="Japanese">
                                                            JAPANESE</option>
                                                                                                            <option  value="Dutch">
                                                            DUTCH</option>
                                                                                                            <option  value="Polish">
                                                            POLISH</option>
                                                                                                            <option  value="Portuguese">
                                                            PORTUGUESE</option>
                                                                                                            <option  value="Russian">
                                                            RUSSIAN</option>
                                                                                                            <option  value="Turkish">
                                                            TURKISH</option>
                                                                                                            <option  value="Portuguese (Brazil)">
                                                            PORTUGUESE (BRAZIL)</option>
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
                                                    <input type="checkbox" name="SITE_RTL" id="SITE_RTL" data-toggle="switchbutton"   data-onstyle="primary">
                                                    <label class="custom-control-label" for="SITE_RTL"></label>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="text-dark mb-1 mt-3" for="display_landing_page">Enable Landing Page</label>
                                            <div class="form-check form-switch d-inline-block">
                                                <input type="checkbox" name="display_landing_page" class="form-check-input " id="display_landing_page" data-toggle="switchbutton"  checked data-onstyle="primary">
                                                <label class="form-check-label" for="display_landing_page"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label class="text-dark mb-1 mt-3" for="signup_button">Enable Sign-Up Page</label>
                                            <div class="">
                                                <input type="checkbox" name="enable_signup" id="enable_signup" data-toggle="switchbutton" checked=&quot;checked&quot; data-onstyle="primary">
                                                <label class="form-check-label" for="enable_signup"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label class="text-dark mb-1 mt-3" for="email_verification">Email Verification</label>
                                            <div class="">
                                                <input type="checkbox" name="email_verification" id="email_verification" data-toggle="switchbutton"  checked=&quot;checked&quot; data-onstyle="primary">
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
                                            <div class="theme-color themes-color">
                                                <a href="#!" class="" data-value="theme-1" onclick="check_theme('theme-1')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-1" style="display: none;">
                                                <a href="#!" class=" " data-value="theme-2" onclick="check_theme('theme-2')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-2" style="display: none;">
                                                <a href="#!" class="active_color" data-value="theme-3" onclick="check_theme('theme-3')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-3" style="display: none;">
                                                <a href="#!" class="" data-value="theme-4" onclick="check_theme('theme-4')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-4" style="display: none;">
                                                <a href="#!" class="" data-value="theme-5" onclick="check_theme('theme-5')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-5" style="display: none;">

                                                <br>

                                                <a href="#!" class="" data-value="theme-6" onclick="check_theme('theme-6')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-6" style="display: none;">
                                                <a href="#!" class="" data-value="theme-7" onclick="check_theme('theme-7')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-7" style="display: none;">
                                                <a href="#!" class="" data-value="theme-8" onclick="check_theme('theme-8')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-8" style="display: none;">
                                                <a href="#!" class="" data-value="theme-9" onclick="check_theme('theme-9')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-9" style="display: none;">
                                                <a href="#!" class="" data-value="theme-10" onclick="check_theme('theme-10')"></a>
                                                <input type="radio" class="theme_color" name="color" value="theme-10" style="display: none;">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-4">
                                            <h6 class="mt-2">
                                                <i data-feather="layout" class="me-2"></i>Sidebar settings
                                            </h6>
                                            <hr class="my-2" />
                                            <div class="form-check form-switch ">
                                                <input type="checkbox" class="form-check-input" id="cust-theme-bg" name="cust_theme_bg"  checked/>
                                                <label class="form-check-label f-w-600 pl-1" for="cust-theme-bg"
                                                >Transparent layout</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-4 col-md-4">
                                            <h6 class="mt-2 ">
                                                <i data-feather="sun" class="me-2"></i>Layout settings
                                            </h6>
                                            <hr class="my-2 " />
                                            <div class="form-check form-switch mt-2 ">
                                                <input type="checkbox" class="form-check-input" id="cust-darklayout" name="cust_darklayout" />
                                                <label class="form-check-label f-w-600 pl-1" for="cust-darklayout">Dark Layout</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="form-group">
                                <input class="btn btn-print-invoice btn-primary m-r-10" type="submit" value="Save Changes">
                            </div>
                        </div>
                        </form>
                    </div>


<?= $this->endSection() ?>