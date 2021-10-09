<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="thanks.php" method="post">
    <div>
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="user_name"></br>

    </div>
    <div>
      <label for="nom">Prénom</label>
      <input type="text" id="surname" name="user_surname"></br>

    </div>

    <div>
      <label for="courriel">Courriel :</label>
      <input type="email" id="courriel" name="user_email">
    </div>

    <div>
      <label for="phone_number">Numéro de téléphone :</label>
      <input type="text" id="number" name="user_phone_number">
    </div>

    <div>
    <label for="sujet-select">Sujet:</label>
    </div>

<select name="sujet" id="sujet-select">
    <option value="">--Please choose an option--</option>
    <option value="aide">Aide</option>
    <option value="remboursement">remboursement</option>
    <option value="emploi">Emploi</option>
</select>
    </div>

    <div>
      <label for="message">Message :</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
      <button type="submit">Envoyer</button>
    </div>

  </form>
</body>

</html>
