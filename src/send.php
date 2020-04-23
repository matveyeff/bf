<?
if((isset($_POST['contface']))&&(isset($_POST['email']))&&(isset($_POST['company']))){ //Проверка отправилось ли наше поля name и не пустые ли они
	$to = 'matveyeff@Mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
	$subject = 'Тема письма'; //Загаловок сообщения
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
					</html>'; //Текст нащего сообщения можно использовать HTML теги
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>