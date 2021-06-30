 
 <form action="../../../Controllers/addPartenaire.php" method="POST" enctype="multipart/form-data"> 
 <div class="modal fade" id="partenaireModal" tabindex="-1" role="dialog" aria-labelledby="partenaireModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un partenaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="nom" class="col-form-label">Nom du partenaire</label>
                    <input name="nom" type="text" maxlength="60" class="form-control" required> </input>
                </div>
               
                <div class="form-group">
                    <label for="logo" class="col-form-label">Logo de la structure</label>
                        <input type="file" class="form-control" name="logo" required>
                </div>

                <div class="form-group">
                    <label for="lien" class="col-form-label">Lien du site du partenaire</label>
                    <input name="lien" type="text"  class="form-control">  
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