
<?php $this->load->view("partial/header"); ?>
<div id="page_title" style="margin-bottom:8px;"><?php echo $this->lang->line('reports_reports'); ?></div>
<div id="welcome_message"><p class="lead"><?php echo $this->lang->line('reports_welcome_message'); ?></p>
    </div>
<style>
    .list-group-item{
        margin-bottom: 3px;
    }
</style>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $this->lang->line('reports_graphical_reports'); ?></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_categories');?>"><?php echo $this->lang->line('reports_categories'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_customers');?>"><?php echo $this->lang->line('reports_customers'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_suppliers');?>"><?php echo $this->lang->line('reports_suppliers'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_items');?>"><?php echo $this->lang->line('reports_items'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_employees');?>"><?php echo $this->lang->line('reports_employees'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_taxes');?>"><?php echo $this->lang->line('reports_taxes'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_discounts');?>"><?php echo $this->lang->line('reports_discounts'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/graphical_summary_payments');?>"><?php echo $this->lang->line('reports_payments'); ?></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $this->lang->line('reports_summary_reports'); ?></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_categories');?>"><?php echo $this->lang->line('reports_categories'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_customers');?>"><?php echo $this->lang->line('reports_customers'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_suppliers');?>"><?php echo $this->lang->line('reports_suppliers'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_items');?>"><?php echo $this->lang->line('reports_items'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_employees');?>"><?php echo $this->lang->line('reports_employees'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_taxes');?>"><?php echo $this->lang->line('reports_taxes'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_discounts');?>"><?php echo $this->lang->line('reports_discounts'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/summary_payments');?>"><?php echo $this->lang->line('reports_payments'); ?></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $this->lang->line('reports_detailed_reports'); ?></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo site_url('reports/detailed_sales');?>"><?php echo $this->lang->line('reports_sales'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/detailed_receivings');?>"><?php echo $this->lang->line('reports_receivings'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/specific_customer');?>"><?php echo $this->lang->line('reports_customer'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/specific_employee');?>"><?php echo $this->lang->line('reports_employee'); ?></a>
                    </ul>
                </div>
            </div>
            </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $this->lang->line('reports_inventory_reports'); ?></div>
                <div class="panel-body">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo site_url('reports/inventory_low');?>"><?php echo $this->lang->line('reports_low_inventory'); ?></a>
                        <a class="list-group-item" href="<?php echo site_url('reports/inventory_summary');?>"><?php echo $this->lang->line('reports_inventory_summary'); ?></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view("partial/footer"); ?>

<script type="text/javascript" language="javascript">
$(document).ready(function()
{
});
</script>
