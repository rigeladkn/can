 
 <form action="../../../Controllers/modifMotDirecteur.php" method="POST" enctype="multipart/form-data"> 
 <div class="modal fade" id="directeurModal" tabindex="-1" role="dialog" aria-labelledby="directeurModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message de Bienvenue du Directeur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="title" class="col-form-label">Titre</label>
                    <input name="title" type="text" maxlength="50" class="form-control" required> </input>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Mot du Directeur</label>
                    <textarea name="description" type="text"   rows="2"  class="form-control" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="col-form-label">Photo de profil du Directeur</label>
                        <input type="file" class="form-control" name="image">
                </div>
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
            </div>
        </div>
    </div> 
</form>
    <!-- fin -->