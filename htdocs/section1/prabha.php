<!DOCTYPE html>
<html lang="en-GB">

<?php $thisSection="SECTION1"; ?>
<?php $thisPage="Prabha Mallya"; ?>
            
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
                <h1>Prabha Mallya</h1>
                
                <figure>
                    <img src="../images/img3.jpeg">
                                           
                    <figcaption><em></em></figcaption>
                </figure>

                <p>Prabha Mallya is an illustrator, visual designer and comics creator. She is known for pasting insects in chapter margins,  pressing flowers into endpapers, populating spines with kittens and seeing the world through dystopic-tinted glasses. She is at her happiest when fussing around with inks and stubby pencils, and frequently has black fingernails.</p>
                <p>Artem (voller Name Artem Kostyukevich), geboren 1971 in Omsk (Russland), lebt seit 1999 in Deutschland. Er studiert Kinder- und Jugendbuchillustration an der Hochschule für Angewandte Wissenschaften Hamburg. Zuvor hat er in St. Petersburg an der Kunstlehranstalt "W.A.Serow" studiert und an der Pädagogischen Universität "A.I.Herzen" das Fach Darstellende Kunst belegt. Seine Illustrationen wurden unter anderem auf der Kinderbuchmesse in Bologna ausgestellt. Artem lebt mit seiner Familie in Hamburg.</p>

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