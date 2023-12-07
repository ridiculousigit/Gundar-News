<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login Akun Gundar News</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo base_url().'login/css/style.css'?>" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                

   <p><?php echo $this->session->flashdata('msg');?></p>
                       <p class="mt-4 text-white lead text-center">
                            Selamat Datang Jurnalis Kampus
                        </p>
                                <div class="mt-4">
                                    <form action="<?php echo base_url().'user/user/auth'?>" method="post">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="nim" value="" placeholder="Masukkan NPM" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" value="" placeholder="Masukkan Password" required>
                                        </div>
                                        <label class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description text-white">Biarkan Saya Tetap Masuk</span>
                                        </label>
                                        <button type="submit" class="btn btn-primary float-right">Masuk</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>ATAU</span></p>
                                </div>
                               
                                <p class="text-center">
                                Belum Punya Akun ? <a href="<?php echo base_url().'pendaftaran'?>">Sign Up Now !</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                            &copy; 2021 - 2023 Gundar News | All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
