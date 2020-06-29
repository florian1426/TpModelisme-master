
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/fontawesome/css/all.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body class="bc">
    


<div class="container">
  
    <form  class="mt-5 p-5" name="formCustomer" method="POST" action="addCustomer.php" >
        <div class="form-group">
            <label for="customerName">Nom client :</label>
            <input type="texte" name="customerName" id="customerName" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contactLastName">Nom :</label>
                <input type="texte" name="contactLastName" id="contactLastName" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="contactFirstName">Prénom :</label>
                <input type="texte" name="contactFirstName" id="contactFirstName" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Téléphone :</label>
            <input type="texte" name="phone" id="phone" class="form-control w-50">
        </div>
        <div class="form-group">
            <label for="address1">Adresse 1 :</label>
            <input type="texte" name="address1" id="address1" class="form-control">
        </div>
        <div class="form-group">
            <label for="address2">Adresse 2:</label>
            <input type="texte" name="address2" id="address2" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">Ville :</label>
                <input type="texte" name="city" id="city" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="state">Departement :</label>
                <input type="texte" name="state" id="state" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="postalCode">Code postal :</label>
                <input type="number" name="postalCode" id="postalCode" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="country">Pays :</label>
                <input type="texte" name="country" id="country" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="employee">Rep. des ventes</label>
                <select id="employee" name="employee" class="form-control">
                    <?php foreach($employees as $employee): ?>
                        <option value="<?= intval($employee['employeeNumber'])?>"><?= $employee['firstName']." ".$employee['lastName']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="creditLimit">Limite de crédit :</label>
                <input type="number" name="creditLimit" id="creditLimit" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark mb-5">Sauvegarder</button>
        </div>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- cdn bootstrap js jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
