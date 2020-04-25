<?
if((isset($_POST['company']))&&(isset($_POST['contface']))&&(isset($_POST['phone']))&&(isset($_POST['email']))){ //Проверка отправилось ли наше поля name и не пустые ли они
	$to = 'info@beforce.ru,kim@beforce.ru,matveyeff@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
	$subject = 'Заявка на прайс-лист с сайта beautyforce.ru'; //Заголовок сообщения
	$message = '
					<html>
							<head>
									<title>'.$subject.'</title>
							</head>
							<body>
									<p>Компания: '.$_POST['company'].'</p>
									<p>Контактное лицо: '.$_POST['contface'].'</p>
									<p>Телефон: '.$_POST['phone'].'</p>
									<p>E-mail: '.$_POST['email'].'</p>
							</body>
					</html>'; //Текст нашего сообщения можно использовать HTML теги
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>