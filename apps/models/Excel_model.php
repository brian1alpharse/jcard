<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Excel_model extends CI_Model{
    
    public function import_data_mahasiswa($resultData)
	{
		$sql = "INSERT INTO
		  	tbl_mahasiswa(
		  	npm,
		    namamahasiswa,
		    jurusan,
		    alamat,
		    nomorhp,
			email
		)
		VALUES (
			'".$resultData['npm']."',
		    '".$resultData['namamahasiswa']."',
		    '".$resultData['jurusan']."',
		    '".$resultData['alamat']."',
		    '".$resultData['nomorhp']."',
		    '".$resultData['email']."'
		)";
	    $this->db->query($sql);
	    return $this->db->affected_rows();
	}
	
	public function import_login_mahasiswa($resultDatalogin)
	{
		$sql2 = "INSERT INTO
		  	tbl_user(
		  	id_usr,
		    uname,
		    password,
		    nama,
		    level,
			last_login
		)
		VALUES (
			'',
			'".$resultDatalogin['uname']."',
			'".$resultDatalogin['password']."',
		    '".$resultDatalogin['namalogin']."',
		    '".$resultDatalogin['level']."',
		    '".$resultDatalogin['last_login']."'
		)";
	    $this->db->query($sql2);
	    return $this->db->affected_rows();
	}
}

