<?php
   include('dbh.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"SELECT * FROM tb_users_225_STEAL,tb_games_225_STEAL
    WHERE tb_users_225_STEAL.userName = '$user_check' AND tb_games_225_STEAL.game_id = 1 ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userName'];
   $id_session = $row['id'];
   $profile_session = $row['boxArt'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location: index.php");
   }
   
   
   
?>