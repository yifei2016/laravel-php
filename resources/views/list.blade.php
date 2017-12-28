

<html>
  <header></header>
  <body>
    <table border="1px">
    <tr>
     <th>id</th>
     <th>user name</th>
     <th>password</th>
    </tr>
    <?php foreach ($rows as $row): ?>
      <tr>
      <th>
       <?php echo $row->id ?>
      </th>
      <th>
       <?php echo $row->name ?>
      </th>
      <th>
       <?php echo $row->age ?>
      </th>
      </tr>
<?php endforeach; ?>
    </table>
  </body>
</html>