<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>


<p>Merci, <?php echo $_POST['user_name'],$_POST['user_surname']?> de nous avoir contacté à propos de "<?= $_POST['sujet']?>".</br>
</br>Un de nos consseiller vous contactera soit à l'adresse <?= $_POST['user_email']?> ou par téléphone au <?= $_POST['user_phone_number']?> dans les plus brefs délais pour <br>traiter votre demande : </br>
</br><?= $_POST['user_message']?></br>
</p>
    
</body>
</html>