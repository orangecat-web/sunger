<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">


<!--title-->
<div class="title">
    <div class="bg-title"></div>
    <p>showcase</p>
    <h1>作品集</h1>
</div>

<main class="container py-5">
    <!--title-->
    <div class="pTitle pt-5 pb-4">
        <h2>
            作品集<span>showcase</span>
        </h2>
    </div>
    <section>
        <dl class="row mx-0 px-0 listImg showCase">
            <!-- start 最多12筆 -->
            <dd class="col-lg-3 col-md-4 col-6">
                <figure onclick="location.href='case_detail.php'" class="d-flex justify-content-center align-items-center">
                    <img src="upload/img-prod-list01.jpg">
                </figure>
                <p>作品集相簿名稱</p>
            </dd>
            <!-- end -->
            <dd class="col-lg-3 col-md-4 col-6">
                <figure onclick="location.href='case_detail.php'" class="d-flex justify-content-center align-items-center">
                    <img src="upload/img-prod-list01.jpg">
                </figure>
                <p>作品集相簿名稱</p>
            </dd>
            <dd class="col-lg-3 col-md-4 col-6">
                <figure onclick="location.href='case_detail.php'" class="d-flex justify-content-center align-items-center">
                    <img src="upload/img-prod-list01.jpg">
                </figure>
                <p>作品集相簿名稱</p>
            </dd>
            <dd class="col-lg-3 col-md-4 col-6">
                <figure onclick="location.href='case_detail.php'" class="d-flex justify-content-center align-items-center">
                    <img src="upload/img-prod-list01.jpg">
                </figure>
                <p>作品集相簿名稱</p>
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
    </section>
</main>

<?php include("footer.php")?>

</body>
</html>