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
   </div>
  <main>
        <?php
        
        
        require("connect.php");

        $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
        $result = $conn->query($qr);
        while ($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];

            echo '<div>';
            echo "<h6>$data, $miesiac</h6>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }

        mysqli_close($conn)
        
        
        
        
        ?>
      </main>  
  
    <div id="glowny">
        <?php
        
        
        
        require("connect.php");

    if (isset($_POST['wydarzenie'])) {
        
        $wydarzenie = $_POST['wydarzenie'];
        $qr = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
        $conn->query($qr);
        $conn->close();
    }
        
        
        
        
        
        ?>
    </div>
    <div id="stopka">
        <form action="kalendarz.php" method="post">
            
        dodaj wpis<input type="text" name="wpiss">
            <button type="submit">DODAJ</button>
            <br>
           <p>Stronę wykonał:00000000</p>   
            
            
            
            
        </form> 
      </div>
    </body>
</html>