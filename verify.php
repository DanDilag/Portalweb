<?php
if (isset ( $_POST ['user']) || isset ($_POST ['pass'])){
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $group = $_POST['group'];
#   $campaign = $_POST['campaign'];
   include("dbconnect.php");
   $query = "SELECT user_id, username, password, user_lvl FROM user_tbl where username = '$user' and level = '$group'";
   $result = mysql_query($query);
   $num = mysql_num_rows($result);
          if($row = mysql_fetch_array( $result )) {
             $user =  $row['user'];
             $pass =  $row['pass'];
             $level = $row['level'];
             }
//   $query1 = "SELECT level FROM login where level = '$group'";
//   $result1 = mysql_query($query1);

//         if($row1 = mysql_fetch_array($result1)) {
//             $level = $row1['level'];
//             }
//   $query2 = "SELECT camp FROM login where camp = '$campaign'";
//   $result2 = mysql_query($query2);

//          if($row2 = mysql_fetch_array($result2)){
//             $camp = $row2['camp'];
//             }

function error_login () {
                if (isset($this->error_message)) {
                        echo '<span class="error">'.$this->error_message.'</span><br /><br />';
                }
         }

if($_POST ['user'] == $row['user'] && $_POST ['pass'] == $row['pass'] && $row['level'] == 'Admin') {
                          echo "$user<br/>";
#                          echo "$pass<br/>";
#                          echo "$group<br/>";
#                          echo $campaign;
                           session_start();
                           $_SESSION["user"]=$_POST["user"];
#                           $_SESSION["campaign"]=$_POST["campaign"];
                           header('Location: ../trans/adpage.php');
                           exit;
                          }
elseif($_POST ['user'] == $row['user'] && $_POST ['pass'] == $row['pass'] && $row['level'] == 'qa' ) {
                          echo "$user<br/>";
#                          echo "$pass<br/>";
#                          echo "$group<br/>";
#                          echo $campaign;
                           session_start();
                           $_SESSION["user"]=$_POST["user"];
#                           $_SESSION["campaign"]=$_POST["campaign"];
                           header('Location: ../trans/qpage.php');
                           exit;
                          }

elseif($_POST ['user'] == $row['user'] && $_POST ['pass'] == $row['pass'] && $num > 0 ) {
                          echo "$user<br/>";
#                          echo "$pass<br/>";
#                          echo "$group<br/>";
#                          echo $campaign;
                           session_start();
                           $_SESSION["user"]=$_POST["user"];
#                           $_SESSION["campaign"]=$_POST["campaign"];
                           header('Location: ../trans/clpage.php');
                           exit;
                          }

else{
       $login->error_message = 'Invalid login username and password';
       $needlogin = true;
#       echo " Not Valid login";
      }
if($needlogin){
    header('Location: login.php');
    }
}
?>
