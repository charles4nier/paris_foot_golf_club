<?php
  require 'head.php';
 ?>
  <body>
    <!-- Modal qui ouvre la connexion au site -->
    <div id="myModal" class="firstModal modal fade" role="dialog">
      <div class="enveloppe modal-dialog">
        <!-- Modal content-->
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

    <!-- modal qui ouvre l'inscription au club  -->

    <section id="inscription" class="inscription row thirdModal modal fade" role="dialog">

        <div class="enveloppe modal-dialog">
          <form class="flexRow justifyAround" action="../controller/signup.php" method="post">

            <div class="packCompetition">
             <p><input type="radio" name="pack" value="packCompétition">Le pack "compétition" à 100 euros comprenant : </p>
             <ul>
               <li>La licence AFFG</li>
               <li>Le droit d'entrée au PFFG</li>
               <li>Le maillot officiel du PFFG</li>
               <li>Le bermuda de compétition</li>
               <li>Le polo de sortie</li>
               <li>Une paire de chaussette</li>
               <li>Un marqueur</li>
               <li>Un green-fee offer (hors Trophy)</li>
             </ul>
           </div>

           <div class="packLoisir">
            <p><input type="radio" name="pack" value="packLoisirs">Le pack "loisirs" à 60 euros, comprenant : </p>
            <ul>
              <li>La licence AFFG</li>
              <li>Le droit d'entrée au PFFG</li>
              <li>Le polo de sortie</li>
              <li>Un green-fee offer (hors Trophy)</li>
            </ul>

            <div class="flexCol">
              <p>Taille de votre polo :</p>
              <select name="polo">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
              </select>

              <p>Taille de votre short :</p>
              <select name="short">
                <option value="xs">XS</option>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
              </select>

              <p>Taille de la paire de chaussette :</p>
              <select name="chaussette">
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
              </select>
            </div>
          </div>

            <div class="">
              <div class="inputcontainer">
                <input type="text" class="inputText" name="prenom" id="prenom" required/>
                <label class="floating-label">Prénom :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="nom" id="nom" required/>
                <label class="floating-label" for="nom">Nom :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="age" id="age" required/>
                <label class="floating-label">Age :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="sexe" id="sexe" required/>
                <label class="floating-label" for="sexe">Sexe :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="ville" id="ville" required/>
                <label class="floating-label">Ville :</label>
              </div>

              <p>Certificat Médical déposé :</p>
              <label class="cm" for="cm?">Oui :</label>
              <input  type="radio" name="cm?" value="Oui">
              <label  class="cm" for="cm?">Non :</label>
              <input type="radio" name="cm?" value="Non">
            </div>

            <div class="">


              <div class="inputcontainer">
                <input type="text" class="inputText" name="adresse" id="adresse" required/>
                <label class="floating-label">Adresse :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="telephone" id="telephone" required/>
                <label class="floating-label" for="telephone">Téléphone :</label>
              </div>

              <div class="inputcontainer">
                <input type="mail" class="inputText" name="mail" id="mail" required/>
                <label class="floating-label">Mail :</label>
              </div>

              <div class="inputcontainer">
                <input type="mail" class="inputText" name="pass" id="pass" required/>
                <label class="floating-label">Password :</label>
              </div>

              <div class="inputcontainer">
                <input type="mail" class="inputText" name="pass_confirm" id="pass_confirm" required/>
                <label class="floating-label">Confirmation :</label>
              </div>

              <input class="btn-colored-background" type="submit" name="" value="Envoyer">
            </div>
          </form>
        </div>
    </section>

                          <!-- fin de la zone modal -->

    <header class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center logoContainer flexCol alignCenter justifyCenter">
          <img class="logo" src="img/logo.jpg" height="100px" alt="">
          <p>Paris Foot Golf Club</p>
        </div>
        <div class="col-md-4 col-md-offset-4 flexRow alignCenter justifyCenter">
          <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#myModal">Se connecter</button>
        </div>
      </div>
      <nav class="row text-center">
        <ul class="flexRow alignCenter justifyCenter">
          <li><a href="#accueil" class="scrollButton">Accueil</a></li>
          <li><a href="#sport"  class="scrollButton">Le sport</a></li>
          <li><a href="#sponsor" class="scrollButton">Sponsoring </a>
          <li><a href="#contact" class="scrollButton">Nous contacter</a></li>
        </ul>
      </nav>
    </header>
    <div id="accueil" class="flexCol justifyEnd alignCenter footGolfClub">
      <div class="button accessButtonContainer flexRow justifyBetween">
        <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#inscription">S'inscrire au club</button>
        <a href="#decouverte" class="scrollButton"><button type="button" name="button" class="btn-white-background">Découvrir les ateliers</button></a>
        <a href="eboutique.php"><button type="button" name="button" class="btn-white-background">Aller à la boutique</button></a>
      </div>

    </div>
    <main class="container-fluid">
      <section id="club" class="row club">
        <div class="col-md-12">
          <h2>Paris Footgolf Club</h2>

          <ul>
            <li>Le Paris FootGolf Club (PFGC) est l’un des premiers clubs de FootGolf français. Il fait parti de l’élite des clubs français depuis sa création en mai 2015.</li>
            <li>3ème du championnat de France (FootGolf Cup) lors de la saison 2016, six de nos joueurs ont participé à la grande finale de la FootGolf Cup  à Marrakech !</li>
            <li>Mika Lafon, joueur emblématique du club est sélectionné pour la deuxième année consécutive en Equipe de France.</li>
            <li>Le club participe en plus à des étapes européennes rivalisant avec les meilleurs joueurs mondiaux de FootGolf.</li>
          </ul>
        </div>
      </section>

      <section id="sport" class="row sport">
        <div class="col-md-5 footGolfImgContainer">

        </div>
        <div class="col-md-7">
          <h2>Le footgolf</h2>
          <div class="row">
            <p>Jouer au football avec élégance, sur un terrain de golf, selon les règles du golf, tel pourrait être la définition du Footgolf.</p>
            <div class="col-md-offset-1 col-md-5 concept">

              <h3><img src="img/Wind Speed 48-52-50.png" alt="">Un dress code</h3>
              <p>Le Footgolf, c'est une véritable identité vestimentaire : Polo, bermudas, chaussettes à losange montantes et bérets sont alors de sortie sur le green.</p>
            </div>
            <div class="col-md-5 concept">

              <h3><img src="img/Soccer Ball Filled-50.png" alt="">Un ballon</h3>
              <p>Taille 5 uniquement, vous serez vite pris par le virus des ballons officiels de matchs.</p>
            </div>
            <div class="col-md-offset-1 col-md-5 concept">

              <h3><img src="img/Soccer Filled-50.png" alt="">Une frappe</h3>
              <p> Tout en technique : drive, approche, putt... à moins d'être golfeur ces termes ne vous disent pas grand chose mais ils vont vite rentrer dans votre langage.</p>
            </div>
            <div class="col-md-5 concept">

              <h3><img src="img/Wind Speed 48-52-50.png" alt="">Un trou</h3>
              <p>Certes plus grand que celui des golfeurs, mais c'est pas pour autant que c'est plus simple !</p>
            </div>

            <a href="https://www.footgolf-france.fr/" target="_blank"><button class="btn-white-background" type="button" name="button">Plus d'informations</button></a>
          </div>
        </div>
      </section>

      <section id="decouverte" class="decouverte row">
          <div class="col-md-offset-2 col-md-8">
            <h2>Atelier découverte</h2>
            <p>Vous voulez découvrir ou simplement jouer au footgolf ? Rien de plus simple, identifier la date et le golf qui vous convient et inscrivez vous. Ce sera l'occasion de partager un bon moment de convivialité et de sportivité avec les joueurs du Paris Footgolf Club.</p>
          </div>

           <div class="calendarDecouverte col-md-6">
             <!-- insérer calendar facilement modifiable sur lequel apparaissent toutes les sessions decouvertes (en vert) -->
             <form class="flexCol alignCenter justifyCenter">
               <p>Inscription :</p>
               <div class="inputcontainer">
                 <input type="text" class="inputText" name="prenomDecouverte" id="prenomDecouverte" required/>
                 <label class="floating-label" for="prenomDecouverte">Prénom :</label>
               </div>

               <div class="inputcontainer">
                 <input type="text" class="inputText" name="nomDecouverte" id="nomDecouverte" required/>
                 <label class="floating-label" for="nomDecouverte">Nom :</label>
               </div>

               <div class="inputcontainer">
                 <input type="mail" class="inputText" name="mailDecouverte" id="mailDecouverte" required/>
                 <label class="floating-label" for="mailDecouverte">Mail :</label>
               </div>

               <div class="inputcontainer">
                 <input type="text" class="inputText" name="telDecouverte" id="telDecouverte" required/>
                 <label class="floating-label" for="telDecouverte">Téléphone :</label>
               </div>

               <div class="inputcontainer">
                 <input type="text" class="inputText" name="refDecouverte" id="refDecouverte" required/>
                 <label class="floating-label" for="refDecouverte">Référence de l'atelier :</label>
               </div>

               <textarea name="textareaDecouverte" placeholder="Votre message..."></textarea>

               <input class="btn-colored-background" type="submit" name="" value="S'inscire">

             </form>
           </div>
          </div>

          <div class="col-md-6">
            <!-- insérer formulaire avec - nom  - prénom  - tel - heure du début de la session-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.8793959013387!2d2.2508546508203797!3d48.841439109753125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67ac09948a18d%3A0xdd2450406cef2c5c!2sLe+Parc+des+Princes!5e0!3m2!1sen!2sfr!4v1495469069744" width="461" height="615" frameborder="0" style="border:0" allowfullscreen></iframe>

            <!-- <form class="flexCol alignCenter justifyCenter">
              <p>Inscription :</p>
              <div class="inputcontainer">
                <input type="text" class="inputText" name="prenomDecouverte" id="prenomDecouverte" required/>
                <label class="floating-label" for="prenomDecouverte">Prénom :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="nomDecouverte" id="nomDecouverte" required/>
                <label class="floating-label" for="nomDecouverte">Nom :</label>
              </div>

              <div class="inputcontainer">
                <input type="mail" class="inputText" name="mailDecouverte" id="mailDecouverte" required/>
                <label class="floating-label" for="mailDecouverte">Mail :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="telDecouverte" id="telDecouverte" required/>
                <label class="floating-label" for="telDecouverte">Téléphone :</label>
              </div>

              <div class="inputcontainer">
                <input type="text" class="inputText" name="refDecouverte" id="refDecouverte" required/>
                <label class="floating-label" for="refDecouverte">Référence de l'atelier :</label>
              </div>

              <textarea name="textareaDecouverte" placeholder="Votre message..."></textarea>

              <input class="btn-colored-background" type="submit" name="" value="S'inscire">

            </form> -->
          </div>
      </section>

      </section>


    </main>

    <footer class="container-fluid">

      <div id="sponsor" class="row sponsor">
        <div class="button accessButtonContainer flexRow justifyBetween">
          <a href="sponsoring.php"><button type="button" name="button" class="btn-white-background">Nous sponsoriser</button></a>
        </div>
      </div>

      <!-- <div id="sponsor" class="row sponsor">
        <div class="col-md-8 col-sm-12">
          <h2>Ils ont choisi de nous sponsoriser :</h2>
          <ul class="list-inline">
            <li><img src="img/logo_kappa.jpg" alt="" height="70"></li>
            <li><img src="img/logo_nike.png" alt="" height="70"></li>
            <li><img src="img/logo_parisien.png" alt="" height="70"></li>
            <li><img src="img/logo_pariscola.png" alt="" height="70"></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-12">
          <H2>Vous souhaitez nous sponsoriser ? </h2>

          <a href="sponsoring.html" class="text-center"><button class="btn-white-background" type="button" name="button">Plus d'informations</button></a>
        </div>
      </div> -->
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
    <script type="text/javascript" src="js/ease.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
