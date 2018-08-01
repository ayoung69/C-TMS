<?
  $recipient = "veryartyoung@naver.com";
  $subject = $_GET['title'];
  $mail_from = $_GET['email'];
  $mail_body = "<table width='600' border='0' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
        <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>SUBJECT</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['title']."</td></tr>".

       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>NAME</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['senduser']."</td></tr>".		
		  
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>PHONE</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['phone']."</td></tr>".	
		  
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>EMAIL</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['email']."</td></tr>".	
 
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>REQUEST</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['body']."</td></tr>".	
		  
      "</table>";


 


$to = iconv('CP949','UTF-8',$to);

$title = iconv('CP949','UTF-8',$title);

$body = iconv('CP949','UTF-8',$body);

$email = iconv('CP949','UTF-8',$email);

 

  $header = "From:$mail_from\n";
  $header .= "Content-Type: text/html;charset=UTF-8";
 
  $email = mail($recipient, $subject, $mail_body, $header);
  if (!$email)
    echo "  <script>
         window.alert('SEND ERROR ');
         history.go(-1);
         </script>";
  else
    echo "         <script>
         window.alert('Successful ');
         history.go(-1);
         </script>";
?>

