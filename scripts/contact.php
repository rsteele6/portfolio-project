<?php print "<!DOCTYPE html
<head>
    <title>Form Confirmation</title>
    <link rel=\"stylesheet\" href=\"contact-frm.css\">
 </head>
<body>
    <div>
        <h1>Your information has been received.</h1>";
        $message = '';
        foreach ($_POST as $key => $value){
        $message .= $key . " : " . $value . "<br />\r\n";
        }
        print $message;
        print "<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action=\"#\">
            <input type=\"button\" value = \"Back\" onclick=\"javascript:history.go(-1)\">
        </form>
    </div>
</body>
</html>"
?>