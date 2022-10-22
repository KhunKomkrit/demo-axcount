<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
   
    <title>Product | Axcount</title>

    <link href="{{ asset('/assets_adminkit/css/light.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('/asset_editor/css/editor.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Axcount</span>
                </a>
                <hr class="mt-0">

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menus
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="index.html">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Website
                    </li>

                    <li class="sidebar-item">
                        <a data-bs-target="#multi1" data-bs-toggle="collapse" class="sidebar-link collapsed"
                            aria-expanded="false">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Section
                                Manage</span>
                        </a>
                        <ul id="multi1" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                            style="">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="align-middle">Section all</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item active">
                        <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Menu
                                Website</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar"
                            style="">
                            <li class="sidebar-item active">
                                <a class="sidebar-link" href="{{ url('admin/editor') }}">
                                    <span class="align-middle">ผลิตภัณฑ์</span>
                                </a>
                            </li>
                            <li class="sidebar-item ">
                                <a data-bs-target="#multi-2" data-bs-toggle="collapse" class="sidebar-link collapsed"
                                    aria-expanded="false">ฟังก์ชั่น</a>
                                <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse" style="">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ฟังก์ชั่นสำหรับผู้ประกอบการ</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ฟังก์ชั่นนักบัญชี</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ใบเสนอราคา</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ใบเสร็จรับเงิน</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ใบวางบิล ใบแจ้งหนี้</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ใบกำกับภาษี / ใบกำกับภาษีอย่างย่อ</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">เชื่อมต่อกับ Shopee / Lazada</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">แคชเชียร์บนมือถือ (Mobile POS)</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">เชื่อมต่อ API สำหรับนักพัฒนา</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" href="#">ค้นหานักบัญชี</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="align-middle">ราคา</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="align-middle">เป็นพาร์ตเนอร์กับเรา</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="align-middle">แหล่งเรียนรู้</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="index.html">
                                    <span class="align-middle">ติดต่อเรา</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Role & Permission
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span
                                class="align-middle">ผู้ใช้งาน</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">สิทธิ์ผู้ใช้งาน</span>
                        </a>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('/assets_adminkit/img/avatars/avatar-5.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis
                                                    arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('/assets_adminkit/img/avatars/avatar-2.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('/assets_adminkit/img/avatars/avatar-4.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('/assets_adminkit/img/avatars/avatar-3.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('/assets/img/logo.png') }}" class="avatar img-fluid rounded me-1"
                                    alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content ps-3 pe-3">
                <div class="container p-0 h-100">

                    <h1 class="h3 mb-3">Blank Page</h1>

                    <iframe class="w-100 h-100" src="https://khunkomkrit.github.io/demo-axcount-editor" frameborder="0"></iframe>

                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help
                                        Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('/assets_adminkit/js/app.js') }}"></script>

    <!-- jquery-->
    <script src="{{ asset('/asset_editor/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/asset_editor/js/jquery.hotkeys.js') }}"></script>

    <!-- bootstrap-->
    <script src="{{ asset('/asset_editor/js/popper.min.js') }}"></script>
    <script src="{{ asset('/asset_editor/js/bootstrap.min.js') }}"></script>

    <!-- builder code-->
    <script src="{{ asset('/asset_editor/libs/builder/builder.js') }}"></script>
    <!-- undo manager-->
    <script src="{{ asset('/asset_editor/libs/builder/undo.js') }}"></script>
    <!-- inputs-->
    <script src="{{ asset('/asset_editor/libs/builder/inputs.js') }}"></script>


    <!-- media gallery -->
    <link href="{{ asset('/asset_editor/libs/media/media.css') }}" rel="stylesheet">
    <script>
        window.mediaPath = 'media';
    </script>
    <script src="{{ asset('/asset_editor/libs/media/media.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/media/openverse.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/plugin-media.js') }}"></script>

    <!-- bootstrap colorpicker //uncomment bellow scripts to enable -->

    <!-- components-->
    <!-- script src="libs/builder/components-server.js"></script -->
    <script src="{{ asset('/asset_editor/libs/builder/plugin-google-fonts.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/components-common.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/plugin-aos.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/components-elements.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/components-bootstrap5.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/components-widgets.j') }}s"></script>
    <script src="{{ asset('/asset_editor/libs/builder/components-html.js') }}"></script>

    <!-- sections-->
    <script src="{{ asset('/asset_editor/libs/builder/sections-bootstrap4.js') }}"></script>

    <!-- blocks-->
    <script src="{{ asset('/asset_editor/libs/builder/blocks-bootstrap4.js') }}"></script>

    <!-- plugins -->

    <!-- code mirror - code editor syntax highlight -->
    <link href="{{ asset('/asset_editor/libs/codemirror/lib/codemirror.css') }}" rel="stylesheet" />
    <link href="{{ asset('/asset_editor/libs/codemirror/theme/material.css') }}" rel="stylesheet" />
    <script src="{{ asset('/asset_editor/libs/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/codemirror/lib/xml.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/codemirror/lib/formatting.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/plugin-codemirror.js') }}"></script>

    <!-- jszip - download page as zip -->
    <script src="{{ asset('/asset_editor/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/jszip/filesaver.min.js') }}"></script>
    <script src="{{ asset('/asset_editor/libs/builder/plugin-jszip.js') }}"></script>


    <!-- autocomplete plugin used by autocomplete input-->
    <script src="{{ asset('/asset_editor/libs/autocomplete/jquery.autocomplete.js') }}"></script>

    <script>
        $(document).ready(function() {
            //if url has #no-right-panel set one panel demo
            if (window.location.hash.indexOf("no-right-panel") != -1) {
                $("#vvveb-builder").addClass("no-right-panel");
                $(".component-properties-tab").show();
                Vvveb.Components.componentPropertiesElement = "#left-panel .component-properties";
            } else {
                $(".component-properties-tab").hide();
            }

            Vvveb.Builder.init();

            Vvveb.Gui.init();
            Vvveb.FileManager.init();
            Vvveb.SectionList.init();
            var pages = [{
                name: "home",
                title: "home",
                url: "pages/home/index.html",
                file: "pages/home/index.html",
                assets: ['demo/narrow-jumbotron/narrow-jumbotron.css']
            }, ];

            Vvveb.FileManager.addPages(pages);

            Vvveb.FileManager.loadPage("home");
            Vvveb.Breadcrumb.init();
        });
    </script>

</body>

</html>
