<?php

require_once('../modele/db_access.php');
require '../modele/calendarReq.php';

// $sql = "SELECT id, title, start, end, color FRDisplay.phpOM events ";
// $req = $bdd->prepare($sql);
// $req->execute();
// $events = $req->fetchAll();

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
            <p class="intro-decouverte">Vous voulez découvrir ou simplement jouer au footgolf ? Rien de plus simple, identifier la date et le golf qui vous convient et inscrivez vous. Ce sera l'occasion de partager un bon moment de convivialité et de sportivité avec les joueurs du Paris Footgolf Club.</p>
          </div>



                 <div class="col-md-6 text-center">
                     <div id="calendar" class="col-centered">
                     </div>
                 </div>

                 <div id="mapContainer" class="col-md-6">
                <?php require '../app/mapDisplay.php'; ?>
                   <iframe
                    <?php
                    if ($mapResult)
                    {
                      echo "src='" . $mapResult['source'] . "'";
                    }
                    else
                    {
                      echo "src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6117239942373!2d2.6621683156746383!3d48.865613979288256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61ac1221ac1d3%3A0x615ddb66a7da1135!2sGolf+de+Torcy!5e0!3m2!1sfr!2sfr!4v1496136129002'";
                    }
                    ?>
                    frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                 </div>
             </div>
      </section>
    </main>

    <footer class="container-fluid">

      <div id="sponsor" class="row sponsor">
        <div class="button accessButtonContainer flexRow justifyBetween">
          <a href="sponsoring.php"><button type="button" name="button" class="btn-white-background">Nous sponsoriser</button></a>
        </div>
      </div>

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





    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form class="form-horizontal" method="POST" action="../app/addEvent.php">

        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Ajouter un évènement</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Titre</label>
          <div class="col-sm-10">
            <select name="title" class="form-control" id="title">
            <!-- <input type="text" name="title" class="inputText" id="title" value="Titre"> -->
              <option value="">Sélectionner</option>
              <option value="Golf de Torcy">Golf de Torcy</option>
              <option value="Golf du Coudray">Golf du Coudray</option>
              <option value="Golf du Lys">Golf du Lys</option>
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="color" class="col-sm-2 control-label">Couleur</label>
          <div class="col-sm-4">
            <select name="color" class="form-control" id="color">
              <option value="">Sélectionner</option>
              <option style="color:#0071c5;" value="#0071c5">&#9724; Golf de Torcy</option>
              <option style="color:#40E0D0;" value="#40E0D0">&#9724; Golf du Coudray</option>
              <option style="color:#008000;" value="#008000">&#9724; Golf du Lys</option>
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="start" class="col-sm-2 float">Date de début</label>
          <div class="col-sm-10">
            <input type="text" name="start" class="inputText" id="start" readonly>
          </div>
          </div>
          <div class="form-group">
          <label for="end" class="col-sm-2 control-label">Date de fin</label>
          <div class="col-sm-10">
            <input type="text" name="end" class="inputText" id="end" readonly>
          </div>
          </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Sauvergarder</button>
        </div>
      </form>
      </div>
      </div>
    </div>


    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="../app/editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Editer l'évènement</h4>
			  </div>
			  <div class="modal-body">

          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Titre</label>
          <div class="col-sm-10">
            <select name="title" class="form-control" id="title">
            <!-- <input type="text" name="title" class="inputText" id="title" value="Titre"> -->
              <option value="">Sélectionner</option>
              <option value="Golf de Torcy">Golf de Torcy</option>
              <option value="Golf du Coudray">Golf du Coudray</option>
              <option value="Golf du Lys">Golf du Lys</option>
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="color" class="col-sm-2 control-label">Couleur</label>
          <div class="col-sm-4">
            <select name="color" class="form-control" id="color">
              <option value="">Sélectionner</option>
              <option style="color:;" value="#0071c5">&#9724; Golf de Torcy</option>
              <option style="color:#40E0D0;" value="#40E0D0">&#9724; Golf du Coudray</option>
              <option style="color:#008000;" value="#008000">&#9724; Golf du Lys</option>
            </select>
          </div>
          </div>
				    <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="delete"><input type="checkbox" name="delete"> Delete event</label>
						  </div>
						</div>
					</div>

				  <input type="hidden" name="id" class="form-control" id="id">


			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-primary">Sauvegarder</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>







    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/ease.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src='js/fullcalendar.js'></script>
    <script src='js/fr.js'></script>

    <script type="text/javascript">
    $(document).ready(function() {

        let calendar = function() {
          $.get( "../app/calendar.php")
            .done(function( data ) {
              if(data.response === true) {

                $('#calendar').fullCalendar({

                  header: {
                   left: 'prev',
                   center: 'title',
                   right: 'today, next'
                  },

                  editable: true,
                  selectable: true,
            			selectHelper: true,

                  select: function(start, end) {
            				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            				$('#ModalAdd').modal('show');
            			},

                  eventRender: function(event, element) {
                    element.bind('dblclick', function() {
                      $('#ModalEdit #id').val(event.id);
                      $('#ModalEdit #title').val(event.title);
                      $('#ModalEdit #color').val(event.color);
                      $('#ModalEdit').modal('show');
                    });
                  },

                  eventDrop: function(event, delta, revertFunc) { // si changement de position
				                edit(event);
			            },

			            eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
				                edit(event);
			            },

                  events: [
              			<?php foreach($events as $event):

              				$start = explode(" ", $event['start']);
              				$end = explode(" ", $event['end']);
              				if($start[1] == '00:00:00'){
              					$start = $start[0];
              				}else{
              					$start = $event['start'];
              				}
              				if($end[1] == '00:00:00'){
              					$end = $end[0];
              				}else{
              					$end = $event['end'];
              				}
              			?>
              				{
              					id: '<?php echo $event['id']; ?>',
              					title: '<?php echo $event['title']; ?>',
              					start: '<?php echo $start; ?>',
              					end: '<?php echo $end; ?>',
              					color: '<?php echo $event['color']; ?>',
              				},
              			<?php endforeach; ?>
              			]
                });

                function edit(event){
            			start = event.start.format('YYYY-MM-DD HH:mm:ss');
            			if(event.end){
            				end = event.end.format('YYYY-MM-DD HH:mm:ss');
            			}else{
            				end = start;
            			}

            			id =  event.id;

            			Event = [];
            			Event[0] = id;
            			Event[1] = start;
            			Event[2] = end;

            			$.ajax({
            			 url: '../app/editEventDate.php',
            			 type: "POST",
            			 data: {Event:Event},
            			 success: function(rep) {
            					if(rep == 'OK'){
            						alert('Saved');
            					}else{
            						alert('Could not be saved. try again.');
            					}
            				}
            			});
            		}

                $('#calendar').css('cursor', 'pointer');

              } else {

                $('#calendar').fullCalendar({

                  header: {
                   left: 'prev',
                   center: 'title',
                   right: 'today, next'
                  },

                  selectable: false,
            			selectHelper: true,

                  events: [
            			     <?php foreach($events as $event):

              				$start = explode(" ", $event['start']);
              				$end = explode(" ", $event['end']);
              				if($start[1] == '00:00:00'){
              					$start = $start[0];
              				}else{
              					$start = $event['start'];
              				}
              				if($end[1] == '00:00:00'){
              					$end = $end[0];
              				}else{
              					$end = $event['end'];
              				}
              			     ?>
              				{
              					id: '<?php echo $event['id']; ?>',
              					title: '<?php echo $event['title']; ?>',
              					start: '<?php echo $start; ?>',
              					end: '<?php echo $end; ?>',
              					color: '<?php echo $event['color']; ?>',
              				},
              			<?php endforeach; ?>
              			]
                });

                $('.fc-content').css('cursor', 'pointer');
                $('.fc-title').click(function() {
                  $.ajax({
            			 url: '../app/mapDisplay.php',
            			 type: "POST",
            		   data: "title=" + $(this).text(),
            			//  success: function() {
            			// 		$('#mapContainer').load('http://localhost/paris_foot_golf_club/view/maquette.php' + ' #mapContainer');
            			// 	}
                    success: function (data) {
                      alert(data.response);
                    }
            			});

                });
              }
            });

          };
        calendar();
    });
    </script>
  </body>
</html>
