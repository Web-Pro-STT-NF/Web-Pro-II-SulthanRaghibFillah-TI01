<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Erwin","Heru","Ali","Zaki"];
        array_shift($tims);
        foreach ($tims as $person) {
            echo $person. '<br>';
        }
        ?>
    </body>
</html>