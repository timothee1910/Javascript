<!DOCTYPE html>
<html>
<head>
    <title>Navigation AJAX 1</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $("#btAccueil").click(function(){
        $("#page").load("page_accueil2.php", function(response, status, xhr){
            alert(response);
            alert(status);
        })
    });
    $("#btContact").click(function(){
        $("#page").load("page_contact.php", {limit: 25})
    });
});

    </script>

</head>
<body>
<h1>Navigation Ajax 1</h1>
<button type="button" id="btAccueil">Accueil</button>
<button type="button" id="btContact">Contact</button>
<div id="page"></div>

</body>
</html>