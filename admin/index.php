 <?php
 session_start();
 if (empty($_SESSION['login']=='admin' || $_SESSION['login']=='petugas')) {
    header("location:../index.php");
}

include '../layouts/header.php';
?>

<div class="main" style="background-image: url('../assets/img/bg biru 2.jpg'); background-size: cover;">

<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];

switch ($page) {
    case 'pengaduan':
        include 'data_pengaduan.php';
        break;
        case 'tanggapan':
            include 'data_tanggapan.php';
            break;
            case 'petugas':
                include 'data_petugas.php';
                break;
                case 'masyarakat':
                    include 'data_masyarakat.php';
                    break;
        default:
        echo "halaman tidak tersedia";
        break;
  }
} else{
    include 'home.php';
}

include '../layouts/footer.php'
?>

</div>

<!-- <footer class="footer py-2 bg-light">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | Anindya Alfarina Putri Purbaya | SMKN 1 KARAWANG</p>
    </div>
</footer>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script> -->