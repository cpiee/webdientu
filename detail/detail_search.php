<div class="container">
    <div class="grid_full-width">
        <?php include './partials/menu.php' ?>
        <div class="grid_full-width content">
            <div class="content__brands">
                <?php include './partials/slider.php' ?>
                <div class="grid">
                    <div class="brands__heading">
                        <h1>Kết quả tìm kiếm: 
                            <?php if($search_products != '###'): ?>
                                <?php echo $search_products ?> 
                            <?php endif ?>
                            ??
                        </h1>
                    </div>
                </div>
                <div class="grid">
                    <div class="row row-category">
                        <?php if (!empty(mysqli_fetch_array($result_mobi))) : ?>
                            <?php foreach ($result_mobi as $each) : ?>
                                <div class="col col-3 col-2-mt mt-10">
                                    <div class="category">
                                        <a href="view_detail.php?id=<?php echo $each['id'] ?>" class="category_link">
                                            <div class="category__img">
                                                <img src="admin/products/server/uploads/<?php echo $each['photo'] ?>" alt="">
                                            </div>
                                            <h4 class="category__name"><?php echo $each['name'] ?></h4>
                                            <div class="category__price">
                                                <p> Giá bán:</p>
                                                <span class="category__money">
                                                    <?php echo     currency_format($each['price']) ?>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="category-btn">
                                            <ul class="category-cart">
                                                <li>
                                                    <a href="view_detail.php?id=<?php echo $each['id'] ?>">
                                                        Mua ngay
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php if (!empty($_SESSION['id'])) { ?>

                                                        <a onclick="return Suc()" href="add_to_cart.php?id=<?php echo $each['id'] ?>">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    <?php } ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                        <?php if (!empty(mysqli_fetch_array($result_laptop))) : ?>
                            <?php foreach ($result_laptop as $each) : ?>
                                <div class="col col-3 col-2-mt mt-10">
                                    <div class="category">
                                        <a href="view_detail.php?id=<?php echo $each['id'] ?>" class="category_link">
                                            <div class="category__img">
                                                <img src="admin/product_laptop/server/uploads/<?php echo $each['photo'] ?>" alt="">
                                            </div>
                                            <h4 class="category__name"><?php echo $each['name'] ?></h4>
                                            <div class="category__price">
                                                <p> Giá bán:</p>
                                                <span class="category__money">
                                                    <?php echo currency_format($each['price']) ?>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="category-btn">
                                            <ul class="category-cart">
                                                <li>
                                                    <a href="view_detail.php?lap_id=<?php echo $each['id'] ?>">
                                                        Mua ngay
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php if (!empty($_SESSION['id'])) { ?>
                                                        <a onclick="return Suc()" href="add_to_cart_lp.php?lap_id=<?php echo $each['id'] ?>">
                                                            Thêm vào giỏ hàng
                                                        </a>
                                                    <?php } ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php include './partials/slidebar.php' ?>
        </div>
        <div class="footer">
            <div class="grid_full-width">
                <div class="grid">
                    <div class="row">
                        <div class="col col-4 col-mobi">
                            <div class="logo logo-bottom ml-mobi">
                                <img src="./public/img/logo2.png" alt="" class="img">
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