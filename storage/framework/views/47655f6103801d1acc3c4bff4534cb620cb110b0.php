<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dorami - Nền tảng quản lý bán hàng và kho vận</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html,body { 
            padding: 0;
            margin: 0;
        }
        nav div ul li a.nav-link {
            color: white;
            padding: 0;
            line-height: 50px;
        }
        nav div ul li a.nav-link:hover {
            background-color: #004d40;
        }
        .fixed-top{
            height: 50px;
        }
        .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 90px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 50px; /* Stay at the top */
            left: 0;
            background-color: #4e342e; /* Black */
            overflow-x: hidden; /* Disable horizontal scroll */
        }
        .sidenav a {
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
            padding: 20px 0;
        }
        .sidenav a:hover {
            background-color: #3e2723;
        }
    </style>
</head>
<body>
    <div>
    <nav class="navbar fixed-top navbar-expand-lg py-0" style="background-color: #00695c;">
        <a class="navbar-brand" href="/dashboard/">
            <img src="/images/logo.webp" width="40" height="40" alt="">
        </a>

        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Shop Manager</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Customer Care</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#">Messenger Order</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
    <div class="sidenav">
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
    <div class="content">
        <h1>Hello</h1>
    </div>
</body>
</html> <?php /**PATH F:\University\resources\views/unihome.blade.php ENDPATH**/ ?>