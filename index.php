<?php include './classes/class-bloger.php' ?>

<?php 

$card = new bloger();

$cards = $card -> getArticle();

  ?>

<?php include './templet/header.php' ?>



<!------------------------------section navbar------------------------->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">

    <div class="container">
        <a href="#" class="navbar-brand fs-4">Navbar</a>
        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navbar">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNav">
            <div class=" mx-auto"></div>
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="#" class="nav-link text-white fs-4 ">Home</a>
                </li>
                <li class="nav-item">
                    <a href="./login.php" class="nav-link text-white fs-4">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white fs-4">Contact us</a>
                </li>

            </ul>
        </div>
    </div>

</nav>

<!--------------------iamge---->
<div class="banner-image w-100 vh-100 d-flex flex-column justify-content-end align-items-start ">
    <div class="mb-3  text-white ">
        <h1 class="mx-3 fs-2">what do you want to read today ?</h1>
    </div>
    <div class="mb-5 text-gray ">
        <h2 class="mx-3 fs-3">share your knowledge with your </br>
            friends and relative</h2>
    </div>
</div>
<!------------------cards------------->
<div class="container mt-4">
    <div class="row">
        <div class="row align-self-start">

            <div class="col-md-4">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
<!-- 
            <div class="col-md-4">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="./images/design.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div> -->

          

        </div>
    </div>
</div>

<!------------------foooter------------->
<div class="footer">

<div class="list">
    <small>Home</small>
    <small>TRIPS</small>
    <small>EPICS</small>
    <small>BLOG</small>
</div>

<div class="list">
    <small>FIND AN ADVENTURE</small>
    <small>SUILD CUSTOM TRIP</small>
    <small>MY LIST</small>
    <small>LOGIN</small>  
</div>

<div class="list">
    <small>CONTACT US</small>  
    <small>Facebook</small>
    <small>Instagram</small>
    <small>Twitter</small>
</div>

</div>



<?php include './templet/footer.php' ?>