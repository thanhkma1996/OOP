<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sua thanh vien</title>
  </head>
  <body>
    <div class="container">
      <?php
      echo "<pre>";
       echo print_r($data);

      ?>
      <form action="" method="post">
          <table class="table" style="width:400px;">
              <tr>
                <td> Name : </td>
                <td><input type="text" name="name_user" value="<?php echo $data['name']; ?>"></td>
              </tr>

              <tr>
                <td> date : </td>
                <td><input type="text" name="date_user" value="<?php echo $data["date"]; ?>"></td>
              </tr>

              <tr>
                <td> country : </td>
                <td><input type="text" name="country_user" value="<?php echo $data['country']; ?>"></td>
              </tr>

              <tr>
                  <td></td>
                  <td><input type="submit" name="edit_user" value="sua"></td>
              </tr>
          </table>
      </form>
    </div>
  </body>
</html>
