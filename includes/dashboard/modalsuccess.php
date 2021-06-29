<?php 

echo "<div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby\successModalLabel\" aria-hidden=\"true\">";
                echo "<div class=\"modal-dialog\" role=\"document\">";
                  echo "<div class=\"modal-content\">";
                 
                    echo "<div class=\"modal-header\">";
                      echo "<h5  class=\"modal-title\" id=\"title\" style=\"color:green; font-size:20px; margin-left:150px\">Opération réussie</h5>";
                      echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">";
                      echo "<span aria-hidden=\"true\">&times;</span>";
                      echo "</button>";
                      echo "</div>";
                   
                    echo "<center>";
                    echo "<div class=\"modal-body\">";
                      echo "<img src=\"../../../assets/dashboard/images/validate.png\"  style=\"height:100px\">";
                    echo "</div>";
                    echo "<div class=\"\">";
                      echo "<div class=\"row\">";
                        echo "<div class=\"col-5\"></div>";
                          echo "<div class=\"col-2\">";
                            echo "<button style=\"margin-bottom:5px\" type=\"button\" class=\"btn btn-sm btn-block btn-danger\" data-dismiss=\"modal\">OK</button>";
                          echo "</div>";
                        echo "<div class=\"col-5\"></div>";
                      echo "</div>";
                      echo "</div>";
                      echo "</div>";
                      echo "</center>";
                echo "</div>";
              echo "</div>";

?>

