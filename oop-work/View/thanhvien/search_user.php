<div class="container">
  <h2>oop-thanhkma</h2>
  <div class="search">
        <form action="" method="GET">
            <table>
                <tr>
                    <td>
                    <input type="hidden" name="controller" value="thanh-vien">
                      <input type="text" name="key" placeholder="nhap tu khoa">
                  <input type="submit" value="tim kiem"></td>
                </tr>
            </table>
            <input type="hidden" name="action" value="tim-kiem">
        </form>
  </div>
  <form action="" method="post">
    <button class="btn btn-success" name="add_user"><a href ="index.php?controller=thanh-vien&action=add_user">
      add user</a></button>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>Name</th>
          <th>Date</th>
          <th>Country</th>
        </tr>
      </thead>
      <tbody>
        <?php
              foreach ($data_search as $datas) {
        ?>
        <tr>
          <td><?php echo $datas['id']; ?></td>
          <td><?php echo $datas['name']; ?></td>
          <td><?php echo $datas['date']; ?></td>
          <td><?php  echo $datas ['country']; ?></td>
          <td>
              <span><button type="submit" class="btn btn-primary" style="margin-right:15px;"><a href="index.php?controller=thanh-vien&action=edit_user&id=<?php echo $datas['id']; ?>">Edit</a></span>
              <span><button type="submit" class="btn btn-warning"><a href="index.php?controller=thanh-vien&action=delete&id=<?php echo $datas['id']; ?>">delete</a></span>
          </td>
        <?php } ?>
        </tr>
      </tbody>
    </table>
      <a href="index.php?controller=thanh-vien&action=list"> Trang chu </a>
  </form>
</div>
