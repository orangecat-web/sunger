<?php include("header.php")?>
<link rel="stylesheet"  href="css/index.css">
<link rel="stylesheet"  href="css/d-index.css">

<!-- slide -->
<div id="slides">
    <div class="tags">
        <p>
            <span>聯絡我們 <i class="fas fa-angle-double-down"></i></span>
        </p>
    </div>
    <div class="slides-container">

        <div>
            <img src="upload/img-slide01.jpg" alt="">
        </div>
        <div>
            <img src="upload/img-slide02.jpg" alt="">
        </div>
    </div>

    <nav class="slides-navigation">
        <a href="#" class="next"><i class="fas fa-angle-right"></i></a>
        <a href="#" class="prev"><i class="fas fa-angle-left"></i></a>
    </nav>
</div>
<!-- slide end -->

<!-- main -->
<main class="">
    <!-- contact -->
    <article class="contact">
        <div class="title">
            <div class="bg-title"></div>
            <p>contact us</p>
            <h2>聯絡我們</h2>
        </div>
        <section class="container py-5">
            <div class="row d-md-flex justify-content-between">
                <!-- form -->
                <div class="col-lg-6 col-md-7 form">
                    <div class="title-form">
                        <h3>聯絡表單<span> / contact form</span></h3>
                    </div>
                    <form action="">
                        <dl class="form">
                            <dd class="d-sm-flex justify-content-start align-items-center">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">您的姓名<sup>*</sup></label>
                                <input type="text" name="">
                            </dd>
                            <dd class="d-sm-flex justify-content-start align-items-center">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">聯絡電話</label>
                                <input type="text" name="">
                            </dd>
                            <dd class="d-sm-flex justify-content-start align-items-center">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">手機號碼<sup>*</sup></label>
                                <input type="text" name="">
                            </dd>
                            <dd class="d-sm-flex justify-content-start align-items-center">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">電子信箱<sup>*</sup></label>
                                <input type="text" name="">
                            </dd>
                            <dd class="d-sm-flex justify-content-start align-items-center">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">聯絡地址</label>
                                <input type="text" name="">
                            </dd>
                            <dd class="d-sm-flex justify-content-start align-items-start">
                                <label class="col-lg-3 col-md-4 col-sm-3 px-sm-3 px-0">內　　容<sup>*</sup></label>
                                <textarea name=""></textarea>
                            </dd>
                            <dd class="d-flex justify-content-md-end justify-content-center align-items-center">
                                <button type="reset">重新填寫</button>
                                <button type="submit">確認送出</button>
                            </dd>
                        </dl>
                    </form>
                </div>
                <!-- contact info -->
                <div class="col-md-5 contact-info">
                    <dl class="contact-info">
                        <dt>聯絡資訊<span> / information</span></dt>
                        <dd><span>電　　話：</span>02-23883565</dd>
                        <dd><span>營業時間：</span>AM12：00～PM 10：00</dd>
                        <dd><span>電子信箱：</span>joann0427@yahoo.com.tw</dd>
                        <dd><span>地　　址：</span>台北市萬華區漢口街2段54號之33</dd>
                    </dl>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.6581347336505!2d121.50360381500644!3d25.045673283966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a90ed4ad423f%3A0x1ffe996368cd755f!2zMTA45Y-w5YyX5biC6JCs6I-v5Y2A5ryi5Y-j6KGX5LqM5q61NTTomZ8!5e0!3m2!1szh-TW!2stw!4v1552640170567" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php include("footer.php")?>
<!-- slide -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/fullscreen-slide/superslides.css">
<script src="js/fullscreen-slide/jquery.easing.1.3.js"></script>
<script src="js/fullscreen-slide/jquery.animate-enhanced.min.js"></script>
<script type="text/javascript" src="js/fullscreen-slide/jquery.superslides.js"></script>
<script>
    $('#slides').superslides({
        animation: 'fade',
        hashchange: true,
        play: 5000,
    });
</script>
</body>
</html>