<?php
session_start();
session_destroy();
echo "
        <html>
            <head>
                <meta http-equiv='REFRESH' content='0; url=../'>
                <script>
                    alert('Has finalizado la sesion');
                </script>
            </head>
        </html>";

?>