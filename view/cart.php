<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
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

        /* Main Container */
        .cart-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Cart Table */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th,
        .cart-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .cart-table th {
            background-color: #007bff;
            color: white;
        }

        .cart-table td img {
            max-width: 100px;
            border-radius: 10px;
        }

        .cart-table .product-name {
            text-align: left;
        }

        .cart-table input[type="number"] {
            width: 60px;
            padding: 5px;
            text-align: center;
        }

        /* Total Section */
        .total-section {
            display: flex;
            justify-content: flex-end;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .total-section p {
            margin-left: 20px;
        }

        /* Checkout Button */
        .checkout-btn {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .checkout-btn:hover {
            background-color: #218838;
        }

        /* Footer */
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 40px 20px;
        }

        .footer .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .footer-column {
            flex: 1 1 calc(33.333% - 20px);
            min-width: 250px;
        }

        .footer-logo img {
            width: 150px;
            margin-bottom: 15px;
        }

        .company-info {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .contact-info {
            list-style: none;
            padding: 0;
        }

        .contact-info li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .contact-info i {
            margin-right: 10px;
            color: #f39c12;
        }

        .social-icons a {
            margin-right: 10px;
            font-size: 18px;
            color: #ecf0f1;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #f39c12;
        }

        h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color: #f39c12;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            text-decoration: none;
            color: #ecf0f1;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #f39c12;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            font-size: 14px;
            border-top: 1px solid #7f8c8d;
            margin-top: 20px;
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
        <!-- Cart Table -->
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
                <!-- Product Row -->
                <tr>
                    <td class="product-name">
                        <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/s/a/sac-anker-1c-20w-a2347-a-01.png" alt="Product Image">
                       Củ Sạc dự phòng
                    </td>
                    <td>200.000 VNĐ</td>
                    <td><input type="number" value="1" min="1"></td>
                    <td>200.000 VNĐ</td>
                    <td><button class="remove-btn" style="color: red;">Xóa</button></td>
                </tr>
                <tr>
                    <td class="product-name">
                        <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/t/a/tai-nghe-gaming-havit-h2040d_1_.png" alt="Product Image">
                        Tai nghe Chụp Gaming
                    </td>
                    <td>150.000 VNĐ</td>
                    <td><input type="number" value="1" min="1"></td>
                    <td>150.000 VNĐ</td>
                    <td><button class="remove-btn" style="color: red;">Xóa</button></td>
                </tr>
                <!-- Add more products as needed -->
            </tbody>
        </table>

        <!-- Total Section -->
        <div class="total-section">
            <p>Tổng cộng: <strong>350.000 VNĐ</strong></p>
        </div>

        <!-- Checkout Button -->
        <div style="text-align: center;">
        <form action="xacNhanThanhToan.php" method="POST">
            <button type="submit" class="checkout-btn">Thanh Toán</button>
        </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
    <div class="container">
        <!-- Column 1 -->
        <div class="footer-column">
            <div class="footer-logo">
                <img src="img/FPTShop_logo.jpg" alt="FPT Logo">
            </div>
            <p class="company-info">CÔNG TY ĐIỆN TỬ FPT SỐ 1 VIỆT NAM</p>
            <ul class="contact-info">
                <li><i class="fa-solid fa-location-pin"></i> Tầng 2, Tòa nhà T10, Times City, Hà Nội</li>
                <li><i class="fa-solid fa-phone-flip"></i> 1900.63.69.36</li>
                <li><i class="fa-solid fa-envelope"></i> info@tocotocotea.com</li>
            </ul>
        </div>

        <!-- Column 2 -->
        <div class="footer-column">
            <h3>VỀ CHÚNG TÔI</h3>
            <ul>
                <li><a href="#">Giới thiệu về TocoToco</a></li>
                <li><a href="#">Nhượng quyền</a></li>
                <li><a href="#">Tin tức khuyến mại</a></li>
                <li><a href="#">Cửa hàng</a></li>
                <li><a href="#">Quy định chung</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-column">
            <h3>CHÍNH SÁCH</h3>
            <ul>
                <li><a href="#">Chính sách thành viên</a></li>
                <li><a href="#">Hình thức thanh toán</a></li>
                <li><a href="#">Vận chuyển giao nhận</a></li>
                <li><a href="#">Đổi trả và hoàn tiền</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <p>&copy; 2024 FPT Việt Nam. All Rights Reserved.</p>
    </div>
</footer>

</body>

</html>