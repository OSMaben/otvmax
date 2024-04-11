<style>
    @keyframes carouselAnim {
  from {
    transform: translate(0, 0);
  }
  to {
    transform: translate(calc(-100% + (6*300px)));
  }
}

@media only screen and (max-width: 768px) {
  .container .carousel-items {
    animation: carouselAnim 60s infinite alternate linear;
  }
  @keyframes carouselAnim {
    from {
      transform: translate(0, 0);
    }
    to {
      transform: translate(calc(-100% + (5*300px)));
    }
  }
}

.carousel-focus:hover {
  transition: all 0.8s;
  transform: scale(1.1);
}
</style>
<div class=" leanding-normal tracking-wide">



    <div class=" mx-auto w-full overflow-hidden relative">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0" style="background: linear-gradient(to right, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="w-1/4 h-full absolute z-50 right-0" style="background: linear-gradient(to left, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
        </div>

        <div class="carousel-items flex items-center justify-center" style="width: fit-content; animation: carouselAnim 10s infinite alternate linear;">

            <div class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10 px-4 py-3 h-60 w-48 rounded-lg shadow-lg"    >
                <img src ="{{asset("images/dizi-hr.png")}}"/>

            </div>
             <div class="carousel-focus flex items-center justify-center flex-col relative bg-white mx-5 my-10 px-4 py-3 h-60 w-48 rounded-lg shadow-lg"    >
                <img src ="{{asset("images/nova-sport-hr.png")}}"/>

            </div>








        </div>

    </div>

</div>

