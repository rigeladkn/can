 
 <form action="../../../Controllers/addActualite.php" method="POST" enctype="multipart/form-data"> 
 <div class="modal fade" id="actualiteModal" tabindex="-1" role="dialog" aria-labelledby="actualiteModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une actualité</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                    <label for="title" class="col-form-label">Intitulé de l'actualité</label>
                    <textarea name="title" type="text" cols="12" rows="2"  maxlength="100"  style="max-height:100px" class="form-control" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="description" class="col-form-label">Description</label>
                    <textarea name="description" type="text"   rows="12"  style="max-height:100px" class="form-control" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="image" class="col-form-label"></label>
                        <input type="file" class="form-control" name="image" required>
                </div>
                <div class="form-group">
                    <label for="laDate" class="col-form-label"></label>
                        <input type="date" class="form-control" name="laDate" required>
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