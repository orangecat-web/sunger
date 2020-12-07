<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">


<!--title-->
<div class="title">
    <div class="bg-title"></div>
    <p>products</p>
    <h1>產品介紹</h1>
</div>

<main class="container py-5">
    <!--title-->
    <div class="pTitle pt-5 pb-4">
        <h2>
            產品介紹<span>products</span>
        </h2>
    </div>
    <section class="row">
        <!-- side nav -->
        <aside class="col-md-3">
            <dl class="prodNav">
                <dd><a href="products_list.php">全部商品</a></dd>
                <dd active><a href="products_list.php">結婚新人</a></dd>
                <dd><a href="products_list.php">禮服訂製 租賃</a></dd>
                <dd><a href="products_list.php">企業制服</a></dd>
                <dd><a href="products_list.php">男性精緻禮品</a></dd>
            </dl>
        </aside>
        <div class="col-md-9">
            <dl class="row mx-0 px-0 listImg">
                <!-- start 最多12筆 -->
                <dd class="col-md-3 col-sm-6">
                    <figure class="d-flex justify-content-center align-items-center">
                        <img src="upload/img-prod-list01.jpg">
                    </figure>
                    <p>商品名稱</p>
                </dd>
                <!-- end -->
                <dd class="col-md-3 col-sm-6">
                    <figure class="d-flex justify-content-center align-items-center">
                        <img src="upload/img-prod-list01.jpg">
                    </figure>
                    <p>商品名稱</p>
                </dd>
                <dd class="col-md-3 col-sm-6">
                    <figure class="d-flex justify-content-center align-items-center">
                        <img src="upload/img-prod-list01.jpg">
                    </figure>
                    <p>商品名稱</p>
                </dd>
                <dd class="col-md-3 col-sm-6">
                    <figure class="d-flex justify-content-center align-items-center">
                        <img src="upload/img-prod-list01.jpg">
                    </figure>
                    <p>商品名稱</p>
                </dd>
            </dl>
            <!--pagination-->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>

<?php include("footer.php")?>

</body>
</html>