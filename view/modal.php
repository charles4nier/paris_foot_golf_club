<?php

?>
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
