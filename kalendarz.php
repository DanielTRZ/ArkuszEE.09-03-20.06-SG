<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Mój kalendarz</title>
<link rel="stylesheet" href="styl5.css">
</head>
<body>
<div id="ban1">
<img src="logo1.png" alt="Mój Kalendarz">
</div>
<div id="ban2">
<h1>Kalendarz</h1>
        
<?php
        
       require("connect.php");

       $qr = " SELECT miesiac,rok FROM zadania WHERE dataZadania ='2020-07-01'";
       $result = $conn->query($qr);
       while ($row = $result->fetch_assoc()) {
       $miesiac = $row['miesiac'];
       $rok = $row['rok'];

       echo "<h3>"."miesiac: "."$miesiac,"." rok: "." $rok</h3>";
          
       }
       mysqli_close($conn)
      
?>
</div>

<div id="glowny">
<div id="tab">
<?php
        require("connect.php");

        $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];

            echo '<div id="tab2">';
            echo "<h5>$data, $miesiac</h5>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }

        mysqli_close($conn)
?>
</div>  
</div>
<div id="stopka">
<form action="kalendarz.php" method="post">
dodaj wpis<input type="text" name="wpiss">
<button type="submit">DODAJ</button>
<br>
           <p>Stronę wykonał:00000000</p> 
            
      <?php
    
        require("connect.php");

    if (isset($_POST['wpiss'])) {
        
        $wpiss = $_POST['wpiss'];
        $qr = "UPDATE zadania SET wpis ='$wpiss' WHERE dataZadania = '2020-07-13'";
        $conn->query($qr);
        $conn->close();
       }
         
        ?>

</form> 
</div>
</body>
</html>
