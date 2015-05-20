<?
while(list($key,$val)=each($_REQUEST))
{ 
$key = trim(stripslashes($val)); 
}

$result=array();
$success=0;
$pgname=basename($_SERVER['PHP_SELF']);
if($_REQUEST[action]=="Submit")
{
	$result=$_REQUEST;

	/////////////////////// SETTINGS /////////////////////////

	$emailto="businessprodesigns@businessprodesigns.com";

	$emailfrom=$_REQUEST[Email];
	$emailsubject="Customer Enquiry for clients";

	$mail_body_title="########### Customer Query ###########";
	$fields=array('Name','Address','City','Country','Telephone','E-Mail','Comments');
	
	/////////////////////// SETTINGS /////////////////////////


	/////////////////////// CUSTOMER DATA //////////////////////
	$val=array();
	$l=0;  
	$msg="";
	foreach($result as $key=>$value)
	{
		if($key!="action")
		{
			$val[$l]=stripcslashes($value);
			$l++;
		}
	}	
	/////////////////////// CUSTOMER DATA //////////////////////

	////////////////////////  EMAIL BODY ///////////////////////
	$body = "<table><tr><td colspan='3'>".$mail_body_title."</td></tr><tr><td colspan='3'>&nbsp;</td></tr>";
	$i=0;
	foreach($fields as $in=>$title)
	{
		$body.="<tr><td>".$title."</td><td width='2%'>:</td><td>".$val[$i]."</td></tr>";
		$i++;
	}
	$body.="</table>";
	////////////////////////  EMAIL BODY ///////////////////////

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: $emailfrom\r\n";

	if(mail($emailto, $emailsubject, $body, $headers))
	{
	$success=1;	
	header("Location: confirmation.html");
	exit;
	}
	else
	{
	
	}
	$success=2;	
	header("Location: contact_us.php?success=$success");
	exit;
	
}
$success_msg="Enquiry has been successfully sent.";
$failure_msg="Sorry! Unable to send the enquiry now.";
?>