
<?php
require "inc/db.inc.php";

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
        <!-- css start -->
        <link type="text/css" rel="stylesheet" href="css/reset.css" />
        <link type="text/css" rel="stylesheet" href="css/styles.css" />
        <!-- css ends-->
        <!-- google font -->
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

        <title>search page</title>
    </head>

    <body class="search_body">
        <!-- header start -->
        <?php
include 'inc/header.inc.php';

?>
            <!-- header end -->
    <section>
        <div class="search_con">
            <h2 class="search__headline">Looking for something? Search here.</h2>
            <p id="sub_search">You may search either by category, name or price.</p>
            
            <!-- form starts here -->
            <form method="_GET" action="search.php">
                   <input type="text" name="search_Bar">
            <input type="submit" value="Search">     
                <?php

                    if (isset($_GET['search_Bar']))
                    {
                        //strip_tags — Strip HTML and PHP tags from a string
                        $type = strip_tags($_GET['search_Bar']);
                        //selecting all products from my name col and allowing wildcards to be searched.
                        $products = "SELECT * FROM my_products WHERE name LIKE '%{$type}%' OR description LIKE '%{$type}%' OR price LIKE '%{$type}%' OR color LIKE '%{$type}%'";
                        //preparing mysql
                        $product_Inv = $db->prepare($products);
                        //executing my prepare
                        $product_Inv->execute();
                        //fetching all products from my select
                        foreach($product_Inv->fetchAll() as $product)
                        {
                            //echoing my products
                            echo "
                                    <div class='search'>
                                    <figure>
                                    <img src=\"{$product['image']}\" />
                                    <figcaption>{$product['name']}</figcaption>
                                    </figure>
                                    <p>{$product['price']}</p>
                                    <p>{$product['description']}</p>
                                    </div>
                                    ";
                        }
                    }

                ?>
            </form>
        </div>
      <!-- container -->
    </section>
      <!-- search-hero -->

            <?php
include 'inc/footer.inc.php';

?>

    </body>

    </html>