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
        <li><a href="#club">Le club</a></li>
        <li><a href="#sport">Le sport</a></li>
        <li><a href="#decouverte">Atelier découverte</a></li>
        <li><a href="#inscription">Rejoindre le club</a></li>
        <li><a href="#boutique">La boutique</a></li>
        <li><a href="#sponsor">Sponsoring</a></li>
        <li><a href="#contact">Nous contacter</a></li>
      </ul>
    </nav>
  </header>
  <?php require 'form_crud.php'; ?>
  <main class="e-boutique container-fluid">
 
      <?php require '../controller/vitrine.php'; ?>

    <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#add-article">+</button>
    <section class="article col-md-6">
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
      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 37</p>
      </article>
      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 38</p>
      </article>
      <article class="col-md-6">
        <img src="http://www.footpack.fr/wp-content/uploads/2016/03/Paris-Footgolf-Club.jpg" alt="">
        <p>Référence article : 39</p>
      </article>
    </section>
    <section class="formulaire-achat col-md-6">
      <h2>Commander votre article</h2>
      <div class="enveloppe formu-achat">
        <form class="flexRow justifyAround">
         <div class="pack-sponsoring">
          <div class="flexCol achat">
            <div class="inputcontainer">
              <input type="text" class="inputText" name="article" id="article" required/>
              <label class="floating-label">Référence article :</label>
            </div>

            <p>Taille article</p>
            <select>
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

            <input class="btn-colored-background"type="submit" name="" value="Envoyer">
          </div>
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
