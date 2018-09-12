<?php
/**
 * Created by PhpStorm.
 * User: zeddy
 * Date: 5/9/2017
 * Time: 8:10 AM
 */


$serverName = "2K3SRVR:3304";
$username = "VBPrograms";
$password = "LetMeIn";
$conn = new mysqli($serverName, $username, $password);

if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected Successfully";

function headSet($currentFriday, $weekNo)
{
    $interval = $weekNo * 7;

    $retValue = strtotime("+ " . $interval . " day", $currentFriday);


    return date("m/d/Y", $retValue);
}

function setBody(){

}


?>

<!doctype html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/normalize.css">
    <link rel="stylesheet" href="bower_components/html5-boilerplate/dist/css/main.css">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="app.css">
    <script src="bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<ul class="menu">
    <li><a href="#!/view1">view1</a></li>
    <li><a href="#!/view2">view2</a></li>
</ul>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<body>
<div class="tile is-ancestor">
    <div class="tile is-3">
        <div class="tile is-parent">
            <div class="tile is-child box">
                <aside class="menu">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a>Dashboard</a></li>
                        <li><a>Customers</a></li>
                    </ul>
                    <p class="menu-label">
                        Administration
                    </p>
                    <ul class="menu-list">
                        <li><a>Team Settings</a></li>
                        <li>
                            <a class="is-active">Manage Your Team</a>
                            <ul>
                                <li><a>Members</a></li>
                                <li><a>Plugins</a></li>
                                <li><a>Add a member</a></li>
                            </ul>
                        </li>
                        <li><a>Invitations</a></li>
                        <li><a>Cloud Storage Environment Settings</a></li>
                        <li><a>Authentication</a></li>
                    </ul>
                    <p class="menu-label">
                        Transactions
                    </p>
                    <ul class="menu-list">
                        <li><a>Payments</a></li>
                        <li><a>Transfers</a></li>
                        <li><a>Balance</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <div class="tile is-vertical is-7">
        <div class="tile is-parent">
            <div class="tile is-child">
                <article>This is the title</article>
            </div>
        </div>
        <div class="tile is-parent">
            <div class="tile is-child">
                <table class="table">
                    <thead>
                    <?php
                    $closeFriday = strtotime('next friday');

                    echo "<tr>";
                    for ($i = 0; $i < 51; $i++) {
                        $header = headSet($closeFriday, (int)$i);
                        echo "<th>";
                        echo (string)$header;
                        echo "</th>";

                    }
                    echo "</tr>";
                    ?>
                    </thead>
                    <tfoot>
                    <?php
                    $closeFriday = strtotime('next friday');

                    echo "<tr>";
                    for ($i = 0; $i < 51; $i++) {
                        $header = headSet($closeFriday, (int)$i);
                        echo "<th>";
                        echo (string)$header;
                        echo "</th>";

                    }
                    echo "</tr>";
                    ?>
                    </tfoot>
                    <tbody>
                    <?php setbody(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div ng-view></div>

<div>Angular seed app: v<span app-version></span></div>

<!-- In production use:
<script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
-->
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-route/angular-route.js"></script>
<script src="app.js"></script>
<script src="view1/view1.js"></script>
<script src="view2/view2.js"></script>
<script src="components/version/version.js"></script>
<script src="components/version/version-directive.js"></script>
<script src="components/version/interpolate-filter.js"></script>
</body>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>
