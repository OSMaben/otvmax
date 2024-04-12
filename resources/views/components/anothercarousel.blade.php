<style>
    @keyframes carouselAnimma {
        from {
            transform: translate(0, 0);
        }

        to {
            transform: translate(calc(-100% + (12*100px)));
        }
    }

    @media only screen and (max-width: 768px) {
        .container .carousel-items {
            animation: carouselAnimma 60s infinite alternate linear;
        }

        @keyframes carouselAnimma {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(calc(-100% + (12*100px)));
            }
        }
    }

    .carousel-focus:hover {
        transition: all 0.8s;
        transform: scale(1.1);
    }
</style>
<div class=" leanding-normal tracking-wide">



    <div class="   lg:mx-24 overflow-hidden relative">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0"
                style="background: linear-gradient(to right, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="w-1/4 h-full absolute z-50 right-0"
                style="background: linear-gradient(to left, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
        </div>

        <div class="carousel-items flex items-center justify-center"
            style="width: fit-content; animation: carouselAnimma 10s infinite alternate linear;">
            @for ($i = 1; $i < 25; $i++)
                <div
                    class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-44 w-44 rounded-lg  ">
                    <img src ="{{ asset("chanel/{$i}.png") }}" />

                </div>
            @endfor




















        </div>

    </div>

</div>
