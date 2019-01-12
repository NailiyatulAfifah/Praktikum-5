<?php
  session_start();
  include("function.php");
  echo check_login();
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Praktik Login Session</title>
     <link rel="stylesheet" href="beranda.css">
   </head>
   <body>
     <header>
       <div class="header">
         <nav>
           <ul>
             <li><a href="#"><b> Edit Profil </b></a></li>
             <li><a href="logout.php"><b> Logout </b></a></li>
           </ul>
         </nav>
       </div>
     </header>
     <div class="wrapper">
       <table>
         <td>
           <h1>Selamat Datang!</h1>
         </td>
       </table>
     </div>
   </body>
 </html>
