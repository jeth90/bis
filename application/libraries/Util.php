<?php 

/**
 * Auth System Library Extension
 *
 * @author		Julious Mark de Leon
 * @link		https://linkedin.com/in/votch18
 */

class util
{
	protected 	$ci;
	
	function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->ci =& get_instance();
    }

	
     /**
     * @param $length integer
     * @return random characters
     */
    public static function generateRandomCode($length = 50) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    /**
     * @param $length integer
     * @return random characters capitalized only
     */
    public static function generateRandomCodeCapital($length = 4) {
        return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

    /**
     * @param $value mixed
     * @param $decimal integer
     * @return 
     */
    public static function number_format($value, $decimal = 2){
        return number_format((float)$value, $decimal, '.', ',');
    }
	    
    /**
     * @param $value string
     * @param $format string {'Y/m/d h:m A', 'Y/m/d', etc.}
     * @return formated date string
     */
    public static function date_format($value, $format = 'Y-m-d'){
        return date_format(new DateTime($value), $format);
    }

    /**
     * @param $value string
     * @return string 
     */
    public static function get_chat_time($value){
        $to_time = strtotime($value);
        $from_time = strtotime("now");

        $time = $from_time - $to_time;

       // return $to_time.' - '.$from_time;

        $seconds = floor($time);
        $minutes = floor($seconds / 60);
        $hours = floor($minutes / 60);
        $days = floor($hours / 24);
        $months = floor($days / 30);
        $years = floor($months / 12);

        if ( $years > 0 ) {
           return ($years == 1) ? '1 year ago' : $years.' years ago';
        } else if ( $months > 0 ) {
            return ($months == 1) ? '1 month ago' : $months.' months ago';
        } else if ( $days > 0 ) {
            return ($days == 1) ? '1 day ago' : $days.' days ago';
        } else if ( $hours > 0 ) {
            return ($hours == 1) ? '1 hour ago' : $hours.' hours ago';
        } else if ( $minutes > 0 ) {
            return ($minutes == 1) ? '1 minute ago' : $minutes.' minutes ago';
        } else {
            return ($seconds == 1) ? '1 second ago' : $seconds.' seconds ago';
        }

    }

    /**
     * get ip address of client/visitor
     * @return ipaddress
     */
    public static function getIpAddress(){
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        } elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }

        return $ip;
    }

    /**
     * get browser name of client/visitor
     * @return string
     */
    public static function getBrowserName()
    {
        $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        
        //add space to so that strpos won't return 0
        $user_agent = " ".$user_agent;

        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
        elseif (strpos($user_agent, 'Edge')) return 'Microsoft Edge';
        elseif (strpos($user_agent, 'Chrome')) return 'Google Chrome';
        elseif (strpos($user_agent, 'Safari')) return 'Safari';
        elseif (strpos($user_agent, 'Firefox')) return 'Mozilla Firefox';
        elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
        
        return 'Other';
    }

	
}
