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
    <?php include 'skills.php';?> 
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
                     <h1>hi, i'm <br/>joyce pinilla</h1>
                    </div>

                    <!-- /* right column */ -->
                    <div class="col-sm" id="div2">
                    
                    <p class="main">
                        I'm a multimedia artist, stylist, and aspiring web developer and designer!
                    <?php newList($mySkills);?></p>
                        <a href="https://www.linkedin.com/in/joyce-pinilla-a9869315b" class="button">add me on linkedin</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="skills" id="skills">
            <div class="container2">
                <h2>skills and competencies</h2>
                <br><br>
                <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm-4">
                        <label for="microsoft office">Microsoft Office</label><br>
                        <meter style="width:300px" id="office" value="1.0">100%</meter><br><br>
                        <label for="adobe photoshop">Adobe Photoshop and InDesign</label><br>
                        <meter style="width:300px" id="photoshop" value="0.80">80%</meter><br><br>
                        <label for="krita">Krita</label><br>
                        <meter style="width:300px" id="office" value="0.95">95%</meter><br><br>
                    </div>
                    <div class="col-sm-4">
                        
                        <label for="html">HTML</label><br>
                        <meter style="width:300px" id="office" value="0.99">99%</meter><br><br>
                        <label for="css">CSS</label><br>
                        <meter style="width:300px" id="office" value="0.98">98%</meter><br><br>
                        <label for="java">Javascript</label><br>
                        <meter style="width:300px" id="office" value="0.4">50%</meter>
                    </div>
                    <div class="col-sm"></div>
                </div>
                <div class="container3">
                    <br><br><br><br>
                    <div class="row" id="languages">
                        <h3>Language Skills
                            <br><br><br>
                        </h3>
                        
                        <div class="col-sm">
                            <h6>English</h6>
                            Native
                        </div>
                        <div class="col-sm">
                            <h6>Spanish</h6>
                            Native
                        </div>
                        <div class="col-sm">
                            <h6>Japanese</h6>
                            Basic
                        </div>
                        <div class="col-sm">
                            <h6>French</h6>
                            Basic
                        </div>
                    </div>
                </div>
        </section>


    </body>
</html>