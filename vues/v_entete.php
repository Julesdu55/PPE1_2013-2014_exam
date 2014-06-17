<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr">
<head>
<title>Portail de la FFF</title>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="util/style.css" rel="stylesheet" type="text/css">

    <!-- Appel de jquery + jquery UI pour les listes -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
    $(function() {
        $(" #sortable1, #sortable2, #sortable3").sortable({
            connectWith:".connectedSortable"

        }).disableSelection();
    });
    </script>

</head>
<body >

<div id="bestlogoworld"> <!-- Non, vraiment, c'est le meilleur. -->
    <a href="index.php"><img src="images/logoFFF.png"></a>
</div>