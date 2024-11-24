<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án 1 " Nhóm 4 "</title>
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    /* Cấu hình font và thiết lập mặc định */
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* HEADER */
    header {
      background: linear-gradient(135deg, #ff5f6d, #ffc371); /* Hiệu ứng gradient */
      color: white;
      padding: 15px 0;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 28px;
      font-weight: 700;
      margin: 0;
    }

    /* MENU */
    .menu {
      background-color: #fff;
      border-top: 3px solid #ff5f6d;
      border-bottom: 3px solid #ffc371;
      padding: 10px 0;
    }

    .menu ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center; /* Canh giữa */
      align-items: center;
      gap: 20px;
    }

    .menu ul li {
      position: relative;
    }

    .menu a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      font-size: 18px;
      padding: 10px 15px;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .menu a:hover {
      background-color: #ffc371;
      color: #fff;
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .logo img{
      max-width: 100px;
      max-height: 100px;
      border-radius: 100px;
      /* align-items: center; */
      margin: 0 auto;
    }
    /* Đa màn hình */
    @media (max-width: 768px) {
      header h1 {
        font-size: 20px;
      }

      .menu ul {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="boxcenter">
    <!-- HEADER -->
    <header>
      <div class="row mb header">
        <div class="logo">
        <img src="uploads/logoo.jpg" alt="">
        </div>
        <h1>Website bán phụ kiện điện thoại GPhone</h1>
      </div>
      <div class="row mb menu">
        <ul>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php">Trang chủ</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=gioithieu">Giới thiệu</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=lienhe">Liên hệ</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=gopy">Góp ý</a>
          </li>
          <li class="dropdown">
            <a class="dropdownbtn" href="index.php?act=hoidap">Hỏi đáp</a>
          </li>
        </ul>
      </div>
    </header>
    <!-- END HEADER -->
  </div>
</body>
</html>