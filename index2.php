<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Site PHP-HTML</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <style>
        p{
            color: pink;
        }
    </style>
</head>
<body>
    <?php
        for ($i=0; $i < 10 ; $i++) { 
            print("<p><b>Linha Numero " . $i . "</b><p><br>");
        }
    ?>
</body>
    <script type="text/javascript">
        $(document).ready(function(){
            alert("FEITO!!!");
        });
    </script>
</html>