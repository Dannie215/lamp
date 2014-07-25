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
  $result = mysql_query('SELECT id, title, author, body FROM articles');

  // Fetch the data from the result
  while ($row = mysql_fetch_array($result)) {
       
       print '<!DOCTYPE html>
          <html>
          <head>
          <title>Daniel LAMP</title>
          </head> ';


       print '<body>';
    echo //" " . $row['id'] . "<br>" .
         
         "<div>" . "<h2>" . "<a href='article.php?id=" . $row['id'] . "'>" .  $row['title'] . "</a>" . "</h2>" . "<br>" . "</div>" .

         " "  . $row['author']  . "<br>" .
         " "  . $row['body']  . "<br>";

         print '</body>';
         
         print '</html>'; 

  }
}

mysql_close($connection);
?>

