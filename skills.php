<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
        $mySkills = array("HTML", "CSS", "JavaScript", "PHP", "WordPress", "Adobe Photoshop", "Microsoft Office");
        function newList($mySkills) {
            echo "</br></br><h2></b> My Skills include:</h2><ul>";
        foreach ($mySkills as $skills) {
            echo "<li>$skills</li>"; 
        }
        echo "</ul></br>";
    }   
        ?>
    </body>
</html>