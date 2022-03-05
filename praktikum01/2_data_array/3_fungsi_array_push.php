<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Erwin","Heru","Ali","Zaki"];
        array_push($tims, "Wati");
        foreach ($tims as $person) {
            echo $person. '<br>';
        }
        ?>
    </body>
</html>