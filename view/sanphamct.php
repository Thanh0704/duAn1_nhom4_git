<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
        }

        /* Header Menu */
        header {
            background-color: #007bff;
            padding: 15px 0;
        }

        .header-menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .header-menu a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
            font-size: 16px;
        }

        .header-menu a:hover {
            color: #ffdd57;
        }

        /* Main Layout */
        main.catalog {
            display: flex;
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .boxleft {
            flex: 4;
            /* Tăng kích thước phần bên trái */
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .boxright {
            flex: 1;
            /* Giảm kích thước phần bên phải */
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .mb {
            margin-bottom: 20px;
        }

        .box_title {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 15px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .box_content {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        .spct img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin: 0 auto;
            display: block;
        }

        .price {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
            margin-top: 10px;
        }

        .related-products ul {
            list-style: none;
            padding: 0;
        }

        .related-products ul li a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }

        .related-products ul li a:hover {
            color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            main.catalog {
                flex-direction: column;
            }

            .boxleft,
            .boxright {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header Menu -->
    <!-- <header>
        <div class="header-menu">
            <div class="logo">
                <a href="index.php">LOGO</a>
            </div>
            <nav>
                <a href="index.php">Trang chủ</a>
                <a href="#">Giới thiệu</a>
                <a href="#">Liên hệ</a>
                <a href="#">Góp ý</a>
                <a href="#">Hỏi đáp</a>
            </nav> 
        </div>
    </header> -->
   
    <!-- Main Content -->
    <main class="catalog">
        <!-- Bên trái -->
        <div class="boxleft">
            <div class="mb">
                <div class="box_title">
                    <?php extract($onesp);
                    echo $name; ?>
                </div>
                <div class="box_content">
                    <?php
                    $hinh = $img_path . $img;
                    // echo $hinh;
                    echo '<div class="spct"><img src="' . $hinh . '" alt="Product Image"></div>';
                    echo '<p class="price">Giá: ' . $price . ' VNĐ</p>';
                    echo '<p class="description">Mô tả: ' . $mota . '</p>';
                    ?>
                </div>
                <br>
                <form action="view/thanhToan.php" method="POST">
                    <input type="hidden" name="product_name" value="<?php echo $name; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $price; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $hinh; ?>">
                    <button type="submit" class="btn btn-primary" id="thanhToan">Thanh toán</button>
                </form>
                <form action="view/cart.php" method="POST">
                    <input type="hidden" name="product_name" value="<?php echo $name; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $price; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $hinh; ?>">
                    <button type="submit" class="btn btn-primary" id="cart">Thêm vào giỏ hàng</button>
                </form>

            </div>

            <div class="mb">
                <div class="box_title">BÌNH LUẬN</div>
                <div class="card" id="binhluan">
                    <!-- Bình luận AJAX -->
                </div>
            </div>

            <div class="related-products mb">
                <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
                <ul class="box_content">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp = "index.php?act=sanphamct&id=" . $id;
                        echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Bên phải -->
        <div class="boxright">
            <?php include "view/boxright.php"; ?>
        </div>
    </main>
</body>

</html>