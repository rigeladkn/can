 
 <form action="../../../Controllers/modifFonction.php" method="POST"> 
 <div class="modal fade" id="fonctionModal" tabindex="-1" role="dialog" aria-labelledby="fonctionModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier le fonctionnement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="title" class="col-form-label">Titre du fonctionnement</label>
                    <input name="title" type="text" maxlength="25"  class="form-control" required> </input>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Enoncé du fonctionnement</label>
                    <textarea name="description" type="text" cols="12" rows="5"  maxlength="200"  style="max-height:100px" class="form-control" required> </textarea>
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