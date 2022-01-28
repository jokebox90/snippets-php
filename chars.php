<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>
<h1>Table des caractères dans PHP</h1>
<h3>Ponctuation</h3>
<hr />
<?php
    for ($i=0; $i < 256; $i++) {
        $char = chr($i);
        if(ctype_punct( $char )) {
            echo utf8_encode( $char );
        }
    }
?>
<h3>Accentués</h3>
<hr />
<?php
    for ($i=0; $i < 256; $i++) {
        $char = chr($i);
        if(!ctype_punct( $char ) && !ctype_cntrl($char) && !ctype_print($char)) {
            echo utf8_encode( $char );
        }
    }
?>
<h3>Alpha / num</h3>
<hr />
<?php
    for ($i=0; $i < 256; $i++) {
        $char = chr($i);
        if(ctype_alnum( $char )) {
            echo utf8_encode( $char );
        }
    }
?>
</body>
</html>