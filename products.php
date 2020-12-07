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
        <div class="col-sm-6 products">
            <figure onclick="location.href='products_list.php'">
                <figcaption class="d-flex justify-content-center align-items-center">
                    <p>禮服訂製 租賃</p>
                </figcaption>
                <img src="upload/img-prod-item01.jpg">
            </figure>
        </div>
        <div class="col-sm-6 products">
            <figure onclick="location.href='products_list.php'">
                <figcaption class="d-flex justify-content-center align-items-center">
                    <p>結婚新人</p>
                </figcaption>
                <img src="upload/img-prod-item02.jpg">
            </figure>
        </div>
        <div class="col-sm-6 products">
            <figure onclick="location.href='products_list.php'">
                <figcaption class="d-flex justify-content-center align-items-center">
                    <p>男性精緻禮品</p>
                </figcaption>
                <img src="upload/img-prod-item03.jpg">
            </figure>
        </div>
        <div class="col-sm-6 products">
            <figure onclick="location.href='products_list.php'">
                <figcaption class="d-flex justify-content-center align-items-center">
                    <p>企業制服</p>
                </figcaption>
                <img src="upload/img-prod-item04.jpg">
            </figure>
        </div>
    </section>
</main>

<?php include("footer.php")?>

</body>
</html>