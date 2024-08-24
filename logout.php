<?php 
function logout(){
session_start();
$_SESSION = array();
session_destroy();

echo 
'<script>
alert("Logout");
window.location.href = "./index.php";
</script>';
exit();
}
    
logout();
