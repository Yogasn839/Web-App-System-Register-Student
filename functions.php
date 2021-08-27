<?php
error_reporting(~E_NOTICE & ~E_DEPRECATED);
session_start();
$config["server"]='localhost';
$config["username"]='root';
$config["password"]='';
$config["database_name"]='db_ppdb_online';

include'includes/ez_sql_core.php';
include'includes/ez_sql_mysqli.php';
$db = new ezSQL_mysqli($config['username'], $config['password'], $config['database_name'], $config['server']);
include'includes/general.php';
include'includes/image.php';
include'includes/paging.php';

$mod = $_GET['m'];
$act = $_GET['act'];   
$sid = session_id();     

function set_value($key = null, $default = null){
    global $_POST;
    if(isset($_POST[$key]))
        return $_POST[$key];
    if(isset($_GET[$key]))
        return $_GET[$key];
    
    return $default;
}

function kode_oto($field, $table, $prefix, $length){
    global $db;
    $var = $db->get_var("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");    
    if($var){
        return $prefix . substr( str_repeat('0', $length) . (substr($var, - $length) + 1), - $length );
    } else {
        return $prefix . str_repeat('0', $length - 1) . 1;
    }
}


function set_num($angka){
    $a.= 'Rp. '.number_format($angka,2,",",".");
    return $a;
}

function option_jenis($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT * FROM tb_jenis_barang");
    foreach ($rows as $row) {
        if ($selected == $row->id_jenis_barang)
            $a .= "<option value='$row->id_jenis_barang' selected>$row->nama_jenis_barang</option>";
        else
            $a .= "<option value='$row->id_jenis_barang'>$row->nama_jenis_barang</option>";
    }
    return $a;
}

function option_supplier($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT * FROM tb_supplier");
    foreach ($rows as $row) {
        if ($selected == $row->id_supplier)
            $a .= "<option value='$row->id_supplier' selected>$row->nama_supplier</option>";
        else
            $a .= "<option value='$row->id_supplier'>$row->nama_supplier</option>";
    }
    return $a;
}

function option_customer($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT * FROM tb_customer");
    foreach ($rows as $row) {
        if ($selected == $row->id_customer)
            $a .= "<option value='$row->id_customer' selected>$row->nama_customer</option>";
        else
            $a .= "<option value='$row->id_customer'>$row->nama_customer</option>";
    }
    return $a;
}

function option_barang($selected = '')
{
    global $db;
    $rows = $db->get_results("SELECT * FROM tb_barang");
    foreach ($rows as $row) {
        if ($selected == $row->id_barang)
            $a .= "<option value='$row->id_barang' selected>$row->nama_barang</option>";
        else
            $a .= "<option value='$row->id_barang'>$row->nama_barang</option>";
    }
    return $a;
}
