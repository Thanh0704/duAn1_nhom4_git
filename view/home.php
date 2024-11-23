<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Reset và thiết lập cơ bản */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .catalog {
            display: flex;
            gap: 20px;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .boxleft {
            flex: 3;
        }

        /* Banner chính */
        .banner {
    position: relative;
    margin-bottom: 20px;
    border-radius: 10px; /* Bo góc, nếu muốn */
    overflow: hidden;
    max-height: 500px; /* Giới hạn chiều cao banner */
}

.banner img {
    width: 100%; /* Ảnh rộng full chiều ngang */
    height: auto; /* Giữ tỷ lệ ảnh */
    object-fit: cover; /* Giữ trung tâm ảnh, cắt ảnh nếu cần */
    max-height: 500px; /* Điều chỉnh chiều cao tối đa */
}
        .banner {
            position: relative;
            margin-bottom: 20px;
        }

        .banner img {
            border-radius: 10px;
        }

        .banner button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 10;
        }

        .banner .pre {
            left: 10px;
        }

        .banner .next {
            right: 10px;
        }

        /* Items */
        .items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .box_items {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box_items:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .box_items_img {
            position: relative;
            overflow: hidden;
        }

        .box_items_img img {
            transition: transform 0.3s ease;
        }

        .box_items_img:hover img {
            transform: scale(1.1);
        }

        .add {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.7);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #fff;
            display: none;
        }
        .catalog {
    display: flex;
    gap: 20px; /* Khoảng cách giữa boxleft và boxright */
    padding: 20px;
    background-color: #f8f9fa;
}

.boxleft {
    flex: 3; /* Chiếm 75% chiều rộng */
}

.boxright {
    flex: 1; /* Chiếm 25% chiều rộng */
    max-width: 300px; /* Giới hạn chiều rộng tối đa */
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

        .box_items_img:hover .add {
            display: block;
        }

        .item_name {
            display: block;
            font-weight: bold;
            font-size: 16px;
            margin: 10px 0;
            text-align: center;
            color: #333;
            transition: color 0.3s;
        }

        .item_name:hover {
            color: #f39c12;
        }

        .price {
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        /* Sidebar */
        .boxright {
            flex: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .catalog {
                flex-direction: column;
            }

            .boxright {
                margin-top: 20px;
            }
        }
        .slideshow-container {
    position: relative;
    width: 100%;
    max-width: 800px;
    margin: auto;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.slideshow-container img {
    width: 100%;
    border-radius: 8px;
    transition: opacity 0.5s ease-in-out;
}

.slideshow-container button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 10;
}

.slideshow-container button:hover {
    background: rgba(0, 0, 0, 0.8);
}

.slideshow-container button:first-of-type {
    left: 10px;
}

.slideshow-container button:last-of-type {
    right: 10px;
}
    </style>
</head>
<body>

<main class="catalog">
    <!-- Left content -->
    <div class="boxleft">
        <!-- Banner -->
        <div class="slideshow-container" style="position: relative; width: 100%; max-width: 800px; margin: auto; overflow: hidden;">
    <img id="banner" src="img/banner0.jpg" alt="Slideshow Banner" style="width: 100%; border-radius: 8px;">
    <button onclick="pre()" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; cursor: pointer; border-radius: 50%;">&#10094;</button>
    <button onclick="next()" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); background: rgba(0, 0, 0, 0.5); color: white; border: none; padding: 10px; cursor: pointer; border-radius: 50%;">&#10095;</button>
</div>

        <!-- Items -->
        <div class="items">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                extract($sp);
                $linksp = "index.php?act=sanphamct&id=" . $id;
                $hinh = $img_path . $img;
                echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img">
                        <a class="item_name" href="'.$linksp.'"><img src="' . $hinh . '" alt=""></a>
                        <div class="add"><a href="#">ADD TO CART</a></div>
                    </div>
                    <a class="item_name" href="">' . $name . '</a>
                    <p class="price">' . $price . ' VNĐ</p>
                </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>

    <!-- Right content -->
    <?php include "view/boxright.php"?>
</main>

</body>
</html>
