<?php
   if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $ask = $_POST['ask'];
    
    echo "<br> </br> <br> </br> <br> </br> <br> </br>";
    echo " Data Pertanyaan <br> </br>";
    echo "<fieldset> Nama : $name                </fieldset> <br></br>
         <fieldset> Email : $email                </fieldset><br></br>
         <fieldset> Telpon : $nohp                </fieldset><br></br>
         <fieldset> Q : $ask                </fieldset><br></br>
         ";
    }
?>