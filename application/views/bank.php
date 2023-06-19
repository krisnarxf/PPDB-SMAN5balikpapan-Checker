<div class="limiter">
    <?php echo validation_errors(); ?>
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <?php echo form_open('index.php/welcome/cek_bank'); ?>
            <div class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-51">
                    <?= $title; ?>
                </span>
                <div class="wrap-input100 validate-input m-b-16" data-validate="NISN is Required..">
                    <input class="input100" type="number" id="accountNumber" name="accountNumber"
                        placeholder="NISN" >
                    <span class="focus-input100"></span>
                </div>
                <label for="accountBank">Tanggal Lahir</label>
                
                <div class="wrap-input100 validate-input m-b-16" data-validate="TGL Lahir is Required..">
                    <input class="input100" type="date" id="accountBank" name="accountBank"
                        placeholder="Tgl_Lahir" >
                    <span class="focus-input100"></span>
                </div>
                <div class="flex-sb-m w-full p-t-3 p-b-1">
                    <!-- <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Ingat Rekening
                        </label>
                    </div> 
                    <div>
                        <a href="#" class="txt1">
                            Error?
                        </a>
                    </div>-->

                    <!-- Large modal -->
                    <button type="button" class="login10-form-btn" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Disclaimer</button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Disclaimer</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Website ini merupakan tempat kedua untuk mengecek hasil PPDB dari SMAN 5 BALIKPAPAN. 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Small modal -->
                    <button type="button" class="login10-form-btn" data-toggle="modal"
                        data-target=".bd-example2-modal-lg">Credit</button>

                    <div class="modal fade bd-example2-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mySmallModalLabel">Credit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Credit by SMA 5 Balikpapan & Recode by Krisna ganteng sekali walalla tralala uhuy uyeee masuk pak eko 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-login100-form-btn m-t-17 text-danger">
                    <button type="submit" class="login100-form-btn">
                        DOWNLOAD
                    </button>
                </div>
            </div>

            <div class="form-outline mb-3 text-center" style="" id="result-txt">
                <?= $this->session->flashdata('msg2'); ?>
            </div>
            <?= form_close(); ?>

            <!-- Social media list/icons here: ------------------------------------------------------------------------------------->
        <!-- Simply comment or uncomment the ones you would like to use/hide -->
        <div>
            <ul class="about-social list-inline mt-5 text-center">

                <!-- Change your social media icons here, uncomment the ones that apply, and replace the "#" with your actual link -->

                <!-- Instagram Icon -->
                <li class="list-inline-item"><a href="https://instagram.com/krisnarxf" target="_blank"><i class="mdi mdi-instagram"></i></a></li>

                <!-- YouTube Icon -->
                <li class="list-inline-item"><a href="https://youtube.com/@krisnarxf" target="_blank"><i class="mdi mdi-youtube-play"></i></a></li>

                <!-- Twitter Icon -->
                <li class="list-inline-item"><a href="https://twitter.com/krisnarxf" target="_blank"><i class="mdi mdi-twitter"></i></a></li>

                <!-- Facebook Icon -->
                <li class="list-inline-item"><a href="https://facebook.com/krisnarxf" target="_blank"><i class="mdi mdi-facebook"></i></a></li>

                <!-- Github Icon -->
                <li class="list-inline-item"><a href="https://github.com/krisnarxf" target="_blank"><i class="mdi mdi-github-circle"></i></a></li>

                <!-- Email Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-email"></i></a> -->
                </li>

                <!-- Vimeo Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-vimeo"></i></a></li> -->

                <!-- Linkedin Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-linkedin"></i></a></li> -->

                <!-- Telegram Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-telegram"></i></a></li> -->

                <!-- Github Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-github-circle"></i></a></li> -->

                <!-- Pinterest Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-pinterest"></i></a></li> -->

                <!-- Tumblr Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-tumblr"></i></a></li> -->

                <!-- Soundcloud Icon -->
                <!-- <li class="list-inline-item"><a href="#" target="_blank"><i class="mdi mdi-soundcloud"></i></a></li> -->

            </ul>
        </div>

            <!-- Footer information Here -------------------------------------------------------------------------------------------->
            <div class="text-center">
                <div class="col-md-12">
                    <div class="mb-4 text-center footer-alt">

                        <!-- Replace the text of the footer here -->
                        <p class="copyright_content mb-6 mt-4">© 2023 - Krisna Putra Muhammad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>