<?php 
include "../koneksi.php"; 
$sql = $koneksi->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webpage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
        * {
            font-family: 'PT Sans', sans-serif;
        }

        .container {
            width: 800px;
            margin: 0 auto;
        }

        .header {
            background-color: #fff;
            min-height: 50px;
            text-align: center;
        }

        .logo img {
            width: 200px;
        }

        .menu ul {
            padding: 0;
        }

        .menu ul li {
            display: inline-block;
            position: relative;
        }

        .menu ul li a {
            padding: 10px 20px;
            text-decoration: none;
        }

        .menu ul li:hover ul.submenu {
            display: block;
        }

        ul .submenu {
            background-color: #eee;
            border: 1px solid #ccc;
            text-align: left;
            position: absolute;
            top: 20px;
            left: 0;
            display: none;
        }

        ul .submenu li {
            display: block;
        }

        ul .submenu li a {
            display: block;
            padding: 5px 10px;
        }

        .jumbotron {
            width: 100%;
            padding: 80px 40px;
            box-sizing: border-box;
            text-align:  center;
            color: white;
            background-color: #aaa;
            background-image: url(https://images.unsplash.com/photo-1593642634524-b40b5baae6bb?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80);
            background-size: cover;
            position: relative;
        }

        .jumbotron h2, .jumbotron p {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.4;
        }

        .content {
            background-color: #ddd;
            min-height: 500px;
            overflow: auto;
        }

        .content h2 {
            text-align: center;
        }

        .thumbnail {
            background-color: white;
            text-align: center;
            padding: 10px;
            width: 225px;
            margin: 10px;
            float: left;
        }

        .thumbnail img {
            width: 100%;
        }

        .footer {
            background-color: #ccc;
            min-height: 50px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Logo Produk</h1>
            <div class="logo">
                <img src="https://i.ibb.co/7bQ4mVX/images.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">About</a>
                        <ul class="submenu">
                            <li>
                                <a href="">CV</a>
                            </li>
                            <li>
                                <a href="">Education</a>
                            </li>
                            <li>
                                <a href="">Portopolio</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="jumbotron">
            <div class="overlay"></div>
            <h2>Welcome to My Homepage</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, exercitationem perferendis nostrum sed vero facilis, illum culpa unde! Eligendi cupiditate vitae tenetur repellat, corrupti iure, omnis praesentium a exercitationem ex.</p>
        </div>

        <div class="content">
            <h2>Product</h2>
            <?php foreach ($sql as $row): ?>
                <div class="thumbnail">
                    <img src="images/<?= $row['gambar']; ?>" alt="">
                    <h2><a href="detail.php?id=<?= $row['id']; ?>" style="text-decoration: none;"><?= $row['nama']; ?></a></h2>
                    <p><?= 'Rp '.number_format($row['harga'],2,',','.'); ?></p>
                </div>  
            <?php endforeach ?>
        </div>

        <div class="footer">
            <p>copyright 2020 myPage</p>
        </div>
    </div>
</body>
</html>