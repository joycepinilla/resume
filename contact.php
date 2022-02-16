<html>
    <head>
        <title>Joyce Pinilla</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">  
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Praise&family=Yuji+Syuku&family=IBM+Plex+Mono&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/JavaScript/validation.js"></script>
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

  <section class="contactme" id="contactme">
    <h4>contact me</h4>
    <div class="form" id="form">
        <br><br>
        <form  
        action="mailto:joyce.pinilla@live.com"
        method="post" 
        enctype="text/plain"
        name="contactForm"
        id="contactForm">
            <label for="firstname" style="color:gray;">Name<br></label>
            <input type="text"  
        id="firstname" 
        style="width: 400px;
        height: 26px;"
        placeholder="meow meowerson";>
        <p id="p1"></p>
    <label for="email" style="color:gray;">Email<br></label>
    <input type="email" 
            id="email"
            style="width: 400px;
            height: 26px;"
            placeholder="meow.meowerson@meow.com">
            <p id="p2"></p>
            <br>
            <label for="comments" style="color:gray;">
                comments or concerns<br>
            </label>
        <textarea 
            name="comments" 
            id="comments"
            style="width: 500px;
            height: 200px;"
            placeholder="what do you need to tell me?">
        </textarea>
        <p id="p3"></p>
        <input type="submit" value="submit" class="button" id="submit" method="post" action="mailto:joyce.pinilla@live.com">
        </form>
        <script>
        $("#contactForm").validate({
            rules: {
                firstname: "required",
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                firstname: "please enter your full name",
                email: "please enter a valid email address"
            },
            submitHandler: function(form) {
                form.submit();
            }
        });</script>
    </div>
</section>

    </body>
</html>