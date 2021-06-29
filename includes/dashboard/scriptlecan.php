<? include('../../../includes/dashboard/modalsuccess.php'); 
    include('../../../includes/dashboard/modalechec.php');
    include('../../../includes/dashboard/modalecheconn.php');
    include('../../../includes/dashboard/modalerequis.php');
?>
 
    <script type="text/javascript">
      <?php 
        if($_GET["success"] == "true"){
            echo  "$(\"#successModal\").modal('show');";
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
               window.location.replace('/can/admin/dashboard/can/lecan.php');
              })";
        }
        else if($_GET["success"] == "false"){
            echo "$(\"#echecModal\").modal('show');";
            echo  "$(\"#echecModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/lecan.php');
               })";
        } 
        else if($_GET["success"] == "lostconn"){
            echo "$(\"#echeconnModal\").modal('show');";
            echo  "$(\"#echeconnModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/lecan.php');
               })";
        }  
        else if($_GET["success"] == "requis"){
            echo "$(\"#requisModal\").modal('show');";
            echo  "$(\"#requisModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/lecan.php');
               })";
        }
        else{
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/');
               })";
        }
      ?>
    </script>

    