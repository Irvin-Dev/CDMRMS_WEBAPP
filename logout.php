<?php 

function logout(){
session_unset();
session_destroy();

echo '
<script>
alert("Logout");
window.location.href = "./index.php";
</script>';
exit();
}
    
logout();
