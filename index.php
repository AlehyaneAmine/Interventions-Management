<?php
require_once './Views/includes/header.php';
require_once './autoload.php';
require_once './Controllers/HomeController.php ';
require_once './Controllers/UsersController.php ';

$home = new HomeController();

$pages = ['add','home','update','delete'];
if(isset($_GET['page'])){
if(in_array($_GET['page'],$pages))
{

    $page = $_GET['page'];
    $home->index($page);


}else{

    include ('Views/includes/404.php');
}


}else{
$home->index('home');
}
?>
<?php
require_once './Views/includes/footer.php';

?>