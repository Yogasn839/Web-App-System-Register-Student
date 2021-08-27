<?php
require_once'functions.php';

if ($act=='login'){
    $user = esc_field($_POST['user']);
    $pass = esc_field($_POST['pass']);

    
    $row = $db->get_row("SELECT * FROM tb_user  WHERE (username='$user' OR email='$user') AND password='$pass'");
    if($row){
        $_SESSION['username'] = $row->username;
        $_SESSION['level'] = $row->level;
        $_SESSION['id_user'] = $row->id_user;
        redirect_js('index.php');
    } else{
        print_msg("Salah kombinasi username dan password.");

    }         
}
/**PASSWORD */
else if ($mod=='password'){
    $pass1 = $_POST[pass1];
    $pass2 = $_POST[pass2];
    $pass3 = $_POST[pass3];
    
    $row = $db->get_row("SELECT * FROM m_user WHERE username='$_SESSION[login]' AND password='$pass1'");        
    
    if($pass1=='' || $pass2=='' || $pass3=='')
        print_msg('Field bertanda * harus diisi.');
    elseif(!$row)
        print_msg('Password lama salah.');
    elseif( $pass2 != $pass3 )
        print_msg('Password baru dan konfirmasi password baru tidak sama.');
    else{        
        $db->query("UPDATE m_user SET password='$pass2' WHERE username='$_SESSION[login]'");                    
        print_msg('Password berhasil diubah.', 'success');
    }
} elseif($act=='logout'){
    unset($_SESSION['admin']);
    header("location:login.php");
}




/** registrasi **/
if($mod=='registrasi'){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if($user==''||$email==''||$pass==''){
        print_msg("berisikan tanda * data tidak boleh kosong wajib diisi");
    }
    
    else{
        $db->query("INSERT INTO tb_user (username,email,password,level) VALUES ('$user','$email','$pass','user')");   
        redirect_js("login.php?ket=success");
    }                    
}

if($mod=='pendaftaran_tambah'){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    $jurusan = $_POST['jurusan'];

    if($nama==''||$alamat==''||$no_telp==''){
        print_msg("berisikan tanda * data tidak boleh kosong wajib diisi");
    }else if($db->get_row("SELECT * FROM tb_pendaftaran WHERE id_user='$_SESSION[id_user]'"))
    {
        print_msg("Anda Sudah pernah mendaftar");
    }
    
    else{
        $db->query("INSERT INTO tb_pendaftaran (nama,alamat,jenis_kelamin,no_telp,jurusan,status,id_user) VALUES ('$nama','$alamat','$jk','$no_telp','$jurusan','Menunggu','$_SESSION[id_user]')");   
        redirect_js("index.php?m=home&ket=success");
    }                    
}if($mod=='pendaftaran_ubah'){
   
        $status = $_POST['status'];
        $db->query("UPDATE tb_pendaftaran set status='$status' WHERE id_pendaftaran='$_GET[ID]'"); 
        redirect_js("?m=siswa");
                 
}

?>