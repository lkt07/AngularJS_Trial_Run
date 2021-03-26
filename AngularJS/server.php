
 <?php
 
 

 $conn = new mysqli('localhost','root','test','myfirstdb');
 
 
     $t=1;
     $sql = "SELECT user,pass FROM login";
     $result = $conn->query($sql);
 
       
             $sql="INSERT INTO login (rollid,user,pass) VALUES ('$_POST[rollid]','$_POST[productname]','$_POST[dropdownlist]')";
             if($conn->query($sql) === TRUE){ 
                
             ?>
            <script type='text/javascript'>alert('Successful login');
            window.location.href = "http://localhost/AngularJS/homepage.html"; 
           </script>
            <?php }
          
  
 
 
 ?>