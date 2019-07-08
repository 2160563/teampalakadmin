<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("db4free.net", "teampalak", "teampalak");
  mysql_select_db("teampalak");
  $sql = "SELECT Tpic FROM tournament_details WHERE TournamentID=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['Tpic'];
?>