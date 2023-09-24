<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hive Project</title>
        <link rel="icon" href="img/logo.png" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha384-Ff5385BvZ3v2FtCf5z5FE7JRgsK8ipS9f3pGFG5F1fUMK7zy2t8d6S9GqF5z5n4D"
            crossorigin="anonymous"
        />

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo"><img src="img/logo.png"></div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>Reach All You Need</h1>
                        <p>Don’t worry we only give you the best deals, best quality and finished on time.</p>
                        <div class="hero-buttons">
                            <a href="https://www.youtube.com/playlist?list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR" class="button button-white">Screencasts</a>
                            <a href="https://github.com/drehimself/laravel-ecommerce-example" class="button button-white">GitHub</a>
                        </div>
                    </div> <!-- end hero-copy -->    
                </div> <!-- end hero -->
                <div class="promo-section">
                    <div class="promo-container">
                        <img src="img/promo.jpeg" alt="hero image" height="350">
                    </div>
                </div>
            </header>           
           
            <div class="kenali-section">
                <div class="text-kenali">Kenali Kami Lebih Dekat</div>
                <div class="container-kenali-img">
                    <img src="img/kenali.png">
                </div>
            </div>

            <div class="order-section">
                <!-- cara order section -->
            </div>

            <div class="know-section">
                <div class="text-know">Get to know us</div>
                <div class= "text-kecil-know">"We are ready to assist you in every stage of production, from design to delivery, so you can feel at ease and confident that the products you order will arrive safely and on time."</div>
                <div>
                    <link href="./c_frame19.css" rel="stylesheet" />
                    <div class="c_frame19-frame">
                        <div class="c_frame19-frame01">
                        <div class="c_frame19-frame02">
                            <!-- <div class="c_frame19-frame03">
                            <img
                                src="./assets/2732961.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance"
                                />
                            </div> -->
                            <img
                                src="img/money.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame04">
                            <div class="c_frame19-text">
                                <p class="c_frame19-text01">Best Price</p>
                            </div>
                            <div class="c_frame19-text02">
                                <p class="c_frame19-text03">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="c_frame19-frame05">
                            <!-- <div class="c_frame19-frame06">
                            <img
                                src="./assets/3033025.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance1"
                                />
                            </div> -->
                            <img
                                src="img/time.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame07">
                            <div class="c_frame19-text04">
                                <p class="c_frame19-text05">On Time</p>
                            </div>
                            <div class="c_frame19-text06">
                                <p class="c_frame19-text07">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="c_frame19-frame08">
                            <!-- <div class="c_frame19-frame09">
                            <img
                                src="./assets/3033079.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance2"
                                />
                            </div> -->
                            <img
                                src="img/calendar.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame10">
                            <div class="c_frame19-text08">
                                <p class="c_frame19-text09">Flexible Order</p>
                            </div>
                            <div class="c_frame19-text10">
                                <p class="c_frame19-text11">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="c_frame19-frame11">
                            <!-- <div class="c_frame19-frame12">
                            <img
                                src="./assets/3033158.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance3"
                                />
                            </div> -->
                            <img
                                src="img/quality.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame13">
                            <div class="c_frame19-text12">
                                <p class="c_frame19-text13">Best Quality</p>
                            </div>
                            <div class="c_frame19-text14">
                                <p class="c_frame19-text15">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="c_frame19-frame14">
                        <div class="c_frame19-frame15">
                            <!-- <div class="c_frame19-frame16">
                            <img
                                src="./assets/3033223.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance4"
                                />
                            </div> --> <img
                                src="img/trust.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame17">
                            <div class="c_frame19-text16">
                                <p class="c_frame19-text17">Trusted</p>
                            </div>
                            <div class="c_frame19-text18">
                                <p class="c_frame19-text19">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="c_frame19-frame18">
                            <!-- <div class="c_frame19-frame19">
                            <img
                                src="./assets/3033235.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance5"
                                />
                            </div> -->
                            <img
                                src="img/design.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame20">
                            <div class="c_frame19-text20">
                                <p class="c_frame19-text21">Free Design</p>
                            </div>
                            <div class="c_frame19-text22">
                                <p class="c_frame19-text23">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="c_frame19-frame21">
                            <!-- <div class="c_frame19-frame22">
                            <img
                                src="./assets/3033241.svg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            </div> -->
                            <img
                                src="img/guaranted.jpg"
                                alt="instance"
                                width="40"
                                height="40"
                                class="c_frame19-instance6"
                                />
                            <div class="c_frame19-frame23">
                            <div class="c_frame19-text24">
                                <p class="c_frame19-text25">Guaranteed</p>
                            </div>
                            <div class="c_frame19-text26">
                                <p class="c_frame19-text27">
                                We offer convection services at affordable prices and satisfying
                                results.
                                </p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>

        </div>   

            <div class="featured-section">  
                    {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">View more products</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <blog-posts></blog-posts>

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
