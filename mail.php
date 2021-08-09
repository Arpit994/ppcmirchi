<?php
if(isset($_POST['SUBMIT']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$msgmail="<body>		  
<table class='formnew'>
<tbody>
<tr class='from-manpower'>
<td>Enquiry From PPCMIRCHI</td>
</tr>
<tr>
<td>Name</td>
<td>$name</td>
</tr>
<tr>
<td>Mobile</td>
<td>$phone</td>
</tr>

<tr>
<td>Email-Id</td>
<td>$email</td>
</tr>       
<tr>
<td>Message</td>
<td>$msg</td>
</tr>    
</tbody>
</table>
</body>";
$mail_to_admin="ppcmirchiofficial@gmail.com";
$sub_admin="Enquiry From PPCMIRCHI";
$mail_admin_body = "$msgmail";	
$sender_admin =$email;		
$headers_admin  = "MIME-Version: 1.0" . "\r\n";
$headers_admin .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers_admin .= "from: ".$sender_admin."\n";
if($email){
@mail($mail_to_admin,$sub_admin,$mail_admin_body,$headers_admin);
$msg = "Thank You for Submitting your query... We Will Contact You Soon !";

?>
<script>

window.location.href = 'https://ppcmirchi.com/contact-us.html'; 
window.alert('Message has been Sent!'); 

</script>
<?

}
else{
$msg= "Message Cound Not Be Send...";
}
}
?>









