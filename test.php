<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
          integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
          integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="style/test.css">
</head>
<body>
<?php include "header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1>Image Carousel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="carousel card-block">
                    <img class="card-img-top" src="//images.unsplash.com/photo-1473269276654-ec06ffa8b38e?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                    <img class="card-img-top" src="//images.unsplash.com/photo-1474470172489-c75ce5cbf836?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                    <img class="card-img-top" src="//images.unsplash.com/photo-1474905187624-b3deaf7aa4c2?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                    <img class="card-img-top" src="//images.unsplash.com/photo-1474925558543-e7a5f06e733e?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                    <img class="card-img-top" src="//images.unsplash.com/photo-1462817658085-08dd93969195?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                </div>
            </div>
            <div class="carousel-nav card-block">
                <img class="card-img-top" src="//images.unsplash.com/photo-1473269276654-ec06ffa8b38e?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                <img class="card-img-top" src="//images.unsplash.com/photo-1474470172489-c75ce5cbf836?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                <img class="card-img-top" src="//images.unsplash.com/photo-1474905187624-b3deaf7aa4c2?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                <img class="card-img-top" src="//images.unsplash.com/photo-1474925558543-e7a5f06e733e?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
                <img class="card-img-top" src="//images.unsplash.com/photo-1462817658085-08dd93969195?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=767&h=511&q=80&cs=tinysrgb" />
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('.carousel').slick({
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.carousel-nav'
        });
        jQuery('.carousel-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.carousel',
            dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true
        });
    });

    // Lorem Ipsum Generator by Luke Jackson
    // https://codepen.io/lukejacksonn/pen/rCdEb
    (function() {
        jQuery.fn.lorem = function(_length) {
            return this.each(function() {

                // Amount of words required
                var _length = _length || jQuery(this).data('lorem') || (Math.floor(Math.random() * 50) + 3);

                var charAtEndOfOut = function(char, step) {
                    return out.indexOf(char, out.length - step - 1) !== -1;
                };

                var randomWord = function() {
                    return words[Math.floor(Math.random() * (words.length - 1))];
                };

                var capitalize = function(word) {
                    return word[0].toUpperCase() + word.slice(1);
                };

                // Dictionary of words
                var paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                    words = paragraph.split(" "),
                    word = "",
                    out = capitalize(randomWord());

                for (var i = 1; i < _length; i = i + 1) {

                    // Select random word from paragraph
                    word = randomWord();
                    out += " ";

                    // Append to out, capitalize first letter if necessary
                    out += (charAtEndOfOut('.', 1) || charAtEndOfOut('?', 1)) ?
                        capitalize(word) :
                        word.toLowerCase();
                }

                // Append full stop to the end of string, strip punctuation if necessary
                out = (charAtEndOfOut('.') || charAtEndOfOut(',') || charAtEndOfOut('?')) ?
                    out.slice(0, -1) + "." :
                    out + ".";

                jQuery(this).text(out);

            });
        };

        jQuery("[data-lorem]").lorem();
    })(jQuery);
</script>


</body>
</html>
