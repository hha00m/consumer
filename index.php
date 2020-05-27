<!doctype html>
<html lang="en">
<head>
  <!-- Title -->
  <title>شركة التوصيل</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.css">

  <!-- <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css"> -->
<style>

body,body * {
 font-family: 'Cairo';
 text-align: right;
}


</style>
</head>

<body>
 <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/hs.core.js"></script>


<!-- JS Implementing Plugins -->
<script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
<!-- <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script> -->
<script src="assets/vendor/typed.js/lib/typed.min.js"></script>

<!-- JS Front -->
<!-- <script src="assets/js/components/hs.fancybox.js"></script> -->
<script src="assets/js/components/hs.svg-injector.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(window).on('load', function () {
    // initialization of svg injector module
    $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
  });

  // $(document).on('ready', function () {
  //   // initialization of popups
  //   $.HSCore.components.HSFancyBox.init('.js-fancybox');

  //   // initialization of text animation (typing)
  //   var typed = new Typed(".u-text-animation.u-text-animation--typing", {
  //     strings: ["more professional.", "perfect in every way.", "astonishing."],
  //     typeSpeed: 60,
  //     loop: true,
  //     backSpeed: 25,
  //     backDelay: 1500
  //   });
  // });
</script>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--abs-top-md">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="bg-white js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <!-- White Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-default" href="index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
              <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
              <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
              <path class="fill-white" d="S"/>
            </svg>
            <span class="u-header__navbar-brand-text"> السكة </span>
          </a>
          <!-- End White Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link " href="javascript:;" aria-haspopup="true" aria-expanded="false">الفريق</a>

              </li>
              <!-- End Home -->

              <!-- Pages -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">المبيعات</a>
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">البرامج</a>
              </li>
              <!-- End Blog -->

              <!-- Shop -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="440px"
                  data-position="right">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link " href="javascript:;" aria-haspopup="true" aria-expanded="false">اتصل بنا</a>
              </li>
              <!-- End Shop -->

              <!-- Demos -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="900px"
                  data-position="right">
                <a id="demosMegaMenu" class="nav-link u-header__nav-link " href="javascript:;" aria-haspopup="true" aria-expanded="false">تجربة</a>
              </li>
              <!-- End Demos -->

              <!-- Docs -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="260px"
                  data-position="right">
                <a id="docsMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false">دليل الاستخدام</a>
             </li>
              <!-- End Docs -->

              <!-- Search -->
              <li class="nav-item u-header__nav-last-item">
                <a id="searchSlideDownInvoker" class="btn btn-xs btn-icon btn-text-secondary u-search-slide-down-trigger" href="javascript:;" role="button"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-controls="searchSlideDown"
                   data-unfold-type="css-animation"
                   data-unfold-hide-on-scroll="false"
                   data-unfold-target="#searchSlideDown"
                   data-unfold-animation-in="active"
                   data-unfold-animation-out="fadeOutUp"
                   data-unfold-delay="0"
                   data-unfold-duration="800"
                   data-unfold-overlay='{
                    "className": "u-search-slide-down-bg-overlay",
                    "background": "rgba(55, 125, 255, .1)",
                    "animationSpeed": 400
                   }'>
                  <span class="fas fa-search btn-icon__inner u-search-slide-down-trigger__icon"></span>
                </a>
              </li>
              <!-- End Search -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

<!-- Hero Section -->
<div class="d-lg-flex position-relative">
  <div class="container d-lg-flex align-items-lg-center space-top-2 space-top-md-5 space-lg-0 min-height-lg-100vh">
    <!-- Content -->
    <div class="row w-100">
      <div class="col-lg-5">
        <h1 class="display-4 font-size-md-down-5 mb-3"> خدماتنا للتوصيل</h1>
        <p>
          نقدم لكم خدمتنا على مدار الساعة
          <span class="text-primary">
          </span>
          <br>
          نحن نسعى جاهدين لتوفير جميع الطلبات لكم. يمكن تتبع طلبك المرسل معنا من خلال ادخل رقم التتبع لتتعرف على تفاصيل طلبك
        </p>

        <div class="d-flex align-items-center flex-wrap">
          <a class="btn btn-soft-primary btn-wide transition-3d-hover" href="#trackiing">متابعة طلبك</a>

          
        </div>
      </div>
    </div>
    <!-- End Content -->

    <!-- SVG Background -->
    <div id="SVGMainHero" class="col-lg-9 col-xl-7 svg-preloader d-none d-lg-block position-absolute top-0 right-0 pr-0" style="margin-top: 105.6px;">
      <figure class="ie-main-hero">
        <img class="js-svg-injector" src="assets/svg/illustrations/main-hero.svg" alt="Image Description"
             data-img-paths='[
               {"targetId": "#SVGMainHeroImg1", "newPath": "assets/img2/750x750/img2.jpg"}
             ]'
             data-parent="#SVGMainHero">
      </figure>
    </div>
    <!-- End SVG Background -->
  </div>
</div>
<!-- End Hero Section -->

<!-- Hero Section -->
<div id="SVGfiles" class="svg-preloader bg-light position-relative z-index-2">
  <div class="container space-2">
    <!-- Title -->
    <div class="mb-7">
      <span class="d-block text-secondary">معنا يمكن تتبع جميع طلابتك على مدار 24 ساه باليوم</span>
      <h1 class="text-primary font-weight-semi-bold">كل معلومات الطلبية ستكون متوفرة لك</h1>
    </div>
    <!-- End Title -->

    <!-- Search Jobs Form -->
    <form class="row mb-2">
      <div class="col-lg-5 mb-4 mb-lg-0">
        <!-- Input -->
        <label class="d-block">
          <span class="h6 d-block text-dark font-weight-semi-bold mb-0">ادخل رقم التتبع الخاص بالطلبية (رقم الوصل)</span>
        </label>
        <div class="js-focus-state" id="trackiing">
          <div class="input-group">
            <input type="text" id="order_no" class="form-control" placeholder="رقم الوصل" aria-label="رقم الوصل" aria-describedby="keywordInputAddon">
            <div class="input-group-append">
              <span class="input-group-text">
                <span class="fas fa-search" id="keywordInputAddon"></span>
              </span>
            </div>
          </div>
        </div>
        <!-- End Input -->
      </div>
      <div class="col-lg-2 align-self-lg-end">
        <button type="button" onclick="OrderTracking()" class="btn btn-block btn-primary transition-3d-hover">بحث</button>
      </div>
      <!-- End Checkbox -->
    </form>
    <!-- End Search Jobs Form -->
  </div>

  <!-- SVG Icon -->
  <div class="d-none d-lg-block w-100 position-absolute bottom-0 right-0 z-index-n1 max-width-27">
    <figure class="ie-files">
      <img class="js-svg-injector" src="assets/svg/illustrations/files.svg" alt="Image Description"
           data-parent="#SVGfiles">
    </figure>
  </div>
  <!-- End SVG Icon -->
</div>
<!-- End Hero Section -->

   <div class="col-md-12">
   <div class="col-md-6 offset-md-3">
       <div id="" class="card">
         <table id="orderTimeline" class="table">

         </table>
       </div>
   </div>
   </div>

<!-- ========== FOOTER ========== -->
<div class="col-md-12 bg-dark">
<footer class="container text-center space-2">
  <!-- Logo -->
  <a class="d-inline-flex align-items-center mb-3" href="index.html" aria-label="Front">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
      <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
      <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
      <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
      <path class="fill-white" d="M19.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4"/>
    </svg>
    <span class="brand brand-primary">السكة</span>
  </a>
  <!-- End Logo -->

  <!-- List -->
  <ul class="list-inline list-group-flush list-group-borderless">
    <li class="list-inline-item px-2">
      <a class="list-group-item-action" href="">حول الشركة</a>
    </li>
    <li class="list-inline-item px-2">
      <a class="list-group-item-action" href="">خدماتنا</a>
    </li>
    <li class="list-inline-item px-2">
      <a class="list-group-item-action" href="">الوظائف</a>
    </li>
    <li class="list-inline-item px-2">
      <a class="list-group-item-action" href="">الاسعار</a>
    </li>
  </ul>
  <!-- End List -->
  <!-- Copyright -->
  <p class="small text-muted mb-0">© السكة. 2019 جميع الحقوق محفوظة.</p>
  <!-- End Copyright -->
</footer>
</div>
<!-- ========== END FOOTER ========== -->
</body>
<script>
function OrderTracking(){
   $.ajax({
     url:"script/_getOrderTrack.php",
     data:{id: $("#order_no").val()},
     beforeSend:function(){

     },
     success:function(res){
       $("#orderTimeline").html('');
       console.log(res);
     if(res.success == 1){
       $.each(res.data,function(){
         if(this.order_status_id == 1){
             icon = "text-primary";
             color = "primary";
         }else if(this.order_status_id == 2){
            icon = "text-info";
            color = "info";
         }else if(this.order_status_id == 3){
            icon = "text-accent";
            color = "success";
         }else if(this.order_status_id == 4){
            icon = "text-success";
            color = "success";
         }else if(this.order_status_id == 5){
            icon = "text-warning";
            color = "warning";
         }else if(this.order_status_id == 6){
            icon = "text-danger";
            color = "danger";
         }else if(this.order_status_id == 7){
            icon = "flaticon-clock-2 text-warning";
            color = "warning";
         }else{
            icon = "flaticon-exclamation-1 text-info";
            color = "info";
         }
         note = this.note;
         if(this.note == "" || this.note==null){
           note = "";
         }
         $("#orderTimeline").append(
                    '<tr class="text-'+color+'">'+
                            '<td class="kt-timeline__item-section">'+
                                '<div class="kt-timeline__item-section-border">'+
                                    '<div class="kt-timeline__item-section-icon">'+
                                        '<i class="'+ icon +'"></i>'+
                                    '</div>'+
                                '</div>'+
                               '<span class="kt-timeline__item-datetime">'+this.date+'</span>'+
                            '</td>'+
                            '<td class="kt-timeline__item-info">'+
                                this.status+
                            '</td>'+
                            '<td class="kt-timeline__item-info">'+
                                note+
                            '</td>'+
                        '</tr>'
            );
        });
       }else{
         $("#orderTimeline").append("<h2>لا يوجد معلومات</h2>")
       }
     },
     error:function(e){
       console.log(e);
     }
   });
}

</script>
</html>