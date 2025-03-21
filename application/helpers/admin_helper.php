<?php
define('UPDATE_URL', 'https://update.uniquecoder.com/');
define('TEMP_FOLDER', FCPATH . 'uploads/temp' . '/');
define('PurchaseitemID', '16292398');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*function config_item($key)
{
    $CI =& get_instance();
    return $CI->db->query("SELECT value FROM tbl_config WHERE config_key = '$key'")->row()->value;
    return $config_items[$key];
}*/
function btn_edit($uri)
{
    return anchor($uri, '<i class="fa fa-pencil-square-o"></i>', array('class' => "btn btn-primary btn-xs", 'title' => 'Edit', 'data-toggle' => 'tooltip', 'data-placement' => 'top'));
}

function btn_update()
{
    return "<button data-toggle='tooltip' title=" . lang('update') . " data-placement='top' type='submit'  class='btn btn-xs btn-success'><i class='fa fa-check'></i></button>";
}

function btn_cancel($uri)
{
    return anchor($uri, '<i class="fa fa-times"></i>', array('class' => "btn btn-danger btn-xs", 'title' => lang('cancel'), 'data-toggle' => 'tooltip', 'data-placement' => 'top'));
}

function btn_edit_disable($uri)
{
    return anchor($uri, '<span class="fa fa-pencil-square-o"></span>', array('class' => "btn btn-primary btn-xs disabled", 'title' => 'Edit', 'data-toggle' => 'tooltip', 'data-placement' => 'top'));
}

function btn_edit_modal($uri)
{
    return anchor($uri, '<span class="fa fa-pencil-square-o"></span>', array('class' => "btn btn-primary btn-xs", 'title' => 'Edit', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'data-toggle' => 'modal', 'data-target' => '#myModal'));
}


function btn_banned_modal($uri)
{
    return anchor($uri, '<span class="fa fa-close"></span>', array('class' => "btn btn-danger btn-xs", 'title' => 'Edit', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'data-toggle' => 'modal', 'data-target' => '#myModal'));
}

function btn_delete($uri, $text = null, $icon = null)
{
    $icons = '<i class="fa fa-trash-o"></i>';
    $title = lang('delete');
    $btn = 'btn';
    if (!empty($text) && empty($icon)) {
        $icons = '';
        $title = $text;
        $btn = 'text';
    }
    if (!empty($icon) && empty($text)) {
        $title = '';
    }
    return anchor($uri, $icons . ' ' . $title, array(
        'class' => "btn $btn-danger btn-xs deleteBtn", 'title' => $text, 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('" . lang('delete_alert') . "');"
    ));
}

function btn_delete_disable($uri)
{
    return anchor($uri, '<i class="fa fa-trash-o"></i>', array(
        'class' => "btn btn-danger btn-xs disabled", 'title' => 'Delete', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
    ));
}

function btn_active($uri)
{
    return anchor($uri, '<i class="fa fa-check"></i>', array(
        'class' => "btn btn-success btn-xs", 'title' => 'Active', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to active new sesion . This cannot be undone. Are you sure?');"
    ));
}

function btn_print()
{
    return anchor('', '<span class="glyphicon glyphicon-print"></i></span>', array('class' => "btn btn-primary btn-xs", 'title' => 'Print', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => 'printDiv("printableArea")'));
}

function btn_atndc_print()
{
    return anchor('', '<span class="glyphicon glyphicon-print"></i></span>', array('class' => "btn btn-customs btn-xs", 'title' => 'Print', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => 'printDiv("printableArea")'));
}

function btn_pdf($uri)
{
    return anchor($uri, '<span <i class="fa fa-file-pdf-o"></i></span>', array('class' => "btn btn-info btn-xs", 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'PDF'));
}

function btn_make_pdf($uri)
{
    return anchor($uri, '<span <i class="fa fa-file-pdf-o""></i></span>', array('class' => "btn btn-primary btn-xs", 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Generate&nbsp;PDF'));
}

function btn_excel($uri)
{
    return anchor($uri, '<span <i class="fa fa-file-excel-o"></i></span>', array('class' => "btn btn-primary btn-xs", 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Excel'));
}

function btn_view($uri)
{
    return anchor($uri, '<span class="fa fa-list-alt"></span>', array('class' => "btn btn-info btn-xs", 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'View'));
}

function btn_view_modal($uri)
{
    return anchor($uri, '<span class="fa fa-list-alt"></span>', array('class' => "btn btn-info btn-xs", 'title' => 'View', 'data-toggle' => 'modal', 'data-target' => '#myModal_lg'));
}

function btn_save($uri)
{
    return anchor($uri, '<span <i class="fa fa-plus-circle"></i></span>', array('class' => "btn btn-success btn-xs", 'title' => 'Save', 'data-toggle' => 'tooltip', 'data-placement' => 'top'));
}

function btn_add()
{
    return "<button type='submit' name='add' value='1' class='btn btn-info'>" . lang('add') . "</button>";
}

function btn_publish($uri)
{
    return anchor($uri, '<i class="fa fa-check"></i>', array(
        'class' => "btn btn-success btn-xs", 'title' => lang('click_to_published'), 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to unpublish this data. Are you sure?');"
    ));
}

function btn_unpublish($uri)
{
    return anchor($uri, '<i class="fa fa-times"></i>', array(
        'class' => "btn btn-danger btn-xs", 'title' => lang('click_to_unpublished'), 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to publish this data. Are you sure?');"
    ));
}

function btn_approve($uri)
{
    return anchor($uri, '<i class="fa fa-times"></i>', array(
        'class' => "btn btn-danger btn-xs", 'title' => 'Click to Reject', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to unpublish this data. Are you sure?');"
    ));
}

function btn_reject($uri)
{
    return anchor($uri, '<i class="fa fa-check"></i>', array(
        'class' => "btn btn-success btn-xs", 'title' => 'Click to Approve', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'onclick' => "return confirm('You are about to publish this data. Are you sure?');"
    ));
}

if (!function_exists('mb_convert_encoding')) {

    function mb_convert_encoding($string, $to, $from)
    {
        return $string;
    }
}

if (!function_exists('mb_list_encodings')) {

    function mb_list_encodings()
    {
        return array('UTF-8');
    }
}
if (!function_exists('mb_strtolower')) {

    function mb_strtolower($string)
    {
        // convert to lowercase and remove all non-ASCII characters from the string (leaving accented characters)
        $string = strtolower(preg_replace('/[^a-zA-Z0-9\s]/', '', $string));
        return $string;
    }
}


function slug_it($str, $options = array())
{
    // Make sure string is in UTF-8 and strip invalid UTF-8 characters
    $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
    $defaults = array(
        'delimiter' => '_',
        'limit' => null,
        'lowercase' => true,
        'replacements' => array(
            '
            /\b(ѓ)\b/i' => 'gj',
            '/\b(ч)\b/i' => 'ch',
            '/\b(ш)\b/i' => 'sh',
            '/\b(љ)\b/i' => 'lj'
        ),
        'transliterate' => true
    );
    // Merge options
    if (!is_array($options)) {
        $options = array($options);
    }
    $options = array_merge($defaults, $options);
    $char_map = array(
        // Latin
        'À' => 'A',
        'Á' => 'A',
        'Â' => 'A',
        'Ã' => 'A',
        'Ä' => 'A',
        'Å' => 'A',
        'Æ' => 'AE',
        'Ç' => 'C',
        'È' => 'E',
        'É' => 'E',
        'Ê' => 'E',
        'Ë' => 'E',
        'Ì' => 'I',
        'Í' => 'I',
        'Î' => 'I',
        'Ï' => 'I',
        'Ð' => 'D',
        'Ñ' => 'N',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ö' => 'O',
        'Ő' => 'O',
        'Ø' => 'O',
        'Ù' => 'U',
        'Ú' => 'U',
        'Û' => 'U',
        'Ü' => 'U',
        'Ű' => 'U',
        'Ý' => 'Y',
        'Þ' => 'TH',
        'ß' => 'ss',
        'à' => 'a',
        'á' => 'a',
        'â' => 'a',
        'ã' => 'a',
        'ä' => 'a',
        'å' => 'a',
        'æ' => 'ae',
        'ç' => 'c',
        'è' => 'e',
        'é' => 'e',
        'ê' => 'e',
        'ë' => 'e',
        'ì' => 'i',
        'í' => 'i',
        'î' => 'i',
        'ï' => 'i',
        'ð' => 'd',
        'ñ' => 'n',
        'ò' => 'o',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ö' => 'o',
        'ő' => 'o',
        'ø' => 'o',
        'ù' => 'u',
        'ú' => 'u',
        'û' => 'u',
        'ü' => 'u',
        'ű' => 'u',
        'ý' => 'y',
        'þ' => 'th',
        'ÿ' => 'y',
        // Latin symbols
        '©' => '(c)',
        // Greek
        'Α' => 'A',
        'Β' => 'B',
        'Γ' => 'G',
        'Δ' => 'D',
        'Ε' => 'E',
        'Ζ' => 'Z',
        'Η' => 'H',
        'Θ' => '8',
        'Ι' => 'I',
        'Κ' => 'K',
        'Λ' => 'L',
        'Μ' => 'M',
        'Ν' => 'N',
        'Ξ' => '3',
        'Ο' => 'O',
        'Π' => 'P',
        'Ρ' => 'R',
        'Σ' => 'S',
        'Τ' => 'T',
        'Υ' => 'Y',
        'Φ' => 'F',
        'Χ' => 'X',
        'Ψ' => 'PS',
        'Ω' => 'W',
        'Ά' => 'A',
        'Έ' => 'E',
        'Ί' => 'I',
        'Ό' => 'O',
        'Ύ' => 'Y',
        'Ή' => 'H',
        'Ώ' => 'W',
        'Ϊ' => 'I',
        'Ϋ' => 'Y',
        'α' => 'a',
        'β' => 'b',
        'γ' => 'g',
        'δ' => 'd',
        'ε' => 'e',
        'ζ' => 'z',
        'η' => 'h',
        'θ' => '8',
        'ι' => 'i',
        'κ' => 'k',
        'λ' => 'l',
        'μ' => 'm',
        'ν' => 'n',
        'ξ' => '3',
        'ο' => 'o',
        'π' => 'p',
        'ρ' => 'r',
        'σ' => 's',
        'τ' => 't',
        'υ' => 'y',
        'φ' => 'f',
        'χ' => 'x',
        'ψ' => 'ps',
        'ω' => 'w',
        'ά' => 'a',
        'έ' => 'e',
        'ί' => 'i',
        'ό' => 'o',
        'ύ' => 'y',
        'ή' => 'h',
        'ώ' => 'w',
        'ς' => 's',
        'ϊ' => 'i',
        'ΰ' => 'y',
        'ϋ' => 'y',
        'ΐ' => 'i',
        // Turkish
        'Ş' => 'S',
        'İ' => 'I',
        'Ç' => 'C',
        'Ü' => 'U',
        'Ö' => 'O',
        'Ğ' => 'G',
        'ş' => 's',
        'ı' => 'i',
        'ç' => 'c',
        'ü' => 'u',
        'ö' => 'o',
        'ğ' => 'g',
        // Russian
        'А' => 'A',
        'Б' => 'B',
        'В' => 'V',
        'Г' => 'G',
        'Д' => 'D',
        'Е' => 'E',
        'Ё' => 'Yo',
        'Ж' => 'Zh',
        'З' => 'Z',
        'И' => 'I',
        'Й' => 'J',
        'К' => 'K',
        'Л' => 'L',
        'М' => 'M',
        'Н' => 'N',
        'О' => 'O',
        'П' => 'P',
        'Р' => 'R',
        'С' => 'S',
        'Т' => 'T',
        'У' => 'U',
        'Ф' => 'F',
        'Х' => 'H',
        'Ц' => 'C',
        'Ч' => 'Ch',
        'Ш' => 'Sh',
        'Щ' => 'Sh',
        'Ъ' => '',
        'Ы' => 'Y',
        'Ь' => '',
        'Э' => 'E',
        'Ю' => 'Yu',
        'Я' => 'Ya',
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'j',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sh',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        // Ukrainian
        'Є' => 'Ye',
        'І' => 'I',
        'Ї' => 'Yi',
        'Ґ' => 'G',
        'є' => 'ye',
        'і' => 'i',
        'ї' => 'yi',
        'ґ' => 'g',
        // Czech
        'Č' => 'C',
        'Ď' => 'D',
        'Ě' => 'E',
        'Ň' => 'N',
        'Ř' => 'R',
        'Š' => 'S',
        'Ť' => 'T',
        'Ů' => 'U',
        'Ž' => 'Z',
        'č' => 'c',
        'ď' => 'd',
        'ě' => 'e',
        'ň' => 'n',
        'ř' => 'r',
        'š' => 's',
        'ť' => 't',
        'ů' => 'u',
        'ž' => 'z',
        // Polish
        'Ą' => 'A',
        'Ć' => 'C',
        'Ę' => 'e',
        'Ł' => 'L',
        'Ń' => 'N',
        'Ó' => 'o',
        'Ś' => 'S',
        'Ź' => 'Z',
        'Ż' => 'Z',
        'ą' => 'a',
        'ć' => 'c',
        'ę' => 'e',
        'ł' => 'l',
        'ń' => 'n',
        'ó' => 'o',
        'ś' => 's',
        'ź' => 'z',
        'ż' => 'z',
        // Latvian
        'Ā' => 'A',
        'Č' => 'C',
        'Ē' => 'E',
        'Ģ' => 'G',
        'Ī' => 'i',
        'Ķ' => 'k',
        'Ļ' => 'L',
        'Ņ' => 'N',
        'Š' => 'S',
        'Ū' => 'u',
        'Ž' => 'Z',
        'ā' => 'a',
        'č' => 'c',
        'ē' => 'e',
        'ģ' => 'g',
        'ī' => 'i',
        'ķ' => 'k',
        'ļ' => 'l',
        'ņ' => 'n',
        'š' => 's',
        'ū' => 'u',
        'ž' => 'z',
    );

    // Make custom replacements
    $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
    // Transliterate characters to ASCII
    if ($options['transliterate']) {
        $str = str_replace(array_keys($char_map), $char_map, $str);
    }
    // Replace non-alphanumeric characters with our delimiter
    $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
    // Remove duplicate delimiters
    $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
    // Truncate slug to max. characters
    $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
    // Remove delimiter from ends
    $str = trim($str, $options['delimiter']);
    return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
}

function display_money($value, $currency = false, $decimal = 2)
{
    if (!empty(config_item('decimal_separator'))) {
        $decimal = config_item('decimal_separator');
    }
    switch (config_item('money_format')) {
        case 1:
            $value = number_format($value, $decimal, '.', ',');
            break;
        case 2:
            $value = number_format($value, $decimal, ',', '.');
            break;
        case 3:
            $value = number_format($value, $decimal, '.', '');
            break;
        case 4:
            $value = number_format($value, $decimal, ',', '');
            break;
        case 5:
            $value = number_format($value, $decimal, ".", "'");
            break;
        case 6:
            $value = number_format($value, $decimal, ".", " ");
            break;
        case 7:
            $value = number_format($value, $decimal, ",", " ");
            break;
        case 8:
            $value = number_format($value, $decimal, "'", " ");
            break;
        default:
            $value = number_format($value, $decimal, '.', ',');
            break;
    }
    switch (config_item('currency_position')) {
        case 1:
            $return = $currency . ' ' . $value;
            break;
        case 2:
            $return = $value . ' ' . $currency;
            break;
        case false:
            $return = $value;
            break;
        default:
            $return = $currency . ' ' . $value;
            break;
    }

    return $return;
}

function display_time($value, $no_str = null)
{
    if (!empty($no_str)) {
        $time = $value;
    } else {
        $time = strtotime($value);
    }
    return date(config_item('time_format'), $time);
}

function display_date($value)
{
    return strftime(config_item('date_format'), strtotime($value));
}

function display_datetime($value, $no_str = null)
{
    if (!empty($no_str)) {
        $datetime = $value;
    } else {
        $datetime = strtotime($value);
    }
    return strftime(config_item('date_format'), $datetime) . ' ' . date(config_item('time_format'), $datetime);
}

function custom_form_Fields($id, $edit_id = null, $col_sm = null)
{
    $CI = &get_instance();
    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $filed_id = $form->table_id;
    $html = null;

    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    $name = slug_it($v_fileds->field_label);
                    if (!empty($edit_id)) {
                        $showValue = $CI->db->where($filed_id, $edit_id)->get($table)->row($name);
                    }
                    if (!empty($showValue)) {
                        $value = $showValue;
                    } else {
                        $val = json_decode($v_fileds->default_value);
                        $value = $val[0];
                    }
                    if (!empty($col_sm)) {
                        $col = 'col-lg-2';
                    } else {
                        $col = 'col-lg-3';
                    }
                    if ($v_fileds->required == 'on') {
                        $required = 'required';
                        $l_required = '<span class="required">*</span>';
                    } else {
                        $required = null;
                        $l_required = null;
                    }
                    if (!empty($v_fileds->help_text)) {
                        $help_text = '<i title="' . $v_fileds->help_text . '" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top"></i>';
                    } else {
                        $help_text = null;
                    }

                    if ($v_fileds->field_type == 'text' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="text" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                    }
                    if ($v_fileds->field_type == 'email' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="email" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                    }
                    if ($v_fileds->field_type == 'textarea' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <textarea name="' . $name . '" class="form-control" ' . $required . '>' . $value . '</textarea>
                </div>
                </div>';
                    }
                    if ($v_fileds->field_type == 'dropdown' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <select name="' . $name . '" class="form-control select_box" style="width:100%" ' . $required . '>
                ' . dropdownField($v_fileds->default_value, $value) . '

                </select>
                </div>
                </div>';
                    }
                    if ($v_fileds->field_type == 'date' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <div class="input-group">
                <input type="text" name="' . $name . '" class="form-control datepicker" value="' . (!empty($value) ? $value : date('Y-m-d')) . '">
                <div class="input-group-addon">
                <a href="#"><i class="fa fa-calendar"></i></a>
                </div>
                </div>
                </div>
                </div>';
                    }
                    if ($v_fileds->field_type == 'checkbox' && $v_fileds->status == 'active') {
                        $vals = json_decode($v_fileds->default_value);
                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">';
                        foreach (json_decode($v_fileds->default_value) as $checkV) {
                            $html .= '<div class="checkbox c-checkbox">
                   <label class="needsclick">
                   <input type="checkbox" name="' . $name . '" ' . (!empty($value) && $value == 'on' ? 'checked' : $value = $checkV) . ' ' . $required . '>
                   <span class="fa fa-check"></span>' . $checkV . '
                   </label>
                </div>';
                        }
                        $html .= '</div></div>';
                    }
                    if ($v_fileds->field_type == 'numeric' && $v_fileds->status == 'active') {

                        $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="number" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                    }
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                $name = slug_it($v_fileds->field_label);
                if (!empty($edit_id)) {
                    $showValue = $CI->db->where($filed_id, $edit_id)->get($table)->row($name);
                }
                if (!empty($showValue)) {
                    $value = $showValue;
                } else {
                    $val = json_decode($v_fileds->default_value);
                    $value = $val[0];
                }
                if (!empty($col_sm)) {
                    $col = 'col-lg-2';
                } else {
                    $col = 'col-lg-3';
                }
                if ($v_fileds->required == 'on') {
                    $required = 'required';
                    $l_required = '<span class="required">*</span>';
                } else {
                    $required = null;
                    $l_required = null;
                }
                if (!empty($v_fileds->help_text)) {
                    $help_text = '<i title="' . $v_fileds->help_text . '" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top"></i>';
                } else {
                    $help_text = null;
                }

                if ($v_fileds->field_type == 'text' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="text" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'email' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="email" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'textarea' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <textarea name="' . $name . '" class="form-control" ' . $required . '>' . $value . '</textarea>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'dropdown' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <select name="' . $name . '" class="form-control select_box" style="width:100%" ' . $required . '>
                ' . dropdownField($v_fileds->default_value, $value) . '

                </select>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'date' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <div class="input-group">
                <input type="text" name="' . $name . '" class="form-control datepicker" value="' . (!empty($value) ? $value : date('Y-m-d')) . '">
                <div class="input-group-addon">
                <a href="#"><i class="fa fa-calendar"></i></a>
                </div>
                </div>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'checkbox' && $v_fileds->status == 'active') {
                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">';
                    foreach (json_decode($v_fileds->default_value) as $checkV) {
                        $html .= '<div class="checkbox c-checkbox">
                   <label class="needsclick">
                   <input type="checkbox" name="' . $checkV . '" ' . (!empty($value) && $value == 'on' ? 'checked' : $value = $checkV) . ' ' . $required . '>
                   <span class="fa fa-check"></span>' . $checkV . '
                   </label>
                </div>';
                    }
                    $html .= '</div></div>';
                }
                if ($v_fileds->field_type == 'numeric' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="number" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                }
            } else if (empty(client())) {
                $name = slug_it($v_fileds->field_label);
                if (!empty($edit_id)) {
                    $showValue = $CI->db->where($filed_id, $edit_id)->get($table)->row($name);
                }
                if (!empty($showValue)) {
                    $value = $showValue;
                } else {
                    $val = json_decode($v_fileds->default_value);
                    $value = $val[0];
                }
                if (!empty($col_sm)) {
                    $col = 'col-lg-2';
                } else {
                    $col = 'col-lg-3';
                }
                if ($v_fileds->required == 'on') {
                    $required = 'required';
                    $l_required = '<span class="required">*</span>';
                } else {
                    $required = null;
                    $l_required = null;
                }
                if (!empty($v_fileds->help_text)) {
                    $help_text = '<i title="' . $v_fileds->help_text . '" class="fa fa-question-circle" data-toggle="tooltip" data-placement="top"></i>';
                } else {
                    $help_text = null;
                }

                if ($v_fileds->field_type == 'text' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="text" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'textarea' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <textarea name="' . $name . '" class="form-control" ' . $required . '>' . $value . '</textarea>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'dropdown' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <select name="' . $name . '" class="form-control select_box" style="width:100%" ' . $required . '>
                ' . dropdownField($v_fileds->default_value, $value) . '

                </select>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'date' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <div class="input-group">
                <input type="text" name="' . $name . '" class="form-control datepicker" value="' . (!empty($value) ? $value : date('Y-m-d')) . '">
                <div class="input-group-addon">
                <a href="#"><i class="fa fa-calendar"></i></a>
                </div>
                </div>
                </div>
                </div>';
                }
                if ($v_fileds->field_type == 'checkbox' && $v_fileds->status == 'active') {
                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">';
                    foreach (json_decode($v_fileds->default_value) as $checkV) {
                        $hh = json_decode($value);
                        $checked = ' ';
                        if (!empty($hh) && in_array($checkV, $hh)) {
                            $checked = 'checked';
                        }

                        $html .= '<div class="checkbox c-checkbox">
                   <label class="needsclick">
                   <input type="checkbox" value="' . $checkV . '" name="' . $name . '[]" ' . $checked . ' ' . $required . '>
                   <span class="fa fa-check"></span>' . $checkV . '
                   </label>
                </div>';
                    }
                    $html .= '</div></div>';
                }
                if ($v_fileds->field_type == 'numeric' && $v_fileds->status == 'active') {

                    $html .= '<div class="form-group">
                <label class="' . $col . ' control-label">' . $v_fileds->field_label . ' ' . $l_required . '  ' . $help_text . '</label>
                <div class="col-lg-5">
                <input type="number" name="' . $name . '" class="form-control" ' . $required . ' value="' . $value . '">
                </div>
                </div>';
                }
            }
        }
    }
    return $html;
}


function get_permission($colL, $col, $permission_user, $permissionL = null, $text = null)
{
    $CI = &get_instance();
    if (empty($text)) {
        $text = lang('permission');
    }

    $allow_permission = config_item('allow_custom_permission');

    $html = '';
    $html .= '<div class="form-group">
                <label class="col-lg-' . $colL . ' control-label">' . $text . '</label>
                <div class="col-lg-' . $col . '">
                <div class="checkbox c-radio needsclick"><label class="needsclick">
                <input id="" type="radio" name="permission" value="everyone"';
    if (!empty($permissionL) && $permissionL == 'all') {
        $html .= 'checked 2';
    } elseif (empty($allow_permission) && empty($permissionL)) {
        $html .= 'checked';
    }

    $html .= ' ><span class="fa fa-circle"></span>' . lang('everyone') . '<i title="' . lang('permission_for_all') . '" class="fa fa-question-circle" data-toggle="tooltip data-placement="top"></i></label></div>';

    $html .= '<div class="checkbox c-radio needsclick"><label class="needsclick">
                <input id="" type="radio" name="permission" value="custom_permission"';
    if (!empty($permissionL) && $permissionL != 'all') {
        $html .= 'checked';
    } elseif (!empty($allow_permission) && empty($permissionL)) {
        $html .= 'checked';
    }
    $html .= ' ><span class="fa fa-circle"></span>' . lang('custom_permission') . '<i title="' . lang('permission_for_customization') . '" class="fa fa-question-circle" data-toggle="tooltip data-placement="top"></i></label></div>';
    $html .= '</div></div>';
    if (!empty($permissionL) && $permissionL != 'all') {
        $user_id = json_decode($permissionL, true);
    }
    $html .= '<div class="form-group ';
    if (!empty($permissionL) && $permissionL != 'all') {
        $html .= 'show';
    } elseif (!empty($allow_permission) && empty($permissionL)) {
        $html .= 'show';
    }
    $html .= '" id="permission_user"><label for="field-1" class="col-sm-' . $colL . ' control-label">' . lang('select') . ' ' . lang('users') . '<span class="required">*</span></label>
<div class="col-lg-' . $col . '">';
    if (!empty($permission_user)) {
        foreach ($permission_user as $key => $v_user) {
            if ($v_user->role_id == 1) {
                $disable = true;
                $role = '<strong class="badge btn-danger">' . lang('admin') . '</strong>';
            } else {
                $disable = false;
                $role = '<strong class="badge btn-primary">' . lang('staff') . '</strong>';
            }
            $html .= '<div class="checkbox c-checkbox needsclick"><label class="needsclick">
                <input  class="needsclick assigned_to_modal" type="checkbox" name="assigned_to[]" value="' . $v_user->user_id . '"';
            if (!empty($permissionL) && $permissionL != 'all') {
                if (array_key_exists($v_user->user_id, $user_id)) {
                    $html .= 'checked';
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= ' ><span class="fa fa-check"></span>' . $v_user->username . ' ' . $role . ' </label></div>
            <div class="action_1 p ';
            if (!empty($permissionL) && $permissionL != 'all') {
                if (array_key_exists($v_user->user_id, $user_id)) {
                    $html .= 'show';
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'show';
                }
            }
            $html .= ' " id="action_1' . $v_user->user_id . '"><label class="checkbox-inline c-checkbox"><input id="' . $v_user->user_id . '" checked type="checkbox" name="action_1' . $v_user->user_id . '[]" disabled value="view"> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('view') . '</label>';
            $html .= '<label class="checkbox-inline c-checkbox"><input ' . (!empty($disable) ? 'disabled' . ' ' . 'checked' : ' ') . ' id="' . $v_user->user_id . '"  type="checkbox" name="action_' . $v_user->user_id . '[]" value="edit"';
            if (!empty($permissionL) && $permissionL != 'all') {
                foreach ($user_id as $uid => $v_permission) {
                    if ($uid == $v_user->user_id) {
                        if (in_array('edit', $v_permission)) {
                            $html .= 'checked';
                        };
                    }
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= '> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('edit') . '</label>';
            $html .= '<label class="checkbox-inline c-checkbox"><input ' . (!empty($disable) ? 'disabled' . ' ' . 'checked' : ' ') . ' id="' . $v_user->user_id . '"  type="checkbox" name="action_' . $v_user->user_id . '[]" value="delete"';
            if (!empty($permissionL) && $permissionL != 'all') {
                foreach ($user_id as $uid => $v_permission) {
                    if ($uid == $v_user->user_id) {
                        if (in_array('delete', $v_permission)) {
                            $html .= 'checked';
                        };
                    }
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= '> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('delete') . '</label><input id="' . $v_user->user_id . '" type="hidden" name="action_' . $v_user->user_id . '[]" value="view"> </div>';
        }
    }
    $html .= '</div></div>';
    return $html;
}


function get_permission_modal($colL, $col, $permission_user, $permissionL = null, $text = null)
{
    if (empty($text)) {
        $text = lang('permission');
    }
    $allow_permission = config_item('allow_custom_permission');

    $html = '';
    $html .= '<div class="form-group">
                <label class="col-lg-' . $colL . ' control-label">' . $text . '</label>
                <div class="col-lg-' . $col . '">
                <div class="checkbox c-radio needsclick"><label class="needsclick">
                <input class="permission_user_modal" type="radio" name="permission" value="everyone"';
    if (!empty($permissionL) && $permissionL == 'all') {
        $html .= 'checked';
    } elseif (empty($allow_permission) && empty($permissionL)) {
        $html .= 'checked';
    }

    $html .= ' ><span class="fa fa-circle"></span>' . lang('everyone') . '<i title="' . lang('permission_for_all') . '" class="fa fa-question-circle" data-toggle="tooltip data-placement="top"></i></label></div>';

    $html .= '<div class="checkbox c-radio needsclick"><label class="needsclick">
                <input class="permission_user_modal" type="radio" name="permission" value="custom_permission"';
    if (!empty($permissionL) && $permissionL != 'all') {
        $html .= 'checked';
    } elseif (!empty($allow_permission) && empty($permissionL)) {
        $html .= 'checked';
    }
    $html .= ' ><span class="fa fa-circle"></span>' . lang('custom_permission') . '<i title="' . lang('permission_for_customization') . '" class="fa fa-question-circle" data-toggle="tooltip data-placement="top"></i></label></div>';
    $html .= '</div></div>';
    if (!empty($permissionL) && $permissionL != 'all') {
        $user_id = json_decode($permissionL, true);
    }
    $html .= '<div class="form-group ';
    if (!empty($permissionL) && $permissionL != 'all') {
        $html .= 'show';
    } elseif (!empty($allow_permission) && empty($permissionL)) {
        $html .= 'show';
    }
    $html .= '" id="permission_user_modal"><label for="field-1" class="col-sm-' . $colL . ' control-label">' . lang('select') . ' ' . lang('users') . '<span class="required">*</span></label>
<div class="col-lg-' . $col . '">';
    if (!empty($permission_user)) {
        foreach ($permission_user as $key => $v_user) {
            if ($v_user->role_id == 1) {
                $disable = true;
                $role = '<strong class="badge btn-danger">' . lang('admin') . '</strong>';
            } else {
                $disable = false;
                $role = '<strong class="badge btn-primary">' . lang('staff') . '</strong>';
            }
            $html .= '<div class="checkbox c-checkbox needsclick"><label class="needsclick">
                <input class="needsclick assigned_to_modal" type="checkbox" name="assigned_to[]" value="' . $v_user->user_id . '"';
            if (!empty($permissionL) && $permissionL != 'all') {
                if (array_key_exists($v_user->user_id, $user_id)) {
                    $html .= 'checked';
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= ' ><span class="fa fa-check"></span>' . $v_user->username . ' ' . $role . ' </label></div>
            <div class="action_modal p ';
            if (!empty($permissionL) && $permissionL != 'all') {
                if (array_key_exists($v_user->user_id, $user_id)) {
                    $html .= 'show';
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'show';
                }
            }
            $html .= ' " id="action_u_modal_' . $v_user->user_id . '"><label class="checkbox-inline c-checkbox"><input id="' . $v_user->user_id . '" checked type="checkbox" name="action_' . $v_user->user_id . '[]" disabled value="view"> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('view') . '</label>';
            $html .= '<label class="checkbox-inline c-checkbox"><input ' . (!empty($disable) ? 'disabled' . ' ' . 'checked' : ' ') . ' id="' . $v_user->user_id . '"  type="checkbox" name="action_' . $v_user->user_id . '[]" value="edit"';
            if (!empty($permissionL) && $permissionL != 'all') {
                foreach ($user_id as $uid => $v_permission) {
                    if ($uid == $v_user->user_id) {
                        if (in_array('edit', $v_permission)) {
                            $html .= 'checked';
                        };
                    }
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= '> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('edit') . '</label>';
            $html .= '<label class="checkbox-inline c-checkbox"><input ' . (!empty($disable) ? 'disabled' . ' ' . 'checked' : ' ') . ' id="' . $v_user->user_id . '"  type="checkbox" name="action_' . $v_user->user_id . '[]" value="delete"';
            if (!empty($permissionL) && $permissionL != 'all') {
                foreach ($user_id as $uid => $v_permission) {
                    if ($uid == $v_user->user_id) {
                        if (in_array('delete', $v_permission)) {
                            $html .= 'checked';
                        };
                    }
                }
            } elseif (!empty($allow_permission) && empty($permissionL)) {
                if (my_id() == $v_user->user_id) {
                    $html .= 'checked';
                }
            }
            $html .= '> <span class="fa fa-check"></span>' . lang('can') . ' ' . lang('delete') . '</label><input id="' . $v_user->user_id . '" type="hidden" name="action_' . $v_user->user_id . '[]" value="view"> </div>';
        }
    }
    $html .= '</div></div>';

    return $html;
}

function dropdownField($value, $editValue = null)
{
    $html = null;
    foreach (json_decode($value) as $optionValue) {
        $html .= '<option value="' . $optionValue . '" ' . (!empty($editValue) && $editValue == $optionValue ? "selected" : null) . '>' . $optionValue . '</option>';
    }
    return $html;
}

function save_custom_field($id, $edit_id = null)
{
    $CI = &get_instance();
    $CI->load->model('admin_model');

    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $table_id = $form->table_id;
    $custom = array();
    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            $name = slug_it($v_fileds->field_label);
            $post = $CI->input->post($name, true);
            if (is_array($post)) {
                $post = json_encode($post);
            }

            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    $custom[$name] = $post;
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                if (!empty(client())) {
                    $custom[$name] = $post;
                }
            } else if (empty(client())) {
                $custom[$name] = $post;
            }
        }

        $CI->admin_model->_table_name = $table; //table name
        $CI->admin_model->_primary_key = $table_id;
        $rr = $CI->admin_model->save($custom, $edit_id);
    }
}

function custom_form_label($id, $show_id)
{
    $CI = &get_instance();
    $CI->load->model('admin_model');
    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $table_id = $form->table_id;

    $showValue = array();
    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    $name = slug_it($v_fileds->field_label);
                    $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                if (!empty(client())) {
                    $name = slug_it($v_fileds->field_label);
                    $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                }
            } else if (empty(client())) {
                $name = slug_it($v_fileds->field_label);
                $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
            }
        }
    }
    return $showValue;
}

function custom_form_table($id, $show_id)
{
    $CI = &get_instance();
    $CI->load->model('admin_model');
    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $table_id = $form->table_id;

    $showValue = array();
    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    if ($v_fileds->show_on_table == 'on') {
                        $name = slug_it($v_fileds->field_label);
                        $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                    }
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                if (!empty(client())) {
                    if ($v_fileds->show_on_table == 'on') {
                        $name = slug_it($v_fileds->field_label);
                        $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                    }
                }
            } else if (empty(client())) {
                if ($v_fileds->show_on_table == 'on') {
                    $name = slug_it($v_fileds->field_label);
                    $showValue[$v_fileds->field_label] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                }
            }
        }
    }
    return $showValue;
}

function custom_form_cron($id, $show_id)
{
    $CI = &get_instance();
    $CI->load->model('admin_model');
    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $table_id = $form->table_id;

    $showValue = array();
    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    $name = slug_it($v_fileds->field_label);
                    $showValue[$name] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                if (!empty(client())) {
                    $name = slug_it($v_fileds->field_label);
                    $showValue[$name] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
                }
            } else if (empty(client())) {
                $name = slug_it($v_fileds->field_label);
                $showValue[$name] = $CI->db->where($table_id, $show_id)->get($table)->row($name);
            }
        }
    }
    return $showValue;
}

function form_custom_fields($id)
{
    $cfields = array();

    $CI = &get_instance();
    $CI->load->model('admin_model');
    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active'))->get('tbl_custom_field')->result();

    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $table_id = $form->table_id;

    foreach ($all_field as $f) {

        $_field_object = new stdClass();
        $type = $f->field_type;

        $subtype = '';
        $className = 'form-control';

        if ($f->field_type == 'date') {
            $type = 'date';
        } elseif ($f->field_type == 'checkbox') {
            $type = 'checkbox';
            $className = '';
            //            if ($f['display_inline'] == 1) {
            $className .= 'form-inline-checkbox';
            //            }
        } elseif ($f->field_type == 'input') {
            $type = 'text';
        } elseif ($f->field_type == 'email') {
            $type = 'text';
        } elseif ($f->field_type == 'numeric') {
            $type = 'number';
        } elseif ($f->field_type == 'dropdown') {
            $type = 'select';
        }
        $field_array = [
            'subtype' => $subtype,
            'type' => $type,
            'label' => $f->field_label,
            'className' => $className,
            'name' => slug_it($f->field_label),
        ];

        if ($f->required == 'on') {
            $field_array['required'] = true;
        }
        if (!empty($f->help_text)) {
            $field_array['description'] = $f->help_text;
        }
        if (!empty($f->default_value)) {
            $default_value = json_decode($f->default_value);
            $field_array['value'] = $default_value[0];
        }

        if ($f->field_type == 'dropdown') {
            $field_array['values'] = [];
            $options = json_decode($f->default_value);
            // leave first field blank
            if ($f->field_type == 'dropdown') {
                array_push($field_array['values'], [
                    'label' => '',
                    'value' => '',
                ]);


                foreach ($options as $option) {
                    $option = trim($option);
                    if ($option != '') {
                        array_push($field_array['values'], [
                            'label' => $option,
                            'value' => $option,
                        ]);
                    }
                }
            }
        }

        $_field_object->label = $f->field_label;
        $_field_object->name = slug_it($f->field_label);
        $_field_object->fields = [];
        $_field_object->fields[] = $field_array;
        $cfields[] = $_field_object;
    }

    return $cfields;
}

function url_encode($data)
{
    return base64_encode(serialize($data));
}

function url_decode($data)
{
    return unserialize(base64_decode($data));
}

function encrypt($data)
{
    return get_instance()->cencryption->mencrypt($data);
}

function decrypt($data)
{
    return get_instance()->cencryption->mdecrypt($data);
}

function can_action($menu_id, $action)
{
    $CI = &get_instance();
    $designations_id = $CI->session->userdata('designations_id');
    $where = array('designations_id' => $designations_id, $action => $menu_id);
    $user_type = $CI->session->userdata('user_type');
    if ($user_type == 1) {
        return true;
    } else {
        $can_do = $CI->db->where($where)->get('tbl_user_role')->row();
        if (!empty($can_do)) {
            return true;
        }
    }
}

function can_action_by_label($label, $action)
{
    $CI = &get_instance();
    $menu_id = get_any_field('tbl_menu', array('label' => $label), 'menu_id');
    $designations_id = $CI->session->userdata('designations_id');
    $where = array('designations_id' => $designations_id, $action => $menu_id);
    $user_type = $CI->session->userdata('user_type');
    if ($user_type == 1) {
        return true;
    } else {
        $can_do = $CI->db->where($where)->get('tbl_user_role')->row();
        if (!empty($can_do)) {
            return true;
        }
    }
}

function can_do($menu_id)
{
    $CI = &get_instance();
    $designations_id = $CI->session->userdata('designations_id');
    $user_type = $CI->session->userdata('user_type');
    if ($user_type == 1) {
        return true;
    } else {
        $can_do = $CI->db->where(array('designations_id' => $designations_id, 'menu_id' => $menu_id))->get('tbl_user_role')->result();
        if (!empty($can_do)) {
            return true;
        }
    }
}

function value_exists_in_array_by_key($array, $key, $val)
{
    foreach ($array as $item) {
        if (isset($item[$key]) && $item[$key] == $val) {
            return true;
        }
    }
    return false;
}

function clear_textarea_breaks($text)
{
    $_text = '';
    $_text = $text;
    $breaks = array(
        "<br />",
        "<br>",
        "<br/>",
        "'",
        '"',
        "-",
        "^",
        "/",
        "%",
    );
    $_text = str_ireplace($breaks, "", $_text);
    $_text = trim($_text);
    return $_text;
}

function set_mysql_timezone($timezone)
{
    $offset = timezone_offset_get(new DateTimeZone($timezone), new DateTime());
    $sign = ($offset > 0) ? '+' : '-';
    $offset = gmdate('H:i', abs($offset));
    $zone = $sign . $offset;
    $CI = &get_instance();
    $CI->db->query("SET time_zone='$zone'");
    return true;
}

function access_denied($permission = '', $module = null)
{
    $CI = &get_instance();
    set_message('danger', lang('access_denied'));
    $activity = array(
        'user' => $CI->session->userdata('user_id'),
        'module' => $module,
        'module_field_id' => $CI->session->userdata('user_id'),
        'activity' => 'access_denied',
        'value1' => 'Tried to access page where don\'t have permission [' . $permission . ']',
    );


    $CI->load->model('admin_model');
    $CI->admin_model->_table_name = 'tbl_activities';
    $CI->admin_model->_primary_key = 'activities_id';
    $CI->admin_model->save($activity);

    if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        redirect($_SERVER['HTTP_REFERER']);
    } else {
        redirect('404');
    }
}

function check_installation()
{
    if (is_dir(FCPATH . 'install')) {
        echo '<h3>Delete the install folder</h3>';
        die;
    }
}

/**
 * Function that will replace the dropbox link size for the images
 * This function is used to preview dropbox image attachments
 * @param string $url
 * @param string $bounding_box
 * @return string
 */
function optimize_dropbox_thumbnail($url, $bounding_box = '800')
{
    $url = str_replace('bounding_box=75', 'bounding_box=' . $bounding_box, $url);

    return $url;
}

function protected_file_url_by_path($path)
{
    return str_replace(FCPATH, '', $path);
}

function _mime_content_type($filename)
{
    if (function_exists('mime_content_type'))
        return mime_content_type($filename);
    else if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME);
        $mimetype = finfo_file($finfo, $filename);
        return $mimetype;
    } else
        return get_mime_by_extension($filename);
}

/**
 * Add user notifications
 * @param array $values array of values [description,from_user_id,to_user_id,is_read]
 */
function add_notification($values)
{
    $CI = &get_instance();
    foreach ($values as $key => $value) {
        $data[$key] = $value;
    }
    if (!empty($data['from_user_id'])) {
        $user_id = $CI->session->userdata('user_id');
        $data['from_user_id'] = $user_id;
        $data['name'] = $CI->db->where('user_id', $user_id)->get('tbl_account_details')->row()->fullname;
    }
    // Prevent sending notification to non active users.
    if (isset($data['to_user_id']) && $data['to_user_id'] != 0) {
        $CI->db->where('user_id', $data['to_user_id']);
        $user = $CI->db->get('tbl_users')->row();
        if (!$user) {
            return false;
        }
        if ($user) {
            if ($user->activated == 0) {
                return false;
            }
        }
    }
    $data['date'] = date('Y-m-d H:i:s');
    $CI->db->insert('tbl_notifications', $data);
    return true;
}

function profile($id = null)
{
    $CI = &get_instance();
    if (empty($id)) {
        $id = $CI->session->userdata('user_id');
    }
    if (!empty($id)) {
        return $CI->db
            ->where("tbl_users.user_id", $id)
            ->join("tbl_account_details", "tbl_account_details.user_id = tbl_users.user_id")
            ->get("tbl_users")->row();
    } else {
        return false;
    }
}

function my_id()
{
    $CI = &get_instance();
    return $CI->session->userdata('user_id');
}

function admin($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $role_id = get_any_field('tbl_users', array('user_id' => $user_id), 'role_id');
    if ($role_id == 1) {
        return true;
    } else {
        return false;
    }
}

function staff($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $role_id = get_any_field('tbl_users', array('user_id' => $user_id), 'role_id');
    if ($role_id == 3) {
        return true;
    } else {
        return false;
    }
}

function client($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $role_id = get_any_field('tbl_users', array('user_id' => $user_id), 'role_id');
    if ($role_id == 2) {
        return true;
    } else {
        return false;
    }
}

function all_admin()
{
    $CI = &get_instance();
    $all_admin = $CI->db->where('role_id', 1)->get('tbl_users')->result();
    if (!empty($all_admin)) {
        return $all_admin;
    } else {
        return false;
    }
}

function get_admin_number()
{
    $CI = &get_instance();
    $admin = $CI->db
        ->where("tbl_users.role_id", 1)
        ->join("tbl_account_details", "tbl_account_details.user_id = tbl_users.user_id")
        ->get("tbl_users")->row();
    if (!empty($admin)) {
        return $admin->mobile;
    } else {
        return false;
    }
}

function department_head()
{
    $CI = &get_instance();
    $designations_id = $CI->session->userdata('designations_id');
    //    get_row('tbl_designations',array());
    $designation = $CI->db->where('designations_id', $designations_id)->get('tbl_designations')->row();
    if (!empty($designation)) {
        $department = $CI->db->where('departments_id', $designation->departments_id)->get('tbl_departments')->row();
    }
    if (!empty($department->department_head_id) && $department->department_head_id == my_id()) {
        return true;
    } else {
        return false;
    }
}

function total_rows($table, $where = [])
{
    $CI = &get_instance();
    if (is_array($where)) {
        if (sizeof($where) > 0) {
            $CI->db->where($where);
        }
    } elseif (strlen($where) > 0) {
        $CI->db->where($where);
    }

    return $CI->db->count_all_results($table);
}

function staffImage($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $userInfo = $CI->db->where('user_id', $user_id)->get('tbl_account_details')->row();
    if (!empty($userInfo) && file_exists($userInfo->avatar)) {
        return $userInfo->avatar;
    } else {
        return 'assets/img/user/default_avatar.jpg';
    }
}

function fullname($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $userInfo = $CI->db->where('user_id', $user_id)->get('tbl_account_details')->row();
    if (!empty($userInfo)) {
        return $userInfo->fullname;
    } else {
        return 'Undefined user';
    }
}

function client_contact_email($client_id = null)
{
    $client = get_row('tbl_client', array('client_id' => $client_id));
    if (!empty($client)) {
        $userInfo = get_staff_details($client->primary_contact);
        if (!empty($userInfo) && is_object($userInfo)) {
            return $userInfo->email;
        } else {
            return $client->email;
        }
    }
}

function timer_status($module, $id, $status, $get_id = null)
{
    $CI = &get_instance();
    $user_id = $CI->session->userdata('user_id');
    if ($module == 'tasks') {
        $where = array('task_id' => $id, 'user_id' => $user_id, 'timer_status' => $status);
    } else {
        $where = array('project_id' => $id, 'user_id' => $user_id, 'timer_status' => $status);
    }
    $result = $CI->db->where($where)->get('tbl_tasks_timer')->row();
    if (!empty($result)) {
        if (!empty($get_id)) {
            return $result->tasks_timer_id;
        } else {
            return $result->timer_status;
        }
    } else {
        return false;
    }
}

function client_name($client_id = null)
{
    $CI = &get_instance();
    if (empty($client_id)) {
        $client_id = $CI->session->userdata('client_id');
    }
    if (is_numeric($client_id)) {
        $clientInfo = $CI->db->where('client_id', $client_id)->get('tbl_client')->row();
    }
    if (!empty($clientInfo)) {
        return $clientInfo->name;
    } else {
        return lang('undefined_client');
    }
}

function client_id()
{
    $CI = &get_instance();
    $client_id = $CI->session->userdata('client_id');
    return $client_id;
}

function is_department_head($id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $id = $CI->session->userdata('user_id');
    }
    $department_head_id = $CI->db->where('department_head_id', $id)->get('tbl_departments')->row();
    if (!empty($department_head_id)) {
        return true;
    }
    return false;
}

function designation($id = null)
{
    $CI = &get_instance();
    if (empty($id)) {
        $id = $CI->session->userdata('user_id');
    }
    $userInfo = $CI->db->where('user_id', $id)->get('tbl_account_details')->row();
    if (!empty($userInfo->designations_id)) {
        $designation = $CI->db->where('designations_id', $userInfo->designations_id)->get('tbl_designations')->row()->designations;
    } else {
        $designation = '-';
    }
    return $designation;
}

/**
 *
 * @param  $array - data
 * @param  $key - value you want to pluck from array
 *
 * @return plucked array only with key data
 */
if (!function_exists('array_pluck')) {
    function array_pluck($array, $key)
    {
        return array_map(function ($v) use ($key) {
            return is_object($v) ? $v->$key : $v[$key];
        }, $array);
    }
}

/**
 * Short Time ago function
 * @param datetime $time_ago
 * @return mixed
 */
function time_ago($time_ago)
{
    if (is_numeric($time_ago) && (int)$time_ago == $time_ago) {
        $time_ago = $time_ago;
    } else {
        $time_ago = strtotime($time_ago);
    }
    $cur_time = time();
    $time_elapsed = $cur_time - $time_ago;
    $seconds = $time_elapsed;
    $minutes = round($time_elapsed / 60);
    $hours = round($time_elapsed / 3600);
    $days = round($time_elapsed / 86400);
    $weeks = round($time_elapsed / 604800);
    $months = round($time_elapsed / 2600640);
    $years = round($time_elapsed / 31207680);
    // Seconds
    if ($seconds <= 60) {
        return lang('time_ago_just_now');
    } //Minutes
    elseif ($minutes <= 60) {
        if ($minutes == 1) {
            return lang('time_ago_minute');
        } else {
            return lang('time_ago_minutes', $minutes);
        }
    } //Hours
    elseif ($hours <= 24) {
        if ($hours == 1) {
            return lang('time_ago_hour');
        } else {
            return lang('time_ago_hours', $hours);
        }
    } //Days
    elseif ($days <= 7) {
        if ($days == 1) {
            return lang('time_ago_yesterday');
        } else {
            return lang('time_ago_days', $days);
        }
    } //Weeks
    elseif ($weeks <= 4.3) {
        if ($weeks == 1) {
            return lang('time_ago_week');
        } else {
            return lang('time_ago_weeks', $weeks);
        }
    } //Months
    elseif ($months <= 12) {
        if ($months == 1) {
            return lang('time_ago_month');
        } else {
            return lang('time_ago_months', $months);
        }
    } //Years
    else {
        if ($years == 1) {
            return lang('time_ago_year');
        } else {
            return lang('time_ago_years', $years);
        }
    }
}

function daysleft($time)
{
    $result = null;
    $to_date = strtotime($time); //Future date.
    $cur_date = strtotime(date('Y-m-d'));
    $timeleft = $to_date - $cur_date;
    $daysleft = round((($timeleft / 24) / 60) / 60);
    if ($daysleft == 1) {
        $result = $daysleft . ' ' . lang('day') . ' ' . lang('left');
    } else if ($daysleft > 1) {
        $result = $daysleft . ' ' . lang('days') . ' ' . lang('left');
    } else if ($daysleft == -1) {
        $result = $daysleft . ' ' . lang('day') . ' ' . lang('gone');
    } else if ($daysleft > -1) {
        $result = $daysleft . ' ' . lang('days') . ' ' . lang('gone');
    }
    return $result;
}

/**
 * check post file is valid or not
 *
 * @param string $file_name
 * @return json data of success or error message
 */
if (!function_exists('validate_post_file')) {

    function validate_post_file($file_name = "")
    {
        if (is_valid_file_to_upload($file_name)) {
            echo json_encode(array("success" => true));
            exit();
        } else {
            echo json_encode(array("success" => false, 'message' => lang('invalid_file_type') . " ($file_name)"));
            exit();
        }
    }
}

/**
 * this method process 3 types of files
 * 1. direct upload
 * 2. move a uploaded file which has been uploaded in temp folder
 * 3. copy a text based image
 *
 * @param string $file_name
 * @param string $target_path
 * @param string $source_path
 * @param string $static_file_name
 * @return filename
 */
if (!function_exists('move_temp_file')) {

    function move_temp_file($file_name, $target_path, $related_to = "", $source_path = NULL, $static_file_name = "")
    {
        $new_filename = unique_filename($target_path, $file_name);
        //if not provide any source path we'll fi   nd the default path
        if (!$source_path) {
            $source_path = getcwd() . "/uploads/temp/" . $file_name;
        }

        //check destination directory. if not found try to create a new one
        if (!is_dir($target_path)) {
            if (!mkdir($target_path, 0777, true)) {
                die('Failed to create file folders.');
            }
        }

        //overwrite extisting logic and use static file name
        if ($static_file_name) {
            $new_filename = $static_file_name;
        }

        //check the file type is data or file. then copy to destination and remove temp file
        if (starts_with($source_path, "data")) {
            copy_text_based_image($source_path, $target_path . $new_filename);
            return $new_filename;
        } else {
            if (file_exists($source_path)) {
                copy($source_path, $target_path . $new_filename);
                unlink($source_path);
                return $new_filename;
            }
        }
        return false;
    }
}
/**
 * Convert to a file from text based image
 *
 * @param string $source_path
 * @param string $target_path
 * @return file size
 */
if (!function_exists('copy_text_based_image')) {

    function copy_text_based_image($source_path, $target_path)
    {
        $buffer_size = 3145728;
        $byte_number = 0;
        $file_open = fopen($source_path, "rb");
        $file_wirte = fopen($target_path, "w");
        while (!feof($file_open)) {
            $byte_number += fwrite($file_wirte, fread($file_open, $buffer_size));
        }
        fclose($file_open);
        fclose($file_wirte);
        return $byte_number;
    }
}
/**
 * check if a string starts with a specified sting
 *
 * @param string $string
 * @param string $needle
 * @return true/false
 */
if (!function_exists('starts_with')) {

    function starts_with($string, $needle)
    {
        $string = $string;
        return $needle === "" || strrpos($string, $needle, -strlen($string)) !== false;
    }
}

/**
 * check the file type is valid for upload
 *
 * @param string $file_name
 * @return true/false
 */
if (!function_exists('is_valid_file_to_upload')) {

    function is_valid_file_to_upload($file_name = "")
    {

        if (!$file_name)
            return false;

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $file_formates = explode('|', config_item('allowed_files'));
        if (in_array($file_ext, $file_formates)) {
            return true;
        }
    }
}
/**
 * Validate the image
 *
 * @return    bool
 */
function check_image_extension($image)
{
    $images_extentions = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF", "bmp", "BMP");
    $image_parts = explode(".", $image);
    $image_end_part = end($image_parts);

    if (in_array($image_end_part, $images_extentions) == true) {
        return 1;
    } else {
        return 0;
    }
}


/**
 * Get all files/folder from dir in an array
 * @param string $dir directory full path
 * @param array  &$results
 * @return array
 */
function get_dir_contents($dir, &$results = [])
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } elseif ($value != '.' && $value != '..') {
            get_dir_contents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

/**
 * upload a file to temp folder when using dropzone autoque=true
 *
 * @param file $_FILES
 * @return void
 */
if (!function_exists('upload_file_to_temp')) {

    function upload_file_to_temp()
    {
        if (!empty($_FILES)) {
            $temp_file = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];

            if (!is_valid_file_to_upload($file_name))
                return false;

            $target_path = getcwd() . '/uploads/temp/';
            if (!is_dir($target_path)) {
                if (!mkdir($target_path, 0777, true)) {
                    die('Failed to create file folders.');
                }
            }
            $target_file = $target_path . $file_name;
            copy($temp_file, $target_file);
        }
    }
}
/**
 * Supported html5 video extensions
 * @return array
 */
function get_html5_video_extensions()
{
    return array(
        'mp4',
        'm4v',
        'webm',
        'ogv',
        'ogg',
        'flv'
    );
}

/**
 * Check if filename/path is video file
 * @param string $path
 * @return boolean
 */
function is_html5_video($path)
{
    $ext = _get_file_extension($path);
    if (in_array($ext, get_html5_video_extensions())) {
        return true;
    }
    return false;
}

/**
 * Get file extension by filename
 * @param string $file_name file name
 * @return mixed
 */
function _get_file_extension($file_name)
{
    return substr(strrchr($file_name, '.'), 1);
}

/**
 * Function used to validate all recaptcha from google reCAPTCHA feature
 * @param string $str
 * @return boolean
 */
function do_recaptcha_validation($str = '')
{
    $CI = &get_instance();
    $CI->load->library('form_validation');
    $google_url = "https://www.google.com/recaptcha/api/siteverify";
    $secret = config_item('recaptcha_secret_key');
    $ip = $CI->input->ip_address();
    $url = $google_url . "?secret=" . $secret . "&response=" . $str . "&remoteip=" . $ip;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    $res = curl_exec($curl);
    curl_close($curl);
    $res = json_decode($res, true);
    //reCaptcha success check
    if ($res['success']) {
        return true;
    } else {
        $CI->form_validation->set_message('recaptcha', lang('recaptcha_error'));
        return false;
    }
}

function MyDetails($user_id = null)
{
    $CI = &get_instance();
    $CI->db->select('tbl_users.*', FALSE);
    $CI->db->select('tbl_account_details.*', FALSE);
    $CI->db->select('tbl_designations.departments_id', FALSE);
    $CI->db->from('tbl_users');
    $CI->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id', 'left');
    $CI->db->join('tbl_designations', 'tbl_designations.designations_id = tbl_account_details.designations_id', 'left');
    if (empty($user_id)) {
        $user_id = $CI->session->userdata('user_id');
    }
    $CI->db->where('tbl_users.user_id', $user_id);
    //    $CI->db->where('tbl_users.role_id !=', 2);
    //    $CI->db->where('tbl_users.activated', 1);
    $query_result = $CI->db->get();
    return $query_result->row();
}

function get_staff_details($user_id = null, $type = null, $where = null)
{
    $CI = &get_instance();
    $CI->db->select('tbl_users.*', FALSE);
    $CI->db->select('tbl_account_details.*', FALSE);
    $CI->db->from('tbl_users');
    $CI->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id', 'left');
    if (!empty($where)) {
        $CI->db->where($where);
    }
    if (!empty($user_id)) {
        $CI->db->where('tbl_users.user_id', $user_id);
        $query_result = $CI->db->get();
        $result = $query_result->row();
    } else {
        $CI->db->where('tbl_users.role_id !=', 2);
        $CI->db->where('tbl_users.activated', 1);
        $query_result = $CI->db->get();
        if (!empty($type)) {
            $result = $query_result->result_array();
        } else {
            $result = $query_result->result();
        }
    }
    return $result;
}


/**
 * prepare a anchor tag for ajax request
 *
 * @param string $url
 * @param string $title
 * @param array $attributes
 * @return html link of anchor tag
 */
if (!function_exists('ajax_anchor')) {

    function ajax_anchor($url, $title = '', $attributes = '')
    {
        $attributes["data-act"] = "ajax-request";
        $attributes["data-action-url"] = $url;
        return js_anchor($title, $attributes);
    }
}

/**
 * prepare a anchor tag for any js request
 *
 * @param string $title
 * @param array $attributes
 * @return html link of anchor tag
 */
if (!function_exists('js_anchor')) {

    function js_anchor($title = '', $attributes = '')
    {
        $title = (string)$title;

        $html_attributes = "";
        if (is_array($attributes)) {
            foreach ($attributes as $key => $value) {
                $html_attributes .= ' ' . $key . '="' . $value . '"';
            }
        }
        return '<strong data-toggle="tooltip" data-placement="top" style="cursor:pointer"' . $html_attributes . '>' . $title . '</strong>';
    }
}
/**
 * prepare a anchor tag for any js request
 *
 * @param string $title
 * @param array $attributes
 * @return html link of anchor tag
 */
if (!function_exists('remove_files')) {

    function remove_files($fileName, $dir = null)
    {
        //Delete the file
        if (empty($dir)) {
            $dir = 'uploads/';
        }
        if (is_file($dir . $fileName)) {
            unlink($dir . $fileName);
        }
        return true;
    }
}
function get_result($tbl, $where = null, $type = null)
{
    $CI = &get_instance();
    $CI->db->select('*');
    $CI->db->from($tbl);
    if (!empty($where) && $where != 0) {
        $CI->db->where($where);
    }
    if (!empty($_POST["length"]) && $_POST["length"] != -1) {
        $CI->db->limit($_POST['length'], $_POST['start']);
    }
    $query_result = $CI->db->get();
    if (!empty($type) && $type == 'array') {
        $result = $query_result->result_array();
    } else if (!empty($type)) {
        $result = $query_result->row();
    } else {
        $result = $query_result->result();
    }
    return $result;
}

function get_order_by($tbl, $where = null, $order_by = null, $ASC = null, $limit = null)
{

    $CI = &get_instance();
    $CI->db->from($tbl);
    if (!empty($where) && $where != 0) {
        $CI->db->where($where);
    }
    if (!empty($ASC)) {
        $order = 'ASC';
    } else {
        $order = 'DESC';
    }
    $CI->db->order_by($order_by, $order);
    if (!empty($limit)) {
        $CI->db->limit($limit);
    }
    $query_result = $CI->db->get();
    $result = $query_result->result();
    return $result;
}


function read_more($str, $limit, $url, $attachment = null)
{
    // strip tags to avoid breaking any html
    $string = strip_html_tags($str, true);
    if (strlen($string) > $limit) {
        // truncate string
        $stringCut = substr($string, 0, $limit);
        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '... <a href="' . base_url($url) . '">' . lang('read_more') . '</a>';
    } elseif (!empty($attachment)) {
        $string = $string . '... <a href="' . base_url($url) . '">' . lang('read_more') . '</a>';
    } else {
        $string = $str;
    }
    return $string;
}


if (!function_exists('cal_days_in_month')) {
    function cal_days_in_month($calendar, $month, $year)
    {
        return date('t', mktime(0, 0, 0, $month, 1, $year));
    }
}
if (!defined('CAL_GREGORIAN'))
    define('CAL_GREGORIAN', 1);


function calculate_taken_leave($token_leave)
{
    $CI = &get_instance();
    $office_hours = config_item('office_hours');
    $total_taken = 0;
    $total_hourly = 0;
    $allow_weekend_excluded_from_leave = config_item('allow_weekend_excluded_from_leave');
    if ($allow_weekend_excluded_from_leave == 'TRUE') {
        $holidays = $CI->common_model->get_holidays(); // get weekends column day
        foreach ($token_leave as $key => $v_leave) {
            if ($v_leave->leave_type != 'hours') {
                if (empty($v_leave->leave_end_date)) {
                    $v_leave->leave_end_date = $v_leave->leave_start_date;
                }
                $allDates = $CI->common_model->GetDays($v_leave->leave_start_date, $v_leave->leave_end_date);
                foreach ($allDates as $key => $value) {
                    $dayName = date("l", strtotime($value));
                    if (!in_array($dayName, array_column($holidays, 'day'))) {
                        $total_taken++;
                    }
                }
            } else {
                $dayName = date("l", strtotime($v_leave->leave_start_date));
                if (!in_array($dayName, array_column($holidays, 'day'))) {
                    $total_hourly += ($v_leave->hours / $office_hours);
                }
            }
        }
    } else {
        foreach ($token_leave as $key => $v_leave) {
            if ($v_leave->leave_type != 'hours') {
                if (empty($v_leave->leave_end_date)) {
                    $v_leave->leave_end_date = $v_leave->leave_start_date;
                }
                $allDates = $CI->common_model->GetDays($v_leave->leave_start_date, $v_leave->leave_end_date);
                foreach ($allDates as $key => $value) {
                    $total_taken++;
                }
            } else {
                $total_hourly += ($v_leave->hours / $office_hours);
            }
        }
    }
    $data['total_taken'] = $total_taken;
    $data['total_hourly'] = $total_hourly;
    return $data;
}

function leave_report($id = null)
{
    $CI = &get_instance();
    $office_hours = config_item('office_hours');
    $all_category = $CI->db->get('tbl_leave_category')->result();
    $result = array();
    foreach ($all_category as $v_category) {
        if (!empty($id)) {
            $where = array('user_id' => $id, 'YEAR(`leave_start_date`)' => date('Y'), 'leave_category_id' => $v_category->leave_category_id, 'application_status' => 2);
        } else {
            $where = array('YEAR(`leave_start_date`)' => date('Y'), 'leave_category_id' => $v_category->leave_category_id, 'application_status' => 2);
        }
        $all_leave_info = $CI->db->where($where)->get('tbl_leave_application')->result();

        $total_days = 0;
        $total_hours = 0;
        if (!empty($all_leave_info)) {
            $res = calculate_taken_leave($all_leave_info);

            $total_days = $res['total_taken'];
            $total_hours = $res['total_hourly'];

            if (empty($total_days)) {
                $total_days = 0;
            }
            if (empty($total_hours)) {
                $total_hours = 0;
            } else {
                $total_hours = number_format($total_hours, 2);
            }
        }
        $result['leave_category'][] = $v_category->leave_category;
        $result['leave_quota'][] = $v_category->leave_quota;
        $result['leave_taken'][] = $total_days + $total_hours;
    }
    return $result;
}

function get_any_field($table, $where, $table_field, $result = null)
{
    $CI = &get_instance();
    $query = $CI->db->select($table_field)->where($where)->get($table);
    if ($query->num_rows() > 0) {
        if (!empty($result)) {
            return $query->result_array();
        } else {
            $row = $query->row();
            return $row->$table_field;
        }
    }
}

function get_row($table, $where, $fields = null)
{
    $CI = &get_instance();
    $query = $CI->db->where($where)->get($table);
    if ($query->num_rows() > 0) {
        $row = $query->row();
        if (!empty($fields)) {
            return $row->$fields;
        } else {
            return $row;
        }
    }
}

function update($table, $where, $data)
{
    $CI = &get_instance();
    $CI->db->where($where);
    $CI->db->update($table, $data);
}

function delete($table, $where)
{
    $CI = &get_instance();
    $CI->db->where($where);
    $CI->db->delete($table);
}

function convert_currency($currency, $amount)
{
    if (empty($currency)) {
        return $amount;
    }
    if ($currency == config_item('default_currency')) {
        return $amount;
    }
    $CI = &get_instance();
    $currency_info = $CI->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row();
    if ($currency_info->xrate > 0) {
        $in_local_cur = $amount * $currency_info->xrate;
        $convert_currency = $CI->db->where('code', $currency)->get('currencies')->row();
        $in_local = $in_local_cur / $convert_currency->xrate;
        return $in_local;
    } else {
        return $amount;
    }
}

function make_datatables($where = null, $where_in = null)
{
    $CI = &get_instance();
    $CI->load->model('datatables');
    $CI->datatables->make_query();

    if (!empty($where)) {
        $CI->db->where($where);
    }
    if (!empty($where_in)) {
        $CI->db->where_in($where_in[0], $where_in[1]);
    }
    if ($_POST["length"] != -1) {
        $CI->db->limit($_POST['length'], $_POST['start']);
    }
    $query = $CI->db->get();
    return $query->result();
}

function render_table($data, $where = null, $where_in = null)
{

    $CI = &get_instance();
    $CI->load->model('datatables');
    $output = array(
        "draw" => intval($_POST["draw"]),
        "recordsTotal" => $CI->datatables->get_all_data($where, $where_in),
        "recordsFiltered" => $CI->datatables->get_filtered_data($where, $where_in),
        "data" => $data
    );
    echo json_encode($output);
    exit();
}


function default_currency()
{
    $CI = &get_instance();
    $currency_info = $CI->db->where('code', config_item('default_currency'))->get('tbl_currencies')->row();
    if (empty($currency_info)) {
        return '$';
    } else {
        return $currency_info->symbol;
    }
}

function get_all_currencies()
{
    $_CI = &get_instance();
    $_CI->load->database();
    $currencies_res = $_CI->db->query("SELECT tbl_client.client_id, tbl_currencies.symbol
    FROM tbl_client
    LEFT JOIN tbl_currencies ON tbl_currencies.code = tbl_client.currency")->result_array();
    return (array_column($currencies_res, 'symbol', 'client_id'));
}


function client_currency($id)
{
    $currencies = get_all_currencies();
    if (!isset($currencies[$id])) {
        return default_currency();
    } else {
        return $currencies[$id];
    }
}


/*function client_currency($id)
{
    $CI =& get_instance();
    $CI->load->model('invoice_model');
    $currency_info = $CI->invoice_model->client_currency_symbol($id);
    if (empty($currency_info)) {
        return default_currency();
    } else {
        return $currency_info->symbol;
    }
}*/

// ip_in_range
// This function takes 2 arguments, an IP address and a "range" in several
// different formats.
// Network ranges can be specified as:
// 1. Wildcard format:     1.2.3.*
// 2. CIDR format:         1.2.3/24  OR  1.2.3.4/255.255.255.0
// 3. Start-End IP format: 1.2.3.0-1.2.3.255
// The function will return true if the supplied IP is within the range.
// Note little validation is done on the range inputs - it expects you to
// use one of the above 3 formats.
function iPINRange($ip, $range)
{
    if (strpos($range, '/') !== false) {
        // $range is in IP/NETMASK format
        list($range, $netmask) = explode('/', $range, 2);
        if (strpos($netmask, '.') !== false) {
            // $netmask is a 255.255.0.0 format
            $netmask = str_replace('*', '0', $netmask);
            $netmask_dec = ip2long($netmask);

            return ((ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec));
        } else {
            // $netmask is a CIDR size block
            // fix the range argument
            $x = explode('.', $range);
            while (count(array($x)) < 4) {
                $x[] = '0';
            }
            list($a, $b, $c, $d) = $x;
            $range = sprintf("%u.%u.%u.%u", empty($a) ? '0' : $a, empty($b) ? '0' : $b, empty($c) ? '0' : $c, empty($d) ? '0' : $d);
            $range_dec = ip2long($range);
            $ip_dec = ip2long($ip);

            # Strategy 1 - Create the netmask with 'netmask' 1s and then fill it to 32 with 0s
            #$netmask_dec = bindec(str_pad('', $netmask, '1') . str_pad('', 32-$netmask, '0'));

            # Strategy 2 - Use math to create it
            $wildcard_dec = pow(2, (32 - $netmask)) - 1;
            $netmask_dec = ~$wildcard_dec;

            return (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
        }
    } else {
        // range might be 255.255.*.* or 1.2.3.0-1.2.3.255
        if (strpos($range, '*') !== false) { // a.b.*.* format
            // Just convert to A-B format by setting * to 0 for A and 255 for B
            $lower = str_replace('*', '0', $range);
            $upper = str_replace('*', '255', $range);
            $range = "$lower-$upper";
        }

        if (strpos($range, '-') !== false) { // A-B format
            list($lower, $upper) = explode('-', $range, 2);
            $lower_dec = (float)sprintf("%u", ip2long($lower));
            $upper_dec = (float)sprintf("%u", ip2long($upper));
            $ip_dec = (float)sprintf("%u", ip2long($ip));

            return (($ip_dec >= $lower_dec) && ($ip_dec <= $upper_dec));
        }
        echo 'Range argument is not in 1.2.3.4/24 or 1.2.3.4/255.255.255.0 format';
        return false;
    }
}

/**
 * Generate md5 hash
 * @return string
 */
function app_generate_hash()
{
    return md5(rand() . microtime() . time() . uniqid());
}

function send_later($params)
{
    $emails = array(
        'sent_to' => $params['recipient'],
        // 'sent_cc' => $params['cc'],
        'sent_from' => config_item('company_email') . ' ' . config_item('company_name'),
        'subject' => $params['subject'],
        'message' => $params['message']
    );
    $CI = &get_instance();
    $CI->db->insert('tbl_outgoing_emails', $emails);
    return TRUE;
}

/**
 * Return server temporary directory
 * @return string
 */
function get_temp_dir()
{
    $temp = TEMP_FOLDER;
    if (is_dir($temp) && is_writable($temp)) {
        return $temp;
    }

    if (function_exists('sys_get_temp_dir')) {
        $temp = sys_get_temp_dir();
        if (@is_dir($temp) && is_writable($temp)) {
            return rtrim($temp, '/\\') . '/';
        }
    }

    $temp = ini_get('upload_tmp_dir');
    if (@is_dir($temp) && is_writable($temp)) {
        return rtrim($temp, '/\\') . '/';
    }


    return '/tmp/';
}


/**
 * Function that strip all html tags from string/text/html
 * @param string $str
 * @param string $allowed prevent specific tags to be stripped
 * @return string
 */
function strip_html_tags($str, $allowed = '')
{
    if (!empty($allowed) && $allowed == 1) {
        $allowed = "<p>,<br>,<strong>";
    }
    $str = preg_replace('/^(?=.*\d)(?=.*[-_+=*&]).{3,}$/', '', $str);
    $str = preg_replace(array(
        // Remove invisible content
        '@<head[^>]*?>.*?</head>@siu',
        '@<style[^>]*?>.*?</style>@siu',
        '@<script[^>]*?.*?</script>@siu',
        '@<object[^>]*?.*?</object>@siu',
        '@<embed[^>]*?.*?</embed>@siu',
        '@<applet[^>]*?.*?</applet>@siu',
        '@<noframes[^>]*?.*?</noframes>@siu',
        '@<noscript[^>]*?.*?</noscript>@siu',
        '@<noembed[^>]*?.*?</noembed>@siu',
        // Add line breaks before and after blocks
        '@</?((address)|(blockquote)|(center)|(del))@iu',
        '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
        '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
        '@</?((table)|(th)|(td)|(caption))@iu',
        '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
        '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
        '@</?((frameset)|(frame)|(iframe))@iu'
    ), array(
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        ' ',
        "\n\$0",
        "\n\$0",
        "\n\$0",
        "\n\$0",
        "\n\$0",
        "\n\$0",
        "\n\$0",
        "\n\$0"
    ), $str);

    $str = strip_tags($str, $allowed);

    // Remove on events from attributes
    $re = '/\bon[a-z]+\s*=\s*(?:([\'"]).+?\1|(?:\S+?\(.*?\)(?=[\s>])))/i';
    $str = preg_replace($re, '', $str);

    return $str;
}

function update_config($name, $value)
{
    $CI = &get_instance();
    $CI->db->where('config_key', $name);
    $data = [
        'value' => $value,
    ];
    $CI->db->update('tbl_config', $data);
    if ($CI->db->affected_rows() > 0) {
        return true;
    }
    return false;
}

function activity_log($data)
{
    $CI = &get_instance();
    $activity = array(
        'user' => $CI->session->userdata('user_id'),
        'module' => (!empty($data['module']) ? $data['module'] : '-'),
        'module_field_id' => (!empty($data['id']) ? $data['id'] : ''),
        'activity' => (!empty($data['activity']) ? $data['activity'] : '-'),
        'icon' => (!empty($data['icon']) ? $data['icon'] : ''),
        'link' => (!empty($data['url']) ? $data['url'] : ''),
        'value1' => (!empty($data['value1']) ? $data['value1'] : ''),
        'value2' => (!empty($data['value2']) ? $data['value2'] : '')
    );
    $CI->db->insert('tbl_activities', $activity);
}

/**
 * String starts with
 * @param string $haystack
 * @param string $needle
 * @return boolean
 */
if (!function_exists('_startsWith')) {
    function _startsWith($haystack, $needle)
    {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }
}
/**
 * String ends with
 * @param string $haystack
 * @param string $needle
 * @return boolean
 */
if (!function_exists('endsWith')) {
    function endsWith($haystack, $needle)
    {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
    }
}
/**
 * Check if there is html in string
 */
if (!function_exists('is_html')) {
    function is_html($string)
    {
        return preg_match("/<[^<]+>/", $string, $m) != 0;
    }
}
function admin_head($user_id = null)
{
    if (!empty(admin($user_id))) {
        return true;
    } elseif (!empty(is_department_head($user_id))) {
        return true;
    } else {
        return false;
    }
}

function custom_form_table_search($id)
{

    $CI = &get_instance();
    $CI->load->model('admin_model');

    $all_field = $CI->db->where(array('form_id' => $id, 'status' => 'active', 'show_on_table' => 'on'))->get('tbl_custom_field')->result();
    $form = $CI->db->where('form_id', $id)->get('tbl_form')->row();
    $table = $form->tbl_name;
    $filed_id = $form->table_id;
    $showValue = array();
    if (!empty($all_field)) {
        foreach ($all_field as $v_fileds) {
            if (!empty($v_fileds->visible_for_admin) && empty(client())) {
                if (!empty(admin())) {
                    array_push($showValue, $table . '.' . slug_it($v_fileds->field_label));
                }
            } else if (!empty($v_fileds->visible_for_client) && !empty(client())) {
                array_push($showValue, $table . '.' . slug_it($v_fileds->field_label));
            } else if (empty(client())) {
                array_push($showValue, $table . '.' . slug_it($v_fileds->field_label));
            }
        }
    }
    return $showValue;
}

function attendance_access()
{
    $CI = &get_instance();
    $IP = $CI->input->ip_address();
    $only_allowed_ip_can_clock = config_item('only_allowed_ip_can_clock');
    if ($only_allowed_ip_can_clock == 'TRUE') {
        $IP_info = $CI->db->where(array('allowed_ip' => $IP))->get('tbl_allowed_ip')->row();
        if (!empty($IP_info)) {
            if ($IP_info->status == 'active') {
                return true;
            }
        } else {

            $CI->load->model('settings_model');
            $CI->settings_model->_table_name = 'tbl_allowed_ip';
            $CI->settings_model->_primary_key = 'allowed_ip_id';
            // input data
            $cate_data['allowed_ip'] = $IP;
            $cate_data['status'] = 'pending';
            $allowed_ip_id = null;

            // check check_allowed_ip by where
            // if not empty show alert message else save data
            $check_allowed_ip = $CI->settings_model->check_update('tbl_allowed_ip', $where = array('allowed_ip' => $cate_data['allowed_ip']), $allowed_ip_id);
            if (empty($check_allowed_ip)) { // if input data already exist show error alert
                $id = $CI->settings_model->save($cate_data);

                send_clock_email('trying_clock_email');

                $activity = array(
                    'user' => $CI->session->userdata('user_id'),
                    'module' => 'settings',
                    'module_field_id' => $id,
                    'activity' => ('activity_added_a_allowed_ip'),
                    'value1' => $cate_data['allowed_ip']
                );
                $CI->settings_model->_table_name = 'tbl_activities';
                $CI->settings_model->_primary_key = 'activities_id';
                $CI->settings_model->save($activity);
            }
            return false;
        }
    } else {
        return true;
    }
}

function send_clock_email($type)
{
    if (!empty(config_item('send_clock_email'))) {
        $CI = &get_instance();
        $IP = $CI->input->ip_address();
        $CI->load->model('settings_model');
        $email_template = email_templates(array('email_group' => $type), my_id(), true);
        $message = $email_template->template_body;
        $staff_info = profile();
        $subject = str_replace("{NAME}", $staff_info->fullname . '(' . $staff_info->employment_id . ')', $email_template->subject);
        $name = str_replace("{NAME}", $staff_info->fullname . '(' . $staff_info->employment_id . ')', $message);
        $allowed_ip = str_replace("{IP}", $IP, $name);
        $time = str_replace("{TIME}", display_datetime(date('Y-m-d H:i:s')), $allowed_ip);
        if ($type == 'trying_clock_email') {
            $url = 'admin/attendance/time_history';
        } else {
            $url = 'admin/attendance/time_history';
        }
        $site_url = str_replace("{URL}", base_url($url), $time);
        $message = str_replace("{SITE_NAME}", config_item('company_name'), $site_url);

        $params['subject'] = '[ ' . config_item('company_name') . ' ]' . ' ' . $subject;
        $params['message'] = $message;
        $params['resourceed_file'] = '';
        $all_admin = all_admin();
        if (!empty($all_admin)) {
            foreach ($all_admin as $v_user) {
                $params['recipient'] = $v_user->email;
                $CI->settings_model->send_email($params);
            }
        }
        return true;
    }
    return true;
}

function number_to_word($client_id = null, $amount = null)
{
    $ci = &get_instance();
    if (!empty($client_id)) {
        if (is_numeric($client_id)) {
            $client_id = ['client_id' => $client_id];
        } else {
            $client_id = ['currency' => $client_id];
        }
    } else {
        $client_id = '';
    }
    $ci->load->library('number_to_word', $client_id, 'numberword');
    return $ci->numberword->convert($amount);
}

function twilio_send_sms($number, $message)
{

    // Using composer
    require_once(APPPATH . '/third_party/twilio/Twilio/autoload.php');

    // Account SID from twilio.com/console
    static $sid;
    // Auth Token from twilio.com/console
    static $token;
    // Twilio Phone Number
    static $mobile;

    if (!$sid) {
        $sid = config_item('twilio_account_sid');
    }

    if (!$token) {
        $token = config_item('twilio_auth_token');;
    }

    if (!$mobile) {
        $mobile = config_item('twilio_phone_number');
    }
    try {
        $client = new Twilio\Rest\Client($sid, $token);
    } catch (Exception $e) {
        $GLOBALS['sms_error'] = $e->getMessage();
        return false;
    }

    try {
        $client->messages->create(
        // The number to send the SMS
            $number,
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => $mobile,
                'body' => $message,
            ]
        );
    } catch (Exception $e) {
        $error = $e->getMessage();
        $GLOBALS['sms_error'] = $error;
        return false;
    }

    return true;
}


function clickatell_send_sms($number, $message)
{
    static $api_key;

    if (!$api_key) {
        $api_key = config_item('clickatell_api_key');
    }
    // No from number, in clickatell from is used only in 2 way messaging
    $url = 'https://platform.clickatell.com/messages/http/send?' . http_build_query([
            'apiKey' => $api_key,
            'to' => $number,
            'content' => $message,
        ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'X-Version: 1',
        'Content-Type: application/json',
        'Accept: application/json',
    ]);

    $result = curl_exec($ch);

    $error = false;

    if (!$result) {
        $error = curl_error($ch);
    } elseif ($result) {
        $result = json_decode($result);

        if (isset($result->messages[0]->accepted) && $result->messages[0]->accepted == true) {
            //            logActivity('SMS to send via Clickatell to ' . $number . ', Message: ' . $message);

            return true;
        } elseif (isset($result->messages) && isset($result->error)) {
            $error = $result->error;
        } elseif (isset($result->messages[0]->error) && $result->messages[0]->error != null) {
            $error = $result->messages[0]->error;
        }
    }

    if ($error !== false && $error !== null) {
        $GLOBALS['sms_error'] = $error;
    }

    return false;
}


function can_send_sms_by_created_date($data_date_created)
{
    $now = time();
    $your_date = strtotime($data_date_created);
    $datediff = $now - $your_date;

    $days_diff = floor($datediff / (60 * 60 * 24));
    return $days_diff < 45 || $days_diff == 45;
}

function can_received_sms($type)
{
    $number = config_item($type);
    if (!empty($number) && is_numeric($number)) {
        return $number;
    }
    return false;
}

function client_can_received_sms($client_id)
{
    $client = get_row('tbl_client', array('client_id' => $client_id));
    if (!empty($client) && $client->sms_notification == 1) {
        $user_info = get_staff_details($client->primary_contact);
        if (!empty($user_info->mobile)) {
            return $user_info->mobile;
        } elseif ($client->mobile) {
            return $client->mobile;
        }
    }
    return false;
}


function merge_transactions_template($type, $transaction_id)
{
    $fields = [];
    if (!empty($transaction_id)) {
        $transaction_info = get_row('tbl_transactions', array('transactions_id' => $transaction_id));
        if (!$transaction_info) {
            return $fields;
        }
        $client_name = '';
        $accounts_info = get_row('tbl_accounts', array('account_id' => $transaction_info->account_id));
        if (!empty($transaction_info->paid_by)) {
            $client = get_row('tbl_client', array('client_id' => $transaction_info->paid_by));
            if (!empty($client)) {
                $client_name = $client->name;
            }
        }
        $fields['{transaction_paid_by}'] = $client_name;
        if (!empty($accounts_info)) {
            $account_name = $accounts_info->account_name;
        } else {
            $account_name = '';
        }
        $fields['{transaction_type}'] = lang($type);
        $fields['{transaction_title}'] = $transaction_info->name;
        $fields['{transaction_link}'] = base_url('admin/transactions/view_details/' . $transaction_id);
        $fields['{transaction_date}'] = display_date($transaction_info->date);
        $fields['{transaction_amount}'] = display_money($transaction_info->amount);
        $fields['{transaction_account}'] = $account_name;
        $fields['{transaction_balance}'] = display_money($transaction_info->total_balance, default_currency());
        $fields['{site_name}'] = config_item('company_name');
    }
    return $fields;
}

function merge_purchase_template($purchase_id = null, $payment_id = null)
{
    $fields = [];
    if (!empty($purchase_id)) {
        $purchase_info = get_row('tbl_purchases', array('purchase_id' => $purchase_id));
        if (!$purchase_info) {
            return $fields;
        }
        $CI = &get_instance();
        $CI->load->model('purchase_model');
        $payment_status = $CI->purchase_model->get_payment_status($purchase_info->purchase_id);
        $supplier_info = get_row('tbl_suppliers', array('supplier_id' => $purchase_info->supplier_id));
        if (!empty($supplier_info)) {
            $client_name = $supplier_info->name;
            $email = $supplier_info->email;
        } else {
            $client_name = '-';
            $email = '-';
        }
        $fields['{supplier_name}'] = $client_name;
        $fields['{supplier_email}'] = $email;
        $fields['{purchase_link}'] = base_url('admin/purchase/purchase_details/' . $purchase_id);
        $fields['{purchase_ref}'] = $purchase_info->reference_no;
        $fields['{purchase_date}'] = display_date($purchase_info->purchase_date);
        $fields['{purchase_due_date}'] = display_date($purchase_info->due_date);
        $fields['{purchase_status}'] = lang($payment_status);
        $fields['{purchase_subtotal}'] = display_money($CI->purchase_model->calculate_to('purchase_cost', $purchase_id));
        $fields['{purchase_total}'] = display_money($CI->purchase_model->calculate_to('total', $purchase_id), default_currency());
        $fields['{site_name}'] = config_item('company_name');
        if (!empty($payment_id)) {
            $payments_info = get_row('tbl_purchase_payments', array('payments_id' => $payment_id));
            $fields['{payment_amount}'] = display_money($payments_info->amount, $payments_info->currency);
            $fields['{payment_date}'] = display_date($payments_info->payment_date);
        }
    }
    return $fields;
}

function merge_return_stock_template($return_stock_id = null, $payment_id = null)
{
    $fields = [];
    if (!empty($return_stock_id)) {
        $return_stock_info = get_row('tbl_return_stock', array('return_stock_id' => $return_stock_id));
        if (!$return_stock_info) {
            return $fields;
        }
        $CI = &get_instance();
        $CI->load->model('return_stock_model');
        if ($return_stock_info->module == 'client') {
            $client_info = $CI->return_stock_model->check_by(array('client_id' => $return_stock_info->module_id), 'tbl_client');
            $fields['{full_name}'] = fullname($client_info->primary_contact);
            $fields['{client_name}'] = $client_info->name;
            $fields['{contact_email}'] = $client_info->email;
        } else if ($return_stock_info->module == 'supplier') {
            $client_info = $CI->return_stock_model->check_by(array('supplier_id' => $return_stock_info->module_id), 'tbl_suppliers');
            $fields['{supplier_name}'] = $client_info->name;
            $fields['{supplier_email}'] = $client_info->email;
        }
        $fields['{return_stock_link}'] = base_url('admin/return_stock/return_stock_details/' . $return_stock_id);
        $fields['{return_stock_ref}'] = $return_stock_info->reference_no;
        $fields['{return_stock_date}'] = display_date($return_stock_info->return_stock_date);
        $fields['{return_stock_due_date}'] = display_date($return_stock_info->due_date);
        $fields['{return_stock_status}'] = lang($return_stock_info->status);
        $fields['{return_stock_subtotal}'] = display_money($CI->return_stock_model->calculate_to('return_stock_cost', $return_stock_id));
        $fields['{return_stock_total}'] = display_money($CI->return_stock_model->calculate_to('total', $return_stock_id), default_currency());
        $fields['{site_name}'] = config_item('company_name');
        if (!empty($payment_id)) {
            $payments_info = get_row('tbl_return_stock_payments', array('payments_id' => $payment_id));
            $fields['{payment_amount}'] = display_money($payments_info->amount, $payments_info->currency);
            $fields['{payment_date}'] = display_date($payments_info->payment_date);
        }
    }
    return $fields;
}

function merge_reminder_template($reminder_id = null, $name = null, $related_link = null)
{
    $fields = [];
    if (!empty($reminder_id)) {
        $reminder_info = get_row('tbl_reminders', array('reminder_id' => $reminder_id));
        if (!$reminder_info) {
            return $fields;
        }
        $fields['{name}'] = $name;
        $fields['{reminder_description}'] = $reminder_info->description;
        $fields['{reminder_date}'] = display_date($reminder_info->date);
        $fields['{reminder_related}'] = $reminder_info->module;
        $fields['{reminder_related_link}'] = base_url($related_link);
        $fields['{site_name}'] = config_item('company_name');
    }
    return $fields;
}


function merge_proposal_template($proposals_id = null)
{
    $fields = [];
    $CI = &get_instance();
    if (!empty($proposals_id)) {
        $inv_info = get_row('tbl_proposals', array('proposals_id' => $proposals_id));
        if (!$inv_info) {
            return $fields;
        }
        $CI->load->model('proposal_model');
        $client_info = $CI->proposal_model->check_by(array('client_id' => $inv_info->module_id), 'tbl_client');
        if (!empty($client_info)) {
            $currency = $CI->proposal_model->client_currency_symbol($client_info->client_id);
        } else {
            $currency = $CI->proposal_model->check_by(array('code' => config_item('default_currency')), 'tbl_currencies');
        }
        $currency = $currency->symbol;
        $fields['{proposal_link}'] = base_url('client/proposals/index/proposals_details/' . $proposals_id);
        $fields['{proposal_ref}'] = $inv_info->reference_no;
        $fields['{proposal_date}'] = display_date($inv_info->proposal_date);
        $fields['{proposal_due_date}'] = display_date($inv_info->due_date);
        $fields['{proposal_status}'] = lang($inv_info->status);
        $fields['{proposal_subtotal}'] = display_money($CI->proposal_model->proposal_calculation('proposal_cost', $inv_info->proposals_id));
        $fields['{proposal_total}'] = display_money($CI->proposal_model->proposal_calculation('total', $inv_info->proposals_id), $currency);
        $fields['{proposal_related_to}'] = $inv_info->module;
        $fields['{site_name}'] = config_item('company_name');
    }
    return $fields;
}

function merge_estimate_template($estimates_id = null)
{
    $fields = [];
    $CI = &get_instance();
    if (!empty($estimates_id)) {
        $inv_info = get_row('tbl_estimates', array('estimates_id' => $estimates_id));
        if (!$inv_info) {
            return $fields;
        }
        $CI->load->model('estimates_model');
        $client_info = $CI->estimates_model->check_by(array('client_id' => $inv_info->client_id), 'tbl_client');
        if (!empty($client_info)) {
            $currency = $CI->estimates_model->client_currency_symbol($client_info->client_id);
        } else {
            $currency = $CI->estimates_model->check_by(array('code' => config_item('default_currency')), 'tbl_currencies');
        }
        $currency = $currency->symbol;
        $fields['{estimate_link}'] = base_url('client/estimates/index/estimates_details/' . $estimates_id);
        $fields['{estimate_ref}'] = $inv_info->reference_no;
        $fields['{estimate_date}'] = display_date($inv_info->estimate_date);
        $fields['{estimate_due_date}'] = display_date($inv_info->due_date);
        $fields['{estimate_status}'] = lang($inv_info->status);
        $fields['{estimate_subtotal}'] = display_money($CI->estimates_model->estimate_calculation('estimate_amount', $inv_info->estimates_id));
        $fields['{estimate_total}'] = display_money($CI->estimates_model->estimate_calculation('total', $inv_info->estimates_id), $currency);
        $fields['{site_name}'] = config_item('company_name');
    }
    return $fields;
}

function merge_invoice_template($invoices_id = null, $type = null, $type_id = null)
{
    $fields = [];
    $CI = &get_instance();
    if (!empty($invoices_id)) {
        $inv_info = get_row('tbl_invoices', array('invoices_id' => $invoices_id));
        if (!$inv_info) {
            return $fields;
        }
        $CI->load->model('invoice_model');
        $client_info = $CI->invoice_model->check_by(array('client_id' => $inv_info->client_id), 'tbl_client');
        if (!empty($client_info)) {
            $currency = $CI->invoice_model->client_currency_symbol($client_info->client_id);
        } else {
            $currency = $CI->invoice_model->check_by(array('code' => config_item('default_currency')), 'tbl_currencies');
        }
        $currency = $currency->symbol;
        $payment_status = $CI->invoice_model->get_payment_status($invoices_id);
        $fields['{invoice_link}'] = base_url('client/invoice/manage_invoice/invoice_details/' . $invoices_id);
        $fields['{invoice_ref}'] = $inv_info->reference_no;
        $fields['{invoice_date}'] = display_date($inv_info->invoice_date);
        $fields['{invoice_due_date}'] = display_date($inv_info->due_date);
        $fields['{invoice_status}'] = lang($payment_status);
        $fields['{invoice_subtotal}'] = display_money($CI->invoice_model->calculate_to('invoice_cost', $invoices_id));
        $fields['{invoice_total}'] = display_money($CI->invoice_model->calculate_to('total', $invoices_id), $currency);
        $fields['{site_name}'] = config_item('company_name');
    }
    if (!empty($type) && $type == 'payment') {
        $payments_info = get_row('tbl_payments', array('payments_id' => $type_id));
        $fields['{payment_amount}'] = display_money($payments_info->amount, $currency);
        $fields['{payment_date}'] = display_date($payments_info->payment_date);
    }
    if (!empty($type) && $type == 'client') {
        $client = get_row('tbl_client', array('client_id' => $type_id));
        if (!empty($client)) {
            $fields['{full_name}'] = fullname($client->primary_contact);
            $fields['{client_name}'] = client_name($type_id);
            $fields['{contact_email}'] = client_contact_email($type_id);
        }
    }
    return $fields;
}

function _parse_template_merge_fields($template, $merge_fields)
{
    foreach ($merge_fields as $key => $val) {
        if (stripos($template->message, $key) !== false) {
            $template->message = str_ireplace($key, $val, $template->message);
        } else {
            $template->message = str_ireplace($key, '', $template->message);
        }
        if (stripos($template->subject, $key) !== false) {
            $template->subject = str_ireplace($key, $val, $template->subject);
        } else {
            $template->subject = str_ireplace($key, '', $template->subject);
        }
    }
    return $template;
}

function my_department_head($user_id = null)
{
    $CI = &get_instance();
    if (empty($user_id)) {
        $user_id = my_id();
    }
    $staff_details = MyDetails($user_id);
    if (!empty($staff_details->departments_id)) {
        $department = $CI->db->where('departments_id', $staff_details->departments_id)->get('tbl_departments')->row();
        return $department->department_head_id;
    } else {
        return false;
    }
}

function language_code($id = null, $user = null)
{
    if (!empty($id)) {
        if (!empty($user)) {
            $language = get_any_field('tbl_account_details', array('user_id' => $id), 'language');
        } else {
            $language = get_any_field('tbl_client', array('client_id' => $id), 'language');
        }
    }
    if (empty($language)) {
        $language = config_item('default_language');
    }
    $result = get_any_field('tbl_languages', array('name' => $language), 'code');
    if (empty($result)) {
        $result = 'en';
    }
    return $result;
}

function email_templates($where, $id = null, $user = null)
{
    $where['code'] = language_code($id, $user);
    $result = get_row('tbl_email_templates', $where);
    return $result;
}

function available_tags()
{
    $all_tags = get_result('tbl_tags');
    $tag_names = [];
    foreach ($all_tags as $tag) {
        if (!empty($tag)) {
            array_push($tag_names, $tag->name);
        }
    }
    return $tag_names;
}

function get_tags($tags, $view = null)
{
    $all_tags = explode(',', $tags);
    if (!empty($all_tags)) {
        $tag_names = [];
        foreach ($all_tags as $tag) {
            if (!empty($tag)) {
                $tag_row = get_row('tbl_tags', array('name' => $tag));
                if (!empty($tag_row)) {
                    array_push($tag_names, $tag_row->name);
                    if (!empty($view)) {
                        $result[] = '<span class="label tags" style="' . (!empty($tag_row->style) ? $tag_row->style : '') . '">' . $tag_row->name . '</span>';
                    }
                }
            }
        }
        if (!empty($view) && !empty($result)) {
            return implode(' ', $result);
        } else if (!empty($tag_names)) {
            return implode(',', $tag_names);
        }
    }
    return '';
}

function get_html_tags($tags, $view = null)
{

    $all_tags = explode(',', $tags);
    if (!empty($all_tags)) {
        $tag_names = [];
        foreach ($all_tags as $tag) {
            if ($tag) {
                $tag_row = get_row('tbl_tags', array('name' => $tag));
                if (!empty($tag_row)) {
                    array_push($tag_names, $tag_row->name);
                }
                if (!empty($view)) {
                    $result[] = '<span class="label tags" style="' . $tag_row->style . '">' . $tag_row->name . '</span>';
                }
            }
        }
        if (!empty($view) && !empty($result)) {
            return implode(' ', $result);
        } else if (!empty($tag_names)) {
            return implode(',', $tag_names);
        }
    }
    return '';
}

function get_style($style, $string)
{
    $style = explode(';', $style);
    $result = array_filter($style, function ($value) use ($string) {
        if (strpos($value, $string) !== false) {
            return $value;
        }
        return "";
    });
    return $result[key($result)];
}

function update_module_tags($data)
{
    $CI = &get_instance();

    $input_tags = explode(',', $data);
    $available_tags = available_tags();
    if (is_array($input_tags)) {
        $get_tags = array_diff($input_tags, $available_tags);
        if (!empty($get_tags)) {
            foreach ($get_tags as $tag) {
                $d_tag[] = array(
                    'name' => $tag,
                    'style' => 'border:1px solid #dde6e9;background:#ffffff;color:#333',
                );
            }
            if (!empty($d_tag) && is_array($d_tag)) {
                $CI->db->insert_batch('tbl_tags', $d_tag);
            }
        }
    }
    return true;
}

function already_tags($table, $id = null)
{
    $tags = get_row($table, array('project_id' => $id))->tags;
    if (!empty($tags)) {
        return explode(',', $tags);
    }
    return array();
}

if (!function_exists('render_form_builder_field')) {
    /**
     * Used for customer forms eq. leads form, builded from the form builder plugin
     * @param object $field field from database
     * @return mixed
     */
    function render_form_builder_field($field)
    {
        $type = $field->type;
        $classNameCol = 'col-md-12';
        if (isset($field->className)) {
            if (strpos($field->className, 'form-col') !== false) {
                $classNames = explode(' ', $field->className);
                if (is_array($classNames)) {
                    $classNameColArray = array_filter($classNames, function ($class) {
                        return _startsWith($class, 'form-col');
                    });

                    $classNameCol = implode(' ', $classNameColArray);
                    $classNameCol = trim($classNameCol);

                    $classNameCol = str_replace('form-col-xs', 'col-xs', $classNameCol);
                    $classNameCol = str_replace('form-col-sm', 'col-sm', $classNameCol);
                    $classNameCol = str_replace('form-col-md', 'col-md', $classNameCol);
                    $classNameCol = str_replace('form-col-lg', 'col-lg', $classNameCol);

                    // Default col-md-X
                    $classNameCol = str_replace('form-col', 'col-md', $classNameCol);
                }
            }
        }

        echo '<div class="' . $classNameCol . '">';
        if ($type == 'header' || $type == 'paragraph') {
            echo '<' . $field->subtype . ' class="' . (isset($field->className) ? $field->className : '') . '">' . (nl2br($field->label)) . '</' . $field->subtype . '>';
        } else {
            echo '<div class="form-group" data-type="' . $type . '" data-name="' . $field->name . '" data-required="' . (isset($field->required) ? true : 'false') . '">';
            echo '<label class="control-label" for="' . $field->name . '">' . (isset($field->required) ? ' <span class="text-danger">* </span> ' : '') . $field->label . '' . (isset($field->description) ? ' <i class="fa fa-question-circle" data-toggle="tooltip" data-title="' . $field->description . '" data-placement="' . 'right' . '"></i>' : '') . '</label>';
            if (isset($field->subtype) && $field->subtype == 'color') {
                echo '<div class="input-group colorpicker-input">
         <input' . (isset($field->required) ? ' required="true"' : '') . ' placeholder="' . (isset($field->placeholder) ? $field->placeholder : '') . '" type="text"' . (isset($field->value) ? ' value="' . $field->value . '"' : '') . ' name="' . $field->name . '" id="' . $field->name . '" class="' . (isset($field->className) ? $field->className : '') . '" />
             <span class="input-group-addon"><i></i></span>
         </div>';
            } elseif ($type == 'file' || $type == 'text' || $type == 'number') {
                $ftype = isset($field->subtype) ? $field->subtype : $type;
                echo '<input' . (isset($field->required) ? ' required="true"' : '') . (isset($field->placeholder) ? ' placeholder="' . $field->placeholder . '"' : '') . ' type="' . $ftype . '" name="' . $field->name . '" id="' . $field->name . '" class="' . (isset($field->className) ? $field->className : '') . '" value="' . (isset($field->value) ? $field->value : '') . '"' . ($field->type == 'file' ? ' accept="' . get_form_accepted_mimes() . '" filesize="' . file_upload_max_size() . '"' : '') . '>';
            } elseif ($type == 'textarea') {
                echo '<textarea' . (isset($field->required) ? ' required="true"' : '') . ' id="' . $field->name . '" name="' . $field->name . '" rows="' . (isset($field->rows) ? $field->rows : '4') . '" class="' . (isset($field->className) ? $field->className : '') . '" placeholder="' . (isset($field->placeholder) ? $field->placeholder : '') . '">' . (isset($field->value) ? $field->value : '') . '</textarea>';
            } elseif ($type == 'date') {
                echo '<input' . (isset($field->required) ? ' required="true"' : '') . ' placeholder="' . (isset($field->placeholder) ? $field->placeholder : '') . '" type="text" class="' . (isset($field->className) ? $field->className : '') . ' datepicker" name="' . $field->name . '" id="' . $field->name . '" value="' . (isset($field->value) ? _d($field->value) : '') . '">';
            } elseif ($type == 'datetime-local') {
                echo '<input' . (isset($field->required) ? ' required="true"' : '') . ' placeholder="' . (isset($field->placeholder) ? $field->placeholder : '') . '" type="text" class="' . (isset($field->className) ? $field->className : '') . ' datetimepicker" name="' . $field->name . '" id="' . $field->name . '" value="' . (isset($field->value) ? _dt($field->value) : '') . '">';
            } elseif ($type == 'select') {
                echo '<select' . (isset($field->required) ? ' required="true"' : '') . '' . (isset($field->multiple) ? ' multiple="true"' : '') . ' class="' . (isset($field->className) ? $field->className : '') . '" name="' . $field->name . (isset($field->multiple) ? '[]' : '') . '" id="' . $field->name . '"' . (isset($field->values) && count(array($field->values)) > 10 ? 'data-live-search="true"' : '') . 'data-none-selected-text="' . (isset($field->placeholder) ? $field->placeholder : '') . '">';
                $values = [];
                if (isset($field->values) && count(array($field->values)) > 0) {
                    foreach ($field->values as $option) {
                        echo '<option value="' . $option->value . '" ' . (isset($option->selected) ? ' selected' : '') . '>' . $option->label . '</option>';
                    }
                }
                echo '</select>';
            } elseif ($type == 'checkbox-group') {
                $values = [];
                if (isset($field->values) && count(array($field->values)) > 0) {
                    $i = 0;
                    echo '<div class="chk">';
                    foreach ($field->values as $checkbox) {
                        echo '<div class="checkbox' . ((isset($field->inline) && $field->inline == 'true') || (isset($field->className) && strpos($field->className, 'form-inline-checkbox') !== false) ? ' checkbox-inline' : '') . '">';
                        echo '<input' . (isset($field->required) ? ' required="true"' : '') . ' class="' . (isset($field->className) ? $field->className : '') . '" type="checkbox" id="chk_' . $field->name . '_' . $i . '" value="' . $checkbox->value . '" name="' . $field->name . '[]"' . (isset($checkbox->selected) ? ' checked' : '') . '>';
                        echo '<label for="chk_' . $field->name . '_' . $i . '">';
                        echo $checkbox->label;
                        echo '</label>';
                        echo '</div>';
                        $i++;
                    }
                    echo '</div>';
                }
            }
            echo '</div>';
        }
        echo '</div>';
    }
}


function module_dirPath($module, $concat = '')
{
    return MODULES_PATH . $module . '/' . $concat;
}

function module_direcoty($module, $concat = '')
{
    return 'modules/' . $module . '/' . $concat;
}

function module_dirURL($module, $segment = '')
{
    return base_url('modules/' . $module . '/' . $segment);
}

function module_languagesFiles($module, $languages = [])
{

    if (is_null($languages) || count(array($languages)) === 0) {
        $languages = [$module];
    }

    foreach ($languages as $language) {
        $CI = &get_instance();

        $path = MODULES_PATH . $module . '/language/' . $language . '/';

        //        foreach ($languages as $file_name) {
        $file_path = $path . $language . '_lang' . '.php';
        if (file_exists($file_path)) {
            $CI->lang->load($module . '/' . $language, $language);
        } elseif ($language != 'english' && !file_exists($file_path)) {
            $CI->lang->load($module . '/' . $language, 'english');
        }
        //        }
    };
}


function leave_days_hours($days)
{
    $office_hours = config_item('office_hours');

    $hours = $days * $office_hours;
    $hours_r = $hours % $office_hours;
    if ($hours_r > 0) {
        $days = (int)($hours / $office_hours);
        $days = $days . ' d ' . $hours_r . ' h ';
    }
    return $days;
}

function password_star($password)
{
    $password = strlen(decrypt($password));
    if (!empty($password)) {
        return str_repeat("*", ($password));
    }
    return false;
}

function get_form_field($field, $data = '')
{
    $colLabel = 'col-lg-3';
    $col = 'col-lg-7';

    $value = explode('|', $field);
    $cfields = '';
    if (!empty($value[0])) {
        if ($data != '') {
            $value[0] = $data . '_' . $value[0];
        }
        $cfields .= '<div class="form-group">';
        $cfields .= '<label class="' . $colLabel . ' control-label">' . lang($value[0]) . ' <span class="text-danger">*</span></label>';
        if (!empty($value[1])) {
            if ($value[1] == 'password') {
                $cfields .= '<div class="' . $col . '">';
                $password = password_star(config_item($value[0]));
                $cfields .= '<input type="' . $value[1] . '" name="' . $value[0] . '" class="form-control" placeholder="' . $password . '" ' . (!empty($password) ? '' : 'required') . '>';
                $cfields .= '<strong id="show_password" class="required"></strong>';
                $cfields .= '</div>';
                $cfields .= '<div class="col-lg-2">';
                $cfields .= '<a data-toggle="modal" data-target="#myModal" href="' . base_url('admin/client/see_password/' . $value[0]) . '" id="see_password">' . lang('see_password') . '</a>';
                $cfields .= '<strong id="hosting_password_" class="required"></strong>';
                $cfields .= '</div>';
            } elseif ($value[1] == 'checkbox') {
                $cfields .= '<div class="' . $col . '">';
                $cfields .= '<div class="checkbox c-checkbox"><label class="needsclick"><input type="checkbox" ' . (config_item($value[0]) == 'TRUE' ? 'checked' : '') . ' name="' . $value[0] . '"> <span class="fa fa-check"></span></label></div>';
                $cfields .= '</div>';
            } elseif ($value[1] == 'textarea') {
                $cfields .= '<div class="' . $col . '">';
                $cfields .= '<textarea  class="form-control" name="' . $value[0] . '">' . config_item($value[0]) . '</textarea>';
                $cfields .= '</div>';
            }
        } else {
            $cfields .= '<div class="' . $col . '">';
            $cfields .= '<input  class="form-control"  type="text" value="' . config_item($value[0]) . '" name="' . $value[0] . '">';
            $cfields .= '</div>';
        }
        $cfields .= '</div>';
    }


    return $cfields;
}

function is_active_module($module)
{
    $active = get_any_field('tbl_modules', array('module_name' => $module), 'active');
    if (!empty($active) && $active == 1) {
        return true;
    } else {
        set_message('error', 'you need to install/active the ' . $module . '  module to run');
        if (empty($_SERVER['HTTP_REFERER'])) {
            redirect('login');
        } else {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}

function short_text($string = FALSE, $from_start = 16, $from_end = 8, $limit = FALSE)
{
    if (!$string) {
        return FALSE;
    }
    if (mb_strlen($string) < $from_start) {
        return $string;
    }
    return mb_substr($string, 0, $from_start - 1) . "..." . ($from_end > 0 ? mb_substr($string, -$from_end) : '');
}

// function vincentyGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
// {
//     // convert from degrees to radians
//     $latFrom = deg2rad($latitudeFrom);
//     $lonFrom = deg2rad($longitudeFrom);
//     $latTo = deg2rad($latitudeTo);
//     $lonTo = deg2rad($longitudeTo);

//     $lonDelta = $lonTo - $lonFrom;
//     $a = pow(cos($latTo) * sin($lonDelta), 2) +
//         pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
//     $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

//     $angle = atan2(sqrt($a), $b);
//     return $angle * $earthRadius;
// }
function vincentyGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
    // convert from degrees to radians
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);

    $lonDelta = $lonTo - $lonFrom;
    $a = pow(cos($latTo) * sin($lonDelta), 2) + pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
    $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

    $angle = atan2(sqrt($a), $b);
    // distance / 1000 = distance in km
    return ($angle * $earthRadius) / 1000;
}

function bugs_details_tabs($id)
{
    $url = 'admin/bugs/details/';

    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => $url . 'index'
        ],
        'comments' => [
            'position' => 2,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'bugs', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'attachments' => [
            'position' => 3,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'bugs', 'module_field_id' => $id)),
            'view' => 'admin/common/attachments'
        ],
        'tasks' => [
            'position' => 4,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('bug_id' => $id)),
            'view' => $url . 'tasks'
        ],
        'notes' => [
            'position' => 5,
            'name' => 'notes',
            'url' => $url . $id . '/notes',
            'count' => '',
            'view' => 'admin/common/notes'
        ],
        'activities' => [
            'position' => 6,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'bugs', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],


    );
    return apply_filters('bugs_details_tabs', $tabs);
}

function opportunities_details_tabs($id)
{
    $url = 'admin/opportunities/opportunity_details/';

    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => $url . 'index'
        ],
        'call' => [
            'position' => 2,
            'name' => 'call',
            'url' => $url . $id . '/call',
            'count' => total_rows('tbl_calls', array('opportunities_id' => $id)),
            'view' => $url . 'call'
        ],
        'mettings' => array(
            'position' => 3,
            'name' => 'mettings',
            'url' => $url . $id . '/mettings',
            'count' => total_rows('tbl_mettings', array('opportunities_id' => $id)),
            'view' => $url . 'mettings',
        ),
        'comments' => [
            'position' => 4,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'opportunities', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'attachments' => [
            'position' => 5,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'opportunities', 'module_field_id' => $id)),
            'view' => 'admin/common/attachments'
        ],
        'tasks' => [
            'position' => 6,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('opportunities_id' => $id)),
            'view' => $url . 'task'
        ],
        'bugs' => [
            'position' => 7,
            'name' => 'bugs',
            'url' => $url . $id . '/bugs',
            'count' => total_rows('tbl_bug', array('opportunities_id' => $id)),
            'view' => $url . 'bugs'
        ],
        'activities' => [
            'position' => 8,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'opportunities', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],


    );
    return apply_filters('opportunities_details_tabs', $tabs);
}

function leads_details_tabs($id)
{
    $url = 'admin/leads/leads_details/';

    $tabs = array(
        'leads_details' => [
            'position' => 1,
            'name' => 'leads_details',
            'url' => $url . $id,
            'count' => '',
            'view' => 'admin/leads/leads_details/index'
        ],
        'call' => [
            'position' => 2,
            'name' => 'call',
            'url' => $url . $id . '/call',
            'count' => '',
            'view' => $url . 'call'
        ],
        'mettings' => [
            'position' => 3,
            'name' => 'mettings',
            'url' => $url . $id . '/mettings',
            'count' => total_rows('tbl_mettings', array('leads_id' => $id)),
            'view' => $url . 'mettings'
        ],
        'comments' => [
            'position' => 4,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'leads', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'attachments' => [
            'position' => 5,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'leads', 'module_field_id' => $id)),
            'view' => 'admin/common/attachments'
        ],
        'tasks' => [
            'position' => 6,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('leads_id' => $id)),
            'view' => $url . 'tasks'
        ],
        'proposals' => [
            'position' => 7,
            'name' => 'proposals',
            'url' => $url . $id . '/proposals',
            'count' => total_rows('tbl_proposals', array('module_id' => $id)),
            'view' => $url . 'proposals'
        ],
        'reminder' => [
            'position' => 8,
            'name' => 'reminder',
            'url' => $url . $id . '/reminder',
            'count' => total_rows('tbl_reminders', array('module_id' => $id)),
            'view' => $url . 'reminder'
        ],
        'notes' => [
            'position' => 9,
            'name' => 'notes',
            'url' => $url . $id . '/notes',
            'count' => '',
            'view' => 'admin/common/notes'
        ],
        'activities' => [
            'position' => 10,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'leads', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],
    );
    return apply_filters('leads_details_tabs', $tabs);
}

function projects_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/projects/project_details/';
    $tabs = array(
        'project_details' => array(
            'position' => 1,
            'name' => 'project_details',
            'url' => $url . $id,
            'count' => '',
            'view' => 'admin/projects/project_details/details'
        ),
        'comments' => [
            'position' => 2,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'attachments' => [
            'position' => 3,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => 'admin/common/attachments'
        ],
        'calender' => array(
            'position' => 4,
            'name' => 'calender',
            'url' => $url . $id . '/calender',
            'count' => '',
            'view' => $url . 'calender',
        ),
        'milestones' => array(
            'position' => 5,
            'name' => 'milestones',
            'url' => $url . $id . '/milestones',
            'count' => total_rows('tbl_milestones', array('project_id' => $id)),
            'view' => $url . 'milestones',
        ),
        'tasks' => array(
            'position' => 6,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('project_id' => $id)),
            'view' => $url . 'tasks',
        ),
        'bugs' => array(
            'position' => 7,
            'name' => 'bugs',
            'url' => $url . $id . '/bugs',
            'count' => total_rows('tbl_bug', array('project_id' => $id)),
            'view' => $url . 'bugs',
        ),
        'gantt' => array(
            'position' => 8,
            'name' => 'gantt',
            'url' => $url . $id . '/gantt',
            'count' => '',
            'view' => $url . 'gantt',
        ),
        'notes' => [
            'position' => 9,
            'name' => 'notes',
            'url' => $url . $id . '/notes',
            'count' => '',
            'view' => $url . 'notes'
        ],
        'timesheet' => array(
            'position' => 10,
            'name' => 'timesheet',
            'url' => $url . $id . '/timesheet',
            'count' => total_rows('tbl_tasks_timer', array('project_id' => $id)),
            'view' => $url . 'timesheet',
        ),
        'tickets' => array(
            'position' => 11,
            'name' => 'tickets',
            'url' => $url . $id . '/tickets',
            'count' => total_rows('tbl_tickets', array('project_id' => $id)),
            'view' => $url . 'tickets',
        ),
        'invoice' => array(
            'position' => 12,
            'name' => 'invoice',
            'url' => $url . $id . '/invoice',
            'count' => total_rows('tbl_invoices', array('project_id' => $id)),
            'view' => $url . 'invoice',
        ),
        'credit_note' => array(
            'position' => 13,
            'name' => 'credit_note',
            'url' => $url . $id . '/credit_note',
            'count' => total_rows('tbl_credit_note', array('project_id' => $id)),
            'view' => $url . 'credit_note',
        ),
        'estimates' => array(
            'position' => 14,
            'name' => 'estimates',
            'url' => $url . $id . '/estimates',
            'count' => total_rows('tbl_estimates', array('project_id' => $id)),
            'view' => $url . 'estimates',
        ),
        'expense' => array(
            'position' => 15,
            'name' => 'expense',
            'url' => $url . $id . '/expense',
            'count' => total_rows('tbl_transactions', array('project_id' => $id)),
            'view' => $url . 'expense',
        ),
        'project_settings' => array(
            'position' => 16,
            'name' => 'project_settings',
            'url' => $url . $id . '/project_settings',
            'count' => '',
            'view' => $url . 'project_settings',
        ),
        'activities' => [
            'position' => 17,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],

    );
    return apply_filters('projects_details_tabs', $tabs);
}

function client_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/client/details/';
    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => 'admin/client/details'
        ],
        'contacts' => [
            'position' => 2,
            'name' => 'contacts',
            'url' => $url . $id . '/contacts',
            'count' => total_rows('tbl_account_details', array('company' => $id)),
            'view' => $url . 'contacts',
        ],
        'notes' => [
            'position' => 3,
            'name' => 'notes',
            'url' => $url . $id . '/notes',
            'count' => '',
            'view' => $url . 'notes'
        ],
        'invoices' => [
            'position' => 4,
            'name' => 'invoices',
            'url' => $url . $id . '/invoices',
            'count' => total_rows('tbl_invoices', array('client_id' => $id)),
            'view' => $url . 'invoices',
        ],
        'payments' => [
            'position' => 5,
            'name' => 'payments',
            'url' => $url . $id . '/payments',
            'count' => total_rows('tbl_payments', array('paid_by' => $id)),
            'view' => $url . 'payments',
        ],
        'estimates' => [
            'position' => 6,
            'name' => 'estimates',
            'url' => $url . $id . '/estimates',
            'count' => total_rows('tbl_estimates', array('client_id' => $id)),
            'view' => $url . 'estimates',
        ],
        'proposals' => [
            'position' => 6,
            'name' => 'proposals',
            'url' => $url . $id . '/proposals',
            'count' => total_rows('tbl_proposals', array('module' => 'client', 'module_id' => $id)),
            'view' => $url . 'proposals',
        ],
        'transactions' => [
            'position' => 7,
            'name' => 'transactions',
            'url' => $url . $id . '/transactions',
            'count' => total_rows('tbl_transactions', array('paid_by' => $id)),
            'view' => $url . 'transactions',
        ],
        // 'projects' => [
        //     'position' => 8,
        //     'name' => 'projects',
        //     'url' => $url . $id . '/projects',
        //     'count' => total_rows('tbl_project', array('client_id' => $id)),
        //     'view' => $url . 'projects',
        // ],
        // 'tickets' => [
        //     'position' => 9,
        //     'name' => 'tickets',
        //     'url' => $url . $id . '/tickets',
        //     'count' => '',
        //     'view' => $url . 'tickets',
        // ],
        // 'bugs' => [
        //     'position' => 10,
        //     'name' => 'bugs',
        //     'url' => $url . $id . '/bugs',
        //     'count' => '',
        //     'view' => $url . 'bugs',
        // ],
        // 'award_point' => [
        //     'position' => 11,
        //     'name' => 'award_point',
        //     'url' => $url . $id . '/award_point',
        //     'count' => '',
        //     'view' => $url . 'award_point',
        // ],
        // 'filemanager' => [
        //     'position' => 12,
        //     'name' => 'filemanager',
        //     'url' => $url . $id . '/filemanager',
        //     'count' => '',
        //     'view' => $url . 'filemanager',
        // ],
        // 'map' => [
        //     'position' => 13,
        //     'name' => 'map',
        //     'url' => $url . $id . '/map',
        //     'count' => '',
        //     'view' => $url . 'map',
        // ],

    );
    return apply_filters('client_details_tabs', $tabs);
}

function tab_load_view($all_tab, $active)
{
    $tab = array_filter($all_tab, function ($tab) use ($active) {
        return $tab['name'] == $active;
    });
    if (count(array($tab)) > 0) {
        return $tab[$active]['view'];
    } else {
        return false;
    }
}

function tasks_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/tasks/details/';
    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => 'admin/tasks/details/index'
        ],
        'comments' => [
            'position' => 2,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'tasks', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'attachments' => [
            'position' => 3,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'tasks', 'module_field_id' => $id)),
            'view' => 'admin/common/attachments'
        ],
        'timesheets' => [
            'position' => 4,
            'name' => 'timesheets',
            'url' => $url . $id . '/timesheets',
            'count' => total_rows('tbl_tasks_timer', array('task_id' => $id, 'start_time !=' => 0, 'end_time !=' => 0)),
            'view' => $url . 'timesheets'
        ],
        'notes' => [
            'position' => 5,
            'name' => 'notes',
            'url' => $url . $id . '/notes',
            'count' => '',
            'view' => $url . 'notes'
        ],
        'sub_tasks' => [
            'position' => 6,
            'name' => 'sub_tasks',
            'url' => $url . $id . '/sub_tasks',
            'count' => total_rows('tbl_task', array('sub_task_id' => $id)),
            'view' => $url . 'sub_tasks'
        ],
        'activites' => [
            'position' => 7,
            'name' => 'activites',
            'url' => $url . $id . '/activites',
            'count' => total_rows('tbl_activities', array('module' => 'tasks', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],
    );
    return apply_filters('tasks_details_tabs', $tabs);
}

function user_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/user/user_details/';
    $tabs = array(
        'user_details' => [
            'position' => 1,
            'name' => 'user_details',
            'url' => $url . $id,
            'count' => '',
            'view' => 'admin/user/user_details/index'
        ],
        // 'bank' => [
        //     'position' => 2,
        //     'name' => 'bank',
        //     'url' => $url . $id . '/bank',
        //     'count' => total_rows('tbl_employee_bank', array('user_id' => $id)),
        //     'view' => $url . 'bank_details'
        // ],
        // 'document_details' => [
        //     'position' => 3,
        //     'name' => 'document_details',
        //     'url' => $url . $id . '/document_details',
        //     'count' => total_rows('tbl_employee_document', array('user_id' => $id)),
        //     'view' => $url . 'document_details'
        // ],
        // 'salary_details' => [
        //     'position' => 4,
        //     'name' => 'salary_details',
        //     'url' => $url . $id . '/salary_details',
        //     'count' => '',
        //     'view' => 'admin/user/salary_details'
        // ],
        // 'timecard_details' => [
        //     'position' => 5,
        //     'name' => 'timecard_details',
        //     'url' => $url . $id . '/timecard_details',
        //     'count' => '',
        //     'view' => 'admin/user/timecard_details'
        // ],
        // 'leave_details' => [
        //     'position' => 6,
        //     'name' => 'leave_details',
        //     'url' => $url . $id . '/leave_details',
        //     'count' => '',
        //     'view' => 'admin/user/leave_details'
        // ],
        // 'provident_found' => [
        //     'position' => 7,
        //     'name' => 'provident_found',
        //     'url' => $url . $id . '/provident_found',
        //     'count' => '',
        //     'view' => 'admin/user/provident_found'
        // ],
        // 'Overtime_details' => [
        //     'position' => 8,
        //     'name' => 'Overtime_details',
        //     'url' => $url . $id . '/Overtime_details',
        //     'count' => '',
        //     'view' => 'admin/user/Overtime_details'
        // ],
        // 'tasks' => [
        //     'position' => 9,
        //     'name' => 'tasks',
        //     'url' => $url . $id . '/tasks',
        //     'count' => '',
        //     'view' => 'admin/user/tasks_details'
        // ],
        // 'projects' => [
        //     'position' => 10,
        //     'name' => 'projects',
        //     'url' => $url . $id . '/projects',
        //     'count' => '',
        //     'view' => 'admin/user/projects_details'
        // ],
        // 'bugs' => [
        //     'position' => 11,
        //     'name' => 'bugs',
        //     'url' => $url . $id . '/bugs',
        //     'count' => '',
        //     'view' => 'admin/user/bugs_details'
        // ],
        'user' => [
            'position' => 12,
            'name' => 'user',
            'url' => $url . $id . '/user',
            'count' => '',
            'view' => 'admin/user/user_awardpoints'
        ],
        'notifications' => [
            'position' => 13,
            'name' => 'notifications',
            'url' => $url . $id . '/notifications',
            'count' => '',
            'view' => $url . 'notifications'
        ],
        'activities' => [
            'position' => 14,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'user', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],

    );
    return apply_filters('user_details_tabs', $tabs);
}

function transactions_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/transactions/view_details/';
    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => $url . 'details'
        ],
        // 'tasks' => [
        //     'position' => 2,
        //     'name' => 'tasks',
        //     'url' => $url . $id . '/tasks',
        //     'count' => total_rows('tbl_task', array('transactions_id' => $id)),
        //     'view' => $url . 'tasks'
        // ],
        'reminder' => [
            'position' => 3,
            'name' => 'reminder',
            'url' => $url . $id . '/reminder',
            'count' => total_rows('tbl_reminders', array('module_id' => $id)),
            'view' => $url . 'reminder'
        ],


    );
    return apply_filters('transactions_details_tabs', $tabs);
}

function goal_details_tabs($id)
{
    // make details tab array and assign order,name,url,count
    $url = 'admin/goal_tracking/goal_details/';
    $tabs = array(
        'details' => [
            'position' => 1,
            'name' => 'details',
            'url' => $url . $id,
            'count' => '',
            'view' => $url . 'details'
        ],
        'tasks' => [
            'position' => 2,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('goal_tracking_id' => $id)),
            'view' => $url . 'task'
        ],
        'comments' => [
            'position' => 3,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'goal_tracking', 'module_field_id' => $id)),
            'view' => 'admin/common/comments'
        ],
        'activities' => [
            'position' => 4,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'goal_tracking', 'module_field_id' => $id)),
            'view' => 'admin/common/activites'
        ],


    );
    return apply_filters('goal_details_tabs', $tabs);
}

function client_project_details_tabs($id)
{
    $url = 'client/projects/project_details/';
    $tabs = array(
        'project_details' => array(
            'position' => 1,
            'name' => 'project_details',
            'url' => $url . $id,
            'count' => '',
            'view' => $url . 'details'
        ),
        'calender' => array(
            'position' => 2,
            'name' => 'calender',
            'url' => $url . $id . '/calender',
            'count' => '',
            'view' => $url . 'calender',
        ),

        'comments' => [
            'position' => 3,
            'name' => 'comments',
            'url' => $url . $id . '/comments',
            'count' => total_rows('tbl_task_comment', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => $url . 'comments'
        ],
        'attachments' => [
            'position' => 4,
            'name' => 'attachments',
            'url' => $url . $id . '/attachments',
            'count' => total_rows('tbl_attachments', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => $url . 'attachments'
        ],
        'timesheet' => [
            'position' => 5,
            'name' => 'timesheet',
            'url' => $url . $id . '/timesheet',
            'count' => '',
            'view' => $url . 'timesheet'
        ],
        'milestones' => [
            'position' => 6,
            'name' => 'milestones',
            'url' => $url . $id . '/milestones',
            'count' => total_rows('tbl_milestones', array('project_id' => $id)),
            'view' => $url . 'milestones'
        ],
        'tasks' => [
            'position' => 7,
            'name' => 'tasks',
            'url' => $url . $id . '/tasks',
            'count' => total_rows('tbl_task', array('project_id' => $id)),
            'view' => $url . 'task'
        ],
        'bugs' => [
            'position' => 8,
            'name' => 'bugs',
            'url' => $url . $id . '/bugs',
            'count' => total_rows('tbl_bug', array('project_id' => $id)),
            'view' => $url . 'bugs'
        ],
        'gantt' => [
            'position' => 9,
            'name' => 'gantt',
            'url' => $url . $id . '/gantt',
            'count' => '',
            'view' => $url . 'gantt_chart'
        ],
        'tickets' => [
            'position' => 10,
            'name' => 'tickets',
            'url' => $url . $id . '/tickets',
            'count' => total_rows('tbl_tickets', array('project_id' => $id)),
            'view' => $url . 'tickets'
        ],
        'invoice' => [
            'position' => 11,
            'name' => 'invoice',
            'url' => $url . $id . '/invoice',
            'count' => total_rows('tbl_invoices', array('project_id' => $id)),
            'view' => $url . 'invoice'
        ],
        'estimates' => [
            'position' => 12,
            'name' => 'estimates',
            'url' => $url . $id . '/estimates',
            'count' => total_rows('tbl_estimates', array('project_id' => $id)),
            'view' => $url . 'estimates'
        ],
        'activities' => [
            'position' => 13,
            'name' => 'activities',
            'url' => $url . $id . '/activities',
            'count' => total_rows('tbl_activities', array('module' => 'projects', 'module_field_id' => $id)),
            'view' => $url . 'activities'
        ],


    );
    return apply_filters('client_project_details_tabs', $tabs);
}

function join_data($table, $select = '*', $where = null, $join = null, $row = null, $group_by = null)
{
    $CI = &get_instance();
    if ($select == '*') {
        $CI->db->select('*', false);
    } else {
        $CI->db->select("$select", false);
    }
    $CI->db->from($table);
    if (!empty($join)) {
        foreach ($join as $tbl => $wh) {
            $CI->db->join($tbl, $wh, 'left');
        }
    }
    if (!empty($where)) {
        $CI->db->where($where);
    }

    if ($group_by) {
        $CI->db->group_by($group_by);
    }
    $CI->admin_model->staff_query($table);
    $query = $CI->db->get();
    if (!empty($row) && $row === 'array') {
        $result = $query->result_array();
    } else if (!empty($row) && $row === 'object') {
        $result = $query->result();
    } else {
        $result = $query->row();
    }
    return $result;
}

function get_sales_currency($sales_info)
{
    if (!empty($sales_info->system_currency)) {
        $currency = get_row('tbl_currencies', array('code' => $sales_info->system_currency));
    } else {
        $currency = get_row('tbl_currencies', array('code' => config_item('default_currency')));
    }
    if (!empty($currency)) {
        $sales_info->main_currency_code = $currency->code;
        $sales_info->symbol = $currency->symbol;
    } else {
        $sales_info->main_currency_code = 'USD';
        $sales_info->symbol = '$';
    }
    $currency = apply_filters('sales_currency', $sales_info);
    return $currency;
}

function generate_qrcode($data, $number = 6)
{
    $CI = &get_instance();
    $CI->load->library('qrcode');
    $qr = new QRCode();
    // create QR Code with image
    $qr->setErrorCorrectLevel(QR_ERROR_CORRECT_LEVEL_L);
    $qr->setTypeNumber($number);
    $qr->addData($data);
    $qr->make();
    // create image string code and return as img src
    $image = $qr->createImage(2, 4);
    ob_start();
    imagegif($image);
    $image_string = base64_encode(ob_get_contents());
    ob_end_clean();
    return '<img src="data:image/gif;base64,' . $image_string . '" />';
}

if (!function_exists('strtolower')) {
    function strtolower($str)
    {
    }
}
