<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * login_Nama_value_exist Model Action
     * @return array
     */
	function login_Nama_value_exist($val){
		$db = $this->GetModel();
		$db->where("Nama", $val);
		$exist = $db->has("login");
		return $exist;
	}

	/**
     * login_Email_value_exist Model Action
     * @return array
     */
	function login_Email_value_exist($val){
		$db = $this->GetModel();
		$db->where("Email", $val);
		$exist = $db->has("login");
		return $exist;
	}

}
