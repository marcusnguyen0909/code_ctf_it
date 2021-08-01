<?php
    /* access.php source code */

    $secretKey = file_get_contents("salt.txt");
    $message = "";
    foreach ($_GET as $key => $value) {
        if ($key !== "mac")
		$message .= $key . $value;
    };
    echo $message."<br />";

    if ($_GET["mac"] === md5($secretKey . $message)) {
	    
	    echo  $_GET["filename"]."<br /n>";
	     
	    $fileContent = file_get_contents(
            "cbjs-static/" . $_GET["filename"]
        );
        echo "<img src='data:image/jpeg;base64," . base64_encode($fileContent) . "'>";
    } else {

	echo md5($secretKey . $message);

        echo "403 Forbidden!";
    }
?>
