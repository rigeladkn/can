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
               window.location.replace('/can/admin/dashboard/can/navbar.php');
              })";
        }
        else if($_GET["success"] == "false"){
            echo "mymodal = $(\"#echecModal\").modal('show');";
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/navbar.php');
               })";
        } 
        else if($_GET["success"] == "lostconn"){
            echo "mymodal = $(\"#echeconnModal\").modal('show');";
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/navbar.php');
               })";
        }  
        else if($_GET["success"] == "requis"){
            echo "mymodal = $(\"#requisModal\").modal('show');";
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/navbar.php');
               })";
        }
        else{
            echo  "$(\"#successModal\").on('hidden.bs.modal', function (e) {
                window.location.replace('/can/admin/dashboard/can/');
               })";
        }
      ?>
    </script>

    