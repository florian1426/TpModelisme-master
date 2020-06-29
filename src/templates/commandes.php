<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./order-form.css">
</head>
<body>
    
</body>
</html>



<div class='fond'>
<div class="container   ">
 <div class="p-5 "  >

    <table id="listeCommandes" class="table table-responsive-lg table table-bordered table-sm my-5" >
       
            <tr class="bg-success text-white">
            <th scope="col bg-success text-white">Commande</th>
            <th scope="col">Date de la commande</th>
            <th scope="col">Date de livraison</th>
            <th scope="col">Statut</th>
            </tr>
        
        <tbody>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td scope=row> <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a></td>
                    <td><?= $order['orderDate'] ?></td>
                    <td><?= $order['shippedDate'] ?></td>
                    <td><?= $order['status'] ?></td>
                </tr>
            <?php endforeach ?>    
        </tbody>
    </table>
    </div>
</div>

</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
   $('#listeCommandes').DataTable(
    {
        "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
                    }
    });
 </script>
