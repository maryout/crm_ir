<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget" id="widget-<?php echo create_widget_id(); ?>" data-name="<?php echo _l('home_tickets_report'); ?>">
    <?php if(is_admin()){ ?>
        <div class="row" id="tickets_report">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body padding-10">
                        <div class="widget-dragger"></div>
                        <div class="col-md-12">
                            <p class="pull-left mtop5"><?php echo _l('home_tickets_report'); ?></p>
                            <div class="dropdown pull-right mtop5 mright10">
                                <a href="#" id="tickets-report-mode" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span id="tickets-report-mode-name"> <?php echo _l('this_month') ?> </span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="tickets-report-mode">
                                    <li>
                                        <a href="#" data-type="this_week" onclick="update_tickets_report_table(this); return false;"><?php echo _l('this_week') ?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="last_week" onclick="update_tickets_report_table(this); return false;"><?php echo _l('last_week') ?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="this_month" onclick="update_tickets_report_table(this); return false;"><?php echo _l('this_month') ?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="last_month" onclick="update_tickets_report_table(this); return false;"><?php echo _l('last_month') ?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="this_year" onclick="update_tickets_report_table(this); return false;"><?php echo _l('this_year') ?></a>
                                    </li>
                                    <li>
                                        <a href="#" data-type="last_year" onclick="update_tickets_report_table(this); return false;"><?php echo _l('last_year') ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="_filters _hidden_inputs">
                                <?php echo form_hidden('display_mode', 'this_month') ?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row mtop5">
                                <hr class="hr-panel-heading-dashboard">
                            </div>
                            <div class="clearfix"></div>
                            <div id="tickets-report-table-wrapper">
                                <?php $this->load->view('admin/dashboard/widgets/tickets_report_table'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

