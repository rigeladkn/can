 
 <form action="../../../Controllers/addMembre.php" method="POST"> 
 <div class="modal fade" id="membreModal" tabindex="-1" role="dialog" aria-labelledby="membreModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="nom" class="col-form-label">Nom et Prénom(s)</label>
                    <input name="nom" type="text" maxlength="50" class="form-control" required> </input>
                </div>
                <div class="form-group">
                    <label for="poste" class="col-form-label">Poste occupé</label>
                    <input name="poste" type="text" maxlength="30" class="form-control" required> </input>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Description du poste</label>
                    <textarea name="description" type="text"   rows="2"  maxlength="200"   class="form-control" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Photo de profil</label>
                   
                        <input type="file" class="form-control" name="image">
                   
                </div>
                <div class="form-group">
                    <label for="tweetlink" class="col-form-label">Lien du compte Tweeter</label>
                    <input name="tweetlink" type="text" maxlength="30" class="form-control"> </input>
                </div>
                <div class="form-group">
                    <label for="facelink" class="col-form-label">Lien du compte Facebook</label>
                    <input name="facelink" type="text" maxlength="30" class="form-control"> </input>
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