<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>swipper library</title>
    <!-- In <head> section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .swiper {
            width: 100%;
            height: 700px;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <!-- Swiper -->
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="{{ asset('images/img1.jpg') }}" alt="Image 1"></div>
                <div class="swiper-slide"><img src="{{ asset('images/img2.jpg') }}" alt="Image 2"></div>
                <div class="swiper-slide"><img src="{{ asset('images/img3.jpg') }}" alt="Image 3"></div>
                <!-- Add more slides as needed -->
            </div>

            <!-- If you want pagination -->
            <div class="swiper-pagination"></div>

            <!-- If you want navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

</body>
<!-- Before closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>



</html>
