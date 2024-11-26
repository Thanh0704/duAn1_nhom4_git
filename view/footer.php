<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Redesign</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* CSS Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

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
        .footer-logo img{
            border-radius: 100px;
        }
    </style>
</head>
<body>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <!-- Column 1 -->
        <div class="footer-column">
            <div class="footer-logo">
                <img src="uploads/logoo.jpg" alt="FPT Logo">
            </div>
            <p class="company-info"> PHỤ KIỆN ĐIỆN THOẠI GPHONE</p>
            <ul class="contact-info">
                <li><i class="fa-solid fa-location-pin"></i> NHÓM 4, WD19319 - Dự án 1.TKTW</li>
                <li><i class="fa-solid fa-phone-flip"></i> 0387.285.165</li>
                <li><i class="fa-solid fa-envelope"></i> lexuanlam2005@gmail.com</li>
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
        <p>&copy; 2024 Du_An_1 Việt Nam. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
