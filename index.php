<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>



<body>
<header>
   
    <!-- Navbar -->

<!-- Navbar -->
</header>
  <main>
   <form action="index.php" method="POST" class="font-weight-bold">
   <label >Time:</label>
   <input type="text" class="form-control" name="time">
   <br>
   <label >Station:</label>
   <select name="station">
  <option value="ksarhellal">Ksar Hellal</option>
  <option value="bouhjar">Bouhjar</option>
  <option value="faculte1">Faculte1</option>
  <option value="faculte2">Faculte2</option>
  </select>
   
   <br>
   <label >Direction:</label>
   <select name="direction">
   <option value="sousse">Sousse</option>
   <option value="mahdia">Mahdia</option>
   </select>
   <br>
   <button type="submit" class="btn btn-primary" name="btn">Get</button>
   <br>
  
   <?php
   function printtime($sta,$t){
    echo('<div class="font-weight-bold">');
    for($i=0;$i<sizeof($sta);$i++){
        if ($sta[$i]>=$t){
            echo('<li>');
            echo($sta[$i]);
            echo(" H");
            echo("<br>");
            echo("</li>");


        }
    }
    echo('</div>');
   }
   ?>
       <?php
    if (isset($_POST['btn'])){
        $t=$_POST['time'];
        $s=$_POST['station'];
        $dir=$_POST['direction'];
        echo('<div class="font-weight-bold">');
        echo ("Time choosen: ".$t);
        echo("H");
        echo("<br>");
        echo ("Station : ".$s);
        echo("<br>");
        echo ("Direction : ".$dir);
        echo("<br>");
        echo ("Time available: ");
        echo("<br>");
        echo('</div>');
        $sta=[];

        switch ($dir) {
            case 'mahdia':
                # code...
                switch ($s) {
                    case 'faculte1':
                        $sta=[5.20,6.11,6.56,7.36,8.16,8.56,9.36,10.16,10.56,11.36,12.26,12.56,13.36,14.21,14.56,15.46,16.26,17.06,17.41,18.26,19.0,19.55,20.35];
                        printtime($sta,$t);
                    break;
                    case 'faculte2':
                        $sta=[5.34,6.24,7.09,7.49,8.29,9.49,10.29,11.09,11.49,12.44,13.09,13.49,14.34,15.09,15.59,16.39,17.24,17.59,18.44,19.17,20.14,20.49];
                        printtime($sta,$t);
                    break;
                    default: echo('Verify your data')  ;
            break;
                    }
                break;
                
            case 'sousse':
                switch ($s) {
                    case 'ksarhellal':
                        $sta=[(5.17),(5.48),(6.35),(7.0),(7.22),(7.42),(8.25),(9.07),(9.45),(11.04),(11.41),(12.23),(13.03),(14.03),(14.25),(15.03),(15.50),(16.22),(17.16),(17.59),(18.53),(19.28),(20.08)];
                        printtime($sta,$t);
                    break;
                    case 'bouhjar':
                        $sta=[5.25,5.56,6.43,7.08,7.30,7.50,8.33,9.13,9.53,11.12,11.46,12.31,13.11,14.11,14.33,15.11,15.58,16.30,17.24,18.07,19.01,19.36,20.16];
                        printtime($sta,$t);
                    break;
                    default: echo('Verify your data')  ;
            break;
                    }
                break;

          default: echo('Verify your data')  ;
            break;
            
        }
        
        
        
    }

    ?>
 </form>
 </main>
 
</body>

</html>