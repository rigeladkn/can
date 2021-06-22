 
 <form action="../../../Controllers/addMission.php" method="POST"> 
 <div class="modal fade" id="missionModal" tabindex="-1" role="dialog" aria-labelledby="missionModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une mission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="description" class="col-form-label">Enoncé de la mission</label>
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