<?phpif (!defined('ROOT_DIR'))	define('ROOT_DIR', '../');require_once ROOT_DIR . 'config.php';require_once PARSE_DIR . 'parse.php';require_once CLASS_DIR . 'Email.class.php';require_once CLASS_DIR . 'EmailParse.class.php';if ( !isset($_POST['email']) || ( $_POST['email'] == '' ) ) {	?>
<html>
    <head>
        <title>Errore</title>
    </head>
    <body>
        <?php		echo "Siamo spiacenti, sembra non sia possibile portare a termine l'operazione richiesta";	?>
    </body>
</html>
<?php} else {	//determino la classe per l'impostazione della data in parse	$parseRestClient = new parseRestClient();	//determino l'orario dell'accesso/visita e lo scrivo su parse come se il db fosse settato sull'orario di Rome	$date = new DateTime('now', new DateTimeZone('Europe/Rome'));	$date->add(new DateInterval('PT2H'));	//creo l'oggetto email	$email = new Email();	$email->setDate($parseRestClient->dataType('date', $date->format('r')));	$email->setEmail($_POST['email']);	$email->setPage($_POST['tipo']);		//salvo la email	$emailParse = new EmailParse();	$emailParse->saveEmail($email);		$filename='brochure.pdf';	@header("Content-type: application/pdf");	@header("Content-Disposition: attachment; filename=$filename");	echo file_get_contents('brochure/brochure_social.pdf');}?>