<?php
if(isset($_POST['valider']))
{
	if(!empty($_POST['user_name']) AND !empty($_POST['user_email']) AND !empty($_POST['user_message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"FilesContainer.github.io"<support@filescontainer.github.io>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['user_name'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['user_email'].'<br />
					<br />
					'.nl2br($_POST['user_message']).'
				</div>
			</body>
		</html>
		';

		mail("files.container.fr@gmail.com", "CONTACT - FilesContainer", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
