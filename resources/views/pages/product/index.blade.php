
<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Axcount</title>

    <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <!-- slider -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

</head><!-- head -->

<style>
    .active1 {
        color: #007299;
        font-weight: bold;
    }

    .bg-content1 {
        background: linear-gradient(0deg, rgba(0, 114, 153, 0.03), rgba(0, 114, 153, 0.03));
    }

    .pic-index1 {
        width: 100%;
        max-height: 525px;
        border-top-left-radius: 50%;
    }

    .detail-content1 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0px 30px 0px;
    }

    .detail-content1>h1 {
        font-weight: 700;
        line-height: 84px;
        color: #172048;
    }

    .detail-content1>h2 {
        font-weight: 700;
        line-height: 76px;
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .detail-content1>span {
        font-weight: 500;
        color: #C4C4C4;
        line-height: 22px;
    }

    .btn-content1 {
        display: flex;
        justify-content: space-between;
        margin: 30px 0px 30px 0px;
    }

    .btn-register-index {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        border: 1px solid #007299;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
        display: flex;
        justify-content: start;
    }

    .btn-register-index:hover {
        color: #007299;
        background: #ffffff;
        border: 1px solid #007299;
        transition: 0.5s;
    }

    .btn-demo {
        color: #007299;
        border: 1px solid #007299;
        background: #ffffff;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
        display: flex;
        justify-content: end;
    }

    .btn-demo:hover {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        transition: 0.5s;
    }

    .count-head {
        display: flex;
        justify-content: space-between;
        margin: 50px 0px 30px 0px;
    }

    .count-display1 {
        display: flex;
        align-items: center;
        justify-content: start;
    }

    .count-display2 {
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .detail-about-bottom {
        display: flex;
        flex-direction: column;
        text-align: left;
        line-height: 40px;
        margin-top: 40px;
    }

    .header-content2 {
        text-align: center;
    }

    .header-content2>h1 {
        font-weight: 700;
        line-height: 72px;
        color: #172048;
    }

    .function-detail1 {
        background: #F4FEFF;
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .function-detail2 {
        background: linear-gradient(180deg, rgba(78, 214, 218, 0.57) 0%, #72DBFC 100%);
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .function-detail1>h5 {
        margin: 40px 0px 60px 0px;
    }

    .bg-img {
        margin: 60px 0px 20px 0px;
        background-color: #ffffff;
        border-radius: 50%;
        padding: 15px;
    }

    .function-detail2>h5 {
        margin: 40px 0px 60px 0px;
    }

    .head-midcontent1 {
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .img-midcontent1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-midcontent1>img {
        width: 100%;
        border-radius: 15px;
        margin: 20px 0px;
    }

    .detail-midcontent1 {
        display: flex;
        flex-direction: column;
        justify-content: start;
        padding: 40px 40px;
        line-height: 35px;
    }

    .btn-midcontent1 {
        margin-top: 20px;
    }

    .btn-register-midcontent1 {
        color: #007299;
        border: 1px solid #007299;
        background: #ffffff;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
    }

    .btn-register-midcontent1:hover {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        transition: 0.5s;
    }

    .bg-midcontent2 {
        background-image: url('./assets/img/bg-1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .head-midcontent2 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .head-midcontent2>h5 {
        line-height: 65px;
    }

    .detail-midcontent2 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 0px;
        line-height: 35px;
    }

    .detail-midcontent2>h2 {
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .carousel-indicators [data-bs-target] {
        background-color: #067A9E;
    }

    .carousel-item>img {
        border-radius: 15px;
    }

    .bg-midcontent3 {
        background-image: url('./assets/img/bg-1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .head-midcontent3 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .head-midcontent3>h5 {
        line-height: 65px;
    }

    .detail-midcontent3 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 0px;
        line-height: 35px;
    }

    .detail-midcontent3>h2 {
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .bg-pricecontent {
        background-image: url('./assets/img/bg-1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .head-midcontent4 {
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .img-midcontent4 {
        margin-top: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-midcontent4>img {
        width: 100%;
        border-radius: 15px;
        margin: 20px 0px;
    }

    .detail-midcontent4 {
        margin-top: 60px;
        display: flex;
        flex-direction: column;
        justify-content: start;
        padding: 60px 30px;
        line-height: 35px;
    }

    .mid-content7 {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .mid-content7>img {
        width: 100%
    }

    .bg-content8 {
        background-image: url('./assets/img/bg-midcontent8.png');
        background-repeat: no-repeat;
        background-size: cover;
        border-top-left-radius: 70px;
        border-bottom-right-radius: 70px;
    }

    .accordion {
        background-color: #FFFFFF;
        padding: 15px 30px;
        border-radius: 50px;
    }

    .accordion-button:focus {
        z-index: 3;
        border-color: #ffffff;
        outline: 0;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        color: #007299;
        background-color: #ffffff;
        box-shadow: inset 0 calc(var(--bs-accordion-border-width) * -1) 0 var(--bs-accordion-border-color);
    }

    .mid-content9 {
        background: #FFFFFF;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 15px;
        margin: 30px 0px;
        padding: 35px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .mid-content9>h1 {
        background: linear-gradient(90.29deg, #172048 0.21%, #005C7B 99.79%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
        line-height: 60px;
    }

    .btn-register-index {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        border: 1px solid #007299;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
        margin-right: 5px;
    }

    .btn-register-index:hover {
        color: #007299;
        background: #ffffff;
        border: 1px solid #007299;
        transition: 0.5s;
    }

    .btn-demo {
        color: #007299;
        border: 1px solid #007299;
        background: #ffffff;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
        margin-left: 5px;
    }

    .btn-demo:hover {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        transition: 0.5s;
    }

    @media (max-width: 880px) {

        .detail-content1,
        .btn-content1,
        .count-head {
            padding-left: 80px;
            padding-right: 80px;
        }
    }

    @media (max-width: 450px) {

        .detail-content1,
        .btn-content1,
        .count-head {
            padding-left: 10px;
            padding-right: 10px;
        }

        .mid-content9 {
            background: #FFFFFF;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 15px;
            margin: 30px 0px;
            padding: 35px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    }
</style>

<body>

    <!-- nav -->
    <style>
    .bg-navbar {
        position: sticky;
        top: 0;
        width: 100%;
        z-index: 99;
        background: linear-gradient(0deg, rgba(0, 114, 153, 0.03), rgba(0, 114, 153, 0.03));
    }

    .navbar-toggler {
        padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
        font-size: var(--bs-navbar-toggler-font-size);
        line-height: 1;
        color: var(--bs-navbar-color);
        background-color: transparent;
        border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
        border-radius: var(--bs-navbar-toggler-border-radius);
        transition: var(--bs-navbar-toggler-transition);
        position: absolute;
        top: 10px;
        left: 10px
    }

    .navbar-brand {
        margin: 0px 20px 0px 60px;
    }

    .nav-link {
        border-bottom: 2px solid transparent;
    }

    .nav-link:hover {
        border-bottom: 2px solid #007299;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 20px;
        padding-left: 20px;
    }

    .right-navitem {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .right-navitem>li {
        list-style: none;
    }

    .right-navitem>a {
        margin-right: 10px;
        margin-left: 10px;
    }

    .btn-register {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        border: 1px solid #007299;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
    }

    .btn-register:hover {
        color: #007299;
        background: #ffffff;
        border: 1px solid #007299;
        transition: 0.5s;
    }

    .btn-login {
        color: #007299;
        border: 1px solid #007299;
        background: #ffffff;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
    }

    .btn-login:hover {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        transition: 0.5s;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
    }

    .cookies-box {
        position: fixed;
        bottom: 20px;
        width: 100%;
        background-color: #56E0E0;
        padding: 20px 0px 10px 0px;
        z-index: 99;
        opacity: 0;
        transform: translateY(100%);
        transition: all 500ms ease-out;
    }

    .cookies-box.show {
        opacity: 1;
        transform: translateY(0%);
        transition-delay: 1000ms;
    }

    .cookies-logo {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cookies-btn {
        display: flex;
        align-items: center;
        justify-content: start;
        margin-top: 15px;
    }

    .cookies-btn-option {
        color: #007299;
        border: 1px solid #007299;
        background: #ffffff;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
    }

    .cookies-btn-accept {
        color: #ffffff;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        border: 1px solid #007299;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 10px 20px;
        margin-left: 10px;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: var(--bs-modal-padding);
        font-size: 14px;
    }

    @media (max-width: 1080px) {
        .navbar-brand {
            margin: 0px 20px 0px 20px;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 10px;
            padding-left: 10px;
        }
    }

    @media (max-width: 880px) {
        .navbar-brand {
            margin: 0px 20px 0px 45px;
        }

        .cookies-logo {
            display: none;
        }
    }

    @media (max-width: 450px) {
        .right-navitem {
            position: absolute;
            right: 5px;
            top: 20px;
        }

        .btn-register {
            color: #ffffff;
            background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
            border: 1px solid #007299;
            box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
            border-radius: 39px;
            padding: 5px 10px;
            font-size: 10px;
        }

        .btn-login {
            color: #007299;
            border: 1px solid #007299;
            background: #ffffff;
            box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
            border-radius: 39px;
            padding: 5px 10px;
            font-size: 10px;
        }

        .dropdown-menu {
            max-height: 140px;
            overflow-y: scroll;
        }

        .cookies-detail {
            font-size: 12px;
        }

        .cookies-btn {
        display: flex;
        align-items: center;
        justify-content: start;
        margin-top: 5px;
        font-size: 12px;
    }
    }
</style>

<nav class="navbar navbar-expand-lg bg-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./assets/img/logo.png" alt="" width="100px" height="65px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenus" aria-controls="navmenus" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navmenus">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active1" aria-current="page" href="index.php">ผลิตภัณฑ์</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ฟังก์ชั่น
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="entrepreneurFunc.php"><i class="fas text-info fa-user-tie "></i>&nbsp; ฟังก์ชั่นผู้ประกอบการ</a></li>
                        <li><a class="dropdown-item" href="accountingFunc.php"><i class="fas text-info fa-calculator"></i>&nbsp; ฟังก์ชั่นนักบัญชี</a></li>
                        <li><a class="dropdown-item" href="quotation.php"><i class="fas text-info fa-file-alt"></i>&nbsp; ใบเสนอราคา</a></li>
                        <li><a class="dropdown-item" href=""><i class="fas text-info fa-file-alt"></i>&nbsp; ใบเสร็จรับเงิน</a></li>
                        <li><a class="dropdown-item" href="invoice.php"><i class="fas text-info fa-file-alt"></i>&nbsp; ใบวางบิล ใบแจ้งหนี้</a></li>
                        <li><a class="dropdown-item" href="taxInvoice.php"><i class="fas text-info fa-file-alt"></i>&nbsp; ใบกำกับภาษี / ใบกำกับภาษีอย่างย่อ</a></li>
                        <li><a class="dropdown-item" href="connectShopeeLazada.php"><i class="fas text-info fa-shopping-bag"></i>&nbsp; เชื่อมต่อกับ Shopee / Lazada</a></li>
                        <li><a class="dropdown-item" href="connectPOS.php"><i class="fas text-info fa-mobile"></i>&nbsp; แคชเชียร์บนมือถือ (Mobile POS)</a></li>
                        <li><a class="dropdown-item" href="connectAPI.php"><i class="fas text-info fa-code"></i>&nbsp; เชื่อมต่อ API สำหรับนักพัฒนา</a></li>
                        <li><a class="dropdown-item" href="findAccountant.php"><i class="fas text-info fa-search"></i>&nbsp; ค้นหานักบัญชี</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active3" href="pricing.php">ราคา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active4" href="joinPartner.php">เป็นพาร์ตเนอร์กับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active5" href="blog.php">แหล่งเรียนรู้</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active6" href="contactUs.php">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
        <div class="right-navitem">
            <!--<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="./assets/img/thai.png" alt="" width="30px" height="30px">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><img src="./assets/img/uk.png" alt="" width="30px" height="30px"></a></li>
                </ul>
            </li>-->
            <a class="btn-register" href="signUp.php">สมัครใช้งานฟรี</a>
            <a class="btn-login" href="{{ url('signin') }}">เข้าสู่ระบบ</a>
        </div>
    </div>
</nav>

<div class="cookies-box show">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-12">
                <div class="cookies-logo">
                    <img src="./assets/img/logo.png" alt="" width="100px" height="65px">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-7 col-12">
                <div class="cookies-detail">
                    <p>เราใช้คุกกี้เพื่อให้ท่านสามารถใช้เว็บไซต์ได้อย่างสะดวกสบายยิ่งขึ้นรวมถึงการเลือกคอนเทนต์ที่เหมาะสมการสนับสนุนความปลอดภัยและการวิเคราะห์การทำงานของเว็บไซต์เพื่อพัฒนาบริการของเราท่านสามารถเลือก "ตั้งค่า" เพื่อปรับแต่งการยินยอมการใช้คุกกี้ได้หรือกดปุ่ม "ยอมรับทั้งหมด" เพื่ออนุญาตให้ใช้คุกกี้ทุกประเภท</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                <div class="cookies-btn">
                    <button class="cookies-btn-option" data-bs-toggle="modal" data-bs-target="#cookiesOption">ตั้งค่า</button>
                    <button class="cookies-btn-accept">ยอมรับทั้งหมด</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cookiesOption" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="cookies-logo">
                    <img src="./assets/img/logo.png" alt="" width="70px" height="35px">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cookies-option-detail">
                    <p>ท่านสามารถตั้งค่าการใช้ของคุกกี้โดยคลิกที่ปุ่มและตัวเลือกด่านล่างทั้งนี้การปิดการทำงานของคุกกี้บางตัวอาจส่งผลกระทบการทำงานของเว็บไซต์ทำให้ไม่สามารถให้บริการท่านได้อย่างเต็มที่</p>
                    <h5>จัดการความเป็นส่วนตัว</h5>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="">
                        <h6 class="text-info">คุกกี้ที่มีความจำเป็น </h6>
                        <label class="form-check-label" for="">คุกกี้นี้ทำให้เว็บไซต์ทำงานได้อย่างถูกต้องคุกกี้ชนิดนี้ไม่สามารถปิดการใช้งานได้</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="">
                        <h6 class="text-info">คุกกี้เพื่อการทำงานของเว็บไซต์</h6>
                        <label class="form-check-label" for="">คุกกี้นี้ช่วยจดจำการใช้งานของท่านเช่นภาษาที่เลือกภูมิภาคหรือข้อมูลการเข้าสู่ระบบเพื่อทำให้การใช้งานของเว็บไซต์มีความสะดวกสบายยิ่งขึ้น</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="">
                        <h6 class="text-info">คุกกี้เพื่อประสิทธิภาพ</h6>
                        <label class="form-check-label" for="">คุกกี้นี้รวบรวมข้อมูลของท่านเกี่ยวกับการใช้งานเว็บไซต์เพื่อการนำมาปรับปรุงประสิทธิภาพของเว็บไซต์</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="">
                        <h6 class="text-info">คุกกี้เพื่อการตลาด</h6>
                        <label class="form-check-label" for="">คุกกี้นี้ใช้สำหรับการสร้างโฆษณาที่มีความเหมาะสมกับท่าน</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="">
                        <h6 class="text-info">คุกกี้ที่ยังไม่ได้จัดประเภท</h6>
                        <label class="form-check-label" for="">คุกกี้ที่ยังไม่ได้จัดว่าอยู่ในข้างต้น</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="cookies-btn-accept">ยอมรับเฉพาะที่เลือก</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $(".bg-navbar").css("background", "#f8f9fa").css("box-shadow", "0px 4px 4px rgba(0, 0, 0, 0.25)");
            } else {
                $(".bg-navbar").css("background", "linear-gradient(0deg, rgba(0, 114, 153, 0.03), rgba(0, 114, 153, 0.03))");
            }
        })
    })
</script>

<script>
    (function() {
        "use strict";

        var cookieAlert = document.querySelector(".cookies-box");
        var acceptCookies = document.querySelector(".cookies-btn-accept");

        cookieAlert.offsetHeight;

        if (!getCookie("acceptCookies")) {
            cookieAlert.classList.add("show");
        }

        acceptCookies.addEventListener("click", function() {
            setCookie("acceptCookies", true, 60);
            cookieAlert.classList.remove("show");
        });
    })();

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>    <!-- nav -->

    <div class="container-fluid bg-content1">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <div class="detail-content1">
                            <h1>โปรแกรมบัญชี ออนไลน์</h1>
                            <h2>ใช้งานง่าย ครบวงจรธุรกิจ</h2>
                            <span>เปิดเอกสารวางบิลเก็บเงินลูกค้าสรุปยอดทำได้หมดในโปรแกรมบัญชีสำเร็จรูปออนไลน์ใช้งานง่ายทั้งในเว็บไซต์และแอปมือถือแถมนัดให้เราช่วยแนะนำการใช้งานให้คุณได้ฟรี!</span>
                        </div>
                        <div class="btn-content1">
                            <a class="btn-register-index" href="signUp.php">สมัครใช้งานฟรี</a>
                            <a class="btn-demo" href="">นัดสาธิตใช้งาน</a>
                        </div>
                        <div class="count-head">
                            <div class="text-center">
                                <div class="count-display1">
                                    <h2 class="count text-dark">60000 </h2>
                                    <h2 style="color: #017399;">&nbsp;+</h2>
                                </div>
                                <span class="text-muted count-display-bottom">ผู้ประกอบการที่ใช้ Axcount</span>
                            </div>
                            <div class="text-center">
                                <div class="count-display2">
                                    <h2 class="count text-dark">1500 </h2>
                                    <h2 style="color: #017399;">&nbsp;+</h2>
                                </div>
                                <span class="text-muted count-display-bottom">สำนักงานบัญชีที่ร่วมเป็นพาร์ตเนอร์กับเรา</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 d-md-none d-lg-block p-0">
                <img class="pic-index1" src="{{ url('/assets/img/pic-index1.jpeg') }}" alt="">
            </div>
        </div>
    </div>

    <!--<div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <img class="p-4" src="./assets/img/banner1.jpg" alt="" width="100%" height="auto">
            </div>
        </div>
    </div>-->
    <br>

    <div class="container">
        <div class="header-content2">
            <h1>ฟังก์ชั่นใหม่ ใช้งานได้แล้ววันนี้!</h1>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail1">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/01.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-dark"><b>AI Dashboard</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail2">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/02.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-white"><b>Power BI</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail1">
                    <div class="bg-img">
                        <img src="{{ url(' assets/img/09.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-dark"><b>ระบบบริหารการเงิน+บัญชี</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail2">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/11.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-white"><b>ระบบบริหารบุคคล</b></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail2">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/10.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-white"><b>ระบบจัดการเงินเดือน</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail1">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/08.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-dark"><b>ระบบการลา+สลิปเงินเดือน</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail2">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/13.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-white"><b>CRM</b></h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
                <div class="function-detail1">
                    <div class="bg-img">
                        <img src="{{ url('assets/img/12.png') }}" alt="" width="60px" height="60px">
                    </div>
                    <h5 class="text-dark"><b>ระบบงานขาย</b></h5>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid" style="background-color: #F4FEFF;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="img-midcontent1">
                        <img src="{{ url('/assets/img/img-midcontent1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="detail-midcontent1">
                        <h2 class="text-dark">
                            โปรแกรมบัญชี <h2 class="head-midcontent1">ที่เริ่มต้นง่าย ไม่รู้บัญชี ก็ใช้งานได้</h2>
                        </h2>
                        <span>เปลี่ยนมือถือให้ขายของและเก็บเงินได้ทั้งหน้าร้านหรือขายออนไลน์ ด้วยแอป <b>Axcount</b> ที่มีระบบ POS บนมือถือ ช่วยเปิดบิล แชร์บิล เรียกเก็บเงิน
                            พิมพ์ใบเสร็จอย่างย่อ เช็กสต็อก ดูยอดขาย ได้ทุกเวลา ส่วนผู้ประกอบการก็เข้าถึงข้อมูลธุรกิจได้ทุกเมื่อ
                        </span>
                        <div class="btn-midcontent1">
                            <a class="btn-register-midcontent1" href="signUp.php">สมัครใช้งานฟรี</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid bg-midcontent2">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <div class="head-midcontent2">
                        <h5 class="text-dark">ฟังก์ชั่นสำหรับผู้ประกอบการ</h5>
                        <h1 class="text-dark">โปรแกรมบัญชีสำหรับธุรกิจ ที่ช่วยให้บันทึกบัญชีง่าย</h1>
                    </div>
                    <br>
                    <div id="carouselMidcontent2" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMidcontent2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselMidcontent2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselMidcontent2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselMidcontent2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('/assets/img/image1.png') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image2.png') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image3.png') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image4.jpg') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMidcontent2" data-bs-slide="prev">
                            <i class="fas fa-chevron-left fa-2x" style="color: #067A9E;"></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMidcontent2" data-bs-slide="next">
                            <i class="fas fa-chevron-right fa-2x" style="color: #067A9E;"></i>
                        </button>
                    </div>
                    <div class="detail-midcontent2">
                        <h5>บันทึกค่าใช้จ่าย</h5>
                        <h2>บิลไม่หาย เก็บง่าย แค่สแกน</h2>
                        <span class="text-center">บันทึกค่าใช้จ่ายด้วยวิธีที่ง่ายกว่า ไม่ว่าคุณจะทำงานที่ไหน แค่หยิบมือถือใช้ autokey-logo สแกนบิล ระบบบัญชีจะนำข้อมูลมาบันทึกและเก็บบิลออนไลน์ให้เลย มั่นใจว่าเก็บทุกบิลครบ ตรวจสอบค่าใช้จ่ายในแต่ละโปรเจกต์ได้</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid bg-midcontent3">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <div class="head-midcontent3">
                        <h5 class="text-dark">ฟังก์ชั่นสำหรับนักบัญชี</h5>
                        <h1 class="text-dark">เพิ่มศักยภาพให้จบทุกงานได้ ในระบบบัญชีออนไลน์ </h1>
                    </div>
                    <br>
                    <div id="carouselMidcontent3" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMidcontent3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselMidcontent3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselMidcontent3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselMidcontent2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ url('/assets/img/image3.png') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image1.png') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image4.jpg') }}" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ url('/assets/img/image2.png') }}" class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMidcontent3" data-bs-slide="prev">
                            <i class="fas fa-chevron-left fa-2x" style="color: #067A9E;"></i>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMidcontent3" data-bs-slide="next">
                            <i class="fas fa-chevron-right fa-2x" style="color: #067A9E;"></i>
                        </button>
                    </div>
                    <div class="detail-midcontent3">
                        <h5>ผังบัญชี</h5>
                        <h2>ผังบัญชีที่เริ่มต้นใช้งานได้เลย</h2>
                        <span class="text-center">หมดกังวลกับการเริ่มต้นใช้งานโปรแกรมทางบัญชี เพราะคุณสามารถตั้งค่าผังบัญชีและตั้งค่าเริ่มต้นได้เลยบน Axcount ทั้งรหัสบัญชี ชื่อบัญชี หรือการจัดประเภทรายการตามแต่ละธุรกิจ</span>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-12 col-12"></div>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid bg-pricecontent">

        <!-- pricing -->
        <style>
    .head-pricecontent {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .head-pricecontent>h1 {
        background: linear-gradient(90deg, #37B8C6 7.58%, #067A9E 63.31%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .head-pricecontent>button {
        margin-left: 10px;
        background: #FFFFFF;
        color: #007299;
        border: 1px solid #007299;
        box-shadow: 0px 10px 15px rgba(1, 115, 153, 0.2);
        border-radius: 39px;
        padding: 5px 10px;
    }

    .head-pricecontent>button:hover {
        background: #007299;
        color: #ffffff;
        transition: 0.5s;
    }

    .price-detail {
        background: #FFFFFF;
        box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        border-radius: 5px;
        padding: 30px 20px;
    }

    .head-price-detail {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        line-height: 35px;
    }

    .head-price-detail>h4 {
        margin-top: 30px;
    }

    .head-price-detail>h3>b {
        color: #007299;
    }

    .head-price-detail>a {
        margin-top: 15px;
        background-color: #FFFFFF;
        color: #007299;
        border: 2px solid #007299;
        border-radius: 5px;
        padding: 5px 30px;
    }

    .head-price-detail>a:hover {
        background-color: #007299;
        color: #ffffff;
        border: 2px solid #007299;
        transition: 0.5s;
    }

    .ax {
        color: #979797;
    }

    .countt {
        color: #007299;
    }

    .price-detail>ul {
        padding: 0;
    }

    .price-detail>ul>li {
        list-style: none;
        line-height: 40px;
    }

    .bg-pricing-content2 {
        background-image: url('./assets/img/bg-midcontent8.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .pricing-content2 {
        margin: 30px 0px;
        padding: 35px 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .pricing-content2>h1 {
        color: #FFFFFF;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
 
    @media (max-width: 450px) {
        .head-pricecontent>button {
            font-size: 10px;
        }
    }
</style>

<div class="container" id="monthly-price" style="margin-bottom: 50px;">
    <div class="head-pricecontent">
        <h1>แพ็กเกจ และ ราคา</h1>
        <button id="btn-year">เปลี่ยนเป็นรายปี</button>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะกับฟรีแลนซ์</span>
                    <h4>Free!</h4>
                    <h3><b>ฟรี</b> ตลอดชีพ</h3>
                    <a href="">เริ่มต้น</a>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;แบบฟอร์มเอกสารพร้อมใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;สร้างเอกสารได้ไม่จำกัด</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รองรับสกุลเงินต่างประเทศ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รายงานสรุปยอดขายและภาษี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;แดชบอร์ดสรุปการเงินของธุรกิจ ใช้งานผ่านแอปพลิเคชั่นมือถือ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจบริการ</span>
                    <h4>Standard</h4>
                    <h3><b>165บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เก็บเงินออนไลน์ผ่านบัตรเครดิต และ QR codeใหม่!</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกใบกำกับภาษีด้วยระบบ e-Tax Invoice ด้วยอีเมล</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บันทึกและบริหารค่าใช้จ่าย</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกหัก ณ ที่จ่าย และยื่นออนไลน์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารภาษีมูลค่าเพิ่ม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการสินทรัพย์และค่าเสื่อมราคา</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ดูงบการเงินแแบบเรียลไทม์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เชื่อมต่อยอดขายทันทีจาก FoodStory POS หรือนำเข้ายอดขายจาก POS อื่นๆ และแพลตฟอร์มฟู้ดเดลิเวอรี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจที่ใช้สต็อกสินค้า</span>
                    <h4>Pro</h4>
                    <h3><b>249บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เพิ่มผู้ใช้งานได้ไม่จำกัดจำนวน พร้อมกำหนดสิทธ์ผู้ใช้งานได้</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารสต็อกสินค้า และสร้างเอกสารจัดซื้อ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกเอกสารขายได้ทุกรูปแบบ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการรายจ่าย เตรียมจ่ายหลายรายการสะดวก</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รองรับการขาย และการเก็บเงินหน้าร้านด้วยระบบ POS บนแอปพลิเคชันมือถือ พร้อมออกสลิปใบเสร็จอย่างย่อ*</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจบริการ</span>
                    <h4>Pro Business แนะนำ!</h4>
                    <h3><b>457บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เก็บเงินออนไลน์ผ่านบัตรเครดิต และ QR codeใหม่!</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกใบกำกับภาษีด้วยระบบ e-Tax Invoice ด้วยอีเมล</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บันทึกและบริหารค่าใช้จ่าย</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกหัก ณ ที่จ่าย และยื่นออนไลน์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารภาษีมูลค่าเพิ่ม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการสินทรัพย์และค่าเสื่อมราคา</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ดูงบการเงินแแบบเรียลไทม์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เชื่อมต่อยอดขายทันทีจาก FoodStory POS หรือนำเข้ายอดขายจาก POS อื่นๆ และแพลตฟอร์มฟู้ดเดลิเวอรี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container" id="yearly-price" style="display: none; margin-bottom: 50px;">
    <div class="head-pricecontent">
        <h1>แพ็กเกจ และ ราคา</h1>
        <button id="btn-month">เปลี่ยนเป็นรายเดือน</button>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะกับฟรีแลนซ์</span>
                    <h4>Free!</h4>
                    <h3><b>ฟรี</b> ตลอดชีพ</h3>
                    <a href="">เริ่มต้น</a>
                    <span class="text-white">*เหมาจ่าย 1,990 บาท/ปี</span>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;แบบฟอร์มเอกสารพร้อมใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;สร้างเอกสารได้ไม่จำกัด</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รองรับสกุลเงินต่างประเทศ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รายงานสรุปยอดขายและภาษี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;แดชบอร์ดสรุปการเงินของธุรกิจ ใช้งานผ่านแอปพลิเคชั่นมือถือ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจบริการ</span>
                    <h4>Standard</h4>
                    <h3><b>199บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                    <span class="text-muted">*เหมาจ่าย 1,990 บาท/ปี</span>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เก็บเงินออนไลน์ผ่านบัตรเครดิต และ QR codeใหม่!</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกใบกำกับภาษีด้วยระบบ e-Tax Invoice ด้วยอีเมล</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บันทึกและบริหารค่าใช้จ่าย</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกหัก ณ ที่จ่าย และยื่นออนไลน์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารภาษีมูลค่าเพิ่ม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการสินทรัพย์และค่าเสื่อมราคา</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ดูงบการเงินแแบบเรียลไทม์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เชื่อมต่อยอดขายทันทีจาก FoodStory POS หรือนำเข้ายอดขายจาก POS อื่นๆ และแพลตฟอร์มฟู้ดเดลิเวอรี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจที่ใช้สต็อกสินค้า</span>
                    <h4>Pro</h4>
                    <h3><b>299บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                    <span class="text-muted">*เหมาจ่าย 2,990 บาท/ปี</span>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เพิ่มผู้ใช้งานได้ไม่จำกัดจำนวน พร้อมกำหนดสิทธ์ผู้ใช้งานได้</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารสต็อกสินค้า และสร้างเอกสารจัดซื้อ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกเอกสารขายได้ทุกรูปแบบ</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการรายจ่าย เตรียมจ่ายหลายรายการสะดวก</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;รองรับการขาย และการเก็บเงินหน้าร้านด้วยระบบ POS บนแอปพลิเคชันมือถือ พร้อมออกสลิปใบเสร็จอย่างย่อ*</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mt-2 mb-2">
            <div class="price-detail">
                <div class="head-price-detail">
                    <span>เหมาะสำหรับธุรกิจบริการ</span>
                    <h4>Pro Business แนะนำ!</h4>
                    <h3><b>549บาท</b> / เดือน</h3>
                    <a href="">ทดลองฟรี 30วัน</a>
                    <span class="text-muted">*เหมาจ่าย 5,490 บาท/ปี</span>
                </div>
                <div class="d-flex justify-content-center mt-4 mb-2">
                    <h3 class="ax">Ax<h3 class="countt">count</h3>
                    </h3>
                </div>
                <ul>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;1 สิทธิ์ผู้ใช้งาน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เก็บเงินออนไลน์ผ่านบัตรเครดิต และ QR codeใหม่!</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกใบกำกับภาษีด้วยระบบ e-Tax Invoice ด้วยอีเมล</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บันทึกและบริหารค่าใช้จ่าย</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ออกหัก ณ ที่จ่าย และยื่นออนไลน์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;บริหารภาษีมูลค่าเพิ่ม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการสินทรัพย์และค่าเสื่อมราคา</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ดูงบการเงินแแบบเรียลไทม์</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;เชื่อมต่อยอดขายทันทีจาก FoodStory POS หรือนำเข้ายอดขายจาก POS อื่นๆ และแพลตฟอร์มฟู้ดเดลิเวอรี</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;คำนวณและเตรียมจ่ายเงินเดือน</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;ช่วยคำนวณหัก ณ ที่จ่ายและประกันสังคม</li>
                    <li><i class="fas fa-check-circle text-primary"></i> &nbsp;จัดการแผนกและประวัติพนักงาน</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $("#btn-year").click(function() {
        $("#monthly-price").hide();
        $("#yearly-price").show();
    });
    $("#btn-month").click(function() {
        $("#yearly-price").hide();
        $("#monthly-price").show();
    });
</script>        <!-- pricing -->

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="detail-midcontent4">
                        <h2 class="head-midcontent4">นักบัญชีตัวจริงพร้อมดูแลคุณตลอด 365 วัน</h2>
                        <span>ปรึกษาทีมนักบัญชีผู้เชี่ยวชาญการทำบัญชี และการใช้งานโปรแกรมบัญชีออนไลน์ สำหรับ SME ได้ทุกวัน พร้อมเคียงข้างคุณทุกก้าวของการทำธุรกิจ ทั้งทางระบบแชต อีเมล</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="img-midcontent4">
                        <img src="./assets/img/img-midcontent4.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- partnerContent -->
                <!-- partnerContent -->
    </div>
    <br>

    <div class="container-fluid bg-content8">
        <div class="container">
            <h1 class="text-center text-white pt-5 pb-4">คำถามที่พบบ่อย (FAQ)</h1>
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-12 col-12"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-5">
                            <div class="accordion accordion-flush mt-4 mb-4" id="accordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            โปรแกรมบัญชี ออนไลน์ Axcount เหมาะกับธุรกิจแบบไหน
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion1">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion accordion-flush mt-4 mb-4" id="accordion2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            ออกเอกสาร ใบกำกับภาษี และ หนังสือรับรอง หัก ณ ที่จ่าย ได้ไหม
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordion2">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12 mb-5">
                            <div class="accordion accordion-flush mt-4 mb-4" id="accordion3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            ข้อมูลที่อยู่ใน โปรแกรมบัญชี ออนไลน์ มีความปลอดภัยแค่ไหน
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordion3">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion accordion-flush mt-4 mb-4" id="accordion4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            Axcount มีบริการอะไรเพิ่มเติมอีกบ้าง
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordion4">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-12 col-12"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-12 col-12"></div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-12">
                    <div class="mid-content9">
                        <h1>
                            มั่นใจด้วยผู้ประกอบการกว่า 60,000 ราย <br>
                            ที่ใช้โปรแกรมบัญชี ออนไลน์ ทำธุรกิจ
                        </h1>
                        <div class="d-flex mt-4">
                            <a class="btn-register-index" href="signUp.php">สมัครใช้งานฟรี</a>
                            <a class="btn-demo" href="demoSignup.php">นัดสาธิตใช้งาน</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-12 col-12"></div>
            </div>

        </div>
    </div>

    <!-- footer -->
    <style>
    .bg-footer {
        background-color: #0D3850;
    }

    .logo-footer {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .footer-link1 {
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin: 15px;
    }

    .footer-link1>a {
        text-decoration: none;
        line-height: 15px;
        color: #ffffff;
        background-color: #0D3850;
        padding: 10px;
        border-radius: 5px;
    }

    .footer-link1>a:hover {
        color: #0D3850;
        background-color: #ffffff;
        transition: 0.5s;
    }

    .footer-link2 {
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin: 15px;
    }

    .footer-link2>a {
        text-decoration: none;
        line-height: 15px;
        color: #ffffff;
        background-color: #0D3850;
        padding: 10px;
        border-radius: 5px;
    }

    .footer-link2>a:hover {
        color: #0D3850;
        background-color: #ffffff;
        transition: 0.5s;
    }

    .footer-link3 {
        display: flex;
        flex-direction: column;
        justify-content: start;
        margin: 15px;
    }

    .footer-link3>span {
        text-decoration: none;
        line-height: 25px;
        color: #ffffff;
        padding: 10px;
    }

    .footer-link3>span>a {
        text-decoration: none;
        line-height: 25px;
        color: #ffffff;
        background-color: #0D3850;
        padding: 10px;
        border-radius: 5px;
    }

    .contact {
        display: flex;
        flex-direction: column;
    }

    .contact>span {
        text-decoration: none;
        line-height: 25px;
        color: #ffffff;
        padding: 10px;
    }

    .contact>a {
        text-decoration: none;
        line-height: 25px;
        color: #ffffff;
        background-color: #0D3850;
        padding: 10px;
        border-radius: 5px;
    }

    .contact>a:hover {
        color: #0D3850;
        background-color: #ffffff;
        transition: 0.5s;
    }

    .social-link {
        text-decoration: none;
        line-height: 25px;
        color: #ffffff;
        padding: 10px;
    }

    .social-link>a {
        margin: 0px 10px;
    }

    .social-link>a>img {
        width: 30px;
        height: 30px;
    }

    #toTopBtn {
        position: fixed;
        bottom: 25px;
        right: 50px;
        z-index: 999;
        padding: 10px 20px;
        border-radius: 5px;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        color: #ffffff;
    }

    .js .cd-top--fade-out {
        opacity: .5;
    }

    .js .cd-top--is-visible {
        visibility: visible;
        opacity: 1;
    }

    .js .cd-top {
        visibility: hidden;
        opacity: 0;
        transition: opacity .3s, visibility .3s, background-color .3s;
    }

    .cd-top {
        position: fixed;
        bottom: 20px;
        bottom: var(--cd-back-to-top-margin);
        right: 20px;
        right: var(--cd-back-to-top-margin);
        display: inline-block;
        height: 40px;
        height: var(--cd-back-to-top-size);
        width: 40px;
        width: var(--cd-back-to-top-size);
        box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
        background: url("./assets/img/cd-top-arrow.svg") no-repeat center 50%;
        background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
        background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8);
    }

    .footer-email {
        position: relative;
    }

    .footer-email>input {
        width: 200px;
        height: 35px;
        background: #FFFFFF;
        border-radius: 50px;
        padding-left: 15px;
    }

    @media (max-width: 450px) {
        #toTopBtn {
            position: fixed;
            bottom: 15px;
            right: 20px;
            z-index: 98;
            padding: 10px 20px;
            border-radius: 5px;
            background: linear-gradient(97.65deg, #56E0E0 0.33%, #007299 93.35%);
            color: #ffffff;
        }

        .accordion {
            background-color: #FFFFFF;
            padding: 0px 30px;
            border-radius: 50px;
        }
    }
</style>

<footer>
    <div class="container-fluid bg-footer">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="logo-footer">
                    <img src="./assets/img/logo.png" alt="" width="120px" height="85px">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="footer-link1">
                    <a href="aboutUs.php">เกี่ยวกับเรา</a>
                    <a href="pricing.php">แพ็กเกจ</a>
                    <a href="joinPartner.php">สำหรับนักบัญชี</a>
                    <a href="">สำหรับสำนักงานบัญชี</a>
                    <a href="signUp.php">สมัครใช้งานฟรี</a>
                    <a href="socialActivities.php">กิจกรรมเพื่อสังคม</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="footer-link2">
                    <a href="">ข้อกำหนด</a>
                    <a href="">วิสัยทัศนขององค์กร พันธกิจ</a>
                    <a href="condition.php">เงื่อนไขการใช้บริการ</a>
                    <a href="terms.php" style="line-height: 25px;">นโยบายความเป็นส่วนตัว<br>กฎหมายครอบคลุมสิทธิส่วนบุคคล PDPA</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                <div class="footer-link3">
                    <span><b>Contact US</b></span>
                    <div class="contact">
                        <span><i class="fas fa-phone-alt"></i>&nbsp; 081-111-1111</span>
                        <a href=""><i class="fas fa-envelope"></i>&nbsp; join@axcount.co</a>
                    </div>
                    <div class="social-link">
                        <a href=""><img src="./assets/img/facebook.png" alt=""></a>
                        <a href=""><img src="./assets/img/youtube.png" alt=""></a>
                        <a href=""><img src="./assets/img/line.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"><i class="fas fa-angle-double-up"></i></a>

    </div>
</footer>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#toTopBtn').fadeIn();
            } else {
                $('#toTopBtn').fadeOut();
            }
        });

        $('#toTopBtn').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });
</script>    <!-- footer -->

    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>

    <script>
        $("#btn-year").click(function() {
            $("#monthly-price").hide();
            $("#yearly-price").show();
        });
        $("#btn-month").click(function() {
            $("#yearly-price").hide();
            $("#monthly-price").show();
        });
    </script>

</body>

</html>