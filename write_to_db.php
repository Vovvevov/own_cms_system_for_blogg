<?php
if (($_SERVER['REQUEST_METHOD'] === 'POST')&&(!empty($_POST))):

$stmt = $db->prepare("INSERT INTO blog_posts (headline, blog_text)
VALUES (:headline, :blog_text)");

$stmt->bindParam(':headline', $headline);
$stmt->bindParam(':blog_text' , $blogText);

$headline = $_POST['blog-post-headline'];

//Skapar en mellan-variabel för den obearbetade blogg-inläggs-texten.
$blogTextRaw = $_POST['blog-post'];

//Här görs det en manöver som erätter returslag med </p><p class="user-blog-text-p">.
$find = "\n";
$replace = '</p><p class="user-blog-text-p">';
$text = $blogTextRaw;
$blogText = str_replace($find, $replace, $text);

// Kör SQL-satsen (infoga en rad)
$stmt->execute();
endif;
?>