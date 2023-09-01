<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection="SECTION2"; ?>
<?php $thisPage="Lulu Dubreuil"; ?>
            
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
                <h1>Lulu Dubreuil</h1>
                
                <figure>
                    <img src="/Applications/MAMP/htdocs/images/img6.jpeg">
                    
                </figure>

                <p>Lulu Dubreuil has been working independently as an illustrator and graphic designer for over 15 years. All of her artworks are done with vector. Lulu studied industrial design at the Nantes Atlantique School of Design and since graduation, she's lived everywhere from the United States to Hungary to the United Kingdom. Today, she's settled back in her home country of France. Lulu is represented by Mendola Artists.</p>
                

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