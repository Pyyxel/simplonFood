<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SimplonFodd</title>
    <!--css-->
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="../fontawesome/js/fontawesome.js"></script>	<meta name="description" content="Slider Revolution Example" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<header>
    <?php 
        include 'navBar.php';
    ?>
</header>
<div class="formulaire">
    <form id="contact-form" method="post" action="php/mail.php">
        <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" id="Name" name="name" placeholder="Nom *" required="required"
                            class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="Surname" name="surname" placeholder="Prenom *"
                            required="required" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="Email" name="email" placeholder="Email *" required="required"
                            class="form-control">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="phone" placeholder="Numero de téléphone"
                            class="form-control">
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" id="Message" placeholder="Message *" rows="4"
                            required="required" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-outline-primary"
                            onclick="popUp()">Envoyer</button>
                    </div>
                </div>
            </div>
    </form>
</div>
<div class="avis">
    <div class="row mt-5">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ginette</h5>
            <p class="card-text">Tres Bon restaurant <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ginette</h5>
            <p class="card-text">Tres Bon restaurant <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
            
        </div>
        </div>
    </div>
    </div>
</div>
<div class="map">
    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16045.309784339019!2d4.81121548218312!3d49.73855437778617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1584351652317!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<footer>
    <?php
        include 'footer.php';
    ?>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>