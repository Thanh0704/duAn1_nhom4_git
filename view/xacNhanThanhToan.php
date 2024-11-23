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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #cccccc;
            color: #333333;
        }

        .btn-secondary:hover {
            background-color: #999999;
        }

        .result-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .result-container p {
            margin: 0 0 10px;
            font-size: 16px;
            color: #333333;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h1 class="form-title">Thông Tin Thanh Toán</h1>

            <!-- Tên chủ thẻ -->
            <div class="form-group">
                <label for="cardholderName">Tên chủ thẻ</label>
                <input type="text" id="cardholderName" name="cardholderName" required>
            </div>

            <!-- Số thẻ -->
            <div class="form-group">
                <label for="cardNumber">Số thẻ</label>
                <input type="text" id="cardNumber" name="cardNumber" maxlength="16" placeholder="XXXX XXXX XXXX XXXX"
                    required>
            </div>

            <!-- Ngày hết hạn -->
            <div class="form-group">
                <label for="expiryDate">Ngày hết hạn</label>
                <input type="month" id="expiryDate" name="expiryDate" required>
            </div>

            <!-- Mã CVV -->
            <div class="form-group">
                <label for="cvv">Mã CVV</label>
                <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="XXX" required>
            </div>

            <!-- Địa chỉ thanh toán -->
            <div class="form-group">
                <label for="billingAddress">Địa chỉ thanh toán</label>
                <textarea id="billingAddress" name="billingAddress" rows="3"
                    placeholder="Nhập địa chỉ của bạn"></textarea>
            </div>

            <!-- Nút hành động -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Xác nhận thông tin</button>

                <!-- Form Hủy -->
                <form action="sanphamct.php" method="post">
                    <button type="submit">Hủy</button>
                </form>
            </div>
        </form>

        <?php

        // Xử lý dữ liệu khi biểu mẫu được gửi
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cardholderName = isset($_POST['cardholderName']) ? htmlspecialchars($_POST['cardholderName']) : '';
            $cardNumber = isset($_POST['cardNumber']) ? htmlspecialchars($_POST['cardNumber']) : '';
            $expiryDate = isset($_POST['expiryDate']) ? htmlspecialchars($_POST['expiryDate']) : '';
            $cvv = isset($_POST['cvv']) ? htmlspecialchars($_POST['cvv']) : '';
            $billingAddress = isset($_POST['billingAddress']) ? htmlspecialchars($_POST['billingAddress']) : '';

            echo "<div class='result-container'>";
            echo "<h3>Thông tin thanh toán:</h3>";
            echo "<p><strong>Tên chủ thẻ:</strong> $cardholderName</p>";
            echo "<p><strong>Số thẻ:</strong> **** **** **** " . substr($cardNumber, -4) . "</p>";
            echo "<p><strong>Ngày hết hạn:</strong> $expiryDate</p>";
            echo "<p><strong>CVV:</strong> ***</p>";
            echo "<p><strong>Địa chỉ thanh toán:</strong> $billingAddress</p>";
            echo "</div>";
        }

        if(!isset($_POST['cardholderName']) || !isset($_POST['cardNumber']) ){
            echo('<p style="color: red;">Vui lòng nhập thông tin thanh toán!</p>');
        }
        else{echo( ' <form action="hoan-thanh-thanh-toan.php" method="get">
            <button type="submit" class="btn btn-primary">Xác nhận thanh toán</button>
        </form>');
            
        }
        ?> 
       
 
       
       

    </div>
    
</body>

</html>