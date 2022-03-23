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

	<?php
		$nameErr = $emailErr = $contBackErr = "";
		$name = $email = $comment = "";
		$formErr = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (empty($_POST["firstname"])) {
				$nameErr = "Name is required.";
				$formErr = true;
			} else {
				$name = cleanInput($_POST["firstname"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					$nameErr = "Only letters and standard spaces allowed.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["email"])) {
				$emailErr = "Email is required.";
				$formErr = true;
			} else {
				$email = cleanInput($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Please enter a valid email address.";
					$formErr = true;
				}
			}
			
			if (empty($_POST["comments"])) {
				$commentErr = "Please enter a comment";
				$formErr = true;
			} else {
				$comment = cleanInput($_POST["comments"]);
			}
			
			$comment = cleanInput($_POST["comments"]);
		}

		function cleanInput($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

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
        <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST" enctype="text/plain" name="contactForm" id="contactForm">
            <label for="firstname" style="color:gray;">Name<br></label>
            <span class="text-danger">*<?php echo $nameErr; ?></span>
            <input type="text" class="form-control" id="firstname" placeholder="full name" name="name" style="width: 400px; height: 26px;"/>
        <p id="p1"></p>
    <label for="email" style="color:gray;">Email<br></label>
    <span class="text-danger">*<?php echo $emailErr; ?></span>
    <input type="email" class="form-control" id="email" placeholder="e-mail" name="email" style="width: 400px;
    height: 26px;"/>
            <p id="p2"></p>
            <br>
            <label for="comments" style="color:gray;">
                comments or concerns<br>
            </label>
            <span class="text-danger">*<?php echo $commentErr; ?></span>
        <textarea name="comments" id="comments" style="width: 500px; height: 200px;" placeholder="what do you need to tell me?"></textarea>
        <p id="p3"></p>
        <input type="submit" role="submit" name="button" id="submit" method="post" action="mailto:joyce.pinilla@live.com">
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

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

<section id="results">

<div class="container">
            <div class="row" id="centerdiv">
                 <!-- /* left column */ -->
                 <div class="col-sm" id="div1">
                 <br>
                 <h2>form entry:</h2>
                 <br>
                 <ul>
                 <?php 
                if ($name !== "") { echo "<li>NAME: $name </li>"; }
                if ($email !== "") { echo "<li>EMAIL: $email </li>"; }
                if ($comment !== "") { echo "<li>COMMENTS: $comment</li>"; }
                 ?>

                </ul>

                </div>
            </div>
        </div>
        
        </section>
<?php } ?>



    </body>
</html>