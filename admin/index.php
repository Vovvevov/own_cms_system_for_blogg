<?php
    require '../db_connect.php';
    require '../write_to_db.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../styles/main.css">

    <title>Blogg</title>
  </head>

    <body>

        <div class="admin-blog-headline-div">
            <h1 class="admin-blog-headline-h1">LUDDES BLOGG - Admin-sida</h1>
        </div>


        <form class="admin-form" action="#" method="post">
            <div>
                <div class="admin-blog-post-headline-input-div">
                    <input class="admin-blog-post-headline-input" type="text" name="blog-post-headline"
                    placeholder="Ange inläggs-rubrik">
                </div>

                <div class="admin-blog-post-text-area-div">
                    <textarea class="admin-blog-post-text-area" id="blog-post" name="blog-post" placeholder="Skriv ett inlägg"></textarea>
                </div>

                <div class="admin-submit-btn-div">
                    <input class="admin-submit-btn" type="submit"
                    value="Publicera" >
                </div>
            </div>
        </form>

    </body>
</html>

