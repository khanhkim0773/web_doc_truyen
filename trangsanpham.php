<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang sản phẩm</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        body { 
            width: 100%;
            height: 100vh;
            background-color: #f2f3f5;
        }
        
        a
        {
            text-decoration: none;
            text-align: center;
        }

        #infor-frame,
        #instruction-frame,
        #comment-frame
        {
            padding: 95px 75px;
            background-color: white;
            max-width: 1200px;
            border-radius: 20px;
            position: relative;
            margin: 0 auto;
            width: 50%;
            margin-top: 24px;
            height: 300px;
            margin-bottom: 24px;
        }

        #infor-frame .story-img
        {
            width: 170px;
            height: 230px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
            position: absolute;
            border-radius: 8px;
            top: 0;
            left: 0;
            margin: 24px;
        }

        #infor-frame .str-name,
        #instruction-frame .instrc-lb
        #comment-frame .comment-title
        {
            max-width: 400px;
            font-size: 25px;
            position: absolute;
            left: 200px;
            top: 0;
            margin: 24px;
        }

        #infor-frame #box-type
        {
            width: 500px;
            position: absolute;
            right: 10px;
            top: 70px;
        }

        #infor-frame .type-list .type
        {
            position: relative;
            display: inline-block;
            list-style: none;
            width: 100px;
            height: 40px;
            line-height: 40px;
            margin-left: 30px;
            background-color: yellow;
        }

        #instruction-frame
        {
            height: 700px;
        }

        #comment-frame .comment-input
        {
            width: 100%;
            padding: 40px;
            border: 1px solid #333;
            border-radius: 8px;
            margin: 8px;
        }

        #comment-frame .comment-btn
        {
            padding: 8px 40px;
            position: absolute;
            right: 70px;
            border: none;
            border-radius: 8px;
            background-color: #017b66;
            color: white;
            cursor: pointer;
        }
    </style>

    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>

<?php include('modules/nav.php'); ?>
    <div id="infor-frame">
        <img class = "story-img" src="https://image.lag.vn/upload/news/23/02/27/spoiler-record-of-ragnarok-76-1_DFWH.jpg" alt="">
        <h1 class = "str-name">Record of Rangnarok</h1>
        <div id = "box-type">
            <ul class = "type-list">
                <li class="type"> <a href="">Action</a> </li>
                <li class="type"> <a href="">Historical</a> </li>
                <li class="type"> <a href="">Manga</a> </li>
                <li class="type"> <a href="">Seinen</a> </li>
                <li class="type"> <a href="">Martial Arts</a> </li>
            </ul>
        </div>
    </div>

    <div id = "instruction-frame">
        <h1 class = "instrc-lb">Giới thiệu</h1>
    </div>

    <div id = "comment-frame">
        <h1 class = "comment-title">Bình luận</h1>
        <input type="text" class = "comment-input">
        <button class = "comment-btn">Bình luận</button>
    </div>

    <?php include('modules/footer.php'); ?>
</body>

</html>