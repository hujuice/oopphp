<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">

    <title><?php echo $title ?></title>
  </head>

  <body>

    <table>
      <caption><?php echo $title ?></caption>
      <thead>
        <tr><th><?php echo $name_label ?></th><th><?php echo $email_label ?></th></tr>
      </thead>
      <tbody>
<?php echo $table_data ?>
      </tbody>
    </table>

  </body>
</html>