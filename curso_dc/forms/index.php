<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
    <?php 
        if(isset($_POST['acoa'])){
            print $_POST['nome'] . "<br>";
            print "poste, hidden" . $_POST['chave'] . "<br>";
            print   $_POST['conteudo']."<br>";;
            print $_FILES['arquivo']['name'];
            
        }else if(isset($_GET['nome'])){
            print $_GET['nome'];
        }
    ?>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="text" name="nome">
        <input type="hidden" name="chave" value="123456">
        <textarea name="conteudo" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar" name="acoa">
        <input type="file" name="arquivo" id="">
    </form>
</body>
</html>