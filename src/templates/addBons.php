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
   <section class="sectionaddbons" >
   <body>
  
   <div class="container-fluid">
       <div class="bordure2">
    <form class="mt-5 " id="formBons" name="formBons" onsubmit="return false" >
        <div class="form-group row ">   
        <div class=" col-md-12">   
            <label for="orderDate" class=" col-form-label   ">Date de la commande :</label>
            
                <input type="text" class="form-control w-100  " id="orderDate" name="orderDate" readonly value="<?= date("d-m-yy"); ?>">
            </div>
</div>

        
        <div class="form">
            <div class="form-group col-md-12">
                <label for="customerNumber">Client</label>
                <select id="customerNumber" name="customerNumber" class="form-control" onchange="donneesClient(this)" required>
                    <option value="">- Sélectionnez un client -</option>
                    <?php foreach($customers as $customer): ?>
                        <option value="<?= intval($customer['customerNumber'])?>"><?= htmlspecialchars($customer['customerName']) ?></>
                    <?php endforeach ?>
                </select>
            </div>
          
            
        </div>
        <div class="form-group">   
            <label for="address">Adresse :</label>   
            <input type="text" class="form-control w-100" id="customerAddress" disabled>
        </div>
        <div class="form">
            <div class="form-group ">
                <label for="phone"> Ville :</label>
                <input type="text" class="form-control w-100" id="customerCity" disabled >
            </div>
            <div class="form-group ">
                <label for="phone"> Pays :</label>
                <input type="text" class="form-control w-100" id="customerCountry" disabled >
            </div>
            <div class="form-group ">
                <label for="phone"> Téléphone :</label>
                <input type="text" class="form-control w-100" id="customerPhone" disabled >
            </div>

            <div class="form-group mt-5">
                <a href="addCustomer.php" class="btn bg-success text-white"></i> Ajouter un nouveau client</a>
            </div>
        </div>
        

        

        
        <table id="tableProducts" class="   w-100  mt-5">
            <thead class="bg-success text-white mb-5">
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Description</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody id="bodyTableProducts">
            </tbody>
        </table>
        <div class="text-center mt-2">
            <button type="button" class="btn bg-success text-white mb-2 " onclick="ajouterProduitLigne()"> Ajouter produit</button><p>ou</p>
                           
            <button type="button" class="btn bg-success text-white mb-5 " onclick="supprimerProduitLigne()"> Supprimer produit</button>
        </div>
        
        <div class="form-row">
            <div class="col-md-12 order-2 order-md-1">
                <div class="form-group text-center">
                    <label for="comments">Commentaires :</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center order-1 order-md-2 mt-4 mb-4 ">
                <div class="form-group">
                    <div class="form-group row justify-content-end ">   
                        <label class="mr-3" for="total ">Total : </label>
                        <div>   
                            <input type="number" class="form-control" id="total" name="total" readonly>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">   
                        <label class="mr-3"  for="tva">T.V.A ( 20% ) : </label>
                        <div>   
                            <input type="number" class="form-control" id="tva" name="tva" readonly>
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">   
                        <label class="mr-3" for="totalTtc">Total T.T.C : </label>
                        <div>   
                            <input type="number" class="form-control" id="totalTtc" name="totalTtc" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="text-center">
            <button type="submit" id="saveOrder" class="btn bg-success text-white mb-5" onclick="commande()"> Sauvegarder</button>
            <button type="reset" class="btn bg-success text-white  mb-5"> Reinitialiser</button>
        </div>

    </form>
    </div>   
    <div class="modal" id="reponseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Commande enregistrée</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>
</div>
             
<script src="js/commandes.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- cdn bootstrap js jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
   </body>
   </section>
   </html>

    


