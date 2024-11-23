<?php
// Lấy thông tin từ POST khi người dùng nhấn nút Xác Nhận Thanh Toán
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;
    $product_image = $_POST['product_image'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác Nhận Thanh Toán</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            line-height: 1.6;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #28a745;
            text-align: center;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        img {
            display: block;
            margin: 20px auto;
            max-width: 300px;
            border-radius: 10px;
        }

        .btn {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #28a745;
            color: white;
            padding: 10px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Thanh Toán Thành Công!</h1>
    <p>Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.</p>
   
    <form action="../index.php" method="post">
        <button type="submit" class="btn">Quay lại trang chủ</button>
    </form>
</body>
</html>
