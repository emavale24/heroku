<?php 

$method = $_SERVER['REQUEST_METHOD'];

// Process only when method is POST
if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);



	$partenza = $json->queryResult->parameters->partenza; 
	$arrivo = $json->queryResult->parameters->arrivo; 

//ignorare 

if($partenza!=null $$ $arrivo!=null)
{
	if($partenza=="trani" && $arrivo=="bari");
{
	$speech = "parte alle 10 e arriva alle 11";
}
	if($partenza=="corato" && $arrivo=="trani");
{

	$speech = "parte alle 9 e arriva alle 10.30";

}  

}
else {
			$speech = "Sorry, I didnt get that. Please ask me something else.";
			;
	}

	$response = new \stdClass();
	$response->speech = $speech;
	$response->displayText = $speech;
	$response->source = "webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

?>