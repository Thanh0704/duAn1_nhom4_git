<main class="catalog mb" style="display: flex; gap: 20px; max-width: 1200px; margin: 20px auto;">
    <!-- Phần hiển thị sản phẩm bên trái -->
    <div class="boxleft" style="flex: 3; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
        <div class="mb">
            <div class="box_title" style="font-size: 24px; font-weight: bold; margin-bottom: 20px; text-align: center;">
                Sản Phẩm
            </div>
            <div class="box_content items" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">
                <?php
                $i = 0;
                foreach ($dssp as $dssp) {
                    extract($dssp);
                    $linksp = "index.php?act=sanphamct&id=" . $id;
                    $hinh = $img_path . $img;
                    echo '<div class="box_items" style="border: 1px solid #ddd; border-radius: 8px; padding: 10px; background: #f9f9f9; text-align: center; transition: transform 0.3s;">
                            <div class="box_items_img" style="margin-bottom: 10px;">
                                <a class="item_name" href="' . $linksp . '" style="text-decoration: none; color: #333;">
                                    <img src="' . $hinh . '" alt="" style="width: 100%; height: auto; border-radius: 8px;">
                                </a>
                            </div>
                            <p class="price" style="font-size: 16px; font-weight: bold; color: #e74c3c; margin-bottom: 10px;">' . $price . ' VNĐ</p>
                            <a class="item_name" href="' . $linksp . '" style="text-decoration: none; color: #007bff; font-size: 14px; font-weight: bold;">' . $name . '</a>
                            <div class="add" style="margin-top: 10px; padding: 5px 10px; background: #28a745; color: white; border-radius: 5px; font-size: 14px; cursor: pointer;">ADD TO CART</div>
                        </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Phần danh mục bên phải -->
    <?php include "view/boxright.php"; ?>
</main>
