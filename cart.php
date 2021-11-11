<?php require 'inc/head.php'; 
require 'inc/data/products.php';
//empêcher l'accès à cette page si pas connecté
if (empty($_SESSION["loginname"])) {
    header('Location: login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row"><?php
    //ajouter un cookie dans la session  
    if(isset($_GET['add_to_cart'])) {
        //si le panier n'existe pas, le créer sous forme de tableau
        if(!isset($_SESSION['add_to_cart'])){
            $_SESSION['add_to_cart'] = [];
        }
        //le panier existe. on enregistrer l'id du cookie dans le tableau
        $_SESSION['add_to_cart'][] = intval($_GET['add_to_cart']);
    }
        //on affiche le contenu du panier
        foreach ($_SESSION['add_to_cart'] as $sessionId) {
            foreach ($catalog as $catalogId => $cookie) {
                if ($sessionId === $catalogId) {
                    echo "Il y a un <strong>" . $cookie['name'] . "</strong> dans mon panier <br>";
                }
            }
        }
    ?></div>
</section>
<?php require 'inc/foot.php'; ?>