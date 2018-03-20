<!DOCTYPE html>
<html>
<head>
<script src="scripts/main.min.js"></script>
<meta charset="UTF-8">
<title></title>
<!--<meta http-equiv="Refresh" content="5; URL=https://luckyinsite.com.ua/project/land-mavka/">-->
</head>
<body>
<?php  
///письмо админу
//$sendto              = "bonddesign85@gmail.com";//почта программист
$sendto              = "luckyinsite@gmail.com";//почта админа
$username            = $_POST['name'];
$useremail           = $_POST['email'];
$userphone           = $_POST['phone'];
$newsletter          = $_POST['newsletter'];
$summa               = $_POST['summa'];
$quantity            = $_POST['quantity'];
$radioDostavka       = $_POST['radioDostavka'];
$oplata              = $_POST['oplata'];
$novacity            = $_POST['novacity'];
$ukrcity            = $_POST['ukrcity'];
$address             = $_POST['address'];
$postindex           = $_POST['postindex'];
$number              = $_POST['number'];
//Формирование заголовка письма админку
$subject  = "Заказ товару з сайту Майстерня Зілля Мавки";
$headers  = "From: " . strip_tags($useremail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($useremail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=UTF-8 \r\n";
//Формирование тела письма админу
$msg .= "<html><body style='font-family:Arial,sans-serif;width:600px;margin:0 auto;border: 1px solid #c2c2c2;padding: 24px 30px;color: #616161;border-radius: 5px;background:#fff;' >";
$msg .= "<img src='https://luckyinsite.com.ua/project/mavka/images/logo-zakaz.png'>";
$msg .= "<h2 style='font-weight:bold;'>Крем для контуру очей «Синевір»</h2>\r\n";
$msg .= "<h2 style='font-weight:bold;'>Ціна: ".$summa."грн.</h2>\r\n";
$msg .= "<h2 style='font-weight:bold;'>Кількість: ".$quantity."шт.</h2>\r\n";
$msg .= "<hr>\r\n";
$msg .= "<h3 style='color:#3d8c03'>1. КОНТАКТНА ІНФОРМАЦІЯ</h3>\r\n";
$msg .= "<p><strong>Від кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Пошта:</strong> ".$useremail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$userphone."</p>\r\n";
$msg .= "<p><strong>Присилати інформацію на пошту:</strong> ".$newsletter."</p>\r\n";
$msg .= "<h3 style='color:#3d8c03'>2. ДОСТАВКА</h3>\r\n";
$msg .= "<h3 style='color:#3d8c03'>".$radioDostavka."</h3>\r\n";
$msg .= "<h3 style='color:#3d8c03'>".$oplata."</h3>\r\n";
$msg .= "<p><strong>".$novacity." </strong></p>\r\n";
$msg .= "<p><strong>".$ukrcity." </strong></p>\r\n";
$msg .= "<p><strong>".$address." </strong></p>\r\n";
$msg .= "<p>".$number." </p>\r\n";
$msg .= "<p><strong>".$postindex." </strong></p>\r\n";
$msg .= "</body></html>";
// отправка сообщения админку
mail($sendto, $subject, $msg, $headers);
///отправка письма покупателю
$sendto2 = $useremail;
$subject2  = "Заказ товару з сайту Майстерня Зілля Мавки";
$headers2  = "Від: Майстерня Зілля Мавки";
$headers2 .= "Відповісти: ". strip_tags($useremail) . "\r\n";
$headers2 .= "MIME-Version: 1.0\r\n";
$headers2 .= "Content-Type: text/html;charset=UTF-8 \r\n";
$msg2  = "<html><body style='font-family:Arial,sans-serif;width:600px;margin:0 auto;border: 1px solid #c2c2c2;padding: 24px 30px;color: #616161;border-radius: 5px;background:#fff;' >";
$msg2 .= "<img src='https://luckyinsite.com.ua/project/mavka/images/logo-zakaz.png'>";
$msg2 .= "<h2 style='font-weight:bold;'>Крем для контуру очей «Синевір»</h2>\r\n";
$msg2 .= "<p style='font-weight:bold;'>Ціна: ".$summa."грн.</p>\r\n";
$msg2 .= "<p style='font-weight:bold;'>Кількість: ".$quantity."шт.</p>\r\n";
$msg2 .= "<h2 style='font-weight:bold;color:#3d8c03'>ДЯКУЄМО! Ваше замовлення опрацьовується, наші менеджери передзвонять вам найближчим часом!</h2>\r\n";
$msg2 .= "</body></html>";
mail($sendto2, $subject2, $msg2, $headers2);
?>
</body>
</html>