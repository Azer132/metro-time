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
                        $sta=[5.25,5.40,6.11,6.56,7.41,8.16,9.01,9.36,10.16,10.56,11.36,12.25,12.56,13.36,14.21,14.51,15.46,16.36,17.16,17.41,18.11,19.06,19.51,20.41];
                        printtime($sta,$t);
                    break;
                    case 'faculte2':
                        $sta=[5.39,6.24,7.09,7.54,8.34,9.49,10.2911.09,11.45,12.39,13.09,13.49,14.34,15.04,15.59,16.49,17.34,17.56,18.24,19.19,20.04,20.54];
                        printtime($sta,$t);
                    break;
                    default: echo('Verify your data')  ;
            break;
                    }
                break;
                
            case 'sousse':
                switch ($s) {
                    case 'ksarhellal':
                        $sta=[5.50,6.35,7.05,7.44,8.30,9.14,9.58,10.48,11.41,12.27,13.15,14.01,14.21,15.09,15.49,16.31,17.21,18.07,18.34,18.53,19.41,20.31];
                        printtime($sta,$t);
                    break;
                    case 'bouhjar':
                        $sta=[5.59,6.44,7.15,7.54,8.39,9.23,10.06,10.56,11.50,12.35,13.23,14.09,14.30,15.17,15.57,16.40,17.30,18.15,18.42,19.01,19.49,20.39];
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