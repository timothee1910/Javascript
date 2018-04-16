<!DOCTYPE html>
<html>
<head>
    <title>GET script PHP avec paramètres</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $("#form").change(function(){
        $("#infoDpt").load("showInfo.php?dpt="+$("#dpt").val());
    });
});

    </script>

</head>
<body>
<h1>GET script PHP avec paramètres</h1>
<form action="#" method="post" id="form">
    <select  id="dpt">
        <option value="Info">Informatique</option>
        <option value="Chimie">Chimie</option>
    </select>
</form><br/>
<div id="infoDpt"></div>
</body>
</html>