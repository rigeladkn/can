<?php
echo "<div class=\"modal fade\" id=\"verificationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"serviceModalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">";
    echo "<div class=\"modal-dialog\" role=\"document\">";
        echo "<div class=\"modal-content\">";
            echo "<div class=\"modal-body\">";
                echo "<h5  class=\"modal-title\" id=\"title\" style=\"color:black; font-size:20px;\">Voulez-vous vraiment supprimer cet enregistrement ?</h5>";
            echo "</div>";
            echo "<div class=\"modal-footer\">";
                echo "<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>";
                echo "<button class=\"btn btn-success\" onClick=\"document.getElementById('form".$resServ["id"]."').submit()\">Ajouter</button>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
echo "</div>";
?>
<!-- fin -->