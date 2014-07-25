<?php
$id = $_GET['id'];

?>

<?php

$connection = mysql_connect('127.0.0.1', 'root', 'basketbal1');
mysql_select_db('DANNIE_blog');
// mysql_connect(‘SQLdata.com’, ‘Jones’, ‘un1c0rn’, ‘my_database’);


// Check connection
if (!$connection) {
  die('Unable to connect: ' . mysql_errno());
}

if ($connection) {
  //die('YAY: ' . mysql_errno());
  // SQL Query
  $result = mysql_query('SELECT id, title, author, body FROM articles where id = ' . $id );

  // Fetch the data from the result
  while ($article = mysql_fetch_array($result)) {
    echo 
         "<h1>" . "<a href='article.php?id=" . $article['id'] . "'>" .  $article['title'] . "</a>" . "</h1>" . "<br>" .
         "<h1> "  . $article['author']  . "</h1>" .
         " <p>"  . $article['body']  . " <p>" . "<br>";
  }
}

mysql_close($connection);
?>
