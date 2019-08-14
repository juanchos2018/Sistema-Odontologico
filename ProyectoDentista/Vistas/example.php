<?php



	include ( "../Envio/NexmoMessage.php" );


	
// $datos=array(
// $_POST['txtnumero'],
// $_POST['txtmensaje']
// );

// echo $obj->RegistrarUsuario($datos);

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('c1f61493', 'a1ZkHVX4pClyCU9u');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $_POST['txtnumero'], 'Roomi', $_POST['txtmensaje'] );
	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	
	// Done!

?>
