<?php

require_once 'config.php';

$link = mysqli_connect(
    $dbConfig['host'],
    $dbConfig['username'],
    $dbConfig['passwd'],
    $dbConfig['dbname']
);

if (isset($_POST['person'])) {
    // filter input by using bound parameters
    $sql = "INSERT INTO person (name) VALUES (?)";
    $statement = mysqli_prepare($link, $sql);
    // i = integer, d = double, s = string, b = blob
    mysqli_stmt_bind_param($statement, 's', $_POST['person']);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}

$sql = 'SELECT person_id, name FROM person';
$people = array ();
if (mysqli_real_query($link, $sql)) {
    if ($result = mysqli_store_result($link)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $people[$row['person_id']] = $row['name'];
        }
    }
}

mysqli_close($link);
?>
<!DOCTYPE html>
<head>
  <title>People</title>
</head>
<body>
  <ul>
<? foreach ($people as $id => $name): ?>
    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=<?= urlencode($id) ?>"><?= htmlspecialchars($name) ?></a></li>
<? endforeach; ?>
  </ul>
  <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
    <dl>
      <dt>Add person</dt>
      <dd><input type="text" name="person" /></dd>
    </dl>
    <input type="submit" name="submit" value="Submit" />
  </form>
</body>
</html>