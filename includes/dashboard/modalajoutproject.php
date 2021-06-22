 
 <form action="../../../Controllers/addProject.php" method="POST"> 
 <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="financement" class="col-form-label">Financé par ..</label>
                    <input name="financement" type="text" maxlength="50" class="form-control" required> </input>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Description du projet</label>
                    <textarea name="description" type="text"   rows="2"  maxlength="200"   class="form-control" required> </textarea>
                </div>
                <!-- <div class="form-group">
                    <label for="description" class="col-form-label">Photo de profil</label>
                        <input type="file" class="form-control" name="image">
                </div> -->
                <div class="form-group">
                <label for="statut" class="col-form-label">Statut du projet</label>
                        <select  name="statut" class="form-control"id="" required">
                            <option value="En cours">En cours</option>;
                            <option value="Clôturé">Clôturé</option>;
                         </select>
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