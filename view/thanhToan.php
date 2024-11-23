<?php
session_start();
// Kiểm tra nếu có dữ liệu POST được gửi từ trang sản phẩm
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;
    $product_image = $_POST['img_path'] ?? '';
} else {
    // Nếu không có dữ liệu, chuyển về trang sản phẩm
    header('Location: sanphamct.php');
    exit;   
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
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
            color: #007bff;
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
            background-color: #007bff;
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
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Thanh Toán</h1>
    <img src="<?php echo htmlspecialchars($product_image); ?>" alt="Xlam">
    <p>Sản phẩm: <strong><?php echo htmlspecialchars($product_name); ?></strong></p>
    <p>Giá: <strong><?php echo number_format($product_price); ?> VNĐ</strong></p>

    <!-- Nút Xác Nhận -->
    <form action="xacNhanThanhToan.php" method="POST">
    <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>">
    <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>">
    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($product_image); ?>">
    <button type="submit" class="btn">Xác Nhận Thanh Toán</button>
</form>
</body>
</html>