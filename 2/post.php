<?php 
  function postMail($to,$subject,$data){
   $mail_headers="content-type:text/html; charset=utf8";
   $message="<b><h4>Время-".date('d-m-Y (H:i:s)')."</h4></b><br>";
   $message.="<table style='margin:auto; border-collapse:collapse; color:#686461;' width='100%' border='1'>
  <tr> <caption>Продукт</caption>
  <th style='border-bottom:3px solid #B9B29F; padding: 10px;text-align:center'>Продукт</th>
    <th style='border-bottom:3px solid #B9B29F; padding: 10px;text-align:center' >Имя</th>
  <th style='border-bottom:3px solid #B9B29F; padding: 10px;text-align:center' >Телефон</th>
  <th style='border-bottom:3px solid #B9B29F; padding: 10px;text-align:center' >Email</th>
    <td style='border-bottom:3px solid #B9B29F; padding: 10px;'>".$data['prodct']."</td>
    <td style='border-bottom:3px solid #B9B29F; padding: 10px;' >".$data['name']."</td>
  <td style='border-bottom:3px solid #B9B29F; padding: 10px;' >".$data['call']."</td>
  <td style='border-bottom:3px solid #B9B29F; padding: 10px;' >".$data['email']."</td> ";
$message.="</table>";
  mail($to,$subject,$message,$mail_headers);
}

if(isset($_POST['posting'])){
;
  if(!empty($_POST['names']) && !empty($_POST['call']) && !empty($_POST['email']) && !empty($_POST['prodct'])){
    $data['name']=$_POST['names'];
    $data['call']=$_POST['call'];
    $data['email']=$_POST['email'];
    $data['prodct']=$_POST['prodct'];
  
      postMail('krupenkosm@bk.ru','Товар',$data);
    header("Location:http://parse.sql/list.html");
  }
  else{
     header("Location:http://parse.sql/list.html");
  }
}
else{
 header("Location:http://parse.sql/list.html");
}  


?>