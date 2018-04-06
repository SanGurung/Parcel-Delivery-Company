<?php
//it prevents it from being called unless it is called by the application file.
if(!defined('qrper_hmLVxYhsRycXiwQ'))
{ header ("HTTP/1.0 404 Not Found");
 die();
}

//Main class which contains details to connect to database

Class JWC_Config 
{
	private $offline = '0';
	private $offline_message = '<h3>This site is down for maintenance.<br /> Please check back again soon.</h3>';
	private $base_url="http://localhost";
	private $host = 'localhost';
	private $user = 'root';
	private $password = '';
	private $db = 'jwcouriers_db';
	
	
	function getURL()
    {
        return $this->base_url;
    }
    function isOffline()
    {
    	return $this->offline;
    }
    function getOfflineMessage()
    {
    	return $this->offline_message;
    }
    function getHost()
    {
    	return $this->host;
    }
    function getUser()
    {
    	return $this->user;
    }
    function getPassword()
    {
    	return $this->password; 
    }
    function getDb()
    {
    	return $this->db;
    }

}
$getxConfig=new JWC_Config;
define('SERVER_PATH_BASE',$getxConfig->getURL() );
?>
