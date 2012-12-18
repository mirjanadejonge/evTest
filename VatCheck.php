<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code
        // here

        use \VatService ;

        $vat = new VatService();

        $vat->setCountryCode("NL");
        $vat->setVatNumber("809808572B01");

        echo $vat->checkVatNumber();

        ?>
    </body>
</html>
