<?php
  require_once('view/sub.php');
  if(isset($_GET['id'])) {
?>
<p> <?php echo htmlspecialchars($_GET['id']); ?> </p>
<?php $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
  }
  ?>
        <div class="container">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>날짜</th>
                        <th>조회수</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $list = scandir('data');
                      $i = 0;
                      while($i < count($list)) {
                          $title = htmlspecialchars($list[$i]);
                          if($list[$i] != "." && $list[$i] != ".."){
                            $j = $i - 1;
                            echo "<tr><td>".$j."</td>";
                            echo "<td><a href=\"history.php?id=$title\">$title</a></td>";
                            echo "<td></td>";
                            echo "<td><a href=\"history.php?id=$title\"></a></td>";
                          }
                          $i++;
                      }
                      ?>
                    </tbody>
                </table>

                <form action="create.php">
                  <button type="submit" class="btn">글쓰기</button>
                </form>
                <?php if(isset($_GET['id'])) { ?>
                  <form action="delete_process.php" method="post">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <input type="submit" value="delete">
                  </form>
                <?php } ?>
                <hr/>

<?php require_once('view/subback.php'); ?>
