        <!-- <div class="row">
            <form method="post" action="../controller/uploadImg.php">
                <label for="id_image" class="floating-label">ID de l'image a supprimer</label><br>
                <input type="text" name="id_image" id="id_image" class="inputText"><br>
                <input id="drop_id" type="submit" name="drop_id" value="Supprimer" class="btn-colored-background">
            </form>
        </div> -->

    <div id="add-article" class="modal fade" role="dialog">
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

      </div>
    </div>
