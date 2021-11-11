<?php
require 'inc/head.php'; 

//empêcher l'accès à cette page si pas connecté
if(empty($_SESSION["loginname"])) {
    header('Location: login.php');
}
//détruire la session en cours, vider le panier, puis rediriger vers login.php
if (isset($_POST["logout"])) {
    unset($_SESSION['loginname']);
    unset($_SESSION['add_to_cart']);
    header('Location: login.php');
}
?><div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign out</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                         alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <form class="form-group" role="form" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign out" name="logout">
                                    </form>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>
