<?php 

/**
 * Auth System Library Extension
 *
 * @author		Julious Mark de Leon
 * @link		https://linkedin.com/in/votch18
 */

class auth
{
	protected 	$ci;
	
	function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->ci =& get_instance();
    }

	public function is_logged_in($url = null)
	{
		$this->ci->load->library("");

		if( $this->ci->session->has_userdata('login') == null &&  $url != 'login' ){
			redirect('user/login');
		}

		return true;
	}

	public function get_users(){
		return $this->ci->session->userdata('login');
	}

	
}

?>