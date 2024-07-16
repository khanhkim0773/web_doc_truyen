<!DOCTYPE html>
<html>
<head>
    <title>Theo dõi truyện</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Theo dõi truyện</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Thể loại</a></li>
            <li><a href="#">Tác giả</a></li>
            <li><a href="#">Tìm kiếm</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Truyện mới cập nhật</h2>
            <ul>
                <?php
                    // Kết nối với cơ sở dữ liệu
                    $conn = mysqli_connect("localhost", "username", "password", "ten_database");
                    // Kiểm tra kết nối
                    if (!$conn) {
                        die("Kết nối thất bại: " . mysqli_connect_error());
                    }
                                    // Truy vấn lấy dữ liệu truyện mới cập nhật từ database
                $query = "SELECT * FROM truyen_moi_cap_nhat";
                $result = mysqli_query($conn, $query);

                // Hiển thị dữ liệu lấy được lên trang web
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li>
                        <a href="#">
                            <img src="' . $row["anh"] . '" alt="' . $row["ten_truyen"] . '">
                            <h3>' . $row["ten_truyen"] . '</h3>
                            <p>Tác giả: ' . $row["tac_gia"] . '</p>
                            <p>Thể loại: ' . $row["the_loai"] . '</p>
                            <p>Chương mới nhất: Chương ' . $row["chuong_moi_nhat"] . '</p>
                        </a>
                    </li>';
                }

                // Đóng kết nối
                mysqli_close($conn);
            ?>
        </ul>
    </section>
    <section>
        <h2>Truyện đang theo dõi</h2>
        <ul>
            <?php
                // Kết nối với cơ sở dữ liệu
                $conn = mysqli_connect("localhost", "username", "password", "ten_database");
                // Kiểm tra kết nối
                if (!$conn) {
                    die("Kết nối thất bại: " . mysqli_connect_error());
                }

                // Truy vấn lấy dữ liệu truyện đang theo dõi từ database
                $query = "SELECT * FROM truyen_dang_theo_doi";
                $result = mysqli_query($conn, $query);

                // Hiển thị dữ liệu lấy được lên trang web
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li>
                        <a href="#">
                            <img src="' . $row["anh"] . '" alt="' . $row["ten_truyen"] . '">
                            <h3>' . $row["ten_truyen"] . '</h3>
                            <p>Tác giả: ' . $row["tac_gia"] . '</p>
                            <p>Thể loại: ' . $row["the_loai"] . '</p>
                            <p>Chương mới nhất: Chương ' . $row["chuong_moi_nhat"] . '</p>
                            <p>Trạng thái: ' . $row["trang_thai"] . '</p>
                            </a>
                            </li>';
                            }
                                        // Đóng kết nối
            mysqli_close($conn);
            ?>
        </ul>
    </section>
    </main>
<footer>
    <p>Footer của trang web</p>
</footer>
</body>
</html>    
