<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta chart="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>test</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            background: #333;
            color: #fff;
        }

        nav ul {
            display: flex;
            margin: 0;
            list-style-type: none;
        }

        nav a {
            display: block;
            padding: 8px 24px;
            color: #fff;
            text-decoration: none;
        }

        nav a:hover {
            background: #666;
        }

        header {
            height: 100px;
            background: url(./wall.jpg) center/cover;
        }

        main>h1 {
            font-weight: normal;
            font-size: 1.5em;
            text-align: center;
            margin: 32px 0 32px;
        }

        main {
            min-height: 360px;
        }

        .form-container{
            box-sizing: border-box;
            background: #f0ffff;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        label{
            display: inline-block;
            width: 120px;
        }

        input{
            width: 180px;
            height: 1.5em;
        }

        textarea{
            vertical-align:middle;
            width: 180px;
            height: 5em;
        }

        .form-item{
            margin-top: 30px;
        }

        button{
            margin-left: 124px;
        }

        footer {
            background: #666;
            text-align: center;
            margin-top: 64px;
            padding-top: 32px;
            color: #fff;
            height: 100vh;
        }

        @media screen and (max-width: 640px){
            .form-container{
                background: rosybrown;
            }
            label{
                display: block;
                margin-top: 10px;
            }
            .form-item{
                margin-top: 0px;
            }
            button{
                margin-left: 0;
            }
            nav ul{
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
    <header>
    </header>
    <main>
        <h1>お問合せフォーム（確認）</h1>
        <section class="form-container">
            <form method="post" action="thankyou.php">
                <div>
                    <label>氏名</label>
                    <input type="text" name="name" class="form-item" value="<?php echo $name; ?>" disabled>
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" class="form-item" value="<?php echo $email; ?>" disabled>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label>お問合せ内容</label>
                    <textarea name="message" class="form-item" disabled><?php echo $message; ?></textarea>
                    <input type="hidden" name="message" value="<?php echo $message; ?>">
                </div>
                <div>
                    <button type="submit" class="form-item">問合せる</button>
                </div>
            </form>
        </section>
    </main>
    <footer>
        footer
    </footer>
</body>

</html>