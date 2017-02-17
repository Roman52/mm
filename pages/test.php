<h2>Test Test Test</h2>
<p>Страница для тестирования функций</p>
 <?php

 $headers = getallheaders ();

 $h_list = headers_list ();
 echo $_HTTP_REFFERER;
 echo "<hr>\nВсе заголовки HTTP-запроса:\n<br>\n";
 foreach ($headers as $key => $value)
 echo "[ $key ] =>  $value <br>";
 echo "<hr>\nСписок отправленных HTTP-заголовков (или готовых к отправке):\n<br>\n";
 foreach ($h_list as $key => $value)
 echo "[ $key ] =>  $value <br>";
?>  