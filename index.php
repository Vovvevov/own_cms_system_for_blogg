<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="styles/main.css">

    <title>Blogg</title>
  </head>

  <body>

    <?php

        require 'db_connect.php';

        $stmt = $db->prepare("SELECT * FROM blog_posts order by timestamp desc");
        $stmt->execute();

        //Skapa sidrubrik
        $userBlogHeadlineDiv = '<div class="user-blog-headline-div">';
        $userBlogHeadlineDiv .= '<h1 class="user-blog-headline-h1">LUDDES BLOGGSIDA</h1>';
        $userBlogHeadlineDiv .= '</div>';

        echo $userBlogHeadlineDiv;

        //Skapa en div som innehåller alla bloggposterna
        $blogPostsDiv = '<div class="user-blog-posts-div">';

        //Skapa div:ar för de enskilda bloggposterna
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $blogPostsDiv .= '<div class="user-single-blog-post-div">';
        $blogPostsDiv .= '<h2 class="user-blog-post-h2">' . $row['headline'] . '</h2>';
        $blogPostsDiv .= '<p class="user-blog-text-p">' . $row['blog_text'] . '</p>';
        $blogPostsDiv .= '<p class="user-time-stamp">' . $row['timestamp'] . '</p>';
        $blogPostsDiv .= '</div>';
        }

        $blogPostsDiv .= '</div>';
        
        //Skriver ut hela div-komplexet
        echo $blogPostsDiv;

    ?>

  </body>

</html>





