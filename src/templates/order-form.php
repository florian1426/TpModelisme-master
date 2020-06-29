<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/order-form.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>

       <div>
       

        <a href="index.php" >Retourner à l'accueil</a>
        </div>
        
        
       <div class="bordure">
           <div class="jc">
        <article class="order-form-customer">
            <h2><?= $customer['customerName'] ?></h2>
            <h3><?= $customer['contactFirstName'] ?> <?= $customer['contactLastName'] ?></h3>
            <p><?= $customer['addressLine1'] ?></p>
            <p><?= $customer['addressLine2'] ?></p>
            <p><?= $customer['city'] ?></p>
        </article>
        <!-- Le bon de commande -->
        <table class="standard-table">
            <caption>Bon de commande n° <?= $_GET['orderNumber'] ?></caption>
            </div>
            
            <thead>
                <tr>
                    <th>Produit</th>
                    <th class="money-column">Prix Unitaire</th>
                    <th>Quantité</th>
                    <th class="money-column">Prix Total</th>
                </tr>
            </thead>
            <!-- Un footer de tableau HTML se positionne AVANT le body ! -->
            <tfoot>
                <tr>
                    <th colspan="3">Montant Total HT</th>
                    <th><?= number_format($totalAmount, 2) ?> €</th>
                </tr>
                <tr>
                    <th colspan="3">TVA (20 %)</th>
                    <th><?= number_format($totalAmount * 0.20, 2) ?> €</th>
                </tr>
                <tr>
                    <th colspan="3">Montant Total TTC</th>
                    <!-- Multiplier par 1.20 revient à ajouter 20% à une variable -->
                    <th><?= number_format($totalAmount * 1.20, 2) ?> €</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($orderLines as $orderLine): ?>
                    <tr>
                        <td><?= $orderLine['productName'] ?></td>
                        <td class="money-column"><?= number_format($orderLine['priceEach'], 2) ?> €</td>
                        <td><?= $orderLine['quantityOrdered'] ?></td>
                        <td class="money-column"><?= number_format($orderLine['totalPrice'], 2) ?> €</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </section>
</body>
</html>