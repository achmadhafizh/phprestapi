<?php

include 'http_codes.php';
require_once("Rest.inc.php");
require_once ('include/database.php');
require_once ('include/library.php');
require_once ('include/CommonUtilities.php');
include 'smtpmail/library.php';
include "smtpmail/classes/class.phpmailer.php";

class API extends REST {
	
	public function __construct() {
        parent::__construct();
		
		$db = DB();
		$db2 = DB2();
		
		$this->cUtilities = new CommonUtilities();
		$this->app = new WebLib();
		
		$this->informix = $this->app->getInformixConnection();
		$this->mysql = $this->app->getMYSQLConnection();
    }

    public function processApi() {
        $func = strtolower(trim(str_replace("/", "", $_REQUEST['rquest'])));
        
        if((int) method_exists($this, $func) > 0) {
            $this->$func();
        } else {
            $error = array('error' => true, "message" => "No api found");
            $this->response($this->json($error), 400);
        }
    }

	private function json($data) {
        if (is_array($data)) {
            return json_encode($data);
        }
    }
    
    private function testPostService() {
		if ($this->get_request_method() != "POST") {
            $error = array('error' => true, "message" => "Method Not Acceptable");
            $this->response($this->json($error), 406);
        }
        
        $res = $this->cUtilities->verifyRequiredParams(array('param1', 'param2'), $this->_request);

        if ($res["error"]) {
            $error = array('error' => true, "message" => $res["message"]);
            $this->response($this->json($error), 406);
        }
        
        $param1 = $this->_request['param1'];
        $param2 = $this->_request['param2'];
        
        $fetchRowsArray = $this->app->fetchRowsArrayInformix("SELECT * FROM tabel WHERE condition1 = '$param1' AND condition2 = '$param2'")
        
        if(count($fetchRowsArray) > 0) {
			$error = array('error' => false, "message" => "Records found.", "data" => $fetchRowsArray);
			$this->response($this->json($error), 200);
		} else {
			$error = array('error' => true, "message" => "No records found.");
			$this->response($this->json($error), 200);
		}
	}
    
    private function testGetService() {
		if ($this->get_request_method() != "GET") {
            $error = array('error' => true, "message" => "Method Not Acceptable");
            $this->response($this->json($error), 406);
        }
        
		$fetchRowsObject = $this->app->fetchRowsObjectMYSQL("SELECT * FROM tabel");
		
		if(!empty($fetchRowsObject)) {
			$error = array('error' => false, "message" => "Records found", "data" => $fetchRowsObject);
			$this->response($this->json($error), 200);
		} else {
			$error = array('error' => true, "message" => "No records found.");
			$this->response($this->json($error), 200);
		}
	}
	
	private function testSendMail() {
        try {
            $mail = new PHPMailer; // call the class 
			$mail->IsSMTP();
			$mail->Host = SMTP_HOST; //Hostname of the mail server
			$mail->SMTPAuth = FALSE; //Whether to use SMTP authentication
			$mail->SetFrom("email@email.com", "Sender Name"); //From address of the mail
			$mail->Subject = "Test Send Web Service E-MAIL"; //Subject od your mail
			$mail->AddAddress("user@email.com", "User Receipt"); //To address who will receive this email
			$mail->MsgHTML("This is content message"); //Put your body of the message you can place html code here
			$send = $mail->Send(); //Send the mails  
			
			$error = array('error' => false, "message" => "Send Mail Success.");
            $this->response($this->json($error), 200);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
    
}

// Initiiate Library
$api = new API;
$api->processApi();   

?>
