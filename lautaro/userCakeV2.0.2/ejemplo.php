<?php  
require_once("models/config.php"); 
if (!securePage($_SERVER['PHP_SELF'])){die();} 
require_once("models/header.php"); 

echo " 
<body> 
<div id='wrapper'> 
<div id='top'><div id='logo'></div></div> 
<div id='content'> 
<h1>Sistema de Usuarios</h1> 
<h2>by Tzar</h2> 
<div id='left-nav'>"; 
include("left-nav.php"); 

echo " 
</div> 
<div id='main'> 

<p> 
Contenido de la web. 
</p> 

</div> 
<div id='bottom'></div> 
</div> 
</body> 
</html>"; 

?>