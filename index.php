<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--
        レスポンシブの設定
        ・viewportの設定
        ・
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- このサイトは何か　説明する場所　-->
    <meta neme="description" content="テック太郎の自己紹介">
    <!-- タイトルの設定　-->
    <title>PORTFOLIO</title>
   <!-- スタイルシート　-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--
        headerタグの作成
        ・ロゴの設定をします
        ・h1タグとaタグとspanタグを使っていきます
    -->
    <header>
        <h1 class="blok-header">
            <a href="">
                <span class="color-green">P</span>ortfolio
            </a>
        </h1>
    </header>

    <!--
        meinタグの用
        ・profile用途work用の箱を用意する
        ・divタグを使用
    -->
    <div class="blok-main">
        <!--
            profile用の箱
        -->
        <div class="box-profile">
            <h2 class="sub-title">
                <span class="color-green">P</span>rofile
            </h2>
            <div class="item-list">
                <img src="img/profile.png" alt="プロフィール画像">
                <b>テック　太郎</b>
                <p class="color-green">HTML / CSS / PHP / MySQL / Laravel / Adobbe XD</p>
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <ul class="icon-list">
                   <li>
                       <a href="">
                           <img src="img/github.png" alt="Githubアイコン">
                       </a>
                   </li>
                   <li>
                       <a href="">
                           <img src="img/twitter.png" alt="Twitterアイコン">
                       </a>
                   </li>
                  
                </ul>
            </div>
        </div>

        <!--
            Work用の箱
        -->
        <div class="box-works">
            <h2 class="sub-title">
                <span class="color-green">W</span>orks
            </h2>

            <ul class="works-list">
                <li>
                    <img src="img/work_1.jpg" alt="Twitterクローンの画像">
                    <h3>Twitterクローン</h3>
                    <span>HTML / CSS / PHP / MySQL</span>
                    <div class="link">
                        <a href="">Webサイト</a>
                        <a href="">GitHub</a>
                    </div>
                </li>

                <li>
                    <img src="img/work_2.jpg" alt="Twitterクローンの画像">
                    <h3>Twitterクローン</h3>
                    <span>HTML / CSS / PHP / MySQL</span>
                    <div class="link">
                        <a href="">Webサイト</a>
                        <a href="">GitHub</a>
                    </div>
                </li>

                <li>
                    <img src="img/work_3.jpg" alt="Twitterクローンの画像">
                    <h3>Twitterクローン</h3>
                    <span>HTML / CSS / PHP / MySQL</span>
                    <div class="link">
                        <a href="">Webサイト</a>
                        <a href="">GitHub</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <!-- 
        footer
        ・copyrightの設定
        pタグ
     -->
     <footer class="block-footer">
         <p>copyright @ TECH I.S, Inc.</p>
     </footer>
</body>
</html>