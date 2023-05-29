<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gudang Ku | UTS</title>

      <link rel="shortcut icon" href="layouts/assets/img/gudang1.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/gudang.png" class="brand">
                  <div class="user">Rudi Riyandi</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/home1.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=brg_tampil">
                                    <img class="icon" src="layouts/assets/img/dbarang.png" alt=""> Daftar Barang
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=sup_tampil">
                                    <img class="icon" src="layouts/assets/img/supplier.png" alt=""> Supplier
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=beli_tampil">
                                    <img class="icon" src="layouts/assets/img/beli.png" alt=""> Pembelian
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=jual_tampil">
                                    <img class="icon" src="layouts/assets/img/jual.png" alt=""> Penjualan
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Mr. Rudayy
            </footer>
      </main>

</body>

</html>