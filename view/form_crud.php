    <section class="container">
        <div class="row">
            <h1 id="title2">PANEL ADMIN</h1>
            <form method="post" action="../controller/uploadImg.php" enctype="multipart/form-data">
                <label for="model" class="floating-label">Modèle</label>
                <input name="model" type="text" id="model" class="inputText"><br>
                <label for="image" class="floating-label">Image</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="image" id="image"> <br>
                <input type="submit" name="submit" value="Ajouter" class="btn-colored-background">
            </form>
        </div>
    </section>