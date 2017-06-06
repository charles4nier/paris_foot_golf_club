<?php
  require 'head.php';
 ?>
<body>
  <header class="container-fluid">
    <div class="row">
      <div class="col-md-4 text-center logoContainer flexCol alignCenter justifyCenter">
        <img class="logo" src="img/logo.jpg" height="100px" alt="">
        <p>Paris Foot Golf Club</p>
      </div>
      <div class="col-md-4 col-md-offset-4 flexRow alignCenter justifyCenter">
        <a href="profil.html"><button type="button" name="button" class="btn-white-background">Se connecter</button></a>
      </div>
    </div>
    <nav class="row text-center">
      <ul class="flexRow alignCenter justifyCenter">
        <li><a href="maquette.php" class="scrollButton">Accueil</a></li>
        <li><a href="sponsoring.php" class="scrollButton">Sponsoring</a></li>
      </ul>
    </nav>
  </header>
    <main class="e-boutique container-fluid">

    <?php if(isset($_SESSION['admin'])) { ?>
      <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#modalEditArticle">+</button>
        <div id="modalEditArticle" class="firstModal modal fade" role="dialog">
            <div class="enveloppe modal-dialog">
                <!-- Modal content-->
                <form method="post" action="../controller/uploadImg.php" enctype="multipart/form-data">
                    <label for="model" class="floating-label">Modèle</label>
                    <input name="model" type="text" id="model" class="inputText"><br>
                    <label for="image" class="floating-label">Image</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                    <input type="file" name="image" id="image"> <br>
                    <input type="submit" name="submit" value="Ajouter" class="btn-colored-background">
                </form>
                <form class="loginPanel" action="../controller/signin.php" method="post">
                    <div class="inputcontainer">
                        <input type="text" class="inputText" name="mail" id="login_mail" required/>
                        <label class="floating-label" for="mail">Votre Email :</label>
                    </div>

                    <div class="inputcontainer">
                        <input type="password" class="inputText" name="password" id="login_password" required/>
                        <label class="floating-label" for="password">Votre mot de pass :</label>
                    </div>

                    <input class="btn-colored-background" type="submit" name="" value="Se connecter">
                </form>
            </div>
        </div>
    <?php } ?>


    <section class="article col-md-6">
  <?php require '../modele/db_access.php';

  $links = $bdd->query('SELECT * FROM upload');

      foreach ($links as $link) { ?>
      <article class="col-md-6">
        <?php echo '<img src="data:'.utf8_encode($link['type']).';base64,'.base64_encode(stripslashes($link['content'])). '"/>';?>
        <p class="col-xs-offset-1 col-xs-4 col-md-4" id="id_image"> Référence article : <?php echo $link['id']; ?></p>
      </article>
      <?php } ?> 

      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 34</p>
      </article>
      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 35</p>
      </article>
      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 36</p>
      </article>
    </section>
    <section class="formulaire-achat col-md-6">
      <h2>Commander votre article</h2>
      <div class="enveloppe formu-achat">
        <form class="flexRow justifyAround" method="post" action="../controller/mail_boutique.php">
         <div class="pack-sponsoring">
          <div class="flexCol achat">
            <div class="inputcontainer">
              <input type="text" class="inputText" name="article" id="article" required/>
              <label class="floating-label">Référence article :</label>
            </div>

            <p>Taille article</p>
            <select name="taille">
              <option value="xs">XS</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
            </select>

            <div class="inputcontainer quantité">
              <input type="text" class="inputText" name="quantité" id="quantité" required/>
              <label class="floating-label">Quantité :</label>
            </div>
          </div>

        </div>



          <div class="">
            <div class="inputcontainer">
              <input type="text" class="inputText" name="prenom" id="prenom" required/>
              <label class="floating-label">Prénom :</label>
            </div>

            <div class="inputcontainer">
              <input type="text" class="inputText" name="ville" id="ville" required/>
              <label class="floating-label">Ville :</label>
            </div>

            <div class="inputcontainer">
              <input type="text" class="inputText" name="telephone" id="telephone" required/>
              <label class="floating-label" for="telephone">Téléphone :</label>
            </div>


          </div>

          <div class="">
            <div class="inputcontainer">
              <input type="text" class="inputText" name="nom" id="nom" required/>
              <label class="floating-label" for="nom">Nom :</label>
            </div>

            <div class="inputcontainer">
              <input type="text" class="inputText" name="adresse" id="adresse" required/>
              <label class="floating-label">Adresse :</label>
            </div>

            <div class="inputcontainer">
              <input type="mail" class="inputText" name="mail" id="mail" required/>
              <label class="floating-label">Mail :</label>
            </div>

            <input class="btn-colored-background" type="submit" name="submit" value="Envoyer">
          </div>
          <p><?php 
          echo $_SESSION['text_command'];
           ?></p>
        </form>
      </div>
    </section>
  </main>
  <footer class="container-fluid">
    <aside class="row">
      <div class="col-md-3 text-center contact">
        <ul class="list-inline">
          <li><a href="https://www.facebook.com/paris.footgolf/?fref=ts"><img src="img/fb.png" height="30" alt="le logo facebook"></a></li>
          <li><a href="https://www.youtube.com/paris.footgolf"><img src="img/youtube.png" height="30" alt="le logo youtube"></a></li>
          <li><a href="https://www.footgolf-inside.com"><img src="img/inside.png" alt="le logo footgolf-inside" height="30"></a></li>
        </ul>
      </div>

      <div id="contact" class="col-md-6 contact">
        <p>Contact : <a href="#">paris.footgolf@gmail.com</a></p>
        <ul class="list-inline">
          <li>
            <ul>
              <li>Yann BERTIN</li>
              <li>Président</li>

            </ul>
          </li>

          <li>
            <ul>
              <li>Mickaël LAFON</li>
              <li>Secrétaire</li>

            </ul>
          </li>

          <li>
            <ul>
              <li>Guilain BIHAN</li>
              <li>Trésorier</li>

            </ul>
          </li>
        </ul>
      </div>
    </aside>
  </footer>
</body>
</html>
