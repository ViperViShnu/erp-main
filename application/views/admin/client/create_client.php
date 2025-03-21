<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<?php
$all_customer_group = $this->db->where('type', 'client')->order_by('customer_group_id', 'DESC')->get('tbl_customer_group')->result();

$curency = $this->client_model->check_by(array('code' => config_item('default_currency')), 'tbl_currencies');


$id = $this->uri->segment(5);
$search_by = $this->uri->segment(4);
$created = can_action('4', 'created');
$edited = can_action('4', 'edited');
$deleted = can_action('4', 'deleted');
?>
<div class="row">
    <div class="col-sm-12">

        <?php

        if (!empty($created) || !empty($edited)) { ?>
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="<?= $active == 1 ? 'active' : '' ?>"><a
                            href="<?= base_url('admin/client/manage_client') ?>"><?= lang('client_list') ?></a></li>
                <li class="<?= $active == 2 ? 'active' : '' ?>"><a
                            href="<?= base_url('admin/client/create_client') ?>"><?= lang('new_client') ?></a></li>
                <li><a class="import"
                       href="<?= base_url() ?>admin/client/import"><?= lang('import') . ' ' . lang('client') ?></a>
                </li>
            </ul>
            <style type="text/css">
                .custom-bulk-button {
                    display: initial;
                }
            </style>
            <div class="tab-content bg-white">

                <div class="tab-pane <?= $active == 2 ? 'active' : '' ?>" id="new_client" style="position: relative;">
                    <form role="form" enctype="multipart/form-data" id="form" data-parsley-validate="" novalidate=""
                          action="<?php echo base_url(); ?>admin/client/save_client/<?php
                          if (!empty($client_info)) {
                              echo $client_info->client_id;
                          }
                          ?>"
                          method="post" class="form-horizontal  ">
                        <div class="panel-body">
                            <label class="control-label col-sm-3"></label
                            <div class="col-sm-6">
                                <div class="nav-tabs-custom">
                                    <!-- Tabs within a box -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#general_compnay"
                                                              data-toggle="tab"><?= lang('general') ?></a>
                                        </li>
                                        <li><a href="#contact_compnay"
                                               data-toggle="tab"><?= lang('client_contact') . ' ' . lang('details') ?></a>
                                        </li>
                                        <li><a href="#web_compnay" data-toggle="tab"><?= lang('web') ?></a></li>
                                        <li><a href="#hosting_compnay" data-toggle="tab"><?= lang('hosting') ?></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content bg-white">
                                        <!-- ************** general *************-->
                                        <div class="chart tab-pane active" id="general_compnay">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_name') ?>
                                                    <span class="text-danger"> *</span></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" required="" value="<?php
                                                    if (!empty($client_info->name)) {
                                                        echo $client_info->name;
                                                    }
                                                    ?>"
                                                           name="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_email') ?>
                                                    <span class="text-danger"> *</span></label>
                                                <div class="col-lg-5">
                                                    <input type="email" class="form-control" required="" value="<?php
                                                    if (!empty($client_info->email)) {
                                                        echo $client_info->email;
                                                    }
                                                    ?>"
                                                           name="email">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_vat') ?></label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="gstInput" value="<?php
                                                        if (!empty($client_info->vat)) {
                                                            echo $client_info->vat;
                                                        }
                                                        ?>" name="vat">
                                                        <span class="input-group-addon">
                                                            <a data-toggle="modal" onclick="validateAndGetDetails(document.getElementById('gstInput').value)">Get Details</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_vat') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                        if (!empty($client_info->vat)) {
                                                            echo $client_info->vat;
                                                        }
                                                        ?>" name="vat">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><?= lang('customer_group') ?></label>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <select name="customer_group_id" class="form-control select_box"
                                                                style="width: 100%">
                                                            <?php
                                                            if (!empty($all_customer_group)) {
                                                                foreach ($all_customer_group as $customer_group) : ?>
                                                                    <option value="<?= $customer_group->customer_group_id ?>"
                                                                        <?php
                                                                        if (!empty($client_info->customer_group_id) && $client_info->customer_group_id == $customer_group->customer_group_id) {
                                                                            echo 'selected';
                                                                        } ?>><?= $customer_group->customer_group; ?>
                                                                    </option>
                                                                <?php endforeach;
                                                            }
                                                            $created = can_action('125', 'created');
                                                            ?>
                                                        </select>
                                                        <?php if (!empty($created)) { ?>
                                                            <div class="input-group-addon"
                                                                 title="<?= lang('new') . ' ' . lang('customer_group') ?>"
                                                                 data-toggle="tooltip" data-placement="top">
                                                                <a data-toggle="modal" data-target="#myModal"
                                                                   href="<?= base_url() ?>admin/client/customer_group"><i
                                                                            class="fa fa-plus"></i></a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"><?= lang('language') ?></label>
                                                <div class="col-sm-5">
                                                    <select name="language" class="form-control select_box"
                                                            style="width: 100%">
                                                        <?php

                                                        foreach ($languages as $lang) : ?>
                                                            <option value="<?= $lang->name ?>" <?php
                                                            if (!empty($client_info->language) && $client_info->language == $lang->name) {
                                                                echo 'selected';
                                                            } elseif (empty($client_info->language) && $this->config->item('language') == $lang->name) {
                                                                echo 'selected';
                                                            } ?>>
                                                                <?= ucfirst($lang->name) ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('currency') ?></label>
                                                <div class="col-lg-5">
                                                    <select name="currency" class="form-control select_box"
                                                            style="width: 100%">

                                                        <?php if (!empty($currencies)) : foreach ($currencies as $currency) : ?>
                                                            <option value="<?= $currency->code ?>" <?php
                                                            if (!empty($client_info->currency) && $client_info->currency == $currency->code) {
                                                                echo 'selected';
                                                            } elseif (empty($client_info->currency) && $this->config->item('default_currency') == $currency->code) {
                                                                echo 'selected';
                                                            } ?>>
                                                                <?= $currency->name ?></option>
                                                        <?php
                                                        endforeach;
                                                        endif;
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="field-1"
                                                       class="col-sm-3 control-label"><?= lang('received') . ' ' . lang('sms') . ' ' . lang('notification') ?>
                                                    :</label>

                                                <div class="col-sm-5">
                                                    <input data-toggle="toggle" name="sms_notification" value="1" <?php
                                                    if (!empty($client_info)) {
                                                        $sms_notification = $client_info->sms_notification;
                                                        if (!empty($sms_notification) && $sms_notification == 1) {
                                                            echo 'checked';
                                                        }
                                                    }
                                                    ?>
                                                           data-on="<?= lang('yes') ?>" data-off="<?= lang('no') ?>"
                                                           data-onstyle="success" data-offstyle="danger"
                                                           type="checkbox">
                                                </div>
                                            </div>
                                            <?php
                                            if (!empty($client_info)) {
                                                $client_id = $client_info->client_id;
                                            } else {
                                                $client_id = null;
                                                $client_info = null;
                                            }
                                            ?>
                                            <?php do_action('client_form', $client_info); ?>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('short_note') ?></label>
                                                <div class="col-lg-5">
                                                <textarea class="form-control" name="short_note"><?php
                                                    if (!empty($client_info->short_note)) {
                                                        echo $client_info->short_note;
                                                    }
                                                    ?></textarea>
                                                </div>
                                            </div>

                                            <?php
                                            if (!empty($client_info->permission)) {
                                                $permissionL = $client_info->permission;
                                            } else {
                                                $permissionL = null;
                                            }
                                            ?>
                                            <?= get_permission(3, 5, $assign_user, $permissionL, ''); ?>




                                            <?php
                                            if (!empty($client_info)) {
                                                $client_id = $client_info->client_id;
                                            } else {
                                                $client_id = null;
                                            }
                                            ?>
                                            <?= custom_form_Fields(12, $client_id); ?>
                                        </div><!-- ************** general *************-->

                                        <!-- ************** Contact *************-->
                                        <div class="chart tab-pane" id="contact_compnay">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_phone') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->phone)) {
                                                        echo $client_info->phone;
                                                    }
                                                    ?>" name="phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_mobile') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->mobile)) {
                                                        echo $client_info->mobile;
                                                    }
                                                    ?>" name="mobile">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('zipcode') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->zipcode)) {
                                                        echo $client_info->zipcode;
                                                    }
                                                    ?>" name="zipcode">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_city') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->city)) {
                                                        echo $client_info->city;
                                                    }
                                                    ?>" name="city">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_country') ?></label>
                                                <div class="col-lg-5">
                                                    <select name="country" class="form-control select_box"
                                                            style="width: 100%">
                                                        <optgroup label="Default Country">
                                                            <option value="<?= $this->config->item('company_country') ?>">
                                                                <?= $this->config->item('company_country') ?></option>
                                                        </optgroup>
                                                        <optgroup label="<?= lang('other_countries') ?>">
                                                            <?php if (!empty($countries)) : foreach ($countries as $country) : ?>
                                                                <option value="<?= $country->value ?>"
                                                                    <?= (!empty($client_info->country) && $client_info->country == $country->value ? 'selected' : NULL) ?>>
                                                                    <?= $country->value ?>
                                                                </option>
                                                            <?php
                                                            endforeach;
                                                            endif;
                                                            ?>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_fax') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->fax)) {
                                                        echo $client_info->fax;
                                                    }
                                                    ?>" name="fax">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_address') ?></label>
                                                <div class="col-lg-5">
                                                <textarea class="form-control" name="address"><?php
                                                    if (!empty($client_info->address)) {
                                                        echo $client_info->address;
                                                    }
                                                    ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">
                                                    <a href="#"
                                                       onclick="fetch_lat_long_from_google_cprofile(); return false;"
                                                       data-toggle="tooltip"
                                                       data-title="<?php echo lang('fetch_from_google') . ' - ' . lang('customer_fetch_lat_lng_usage'); ?>"><i
                                                                id="gmaps-search-icon" class="fa fa-google"
                                                                aria-hidden="true"></i></a>
                                                    <?= lang('latitude') . '( ' . lang('google_map') . ' )' ?>
                                                </label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->latitude)) {
                                                        echo $client_info->latitude;
                                                    }
                                                    ?>"
                                                           name="latitude">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                        class="col-lg-3 control-label"><?= lang('longitude') . '( ' . lang('google_map') . ' )' ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->longitude)) {
                                                        echo $client_info->longitude;
                                                    }
                                                    ?>"
                                                           name="longitude">
                                                </div>
                                            </div>
                                        </div><!-- ************** Contact *************-->
                                        <!-- ************** Web *************-->
                                        <div class="chart tab-pane" id="web_compnay">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('company_domain') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->website)) {
                                                        echo $client_info->website;
                                                    }
                                                    ?>" name="website">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('skype_id') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->skype_id)) {
                                                        echo $client_info->skype_id;
                                                    }
                                                    ?>"
                                                           name="skype_id">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                        class="col-lg-3 control-label"><?= lang('facebook_profile_link') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->facebook)) {
                                                        echo $client_info->facebook;
                                                    }
                                                    ?>"
                                                           name="facebook">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                        class="col-lg-3 control-label"><?= lang('twitter_profile_link') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->twitter)) {
                                                        echo $client_info->twitter;
                                                    }
                                                    ?>" name="twitter">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                        class="col-lg-3 control-label"><?= lang('linkedin_profile_link') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->linkedin)) {
                                                        echo $client_info->linkedin;
                                                    }
                                                    ?>"
                                                           name="linkedin">
                                                </div>
                                            </div>
                                        </div><!-- ************** Web *************-->
                                        <!-- ************** Hosting *************-->
                                        <div class="chart tab-pane" id="hosting_compnay">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('hosting_company') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->hosting_company)) {
                                                        echo $client_info->hosting_company;
                                                    }
                                                    ?>"
                                                           name="hosting_company">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('hostname') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->hostname)) {
                                                        echo $client_info->hostname;
                                                    }
                                                    ?>"
                                                           name="hostname">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('username') ?> </label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->username)) {
                                                        echo $client_info->username;
                                                    }
                                                    ?>"
                                                           name="username">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('password') ?></label>
                                                <div class="col-lg-5">
                                                    <?php
                                                    if (!empty($client_info->password)) {
                                                        $password = strlen(decrypt($client_info->password));
                                                    }
                                                    ?>
                                                    <input type="password" name="password" value="" placeholder="<?php
                                                    if (!empty($password)) {
                                                        for ($p = 1; $p <= $password; $p++) {
                                                            echo '*';
                                                        }
                                                    }
                                                    ?>"
                                                           class="form-control">
                                                    <strong id="show_password" class="required"></strong>
                                                </div>
                                                <?php if (!empty($client_info->password)) { ?>
                                                    <div class="col-lg-3">
                                                        <a data-toggle="modal" data-target="#myModal"
                                                           href="<?= base_url('admin/client/see_password/c_' . $client_info->client_id) ?>"
                                                           id="see_password"><?= lang('see_password') ?></a>
                                                        <strong id="hosting_password" class="required"></strong>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label"><?= lang('port') ?></label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" value="<?php
                                                    if (!empty($client_info->port)) {
                                                        echo $client_info->port;
                                                    }
                                                    ?>" name="port">
                                                </div>
                                            </div>
                                        </div><!-- ************** Hosting *************-->
                                    </div>
                                </div><!-- /.nav-tabs-custom -->

                                <div class="btn-bottom-toolbar text-right">
                                    <?php
                                    if (!empty($client_info)) { ?>
                                        <button type="submit"
                                                class="btn btn-sm btn-primary"><?= lang('updates') ?></button>
                                        <button type="button" onclick="goBack()"
                                                class="btn btn-sm btn-danger"><?= lang('cancel') ?></button>
                                    <?php } else {
                                        ?>
                                        <button type="submit"
                                                class="btn btn-sm btn-primary"><?= lang('save') ?></button>

                                        <button type="submit" name="save_and_create_contact" value="1"
                                                class="btn btn-sm btn-warning"><?= lang('save_and_create_contact') ?></button>
                                    <?php }
                                    ?>
                                </div>

                            </div>
                    </form>
                    <?php } else { ?>
                </div>
                <?php } ?>
            </div>
        </div>
<script type="text/javascript">
    function validateAndGetDetails() {
        var gstNumber = document.getElementById('gstInput').value.trim();
        if(gstNumber == '') {
            alert('Please Enter a Valid GST Number');
            return false;
        }
        getCompanyDetails(gstNumber);
    }

    function getCompanyDetails(gstNumber) {
        var url = "<?php echo base_url() ?>/admin/client/getGstDetails";

        $.ajax({
            url: url,
            type: 'POST',
            data: { gstNumber: gstNumber },
            success: function(response) {
                var result = JSON.parse(response);
                if(result.status_cd == 1) {
                    var address = [
                        result.data.AddrBnm,
                        result.data.AddrBno,
                        result.data.AddrFlno,
                        result.data.AddrLoc,
                        result.data.AddrSt
                    ].filter(Boolean).join(' ');
                    document.querySelector('input[name="name"]').value = result.data.LegalName;
                    document.querySelector('input[name="zipcode"]').value = result.data.AddrPncd;
                    if(address != '') {
                        document.querySelector('input[name="address"]').value = result.data.address;
                    }
                } else {
                    var error = JSON.parse(result.status_desc);
                    alert("Error: " + error[0].ErrorMessage);
                    // console.log(error[0].ErrorMessage);
                }
            },
            error: function(xhr, status, error) {
                // console.error('Error:', error);
                alert('An error occurred while fetching details.');
            }
        });
    }
</script>