<!-- Masthead-->
<!-- <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4 page-title">
                        <h3 class="text-white">Welcome to <php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#menu">Order Now</a>

                    </div>
                    
                </div>
            </div>
        </header> -->
<link href="css/main.css" rel="stylesheet" />
<section class="home" id="home">
    <div class="container">
        <div class="home-wrapper d-grid">
            <div class="col-left">
                <h3>Selamat Datang di</h3>
                <h1>Restoran <br> Istana Rasa</h1>

                <!-- <p>Vestibulum sed augue ac lorem rutrum congue. Donec cursus mollis sapien, non vulputate odio
                            congue id. Sed mattis, tortor nec facilisis laoreet, mauris magna finibus nisl, eu pulvinar
                            erat libero in turpis. </p> -->
                <a href="#menu" class="btn">Pesan</a>

            </div>
            <div class="col-right">
                <img data-tilt src="./assets/img/hero-img.png" alt="Home image" class="img-fluid">
            </div>
        </div>
    </div>

</section>

<div class="container">
    <section class="page-section menu" id="menu">
        <div id="menu-field" class="card-deck">
            <?php
            include 'admin/db_connect.php';
            $qry = $conn->query("SELECT * FROM  product_list order by rand() ");
            while ($row = $qry->fetch_assoc()):
                ?>
                <?php "<br>" ?>
                <div class="col-lg-3" style="margin-bottom: 20px;">
                    <div class="card menu-item ">
                        <img src="assets/img/<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $row['name'] ?>
                            </h5>
                            <p class="card-text truncate">
                                <?php echo $row['description'] ?>
                            </p>
                            <h6 class="card-title">Harga: Rp
                                <?php echo $row['price'] ?>
                            </h6>
                            <div class="text-center">
                                <button class="btn btn-sm btn-outline-primary view_prod btn-block" data-id=<?php echo $row['id'] ?>><i class="fa fa-eye"></i> Lihat</button>

                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
</div>

<script>

    $('.view_prod').click(function () {
        uni_modal_right('Product', 'view_prod.php?id=' + $(this).attr('data-id'))
    })
</script>