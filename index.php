<?php

require ('views/header.php');

$pages = ["main","cart","ledenec","about","error","test"];

if (isset($_GET['page'])){
	if(in_array($_GET['page'],$pages))
		include ('pages/' . $_GET['page'] . '.php');
	else include ('pages/error.php');
}
else include ('pages/error.php');


/*switch ($_GET['page']) {
	case 'main':
		include ('pages/main.php');
		break;
	case 'cart':
		include ('pages/cart.php');
		break;
	case 'ledenec':
		include ('pages/ledenec.php');
		break;
	case 'about':
		include ('pages/about.php');
		break;
	default:
		include ('pages/error.php');
		break;
}*/

require ('views/footer.php');
?>