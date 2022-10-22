
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
    body {
        background-color: #FFFFFF;
    }

    .signin-form {
        background: #FFFFFF;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        padding: 60px 10px;
    }

    .signin-form>h1 {
        font-weight: 600;
        line-height: 36px;
        color: #0967A8;
        text-align: center;
        margin-bottom: 30px;
    }

    .form-input {
        display: flex;
        flex-direction: column;
    }

    .form-input>label {
        font-weight: 500;
        line-height: 15px;
        color: rgba(0, 0, 0, 0.73);
        margin-left: 15px;
        margin-top: 20px;
    }

    .form-input>input {
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.7);
        border-radius: 5px;
        width: 100%;
        height: 45px;
        padding-left: 20px;
        margin-top: 5px;
    }

    .form-checkRemember {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
    }

    .button-group {
        display: flex;
        margin-top: 50px;
    }

    .button-group>button[type=submit] {
        background: #007299;
        color: #ffffff;
        border: 2px solid #007299;
        border-radius: 5px;
        width: 50%;
        padding: 10px 15px;
        margin-right: 5px;
    }

    .button-group>button[type=submit]:hover {
        background: #ffffff;
        color: #007299;
        transition: 0.5s;
    }

    .button-group>button[type=reset] {
        background: #ffffff;
        color: #007299;
        border: 2px solid #007299;
        border-radius: 5px;
        width: 50%;
        padding: 10px 15px;
        margin-left: 5px;
    }

    .button-group>button[type=reset]:hover {
        background: #007299;
        color: #ffffff;
        transition: 0.5s;
    }

    .signup-link {
        text-decoration: none;
        color: #007299;
    }

    .signup-link:hover {
        color: #000000;
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
            <a class="btn-login" href="signIn.php">เข้าสู่ระบบ</a>
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

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-xl-4 col-lg-3 col-md-12 col-12"></div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-12">
                <form method="POST" action="{{ url('admin/dashbroad')}}" >
                    @csrf
                    <div class="signin-form">
                        <h1>เข้าสู่ระบบ</h1>
                        <div class="form-input">
                            <label for="">อีเมล</label>
                            <input type="text" name="email">
                        </div>
                        <div class="form-input">
                            <label for="">รหัสผ่าน</label>
                            <input type="password" name="password">
                        </div>
                        <div class="form-checkRemember">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    จดจำฉันไว้ในระบบ
                                </label>
                            </div>
                            <a href="resetPassword.php">ลืมรหัสผ่าน?</a>
                        </div>
                        <div class="button-group">
                            <button type="submit">เข้าสู่ระบบ</button>
                            <button type="reset">เคลียร์</button>
                        </div>
                        <div class="text-center mt-4">
                            <span>ยังไม่มีบัญชีกับเรา? &nbsp;<a href="signUp.php" class="signup-link">สมัครใช้งานฟรี</a></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-12 col-12"></div>
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

</body>

</html>