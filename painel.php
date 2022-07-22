<?php
include('verifica_login.php');
?>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================================================BOOTSTRAP-LINKS==================================================-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->


    <!--==================================================CSS_PRINCIPAL==================================================-->
<link rel="stylesheet" href="CSS/styles.css">
<link rel="stylesheet" href="CSS/footer.css">
<link rel="stylesheet" href="CSS/navbar.css">
<script src="JS/store.js"></script>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Drop Nike</title>
</head>

<body>


<div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
              <div class="nav-title">
                Drop Nike   
              </div>
            </div>
            
            <div class="nav-links">
              <a href="store.html" target="_blank">Sair</a>
            </div>
          </div>

          <br><br>


        <!-- =====================================footer===================================== -->
        <section class="container content-section">
        <center>
            <h2>Seja Bem-Vindo <?php echo $_SESSION['usuario'];?></h2>
            </center>
            <br>
            <div class="title-products">PRODUTOS</div>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike amarela</span>
                    <img class="shop-item-image" src="img/camiseta nike amarela.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 120,99</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike marrom</span>
                    <img class="shop-item-image" src="img/camiseta nike marrom.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 149,99</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike branca</span>
                    <img class="shop-item-image" src="img/camiseta nike branca.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 80,00</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike cinza</span>
                    <img class="shop-item-image" src="img/camiseta nike cinza.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 75,50</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike laranja</span>
                    <img class="shop-item-image" src="img/camiseta nike laranja.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 200,00</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Camiseta Nike preta</span>
                    <img class="shop-item-image" src="img/camiseta nike preta.webp">
                    <div class="shop-item-details">
                        <span class="shop-item-price">R$ 170,00</span>
                        <i class="bx bx-shopping-bag btn btn-primary shop-item-button" type="button"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CARRINHO</h2>
            <div class="cart-items"></div>
            <div class="cart-total">
                <span class="cart-total-title">PREÇO TOTAL</span>
                <span class="cart-total-price">R$ 0,00</span>
            </div>
            <a href="compra.html"><button class="btn btn-primary btn-purchase" type="button">COMPRAR</button></a>
        </section>
          
          

    <br><br>
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">Drop Nike</h3>
                <span class="footer-info">+41 99999-9999</span>
                <span class="footer-info">dropnike@comerce.com</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="" class="menu-item-footer">Politica e privacidade</a>
                    <a href="" class="menu-item-footer">Cookies</a>
                    <a href="" class="menu-item-footer">Termos de uso</a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">Copyright 2022, dropnike.com. Todos os direitos reservados.</span>
        </div>
    </footer>
</body>

</html>