<style>
    @keyframes carouselAnimm {
        from {
            transform: translate(0, 0);
        }

        to {
            transform: translate(calc(-100% + (14*100px)));
        }
    }

    @media only screen and (max-width: 768px) {
        .container .carousel-items {
            animation: carouselAnimm 60s infinite alternate linear;
        }

        @keyframes carouselAnimm {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(calc(-100% + (14*100px)));
            }
        }
    }

    .carousel-focus:hover {
        transition: all 0.8s;
        transform: scale(1.1);
    }
</style>
<div class="flex h-auto pb-8 justify-center items-center dark:bg-slate-800">
    <div class="mx-auto mt-10 flex justify-center px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8">
        <div class="text-center ">
            <h1
                class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-slate-200 sm:text-5xl md:text-6xl">
                <span class="block xl:inline"><span class="mb-1 block">+ 69 000 chaînes</span>
                <span class="bg-gradient-to-r from-indigo-400 to-pink-600 bg-clip-text text-transparent">
                    Diffusion illimitée des derniers films, séries et variantes de chaînes en direct.
                </span>
                </span>
                <div class="mt-2">10X faster
                    <span class="relative mt-3 whitespace-nowrap text-blue-600"><svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-3/4 left-0 right-0 m-auto h-[0.58em] w-fit fill-pink-400/50"
                        preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative">with AI tools.</span>
                    </span>
                </div>
            </h1>

        </div>
    </div>
</div>
<div class=" leanding-normal tracking-wide">



    <div class="   lg:mx-24 overflow-hidden relative">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0"
                style="background: linear-gradient(to right, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="w-1/4 h-full absolute z-50 right-0"
                style="background: linear-gradient(to left, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
        </div>

        <div class="carousel-items flex items-center justify-center"
            style="width: fit-content; animation: carouselAnimm 10s infinite alternate linear;">

            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/4-1.jpeg') }}" />

            </div>
            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/2-1.jpeg') }}" />

            </div>
            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/5.jpeg') }}" />

            </div>

            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/13.jpeg') }}" />

            </div>

            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/8.jpeg') }}" />

            </div>




            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/10.jpeg') }}" />

            </div>
            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/11.jpeg') }}" />

            </div>



            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/14.jpeg') }}" />

            </div>


            <div
                class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10  h-64 w-48 rounded-lg shadow-lg">
                <img src ="{{ asset('filmImage/16.webp') }}" />

            </div>

















        </div>

    </div>

</div>
