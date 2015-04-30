<?php $this->load->view("partial/header"); ?>
<br />
<h3><?php echo $this->lang->line('common_welcome_message'); ?></h3>
<div class="row">
	<?php
	foreach($allowed_modules->result() as $module)
	{
	?>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image" />
                        </div>
                        <div class="col-xs-9 text-right">
                            <div><?php echo $this->lang->line("module_".$module->module_id) ?></div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo site_url("$module->module_id");?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
	<?php
	}
	?>
</div>
<?php $this->load->view("partial/footer"); ?>