<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>/favicon.ico' />
    <link rel="stylesheet" rev="stylesheet" href="<?php echo base_url(); ?>css/login.css"/>
    <link rel="stylesheet" rev="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Biashara Point Of Sale <?php echo $this->lang->line('login_login'); ?></title>
    <script src="<?php echo base_url(); ?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript"
            charset="UTF-8"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#login_form input:first").focus();
        });
    </script>
    <style>
        .panel-primary {
            border-color: transparent;
        }
        body{
            background: #EAEAEA;
            padding-top: 10%;
            overflow: hidden;
        }
    </style>
</head>
<body>
<h3 style="text-transform: capitalize; margin-bottom: 10px">Biashara Point Of Sale <?php echo $this->config->item('application_version'); ?></h3>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading"> <?php echo $this->lang->line('login_login'); ?></div>
            <div class="panel-body">
                <?php echo form_open('login') ?>
                <div id="container">
                    <?php echo validation_errors(); ?>
                        <div class="form-group">
                            <label for="username"><?php echo $this->lang->line('login_username'); ?></label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password"><?php echo $this->lang->line('login_password'); ?></label>
                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-block btn-default">Login</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
