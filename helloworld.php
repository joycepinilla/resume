<!DOCTYPE html>
<html>
    <head>
        <title>Joyce Pinilla</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">  
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Praise&family=Yuji+Syuku&family=IBM+Plex+Mono&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/JavaScript/jquery.js"></script>
    </head>
    <body> 
        <nav>
            <ul>
                <li><a href="/" class="active">home</a></li>
                <li><a href="#skills" class="nav-link">skills</a></li>
                <li><a href="/resume.php" class="nav-link">resume</a></li>
                <li><a href="/references.php" target="_blank" class="nav-link">references</a></li>
                <li><a href="https://instagram.com/joyce.pinillaa/" target="_blank" class="nav-link">instagram</a></li>
                <li><a href="/contact.php" class="nav-link">contact</a></li>
            
            </ul>
        </nav>
        <header>
            <div class="container">
                <div class="row" id="centerdiv">
                     <!-- /* left column */ -->
                     <div class="col-sm" id="div1">
                        <figure>
                            
                            <figcaption>

                            </figcaption>
                        </figure>
                    </div>

                    <!-- /* right column */ -->
                    <div class="col-sm" id="div2">
                    <h1>php</h1>
                    <p class="main">
                        
                    <?php $greeting = "Hello World!";
                    echo $greeting; ?>
                    </br>
                    <?php 
                    $var1 = 50;
                    $var2 = 75;
                    $var3 = $var1 + $var2;

                    echo $var1; echo "+"; echo $var2; echo "="; echo $var3;
                    
                    ?>
                    </br>
                    <?php 
                    $var4 = 500;
                    $var5 = 10;
                    $var6 = $var4 / $var5;
                    $var7 = $var4 * $var5;
                    echo $var4; echo "/"; echo $var5; echo "="; echo $var6;?>
                    </br>
                    <?php 
                    echo $var4; echo "*"; echo $var5; echo "="; echo $var7;?>
                
                
                </p>
                        
                    </div>
                </div>
            </div>
        </header>


    </body>
</html>