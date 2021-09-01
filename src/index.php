<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ポートフォリオ">
    <!-- bootsyrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <div class="block-header">
            <div class="header-contents">
                <div class="my-logo">
                    <img src="assets/img/my-logo.png" alt="">
                </div>
                <div class="header-title">
                    <label class="header-title-name">Portfolio</label>
                </div>
                <div class="menu-bar">
                    <a href="#home-link">Home</a>
                    <a href="#about-link">About</a>
                    <a href="#projects-link">Projects</a>
                    <a href="#contact-link">Contact</a>
                </div>
            </div>
        </div>
    </header>

    <div id="home-link"></div>

    <div class="block-main">
        <div class="first-view">
            <div class="myphoto">
                <img src="assets/img/myphoto.jpeg" alt="">
            </div>
            <div class="myname">
                <p class="en-char">Otsubo Kento</p>
                <p class="ja-char">大坪 健人</p>
            </div>
        </div>

        <div id="about-link"></div>

        <section class="section1">
            <div class="box-about">
                <div class="about-contents">
                    <div class="about-title">
                        <labal class="about-title-name">About</labal>
                    </div>
                    <div class="about-logo">
                        <img src="assets/img/about-logo.png" alt="">
                    </div>
                    <div class="pc-skills">
                        <label class="pc-skills-name">HTML / CSS / JavaScript / PHP / Git / Python / Visual Studio Code / MySQL / CodeIgniter / Laravel / TestCafe / Adobe XD</label>
                    </div>
                    <div class="self-introduction">
                        <label class="self-introduction-text">私の性格の特徴はとにかく知的好奇心が旺盛なところです。まだまだ学ぶことはたくさんあります。働きながら学び続けることを大切にしていきます。</label>
                    </div>
                    <div class="mailad">
                        <label class="mailad-text">oknet.1123@icloud.com</label>
                    </div>
                    <div class="github-logo">
                        <a href="https://github.com/otsu-kento/otsu-kento-portfolio"><img src="assets/img/github-logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <div id="projects-link"></div>

        <section class="section2">
            <div class="box-projects">
                <div class="projects-title">
                    <label class="projects-title-name">Projects</label>
                </div>
                <div class="projects-logo">
                    <img src="assets/img/projects-logo.png" alt="">
                </div>
                <div class="projects-contents">
                    <div class="project-content">
                        <div class="projects-img" id="mail-maga-img">
                            <img src="assets/img/mail-maga.png" alt="">
                        </div>
                        <div class="project-name">
                            <label class="project-name-text">メールマガジン</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">メールアドレスの登録・解除機能、リッチテキストエディタによるhtmlメール作成機能、登録されたメールアドレスに対するメール送信機能を実装しています。</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">CodeIgniter / MySQLを利用しています。</label>
                        </div>
                        <div class="link-btn-contents">
                            <label class="link-website"><a href="https://mailmagazine22.herokuapp.com/">WebSite</a></label>
                            <label class="link-git"><a href="https://github.com/otsu-kento/Mailmagazine33">GitHub</a></label>
                        </div>
                    </div>
                    <div class="project-content">
                        <!-- pass adminPassword -->
                        <div class="projects-img" id="board-img">
                            <img src="assets/img/board.png" alt="">
                        </div>
                        <div class="project-name">
                            <label class="project-name-text">ひと言掲示板</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">ひと言掲示板です。メッセージを書き込むことができ、管理者としては書き込みを編集できます。</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">CodeIgniter / MySQLを利用しています。</label>
                        </div>
                        <div class="sample">
                            <label class="sample-title">管理者パスワード</label><br>
                            <label class="sample-text">Pass : adminPassword</label>
                        </div>
                        <div class="link-btn-contents">
                            <label class="link-website"><a href="https://otsu-board.herokuapp.com/">WebSite</a></label>
                            <label class="link-git"><a href="https://github.com/otsu-kento/board">GitHub</a></label>
                        </div>
                    </div>
                    <div class="project-content">
                        <!-- mailad taro@example.com  pass taropass-->
                        <div class="projects-img" id="twi-cl-img">
                            <img src="assets/img/twi-cl.png" alt="">
                        </div>
                        <div class="project-name">
                            <label class="project-name-text">Twitterクローン</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">Twitterの複製アプリです。つぶやきやいいねができます。</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">PHP / MySQLを利用しています。</label>
                        </div>
                        <div class="sample">
                            <label class="sample-title">サンプルアカウント</label><br>
                            <label class="sample-text">Email : taro@example.com</label><br>
                            <label class="sample-text">Pass : taropass</label>
                        </div>
                        <div class="link-btn-contents">
                            <label class="link-website"><a href="https://big-vase.com/TwitterClone/controllers/Sign-in.php">WebSite</a></label>
                            <label class="link-git"><a href="https://github.com/otsu-kento/TwitterClone">GitHub</a></label>
                        </div>
                    </div>
                    <div class="project-content">
                        <!-- mailad hana@example.com  pass hanapass-->
                        <div class="projects-img" id="to-do-img">
                            <img src="assets/img/to-do.png" alt="">
                        </div>
                        <div class="project-name">
                            <label class="project-name-text">ToDoアプリ</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">ToDoアプリです。各ユーザーがやるべきことを追加、削除できます。トップページの右上からログインできます。</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">Laravel / MySQLを利用しています。</label>
                        </div>
                        <div class="sample">
                            <label class="sample-title">サンプルアカウント</label><br>
                            <label class="sample-text">Email : hana@example.com</label><br>
                            <label class="sample-text">Pass : hanapass</label>
                        </div>
                        <div class="link-btn-contents">
                            <label class="link-website"><a href="https://todo-laravel1123.herokuapp.com/">WebSite</a></label>
                            <label class="link-git"><a href="https://github.com/otsu-kento/todo-laravel">GitHub</a></label>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="projects-img" id="crud-img">
                            <img src="assets/img/crud.png" alt="">
                        </div>
                        <div class="project-name">
                            <label class="project-name-text">CRUDアプリ</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">CRUDアプリです。登録・編集・削除・検索機能を実装しています。</label>
                        </div>
                        <div class="explain">
                            <label class="explain-text">Laravel / MySQLを利用しています。</label>
                        </div>
                        <div class="link-btn-contents">
                            <label class="link-website"><a href="https://tsubo-crud-laravel.herokuapp.com/">WebSite</a></label>
                            <label class="link-git"><a href="https://github.com/otsu-kento/crud-laravel">GitHub</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="contact-link"></div>

        <div class="box-contact">
            <div class="contact-title">
                <lavel class="contact-title-name">Contact</lavel>
            </div>
            <div class="contact-logo">
                <img src="assets/img/contact-logo.png" alt="">
            </div>
            <div class="contact-contents">
                <div class="phone-content">
                    <div class="phone-logo">
                        <img src="assets/img/phone-logo.png" alt="">
                    </div>
                    <div class="phone-title">
                        <label class="phone-name">Phone</label>
                    </div>
                    <div class="phone-num">
                        <label class="phone-num-text">090-7300-3588</label>
                    </div>
                </div>
                <div class="mail-content">
                    <div class="mail-logo">
                        <img src="assets/img/mail-logo.png" alt="">
                    </div>
                    <div class="mail-title">
                        <label class="mail-name">Mail</label>
                    </div>
                    <div class="contact-mailad">
                        <label class="contact-mailad-text">oknet.1123@icloud.com</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-my-logo">
            <img src="assets/img/my-logo.png" alt="">
        </div>
        <div class="copyrights">
            <p>© Kento Otsubo All rights reserved</p>
        </div>
    </footer>
</body>
</html>