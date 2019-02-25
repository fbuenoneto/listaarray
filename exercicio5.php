<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $vetor=array("João","Grabiela","Giovana","Gustavo","Laura","Maria","Marcelo","Marcela","Samuel","Angela");
                echo "<select>";
            for ($i=0;$i<10;$i++){
                 echo "<option>";
                 echo "<BR>";
                 echo $vetor[$i];
                 echo "</option>";
             }
                echo "</select>";
        ?>
    </body>
</html>
