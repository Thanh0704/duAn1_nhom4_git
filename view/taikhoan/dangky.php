<div class="box_title" style="font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">
    ĐĂNG KÝ TÀI KHOẢN
</div>
<div class="row mb dangky" style="display: flex; gap: 20px; max-width: 900px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
    <!-- Phần Form đăng ký bên trái -->
    <div class="box_content form_account boxleft" style="flex: 3; padding: 20px; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
        <form action="index.php?act=dangky" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <label style="font-size: 16px; font-weight: bold;">Email</label>
            <input type="email" name="email" placeholder="Nhập email" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">

            <label style="font-size: 16px; font-weight: bold;">Tên đăng nhập</label>
            <input type="text" name="user" placeholder="Nhập tên đăng nhập" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">

            <label style="font-size: 16px; font-weight: bold;">Mật khẩu</label>
            <input type="password" name="pass" placeholder="Nhập mật khẩu" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;">

            <div style="display: flex; gap: 10px;">
                <input type="submit" name="dangky" value="ĐĂNG KÝ" style="padding: 10px 20px; background: #28a745; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                <input type="reset" value="NHẬP LẠI" style="padding: 10px 20px; background: #dc3545; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
            </div>
        </form>
        <?php
        if (isset($thongbao) && $thongbao != "") {
            echo "<p style='color: red; margin-top: 10px;'>$thongbao</p>";
        }
        ?>
    </div>

    <!-- Phần Danh mục bên phải -->
    <div class="boxright" style="flex: 1; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
        <div class="mb">
            <div class="box_title" style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">DANH MỤC</div>
            <div class="box_content2 product_portfolio">
                <ul style="list-style: none; padding: 0;">
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&id=" . $id;
                        echo '<li style="margin-bottom: 10px;"><a href="' . $linkdm . '" style="text-decoration: none; color: #007bff;">' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
