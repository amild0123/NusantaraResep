   
<div class="main-content">

<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if($page == "Home"){
    include "page/Home.php";
}
elseif($page == "Detail"){
    include "page/Detail.php";
}
elseif($page == "resep"){
    include "page/TambahResep.php";
}
elseif($page == "account"){
    include "page/account.php";
}
elseif($page == "kategori"){
    include "kategori.php";
}
else{
    echo "<h1>Halaman tidak ditemukan 😭</h1>";
}
?>

</div>
        
        
    