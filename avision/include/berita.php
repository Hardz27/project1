<?php
        // Connect to Database
 $host = mysqli_connect("localhost", "root", "", "tugu");

        $kueri = mysqli_query($host, " SELECT * FROM update_info");
        while ($baris=mysqli_fetch_array($kueri))
        {
           echo $baris['id_info']."&nbsp;".$baris[1]."<br><br>";

           echo"<img src= imageview.php?image_id=".$baris['id_info']." />";
           echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['image'] ).'"/>';

           echo"<br><br><hr>";
         }
?>