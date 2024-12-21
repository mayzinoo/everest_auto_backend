<!DOCTYPE html>
<html lang="en">
 <head> 
   <meta charset="utf-8"> 
   <title> CodeIgniter EXPORT</title>
 </head>
 <body>
   <!-- Export Data --> 
   <a href='<?= base_url() ?>crud/export_csv'>Export</a><br><br>

   <!-- User Records --> 
   <table border='1' style='border-collapse: collapse;'> 
     <thead> 
      <tr> 
       <th>Username</th> 
       <th>Name</th> 
       <th>Gender</th> 
       <th>Email</th> 
      </tr> 
     </thead> 
     <tbody> 
     <?php
     foreach($usersData as $key=>$val){ 
       echo "<tr>"; 
       echo "<td>".$val['broker']."</td>"; 
       echo "<td>".$val['car_plate']."</td>"; 
       echo "<td>".$val['make']."</td>"; 
       echo "<td>".$val['model']."</td>"; 
       echo "</tr>"; 
      } 
      ?> 
     </tbody> 
    </table>
  </body>
</html>