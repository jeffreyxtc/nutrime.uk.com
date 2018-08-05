<?php
if (isset($_POST['check']) && $_POST['check'] == '') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $tel = $_POST['tel'];
	$interest = $_POST['InterestedIn'];
    
	if (!$_POST['InterestedIn']) {
        $proceed = 'no';
        $error   = '<div id="results">interest</div>';
    }
	if (!$_POST['tel']) {
        $proceed = 'no';
        $error   = '<div id="results">tel</div>';
    }
    if (!$_POST['email']) {
        $proceed = 'no';
        $error   = '<div id="results">email</div>';
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $proceed = 'no';
        $error   = '<div id="results">email</div>';
    }
    if (!$_POST['name']) {
        $proceed = 'no';
        $error   = '<div id="results">name</div>';
    }
    if ($proceed != 'no') {
        echo 'success';
        $to      = "t.swinks@googlemail.com";
        $subject = 'Nutrime website consultation enquiry';
        $message = "
				<html>
				<head>
				<STYLE type=\"text/css\">
				html,body { 
				-webkit-text-size-adjust:none; 
				}
				</style>
				</head>
				
				<body style=\"margin: 0; line-height: 20px; font-size: 14px; color: #333333; font-family: Arial, Helvetica, sans-serif; padding: 10px;\">
				Name: $name<br>
				Email: $email<br>
				Tel: $tel<br>
				Interested in: $interest
				</body>
				</html>
				";
        $header  = "From: Nutrime <tess@nutrime.uk.com>\n";
        $header .= "Reply-To: Nutrime <tess@nutrime.uk.com>\n";
        $header .= "X-Sender: Nutrime <tess@nutrime.uk.com>\n";
        $header .= "Organization: Nutrime\n";
        $header .= 'X-Mailer: PHP/' . phpversion();
        $header .= "X-Priority: 1\n"; // Urgent message!
        $header .= "Return-Path: Nutrime <tess@nutrime.uk.com>\n"; // Return path for errors
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=iso-8859-1\n";
        mail($to, $subject, $message, $header, '-ftess@nutrime.uk.com');
    } else {
        echo "$error";
    }
}
?>