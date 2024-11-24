<?php
session_start();

// Kiểm tra xem dữ liệu có được gửi qua POST không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'] ?? null;
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;
    $product_image = $_POST['product_image'] ?? '';

    if ($product_id !== null) {
        // Nếu giỏ hàng chưa tồn tại, khởi tạo
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            // Thêm sản phẩm mới
            $_SESSION['cart'][$product_id] = [
                'name' => $product_name,
                'price' => $product_price,
                'image' => $product_image,
                'quantity' => 1,
            ];
        }
    }
}


// Định nghĩa đường dẫn thư mục ảnh
$img_path = "uploads/";

// Kiểm tra nếu có dữ liệu POST được gửi từ trang sản phẩm
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;
    $product_image = $_POST['product_image'] ?? '';

    // Kiểm tra và xử lý đường dẫn ảnh
    if (!empty($product_image)) {
        $product_image_full = $img_path . $product_image;
    } else {
        $product_image_full = "default_image.jpg"; // Hình ảnh mặc định nếu không có ảnh
    }
} else {
    // Nếu không có dữ liệu, chuyển về trang sản phẩm
    header('Location: sanphamct.php');
    exit;
}
// Hiển thị giỏ hàng
$cart = $_SESSION['cart'] ?? [];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <style>
        /* Đặt lại CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Header */
        header {
            background-color: #007bff;
            padding: 15px 0;
            text-align: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }

        /* Container giỏ hàng */
        .cart-container {
            max-width: 1100px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Bảng giỏ hàng */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            text-transform: uppercase;
            padding: 15px;
        }

        .cart-table td {
            text-align: center;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }

        .cart-table .product-name {
            text-align: left;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .cart-table .product-name img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        .cart-table input[type="number"] {
            width: 60px;
            padding: 5px;
            text-align: center;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
        }

        .cart-table input[type="number"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 4px rgba(0, 123, 255, 0.3);
        }

        .cart-table a {
            color: #e74c3c;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .cart-table a:hover {
            text-decoration: underline;
        }

        /* Tổng cộng */
        .total-section {
            display: flex;
            justify-content: flex-end;
            font-size: 18px;
            margin-top: 10px;
        }

        .total-section strong {
            font-size: 20px;
            color: #28a745;
        }

        /* Nút thanh toán */
        .checkout-btn {
            background-color: #28a745;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            display: inline-block;
            text-align: center;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        /* Thông báo giỏ hàng trống */
        .empty-cart {
            text-align: center;
            font-size: 18px;
            color: #888;
            padding: 20px 0;
        }

        /* Định dạng container chứa các nút */
        .button-group {
            display: flex;
            justify-content: center;
            /* Căn giữa các nút */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            gap: 15px;
            /* Khoảng cách giữa các nút */
            margin-top: 20px;
        }

        /* Định dạng chung cho nút */
        .button-group button {
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Nút Thanh Toán */
        .checkout-btn {
            background-color: #28a745;
            /* Màu xanh */
            color: white;
        }

        .checkout-btn:hover {
            background-color: #218838;
            /* Xanh đậm khi hover */
        }

        /* Nút Trở Về */
        .back-btn {
            background-color: #6c757d;
            /* Màu xám */
            color: white;
        }

        .back-btn:hover {
            background-color: #5a6268;
            /* Xám đậm khi hover */
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        Giỏ Hàng Của Bạn
    </header>

    <!-- Cart Container -->
    <div class="cart-container">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng cộng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($cart)): ?>
                    <?php foreach ($cart as $id => $item): ?>
                        <tr>
                            <td class="product-name">
                                <?php
                                echo '<img src="../' . $product_image . '" alt="Product Image">';
                                ?>
                                <?php echo htmlspecialchars($item['name']); ?>
                            </td>
                            <td><?php echo number_format($item['price']); ?> VNĐ</td>
                            <td>
                                <input type="number" value="<?php echo $item['quantity']; ?>" min="1">
                            </td>
                            <td>
                                <?php echo number_format($item['price'] * $item['quantity']); ?> VNĐ
                            </td>
                            <td>
                                <a href="remove_item.php?id=<?php echo $id; ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="empty-cart">Giỏ hàng của bạn đang trống!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="total-section">
            <p>Tổng cộng:
                <strong>
                    <?php
                    $total = 0;
                    foreach ($cart as $item) {
                        $total += $item['price'] * $item['quantity'];
                    }
                    echo number_format($total);
                    ?> VNĐ
                </strong>
            </p>
        </div>

        <div style="text-align: center;">
            <div class="button-group">
                <form action="xacNhanThanhToan.php" method="POST">
                    <button type="submit" class="checkout-btn">Thanh Toán</button>
                </form>
                <form action="../index.php" method="POST">
                    <button type="submit" class="back-btn">Trở về</button>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>

</body>

</html>