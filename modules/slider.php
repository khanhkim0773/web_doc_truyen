<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div id="slider">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'webtruyendb'); 
        $result = mysqli_query($conn, "select * from qlytruyen");
        $row =mysqli_fetch_assoc($result); 
        ?>
        <div id="board">
            <div class="leader board1">
                <h2>Top Tháng</h2>
                <ul>
                    <li><a href="">Thanh xuaan</a></li>
                </ul>
            </div>

            <div class="leader board2">
                <h2>Top Tuần</h2>
                <ul>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                    <li><a href="">7</a></li>
                    <li><a href="">8</a></li>
                    <li><a href="">9</a></li>
                    <li><a href="">10</a></li>
                </ul>
            </div>

            <div class="leader board3">
                <h2>Đề Cử</h2>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="">6</a></li>
                    <li><a href="">7</a></li>
                    <li><a href="">8</a></li>
                    <li><a href="">9</a></li>
                    <li><a href="">10</a></li>
                </ul>
            </div>
        </div>


        <div id="flexbox">
            <div class="newnovel">

                <div>
                    <h2>Truyện mới cập nhật</h2>
                </div>
                <?php
                $result = mysqli_query($conn, 'SELECT  count(maTruyen) as total from qlytruyen');
                $row = mysqli_fetch_assoc($result);
                $total_record = $row['total'];
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                $limit = 9;
                $total_page = ceil($total_record / $limit);
                if ($current_page >= $total_page)
                    $current_page = $total_page;
                else if ($current_page < 1)
                    $current_page = 1;
                $start = ($current_page - 1) * $limit;
                $result = mysqli_query($conn, "SELECT * from qlytruyen limit $start, $limit");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="story">'
                ?>
                    <img src="assets/img/<?= $row['anhTruyen'] ?>" alt="Hình ảnh không tồn tại">
                    <div class="content">
                        <a class="str-name" href=""> <?php echo $row['tenTruyen'] ?> </a>
                        <p> Trạng thái: <?php echo $row['trangThai']  ?></p>
                        <p> Số chương: <?php echo $row['soChuong'] ?></p>
                        <p> <?php echo $row['tacGia'] ?> </p>
                        <p> <?php echo  $row['theLoai'] ?> </p>
                    </div>
                    '
            </div>
                <?php
                }
                ?>


        </div>

        <div id="pagination">
            <?php
            if ($current_page > 1 && $total_page > 1)
                echo '<a href = "index.php?page =' . ($current_page - 1) . '">  Prev </a>';

            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $current_page)
                    echo '<span>' . $i . '</span> | ';
                else
                    echo '<a href="index.php?page=' . $i . '">' . $i . '</a> | ';
            }

            if ($current_page < $total_page && $total_page >= 1)
                echo '<a href="index.php?page=' . ($current_page + 1) . '">Next</a> | ';

            ?>
        </div>

        
    </div>

    </div>

    </div>

    </div>
</body>

</html>