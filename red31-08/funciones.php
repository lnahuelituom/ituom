<?php

function verificar_login($mail,$pass,&$result)
    {
        echo $mail;
        echo $pass;
        $sql = "SELECT * FROM usuarios WHERE mail = '".$mail."' AND pass= '".$pass."'";
        $rec = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_object($rec))
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    } 

    ?>