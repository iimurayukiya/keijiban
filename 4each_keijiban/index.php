<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
        <h1>
            <a href="">
              <img src="4eachblog_logo.jpg" alt="">
            </a>
        </h1>
     <div class="menu">
       <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
       </ul>
      </div>
    </header>

    <main>
          
          <div class="main-container">
    
            <div class="left">
                <p class="top">プログラミングに役立つ書籍</p>
                
              <form method="post" action="insert.php">
              
               <h2>入力フォーム</h2>
                <div>
                  <label>ハンドルネーム</label>
                  <br>
                  <input type="text" class="text" size="35" name="handlename">
                </div>

                <div>
                  <label>タイトル</label>
                  <br>
                  <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                  <label>コメント</label>
                  <br>
                  <textarea id="" cols="35" rows="7" name="comments"></textarea>
                </div>
          
                <div>
                  <input type="submit" class="submit" value="投稿する">
                </div>
              </form>
        
              <?php

                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                $stmt = $pdo->query("select*from 4each_keijiban");

              while($row = $stmt->fetch()){

              echo"<div class='kiji'>";
                echo"<h3>".$row['title']."</h3>";
                echo"<div class='contens'>";
                  echo $row['comments'];
                  echo"<div class='handlename'>posted by".$row['handlename']."</div>";
              echo"</div>";
              echo"</div>";
              }

              ?>

             </div> 
    
    
              <div class="right">
                <div class="ninki">
                 <p>人気の記事</p>
                  <ul>
                    <li>PHPのオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ TOP5</li>
                    <li>HTMLの基礎</li>
                  </ul>
                </div>
    
                <div class="osusume">
                 <p>オススメリンク</p>
                  <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                  </ul>
                </div>  
                
                <div class="kategori">
                 <p>カテゴリ</p>
                  <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                  </ul>
                </div>
    
              </div>
    
          </div>
        </main>
    
        <footer>
          copyright©internous | 4each blog the whitch provides A to Z about programming.
        </footer>

</body>
</html>