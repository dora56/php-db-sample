<?php
  define('DB_HOST','127.0.0.1');
  define('DB_USER','root');
  define('DB_PASSWORD','root');
  define('DB_PORT','3306');
  define('DB_NAME','sample');
  $dbhost = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=utf8";

  try{
    $pdo = new PDO($dbhost,DB_USER,DB_PASSWORD);

    $sql = "SELECT * FROM sample";

    //全ての情報を保存
    $statement = $pdo->query($sql);
    //データベースを配列情報に変換して、入れる
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);

    //データベースの接続アウト
    $pdo=null;

  }catch(PDOException $e){
    echo 'Error:'.$e->getMessage();//エラーの内容を吐き出す
  }
?>

  <html>
    <body>
      <table>
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
          <?php
          if(isset($row)){
            foreach($row as $r){
              echo '<tr>';
              echo '<td>',$r['ID'],'</td>';
              echo '<td>',$r['Name'],'</td>';
              echo '</tr>';
            }
          }
          ?>
      </table>
    </body>
  </html>
