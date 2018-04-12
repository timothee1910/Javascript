<!DOCTYPE html>
<html>
<head>
    <title>Navigation AJAX 2</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $(".lien").click(function(){
        $("#page").load("page_" + $(this).attr("id")+".php", function(response, status, xhr){
            alert(response);
            alert(status);
        })
    });
});

    </script>

</head>
<body>
<h1>Navigation Ajax 2</h1>
<button type="button" id="accueil" class="lien">Accueil</button>
<button type="button" id="contact" class="lien">Contact</button>
<div id="page"></div>
</body>
</html>