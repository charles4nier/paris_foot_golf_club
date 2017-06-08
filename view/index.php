<?php
require 'head.php';
 ?>
  <body>
    <?php require 'modal.php'; ?>
    <header class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center logoContainer flexCol alignCenter justifyCenter">
          <img class="logo" src="../view/img/logo.jpg" height="100px" alt="">
          <p>Paris Foot Golf Club</p>
        </div>
        <div class="col-md-4 col-md-offset-4 flexRow alignCenter justifyCenter">

          <?php if(isset($_SESSION['admin'])) {
          ?>
          <a  href="../controller/disconnect.php" type="button" name="button" class="btn-white-background">Se déconnecter</a>
          <?php
            } else {
          ?>
          <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#myModal">Se connecter</button>
          <?php
            }
          ?>

        </div>
      </div>
      <nav class="row text-center">
        <ul class="flexRow alignCenter justifyCenter">
          <li><a href="#accueil" class="scrollButton scrollSpy">Accueil</a></li>
          <li><a href="#sport"  class="scrollButton scrollSpy">Le sport</a></li>
          <li><a href="#sponsor" class="scrollButton scrollSpy">Sponsoring </a>
          <li><a href="#contact" class="scrollButton scrollSpy">Nous contacter</a></li>
        </ul>
      </nav>
    </header>
    <div id="accueil" class="flexCol justifyEnd alignCenter footGolfClub">
      <div class="button accessButtonContainer flexRow justifyBetween">
        <button type="button" name="button" class="btn-white-background" data-toggle="modal" data-target="#inscription">S'inscrire au club</button>
        <a href="#decouverte" class="scrollButton scrollSpy btn-white-background">Découvrir les ateliers</a>
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

              <h3><img src="../view/img/Wind Speed 48-52-50.png" alt="">Un dress code</h3>
              <p>Le Footgolf, c'est une véritable identité vestimentaire : Polo, bermudas, chaussettes à losange montantes et bérets sont alors de sortie sur le green.</p>
            </div>
            <div class="col-md-5 concept">

              <h3><img src="../view/img/Soccer Ball Filled-50.png" alt="">Un ballon</h3>
              <p>Taille 5 uniquement, vous serez vite pris par le virus des ballons officiels de matchs.</p>
            </div>
            <div class="col-md-offset-1 col-md-5 concept">

              <h3><img src="../view/img/Soccer Filled-50.png" alt="">Une frappe</h3>
              <p> Tout en technique : drive, approche, putt... à moins d'être golfeur ces termes ne vous disent pas grand chose mais ils vont vite rentrer dans votre langage.</p>
            </div>
            <div class="col-md-5 concept">

              <h3><img src="../view/img/Wind Speed 48-52-50.png" alt="">Un trou</h3>
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
          <div class="test">
            <div class="col-md-6">
              <div class="animated atelierForm" style="border: 1px solid white;">
                <h2 id="titreAtelierForm">
                  Vous inscrire au
                <?php if ($_SESSION['name'])
                {
                  echo $_SESSION['name'];
                } ?>
                 :</h2>
                <form class="loginPanel" action="../controller/mail_calendar.php" method="post">
                  <input type="hidden" name="AtelierGolf" id="AtelierGolf" value="<?php echo $_SESSION['name'];?>"/>
                  <div class="inputcontainer">
                    <input type="text" class="inputText" name="AtelierFormName" id="AtelierFormName" required/>
                    <label class="floating-label" for="AtelierFormName">Votre nom :</label>
                  </div>
                  <div class="inputcontainer">
                    <input type="text" class="inputText" name="AtelierFormPrenom" id="AtelierFormPrenom" required/>
                    <label class="floating-label" for="AtelierFormPrenom">Votre prénom :</label>
                  </div>
                  <div class="inputcontainer">
                    <input type="text" class="inputText" name="mail" id="AtelierForm" required/>
                    <label class="floating-label" for="mail">Votre email :</label>
                  </div>
                  <p style="margin-top: -15px; margin-bottom: 5px; font-size: 16px;">Choix de la plage horraire :</p>
                  <select style="margin-bottom: 25px;" name="horraire">
                    <option value="14h">14h-15H</option>
                    <option value="15h">15h-16h</option>
                    <option value="16h">16h-17h</option>
                    <option value="17h">17h-18h</option>
                    <option value="18h">18h-19h</option>
                  </select>

                  <textarea name="name" rows="8" cols="80"></textarea>
                    <input class="btn-colored-background" type="submit" name="" value="envoyer">
                </form>
              </div>
                 <div id="calendar" class="col-centered">
                 </div>
             </div>


             <div id="mapContainer" class="col-md-6">
               <?php require '../app/mapDisplay.php';?>
               <iframe
                <?php
                 if ($_SESSION['source'])
                 {
                   echo "src='" . $_SESSION['source'] . "' ";
                 }
                 else
                 {
                   echo "src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6117239942373!2d2.6621683156746383!3d48.865613979288256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61ac1221ac1d3%3A0x615ddb66a7da1135!2sGolf+de+Torcy!5e0!3m2!1sfr!2sfr!4v1496136129002'";
                 }
                 ?>
                 frameborder='0' style='border:0; width: 100%; height: 428px;' allowfullscreen></iframe>
             </div>
          </div>

      </section>
    </main>
    <div id="sponsor" class="container-fluid sponsor">
      <div  class="row sponsorRow">
        <div class="sponsorContainer col-md-offset-4 col-md-6">
          <ul class="list-inline right">
            <li><a href="https://www.facebook.com/paris.footgolf/?fref=ts"><img src="../view/img/logo_pariscola.png" height="45" alt="le logo facebook"></a></li>
            <li><a href="https://www.footgolf-inside.com"><img src="../view/img/inside.png" alt="le logo footgolf-inside" height="45"></a></li>
            <li style="margin-left: 45px;"><a href="sponsoring.php" class="btn-white-background">Nous sponsoriser</a></li>
          </ul>
        </div>
      </div>
    </div>

  <?php require 'footer.php'; ?>

  <script type="text/javascript">

  $(document).ready(function() {

      let displayMap = function() {
        $('.fc-content').css('cursor', 'pointer');
        $('.fc-title').click(function() {
          $.ajax({
            url: '../app/mapDisplay.php',
            type: "POST",
            data: "title=" + $(this).text(),
            success: function() {
              $('#titreAtelierForm').load('index.php #titreAtelierForm');
              $('#mapContainer').load('index.php iframe');
            }
          });

          $('#calendar').fadeOut(200);
          $('.atelierForm').css('display', 'flex').addClass('fadeInLeft');
          $('html, body').animate({
          scrollTop : $('iframe').offset().top - 220});
        });
      }

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

              displayMap();

              $('#calendar').click(function() {
                displayMap();
              });
           }
         });
      };

      calendar();
});
</script>
</body>
</html>
