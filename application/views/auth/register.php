<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar dan Buat Akun | Five Street</title>

    <!-- Icons font CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo get_theme_uri('custom/auth/register/vendor/datepicker/daterangepicker.css'); ?>" rel="stylesheet" media="all">
<link href="<?php echo get_theme_uri('custom/auth/register/css/style.css'); ?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo get_theme_uri('custom/auth/register/css/main.css'); ?>" rel="stylesheet" media="all">
    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Logo.png'); ?>">
    <!-- datepicker bootsrap -->
    
    <style>
        .input--style-2:hover {
            border-bottom: 1px solid #000000;
            color: #000000
        }
    </style>
</head>

<body>
    <div class="page-wrapper bg-black p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Buat Akun Five Street</h2>
                    <?php echo form_open('auth/register/verify'); ?>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Username" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                                    <?php echo form_error('username'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                                    <?php echo form_error('password'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nama lengkap" name="name" value="<?php echo set_value('name'); ?>" required>
                            <?php echo form_error('name'); ?>
                        </div>

                       <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Jenis Kelamin" minlength="9" maxlength="15" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin'); ?>" required>
                                    <?php echo form_error('jenis_kelamin'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" minlength="10" type="text" id="date" placeholder="Tempat/Tanggal Lahir" name="Tempat/Tanggal Lahir" value="<?php echo set_value('Tempat/Tanggal Lahir'); ?>" required>
                                    <?php echo form_error('Tempat/Tanggal Lahir'); ?>
                                </div>
                            </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="No HandPhone" minlength="9" maxlength="15" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required>
                                    <?php echo form_error('phone_number'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" minlength="10" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
                                    <?php echo form_error('email'); ?>
                                </div>
                            </div>
                        
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Alamat" name="address" value="<?php echo set_value('address'); ?>" required>
                            <?php echo form_error('address'); ?>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Daftar</button>
           <button class="btn--green" type="submit" > <a href="http://localhost/bsi_store//" class="btn btn-primary">Home</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
