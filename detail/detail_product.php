<?php

require 'admin/root.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "SELECT manufactures.name as brand, products.* FROM products
JOIN manufactures on manufactures.id = products.manufacturer_id
WHERE products.id = '$id'";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);

$brand = $each['brand'];
?>
<div class="container">
    <div class="grid_full-width">
        <?php include './partials/menu.php' ?>
        <?php include './partials/breadcrumb.php' ?>
        <div class="grid_full-width content">
            <div class="content__brands">
                <?php include './partials/slider.php' ?>
                <div class="grid grid-cart_phone">
                    <div class="row">
                        <div class="col col-2">
                            <div class="cart_phone-img">
                                <img src="admin/products/server/uploads/<?php echo $each['photo'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col col-2">
                            <div class="cart_phone-about">
                                <h2><?php echo $each['name'] ?></h2>
                                <span><?php echo $each['slug'] ?></span>
                                <h4>Giá: <span><?php echo currency_format($each['price']) ?></span></h4>
                                <?php if(empty($_SESSION['id'])){ ?>
                                    <a onclick="return Onc()" href="login.php" class="cart_phone-btn">Mua ngay</a>
                                <?php } else { ?>
                                    <a class="cart_phone-btn" href="add_to_cart.php?id=<?php echo $each['id'] ?>">Mua ngay</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cart_phone">
                    <div class="row">
                        <div class="cart_phone-about">
                            <h3>Thông tin sản phẩm:</h3>
                            <p class="cart_phone-descriptions"><?php echo $each['descriptions'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './partials/slidebar.php' ?>
        </div>
        <?php include './detail/comments.php' ?>
        <div class="footer">
            <div class="grid_full-width">
                <div class="grid">
                    <div class="row">
                        <div class="col col-4 col-mobi">
                            <div class="logo logo-bottom ml-mobi">
                                <img src="./public/img/logo1.png" alt="" class="img">
                            </div>
                        
                        </div>
                        <div class="col col-4 col-mobi">
                            <div class="footer__about">
                                <h3>Địa chỉ</h3>
                            </div>
                            <div class="footer__text">
                                <p>
                                    Đống Đa - TP.Huế
                                </p>
                                <p>
                                    Đống Đa - TP.Huế
                                </p>
                            </div>
                        </div>
                        <div class="col col-4 col-mobi">
                            <div class="footer__about">
                                <h3>Dịch vụ</h3>
                            </div>
                            <div class="footer__text">
                                <p>
                                    Bảo hành rơi vỡ, ngấm nước Care Diamond
                                </p>
                                <p>
                                    Bảo hành Care X60 rơi vỡ ngấm nước vẫn Đổi
                                    mới
                                </p>
                            </div>
                        </div>
                        <div class="col col-4 col-mobi">
                            <div class="footer__about">
                                <h3>Liên hệ</h3>
                            </div>
                            <div class="footer__text">
                               <p>Phone Sale: <a href="tel:+00 151515">(+84) 0999 999 9999</a></p>
                                <p>Email: <a href="mailto:hieunhantong@gmail.com">hieunhantong@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>