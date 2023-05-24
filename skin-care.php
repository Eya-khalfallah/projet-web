<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rO+919vLgl1UGwJ1TNEKjZo80pTxBMD7jxmB+G3Xq8U6yDgTHS+R6jvlU2Q8f84W4x4Zf/6YYpwzXIm8uyyWig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Skin Care</title>
</head>
<body>
    <nav>
        <ul class="hovs" style="margin-left:20%;">
            <li class="hov"><a href="./home.html">Home</a></li>
            <li class="hov"><a href="./bio-herbel.html" style="color: rgb(241, 140, 142);">Products</a></li>
            <li style="font-size: 30px; padding-left: 20px; padding-right: 20px;"><span>Cozy</span></li>
            <li class="hov"><a href="./login.php">Log in</a></li>
            <li class="hov"><a href="">Blog</a></li>
        </ul>
        <form action="" class="search-box">
            <input type="text" placeholder="Search" required/>
            <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
        </form>
    </nav>

    <div class="container-product">
        <div class="box-1">
            <img src="./img7.jpg" >
            <div class="text-container">
                <p> All Products:</p>
            </div>
        </div>

        <div class="box-2">
            <div class="products-container">
                <ul>
                    <li><a class="categorie" href="./bio-herbel.html" >Bio-herbel</a></li>
                    <li><a class="categorie" href="./body-lotion.php">Body lotion</a></li>
                    <li><a class="categorie" href="">Candle-spa</a></li>
                    <li><a class="categorie" href="./skin-care.html"  style="color: rgb(234, 177, 178);">Skin care</a></li>
                </ul>
                <hr>
                <div class="products">
                    <div class="product" style="grid-area: pd1;" >
                        <img src="./skin care/524551_3.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd2;">
                        <img src="./skin care/6011c2a66dfbe10018e0052e.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" id="idd" style="grid-area: pd3;">
                        <img src="./skin care/61bxLljb4bL._SL1500_.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd4;">
                        <img src="./skin care/best-cheap-skincare-tools-289540-1602522763559-main.700x0c.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd5;">
                        <img src="./skin care/best-skincare-brands-285756-1582681963908-main.700x0c.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd6;">
                        <img src="./skin care/best-skincare-brands-285756-1582682039555-main.700x0c.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd7;">
                        <img src="./skin care/CL_1-20--20Olay-20Moisturizing-20Cream-20100g_FOP_0308.png" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd8;">
                        <img src="./skin care/6.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd9;">
                        <img src="./skin care/ClassicMoisturizer-Front_1474x.jpg"onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd10;">
                        <img src="./skin care/cnc_381370033424_us_daily_pore_cleanser_5.5oz_00000-min.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd11;">
                        <img src="./skin care/Custom_Shopify_Size-3_600x.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                    <div class="product" style="grid-area: pd12;">
                        <img src="./skin care/7.jpg" onclick="toggleProductDescription('Product description text.')">
                        <div class="product-description">
                            <i class="far fa-heart" onclick="changeIcon(this)"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border1"></div>

    <div class="part-4">
        <h1>Contact Us</h1>
        <form id="form">
            <input type="text"
                    id="name"
                    placeholder="Enter your name" />
            <input type="email"
                    id="email"
                    placeholder="Enter your email" />
            <textarea id="comment" rows="6" placeholder=" Enter your comment here..."></textarea>
            <button value="submit" >
                SEND MESSAGE
            </button>
        </form>
        <?php
// <!-- // Connexion à la base de données MySQL -->
$conn = mysqli_connect('localhost', 'layel', 'layel1234aya1234', 'projet');

// <!-- // Vérification de la connexion -->
if (!$conn) {
    die('Erreur de connexion à la base de données');
}

// <!-- // Traitement du formulaire d'inscription -->
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
    // <!-- // Récupération des données du formulaire -->
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['comment'];
    // <!-- // Insertion des données de l'utilisateur dans la table "utilisateurs" -->
    $query = "INSERT INTO contact (name, email,phone,comment) VALUES ('$name', '$email','$comment')";
    $result = mysqli_query($conn, $query);

    // <!-- // Vérification de l'insertion -->
    if ($result) {
        echo '<script>document.getElementById("message").innerHTML = "message envoyé";</script>';
    } else {
        echo '<script>document.getElementById("message").innerHTML = "Erreur lors de l\'envoi";</script>';    }
}
?>
    </div>

    <div class="border2"></div>

    <footer>
        <div class="footer">
            <div class="contact">
                <h2>KEEP ON TOUCH</h2>
                <div class="icons">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
                <br>
                <div class="contact">
                    <ul style="list-style-type:none;">
                        <li><i class="material-icons">phone</i>+216 70 158 269</li>
                        <li><i class="material-icons">email</i>contact@gmail.com</li>
                        <li><i class="material-icons">place</i>Campus Mannouba</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="photo">
              <img  class="imag" src="./bb.jpg" >
            </div>
        </div>
    </footer>
    
</body>
<script src="./products.js"></script>
</html>