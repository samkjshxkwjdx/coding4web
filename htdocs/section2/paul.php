<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection="SECTION2"; ?>
<?php $thisPage="Paul Davey"; ?>
            
    <head>       
        
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
       
            
        <title>D12.E1 · Multipage PHP website</title>
        <?php include("../php/meta.php"); ?>

       

    </head>       

    <body>
        
        <header><a href="/">MULTIPAGE PHP WEBSITE</a></header>

        <div class="content-wrap">
        
            <main>
                <h1>Paul Davey</h1>
                
                <figure>
                    <img src="/images/img5.png">
                    
                </figure>

                <p>Paul Davey is an illustrator based in Miami who grew up in Manchester, Jamaica. He's also known as Mattahan, which is based on the patois pronunciation of Matterhorn, a popular cigarette brand in his home country. Represented by Shannon Associates, Paul is completely self-taught and his work is inspired by both surrealism and comic books.</p>
                

            </main>
        
            <aside>
            <?php include("../php/nav.php"); ?>

               
                <br>
                <hr>
                <p class="s">(This is an extra paragraph in the aside element)</p>
            </aside>
        </div>
        
        <?php include("../php/footer.php"); ?>

    </body>
</html>



<!-- REFERENCE PHP CODE: -->
<!--
Declare variables
<?php $thisSection=""; ?>

Echo function w. if statement
<?php if ($thisPage!="") echo "$thisPage"; ?>

Include function
<?php include("php/something.php"); ?>

Add an ID to an element dynamically
<?php if ($thisPage=="Page One") echo " id=\"currentpage\""; ?>
Add this as an attribute within an element

Date
<?php
date_default_timezone_set('Asia/Kolkata');
echo "" . date("Y") ;
?>
-->