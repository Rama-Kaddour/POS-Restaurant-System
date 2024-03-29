<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="icon" type="image/x-icon" href="/assets/food-restaurant-svgrepo-com.svg">
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.xyz/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        .navbar{
            background-color: #2C294B;
        }
        .navbar-brand{
            color: white;
        }


        .btn-search{
            background-color: #4b4968 !important;
            color: white !important;
            border: 0 !important;
        }
        .btn-search:hover{
            background-color: #403E5D;
            color: white;
        }
        .input-group .form-control{
            background-color: #403E5D !important;
            border: 0 !important;
        }
        .input-group .form-control::placeholder{
            color: white !important;
        }


        .btn-nav{
            background-color: #4b4968 !important;
            color: white !important;
            width: 40px;
        }
        .btn-new{
            width: 156px;
        }

        .nav-link > .card{
            width: 160px;
            border: 3px lightgray solid;
        }
        .nav-link.active > .card{
            width: 160px;
            border: 3px blue solid;
        }
        .nav-pills .nav-link.active{
            background-color: transparent;
        }


        .payment-button{
            filter: grayscale(0.8);
            border: 0;
        }
        .payment-button:hover{
            filter: grayscale(0);
        }
        .payment-button:focus{
            filter: grayscale(0);
            border: 2px solid blue;
        }


        .hide-elements{
            display: none !important;
        }
        .fixed-topp{
            /* position: relative; */
            top: 0;
            padding: 15px !important;
        }
        

        .cards{
            position: relative;
        }

        .button-cart{
            width: 50px;
            height: 50px;
            border-radius: 50% !important;
            margin-top: 25px !important;
            position: fixed;
            bottom: 15px;
            right: 20px;
        }

        #boot-icon{
            font-size: 1.1rem;
            color: white;
            border: 0 !important;
            border-radius: 25%;
            margin-left: 10px;
        }

        @media (min-width:768px){
            .payment-button{
                width: 75% !important;
            }

            .btn-new{
                width: 95px;
            }

            .navbar{
                width: 100%;
                position: absolute;
                top: 0;
                padding-top: 35px !important;
                padding-bottom: 100px !important;
            }
            .cards{
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, 56%);
                overflow-x: hidden !important;
            }

            .pill-card{
                width: 99% !important;
            }
            .tab-content{
                margin-top: 70px !important;
            }

            .hide-elements{
                display: inline !important;
            }

        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar py-5 fixed-topp" id="padding">
    <div class="container-fluid"> 
            <div class="row w-100 d-flex">
                <div class="col-6 col-md-8 ps-md-4 mt-2 pt-md-1 align-self-center">
                    <a class="navbar-brand fw-bold text-white" href="second.html">POS System</a> 
                </div>
                <div class="col-6 col-md-2 mt-3 mt-md-2">
                    <div class="input-group me-0 float-end">
                        <button class="btn btn-search" type="button" id="button-addon2" disabled><i class="bi bi-search"></i></button>
                        <input type="text" class="form-control text-white me-2" placeholder="Find Goods" aria-label="Find Goods" aria-describedby="button-addon2">
                    </div>
                </div>
                <div class="col-md-2 col mt-4 mt-md-2 hide-elements" id="hide">
                    <div class="d-flex float-md-end justify-content-between">
                        <button type="button" class="btn btn-nav me-md-2"><i class="bi bi-bell-fill"></i></button>
                        <button type="button" class="btn btn-nav me-md-2"><i class="bi bi-person-fill"></i></button>
                        <button type="button" class="btn btn-nav me-md-2"><i class="bi bi-brightness-low"></i></button>
                        <button type="button" class="btn btn-primary btn-new">New Goal</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</nav>

<div class="conttainer">
    <div class="row mw-100 text-black d-flex justify-content-center mt-2 mb-5">
        <div class="col-12 col-md-8 ">
            <ul class="nav nav-pills mb-3 mb-md-5 pb-md-5 ps-md-4 " id="pills-tab" role="tablist">
                <div class="cards d-flex justify-content-between w-100" style="overflow-x: auto;">
                    <div class="col-6 col-md-2">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-lunch-tab" data-bs-toggle="pill" data-bs-target="#pills-lunch" type="button" role="tab" aria-controls="pills-lunch" aria-selected="true">
                            <div class="card p-2 pill-card">
                                <img src="assets/img/spaghetti-svgrepo-com.svg" class="w-50 align-self-center mt-3" alt="">
                                <div class="card-body">
                                <h5 class="card-title" style="font-size: 17px !important;">Lunch</h5>
                                <p class="card-text text-secondary" style="font-size: 12px !important;">8 options</p>
                                </div>
                            </div>
                        </button>
                        </li>
                    </div>
                    <div class="col-6 col-md-2 ">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-salad-tab" data-bs-toggle="pill" data-bs-target="#pills-salad" type="button" role="tab" aria-controls="pills-salad" aria-selected="false">
                            <div class="card p-2 pill-card ">
                                <img src="assets/img/salad-svgrepo-com.svg" class="w-50 align-self-center mt-3" alt="">
                                <div class="card-body">
                                <h5 class="card-title" style="font-size: 17px !important;">Salad</h5>
                                <p class="card-text text-secondary" style="font-size: 12px !important;">14 Salads</p>
                                </div>
                            </div>
                        </button>
                        </li>
                    </div>
                    <div class="col-6 col-md-2 ">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-burger-tab" data-bs-toggle="pill" data-bs-target="#pills-burger" type="button" role="tab" aria-controls="pills-burger" aria-selected="false">
                            <div class="card p-2 pill-card">
                                <img src="assets/img/hamburger-burger-svgrepo-com.svg" class="w-50 align-self-center mt-3" alt="">
                                <div class="card-body">
                                <h5 class="card-title" style="font-size: 17px !important;">Burger</h5>
                                <p class="card-text text-secondary" style="font-size: 12px !important;">5 Burgers</p>
                                </div>
                            </div>
                        </button>
                        </li>
                    </div>
                    <div class="col-6 col-md-2 ">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-coffee-tab" data-bs-toggle="pill" data-bs-target="#pills-coffee" type="button" role="tab" aria-controls="pills-coffee" aria-selected="false">
                                <div class="card p-2 pill-card">
                                    <img src="assets/img/coffe-svgrepo-com.svg" class="w-50 align-self-center mt-3" alt="">
                                    <div class="card-body">
                                    <h5 class="card-title" style="font-size: 17px !important;">Coffee</h5>
                                    <p class="card-text text-secondary" style="font-size: 12px !important;">7 Beverages</p>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <div class="col-6 col-md-2 ">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dessert-tab" data-bs-toggle="pill" data-bs-target="#pills-dessert" type="button" role="tab" aria-controls="pills-dessert" aria-selected="false">
                                <div class="card p-2 pill-card">
                                    <img src="assets/img/birthday-cake-svgrepo-com.svg" class="w-50 align-self-center mt-3" alt="">
                                    <div class="card-body">
                                    <h5 class="card-title" style="font-size: 17px !important;">Dessert</h5>
                                    <p class="card-text text-secondary" style="font-size: 12px !important;">8 Desserts</p>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                </div>
            </ul>
        
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab" tabindex="0">
                    <div class="row ms-2 ps-1">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chef’s Salmon</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Soup of the Day</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sweety</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pancakes</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chicken Breast</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Breakfast</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-salad" role="tabpanel" aria-labelledby="pills-salad-tab" tabindex="0">
                    <div class="row ms-2">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Breakfast</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sweety</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chef’s Salmon</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Soup of the Day</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pancakes</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chicken Breast</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab" tabindex="0">
                    <div class="row ms-2">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chef’s Salmon</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Soup of the Day</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sweety</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pancakes</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chicken Breast</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Breakfast</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-coffee" role="tabpanel" aria-labelledby="pills-coffee-tab" tabindex="0">
                    <div class="row ms-2">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Soup of the Day</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Breakfast</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sweety</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pancakes</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chicken Breast</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chef’s Salmon</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab" tabindex="0">
                    <div class="row ms-2">
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tenderlion Steak</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chef’s Salmon</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Soup of the Day</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sweety</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pancakes</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$19.00$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Chicken Breast</h5>
                                    <p class="card-text text-secondary">T-Bone Stake</p>
                                    <p class="card-text text-success fw-bold">$16.50$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-3">
                            <div class="card p-2 px-5 pill-content">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="w-75 align-self-center mt-3 p-3 px-5 rounded-50" style="background-color: rgb(234, 234, 234) !important;" alt="">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Breakfast</h5>
                                    <p class="card-text text-secondary">16 mins to cook</p>
                                    <p class="card-text text-success fw-bold">$12.40$ <button id="boot-icon" class="bi bi-cart-plus bg-success"></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-4 mt-2 ms-4 ms-md-0 ps-4 pe-4 mt-md-5 pt-md-3 d-none d-md-block">
            <div class="card mt-md-5" style="border: lightgrey solid 3px;">
                <div class="card-body">
                    <div class="row d-flex justify-content-between mb-3">
                        <div class="col-6">
                            <h3 class="card-title mt-3 mb-4" style="font-weight: 600;">Current Order</h3>
                        </div>
                        <div class="col-6 align-self-center d-flex justify-content-end pe-3">
                            <button id="clearAll" type="button" class="btn fw-bold text-primary" style="background-color: rgb(212, 230, 239) !important;">Clear All</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="row d-flex justify-content-between mb-2">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 14px; font-weight:500;">T-Bone Stake</p>
                            </div>
                            <div class="col-4 d-flex align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">26.50$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 400;">26.50$</p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between mb-2">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 13.9px; font-weight:500;">Soup of the Day</p>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">40$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 400;">40.00$</p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between mb-2">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/ryan-concepcion-w_z0RJCSBiE-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 15px; font-weight:500;">Pancakes</p>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">33.50$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 400;">33.50$</p>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-success text-white m-1 rounded p-2 pt-3 mt-4">
                        <div class="row d-flex justify-content-between">
                            <p class="col subtotal" style="font-size: 15px; font-weight:500;">Subtotal</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">$100.00</p>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <p class="col discounts" style="font-size: 15px; font-weight:500;">Discounts(-3.5%)</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">-$3.50</p>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <p class="col tax" style="font-size: 15px; font-weight:500;">Tax(12%)</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">$12.00</p>
                        </div>
                        <div class="row d-flex justify-content-between mt-2">
                            <p class="col total" style="font-size: 25px; font-weight:500;">Total</p>
                            <p class="col text-end  align-self-center" style="font-size: 20px; font-weight:500;">$108.50</p>
                        </div>
                    </div>
                    
                    <div class="row mw-100 ms-1 mt-2">
                        <h4 class="mt-4 mb-4" style="font-weight: 600;">Payment Method</h5>
                    </div>
                    <div class="row mw-100 ms-1 d-flex justify-content-between">
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100 " style="background-color: rgb(216, 230, 237) !important; border-radius: 20%;">
                                <i class="bi bi-cash-coin align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text">Cash</h6>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100" style="background-color: rgb(212, 230, 239) !important; border-radius: 20%;">
                                <i class="bi bi-credit-card-2-front align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text">Card</h6>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100 px-1" style="background-color: rgb(212, 230, 239) !important; border-radius: 20%;">
                                <i class="bi bi-wallet-fill align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text" style="font-size: 14.5px !important; font-weight:500 !important;">E-Wallet</h6>
                            </button>
                        </div>
                    </div>
                    <div class="row mw-100 d-flex justify-content-center mt-4 mx-4">
                        <button class="btn btn-primary btn-lg">Print Bills</button>
                    </div>
                </div>
              </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary d-md-none button-cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-cart4"></i>
        </button>
        
        <!-- Modal -->
        <div class="modal fade d-md-none ps-3" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex justify-content-between mb-1">
                        <div class="col-6">
                            <h3 class="card-title mb-2" style="font-weight: 600;">Current Order</h3>
                        </div>
                        <div class="col-6 align-self-center d-flex justify-content-end pe-2">
                            <button type="button" class="btn fw-bold text-primary" style="background-color: rgb(212, 230, 239) !important;">Clear All</button>
                        </div>
                    </div>
                    <div class="">
                        <div class="row d-flex justify-content-between mb-1">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/anh-nguyen-kcA-c3f_3FE-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 14px; font-weight:500;">T-Bone Stake</p>
                            </div>
                            <div class="col-4 d-flex align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">26.50$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 500;">26.50$</p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between mb-1">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/sina-piryae-bBzjWthTqb8-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 13.9px; font-weight:500;">Soup of the Day</p>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">40$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 500;">40.00$</p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between mb-1">
                            <div class="col-2 align-self-center">
                                <img src="assets/img/ryan-concepcion-w_z0RJCSBiE-unsplash.jpg" class="rounded mw-100" alt="">
                            </div>
                            <div class="col-4 align-self-center pt-3">
                                <p class="" style="font-size: 15px; font-weight:500;">Pancakes</p>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="input-group w-auto align-items-center align-self-center">
                                    <input type="button" value="-" class="qt-minus button-minus border rounded text-secondary pt-n" style="font-weight: 900; width: 25px; font-size: 18px; height: 25px !important;" data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity" class="qt quantity-field border-0 text-center w-25 me-0 ms-0 me-md-2 ms-md-4">
                                    <input type="button" value="+" class="qt-plus button-plus border rounded fw-bold text-secondary" style="width: 25px;" data-field="quantity">
                                </div>
                            </div>
                            <h2 class="price d-none">33.50$</h2>
                            <div class="col-2 align-self-center pt-3">
                                <p class="full-price text-primary" style="font-size: 13.3px; font-weight: 500;">33.50$</p>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-success text-white m-1 rounded p-1 pt-2 mt-3">
                        <div class="row d-flex justify-content-between">
                            <p class="col subtotal" style="font-size: 15px; font-weight:500;">Subtotal</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">$100.00</p>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <p class="col discounts" style="font-size: 15px; font-weight:500;">Discounts(-3.5%)</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">-$3.50</p>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <p class="col tax" style="font-size: 15px; font-weight:500;">Tax(12%)</p>
                            <p class="col text-end" style="font-size: 15px; font-weight:500;">$12.00</p>
                        </div>
                        <div class="row d-flex justify-content-between mt-2">
                            <p class="col total" style="font-size: 25px; font-weight:500;">Total</p>
                            <p class="col text-end  align-self-center" style="font-size: 20px; font-weight:500;">$108.50</p>
                        </div>
                    </div>
                    
                    <div class="row mw-100 ms-1 mt-3">
                        <h4 class="mt-2 mb-3" style="font-weight: 600;">Payment Method</h5>
                    </div>
                    <div class="row mw-100 ms-1 d-flex justify-content-between">
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100 " style="background-color: rgb(216, 230, 237) !important; border-radius: 20%;">
                                <i class="bi bi-cash-coin align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text">Cash</h6>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100" style="background-color: rgb(212, 230, 239) !important; border-radius: 20%;">
                                <i class="bi bi-credit-card-2-front align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text">Card</h6>
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="d-block payment-button btn btn-lg w-100 h-100 px-1" style="background-color: rgb(212, 230, 239) !important; border-radius: 20%;">
                                <i class="bi bi-wallet-fill align-self-center text-primary mt-3"  style="font-size: 27px;"></i>
                                <h6 class="card-text" style="font-size: 14.5px !important; font-weight:500 !important;">E-Wallet</h6>
                            </button>
                        </div>
                    </div>
                    <div class="row mw-100 d-flex justify-content-center mt-3 mx-4">
                        <button class="btn btn-primary ms-1">Print Bills</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.xyz/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script> -->
<!-- counter + - -->
<script>
    document.addEventListener('DOMContentLoader' , () => {
        
        const addToCart = document.querySelectorAll('#pills-tabContent .bi-cart-plus')

        addToCart.forEach(button => {
            button.addEventListener('click', (e) => {
                
            });
        });
    })
</script>
<script>
    function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(1);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 1) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(1);
        }
    }

    $('.input-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
</script>

<!-- change after scroll -->
<script>
    const fnav = document.getElementById('hide')
    window.addEventListener('scroll' , () => {
      if (window.scrollY >= 60){
            fnav.classList.add('hide-elements')
        }
        else if (window.scrollY <60){
            fnav.classList.remove('hide-elements')
        }
    })

    const customPadding = document.getElementById('padding')
    window.addEventListener('scroll' , () => {
      if (window.scrollY >= 60){
            fnav.classList.add('fixed-topp')
        }
        else if (window.scrollY <60){
            fnav.classList.remove('fixed-topp')
        }
    })
</script>
<!-- calculations -->
<script>
var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(el.parent().children(".price").html());
  var eq = Math.round(price * qt * 100) / 100;
  
  el.parent().children(".full-price").html( eq + "$" );
  
  changeTotal();			
}

function changeTotal() {
  
  var price = 0;
  
  $(".full-price").each(function(index){
    price += parseFloat($(".full-price").eq(index).html());
  });
  
  price = Math.round(price * 100) / 100;
  var tax = Math.round(price * 0.12 * 100) / 100;
  var discounts = Math.round(price * -0.03 * 100) / 100;
  var fullPrice = Math.round((price + tax + discounts) *100) / 100;
  
  if(price == 0) {
    fullPrice = 0;
  }
  
  $(".subtotal span").html(price);
  $(".tax span").html(tax);
  $(".total span").html(fullPrice);
}

$(document).ready(function(){
  
  $(".remove").click(function(){
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(
      function(){
        el.parent().parent().slideUp('fast', function() { 
          el.parent().parent().remove(); 
          if($(".product").length == 0) {
            if(check) {
              $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal(); 
        });
      }, 200);
  });
  
  $(".qt-plus").click(function(){
    $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    
    $(this).parent().children(".full-price").addClass("added");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
  });
  
  $(".qt-minus").click(function(){
    
    child = $(this).parent().children(".qt");
    
    if(parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }
    
    $(this).parent().children(".full-price").addClass("minused");
    
    var el = $(this);
    window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
  });
  
  window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);
  
  $(".btn").click(function(){
    check = true;
    $(".remove").click();
  });
});


</script>
</body>
</html>