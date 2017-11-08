<?php

class CommonUtilities {

	function verifyRequiredParams($required_fields,$req_method) {
		$error = false;
		$error_fields = "";
		$request_params = array();
		$request_params = $req_method;
		
		foreach ($required_fields as $field) {
			if (!isset($request_params[$field]) || strlen(trim($request_params[$field])) <= 0) {
				$error = true;
				$error_fields .= $field . ', ';
			}
		}
	 
		if ($error) {
			$response = array();
		   
			$response["error"] = true;
			$response["message"] = 'Required field(s) ' . substr($error_fields, 0, -2) . ' is missing or empty';
			return $response;
		}
		else
		{
			$response["error"] = false;
		}
		return $response;
	}

}

?>
