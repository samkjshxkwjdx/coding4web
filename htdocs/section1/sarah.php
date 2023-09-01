<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection="SECTION1"; ?>
<?php $thisPage="Sarah Andersen"; ?>
            
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
                <h1>Sarah Andersen</h1>
                
                <figure>
                    <img src="/images/img4.jpg">                       
                    <figcaption><em>From the book 'Fangs'</em></figcaption>
                </figure>

                <p>Andersen graduated from the Maryland Institute College of Art (MICA) in 2014. While attending MICA, she started drawing the semi-autobiographic webcomic Sarah's Scribbles (previously called Doodle Time). She won the Goodreads Choice Award in Best Graphic Novels & Comics three years in a row for Sarah's Scribbles. In 2016, she won the Goodreads Choice Award for her debut book, Adulthood is a Myth.She won in 2017 for her book Big Mushy Happy Lump and in 2018 for her book Herding Cats.</p>
                

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