<?php 
include('includes/config.php');
$lang['home_page_title'] = 'Home Page';
$lang['site_title'] = 'Nimawat';
$lang['company_name'] = 'India Infosystem';
$lang['company_url'] = 'http://www.indiainfosystem.com';
$lang['fb_url'] = 'http://www.indiainfosystem.com';
$lang['tw_url'] = 'http://www.indiainfosystem.com';
$lang['insta_url'] = 'http://www.indiainfosystem.com';
$lang['gplus_url'] = 'http://www.indiainfosystem.com';
$lang['likin_url'] = 'http://www.indiainfosystem.com';
$prefix = 'oc_';
define(PREFIX, $prefix);
session_start();
function insert($table_name, $attr) //Insert Function
		{
				$keyField = '';
				$valField = "";
				foreach ($attr as $key => $value) {
					$keyField.= $key.', ';
					$valField.= "'".$value."', ";
				}
				$keyField = rtrim($keyField,', ');
				$sql = mysql_query("INSERT INTO $table_name (".rtrim($keyField,', ').") VALUES(".rtrim($valField,', ').")");
				$lastId = mysql_insert_id();
				return $lastId;
			}
/*user login*/
function getLogin($email, $password){
	$sql_log = mysql_query("SELECT * FROM `".PREFIX."customer` WHERE `email` = '".$email."' AND `password` = '".md5($password)."'") or die(mysql_error());
	$num_log = mysql_num_rows($sql_log);
	$details = array();
	if($num_log > 0){
		$row_log = mysql_fetch_object($sql_log);
		$details['success'] = $row_log;
	}else{
		$err = array();
		if($email == ''){ 
			$err['error'] ='Email Should Not Be Blank';
		}else if($password == '' ){
			$err['error'] ='Password Should Not Be Blank';
		}else{
			$err['error'] ='Email And Password are Invalid!';
		}
		$details = $err;
	}
	return $details;
}

function getAllData($table, $sort){
	if($table!=''){
		$sql_cat = mysql_query("SELECT * FROM `".$table."` Order by $sort DESC");
		$num_cat = mysql_num_rows($sql_cat);
		$details = array();
			if($num_cat > 0){
				while($row_cat = mysql_fetch_object($sql_cat)){
					$details[] = $row_cat;
				}
			}
		return $details;
	}else{ return array(); }
}

function getSingleData($tblname,$key,$value){
	if($tblname!='' && $key !='' && $value!=''){
		$sql_cat = mysql_query("SELECT * FROM `".$tblname."` WHERE `".$key."` = '".$value."'");
		$num_cat = mysql_num_rows($sql_cat);
		$details = array();
			if($num_cat > 0){
				while($row_cat = mysql_fetch_object($sql_cat)){
					$details = $row_cat;
				}
			}
		return $details;
	}else{ return array(); }

}

/*find total count of pub*/
function totalCount($tablename,$cond){
	/*echo "SELECT * FROM `".$tablename."` WHERE 1=1 AND $cond";
	exit();*/
	$sql = mysql_query("SELECT * FROM `".$tablename."` WHERE 1=1 AND $cond");
	$num = mysql_num_rows($sql);
	return $num;
}
?>