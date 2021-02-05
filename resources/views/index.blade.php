<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rbhstudio</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="font-sans">
    <nav x-data="{show:false}" class="flex items-center justify-between flex-wrap bg-gray-800 p-4">
        <div class="flex items-center flex-shrink-0 text-gray-100 mr-6">
          {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
          <img src="{{ url('storage/images/black-hole.png') }}" class="h-8 w-8 mr-2">
          <span class="font-semibold text-xl tracking-tight">rbhstudio</span>
        </div>
        <div class="block md:hidden">
          <button @click="show=!show" class="flex items-center px-3 py-2 border rounded text-gray-100 border-gray-100 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div @click.away="show = false" :class="{ 'block': show, 'hidden': !show }" class="w-full block flex-grow md:flex md:justify-end md:w-auto">
          <div class="mr-8">
            <a href="#" class="block md:inline-block text-md px-4 py-2 leading-none border border-r-0 border-l-0 text-gray-100 border-transparent hover:border-white hover:text-white hover:border-opacity-50 hover:text-teal-500 mt-4 md:mt-0 lowercase menu-p">Home</a>
             <a href="#" class="block md:inline-block text-md px-4 py-2 leading-none border border-r-0 border-l-0 text-gray-100 border-transparent hover:border-white hover:text-white hover:border-opacity-50 hover:text-teal-500 mt-4 md:mt-0 lowercase">Services</a>
             <a href="#" class="block md:inline-block text-md px-4 py-2 leading-none border border-r-0 border-l-0  text-gray-100 border-transparent hover:border-white hover:text-white hover:border-opacity-50 hover:text-teal-500 mt-4 md:mt-0 lowercase">Products</a>
            </div>
        </div>
      </nav>
      <section class="hero bg-gray-600 h-96 shadow-lg">
        <div class="flex flex-wrap -mx-px overflow-hidden sm:-mx-px md:-mx-px lg:-mx-px xl:-mx-px">
            <div class="w-full overflow-hidden lg:w-1/2 xl:w-1/2 text-white">
                <div class="text-2xl text-center pt-28 pl-8 pr-8 ml-8">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere ultricies ex, nec pellentesque lorem tristique nec. Aliquam erat volutpat. In hac habitasse platea dictumst. Donec maximus est quis libero convallis tristique.
                </div>
            </div>

            <div class="w-full h-full overflow-hidden lg:w-1/2 xl:w-1/2 pl-12 items-center">
              {{-- <img src="{{ url('storage/images/bg.jpg') }}" class="w-full"> --}}
              <div class="flex justify-center items-center pt-12">
                <svg width="280" height="280" xmlns="http://www.w3.org/2000/svg">

                    <g>
                     <title>background</title>
                     <rect fill="none" id="canvas_background" height="282" width="282" y="-1" x="-1"/>
                    </g>
                    <g>
                     <title>Layer 1</title>
                     <g fill="white" stroke="null" id="svg_1">
                      <g stroke="null" id="svg_2">
                       <path stroke="null" id="svg_3" d="m139.99725,9.64276c-73.44772,0 -132.99724,59.66702 -132.99724,133.2666c0,34.52945 13.10187,65.99463 34.60188,89.67166c-14.61357,-19.2005 -23.38556,-43.01248 -23.38556,-68.92505c0,-63.24353 51.61823,-114.50156 115.30936,-114.50156c63.67523,0 115.30334,51.25803 115.30334,114.50156c0,52.76025 -35.99539,97.07205 -84.88794,110.33603c62.02014,-11.30981 109.0589,-65.67047 109.0589,-131.08264c0,-73.59958 -59.55225,-133.2666 -133.00275,-133.2666z"/>
                       <path stroke="null" id="svg_4" d="m165.75,192.97009c23.68549,-12.33487 35.93738,-40.23944 27.78278,-66.70267c-9.1781,-29.7803 -40.7117,-46.47052 -70.44019,-37.26407c-29.71591,9.18671 -46.36829,40.79944 -37.19019,70.58032c4.30417,13.96817 13.52713,25.05423 25.18134,31.94507c-8.31171,-5.93048 -14.82104,-14.47388 -18.05518,-24.96426c-7.88693,-25.57639 6.60184,-52.79208 32.3743,-60.76563c25.76913,-7.97681 53.03415,6.30182 60.93369,31.88422c6.58267,21.3494 -2.45477,43.79074 -20.58655,55.28702z"/>
                       <path stroke="null" id="svg_5" d="m232.35291,195.08994c16.52756,-44.60083 -6.1481,-94.18387 -50.65659,-110.74902c-2.27524,-0.85504 -4.5762,-1.56915 -6.87659,-2.22565c35.66916,16.77631 53.05933,58.67102 38.97336,96.68152c-14.84671,40.04092 -58.97153,60.54785 -98.57761,45.80469c-28.30658,-10.54193 -46.54672,-36.25543 -49.2757,-64.69092c-2.21774,36.87027 19.55704,72.40231 55.89722,85.92841c44.49481,16.57394 93.97519,-6.14276 110.5159,-50.74902z"/>
                       <path stroke="null" id="svg_6" d="m39.70981,144.36609c-1.72845,20.43671 5.72009,39.50232 18.90186,53.18256c-4.38791,-12.97491 -6.07474,-27.72467 -4.33316,-43.03769c4.02939,-35.40039 25.15561,-63.57373 51.39438,-72.61673c-34.2215,0.93182 -63.00369,27.49762 -65.96307,62.47186z"/>
                       <path stroke="null" id="svg_7" d="m139.99725,130.98145c12.9519,0 23.44632,10.51947 23.44632,23.49771c0,12.98203 -10.49442,23.49823 -23.44632,23.49823c-12.94861,0 -23.44904,-10.51617 -23.44904,-23.49823c-0.00055,-12.97879 10.50043,-23.49771 23.44904,-23.49771z"/>
                      </g>
                     </g>
                     <g id="svg_8"/>
                     <g id="svg_9"/>
                     <g id="svg_10"/>
                     <g id="svg_11"/>
                     <g id="svg_12"/>
                     <g id="svg_13"/>
                     <g id="svg_14"/>
                     <g id="svg_15"/>
                     <g id="svg_16"/>
                     <g id="svg_17"/>
                     <g id="svg_18"/>
                     <g id="svg_19"/>
                     <g id="svg_20"/>
                     <g id="svg_21"/>
                     <g id="svg_22"/>
                    </g>
                   </svg>
              </div>
            </div>

          </div>
      </section>
      {{-- <div class="flex justify-center w-full">
          <div class="arrow"></div>
      </div> --}}
      <section class="cards">
      <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-1 md:-mx-1 lg:-mx-2 lg:justify-center xl:-mx-2">

        <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-full lg:my-3 lg:ml-2 lg:mr-2 lg:px-3 lg:w-1/4 xl:my-3 xl:px-3 xl:w-1/4 h-8 bg-red-400 rounded-lg">
          <picture>
            <source srcset="{{ url('storage/images/1.avif') }}" type="image/avif">
            <source srcset="t{{ url('storage/images/1.webp') }}" type="image/webp">
            <img src="{{ url('storage/images/1.png') }}" alt="test image">
          </picture>
        </div>

        <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-full lg:my-3 lg:ml-2 lg:mr-2 lg:px-3 lg:w-1/4 xl:my-3 xl:px-3 xl:w-1/4 h-8 bg-yellow-200 rounded-lg">
          asdf
        </div>

        <div class="my-1 px-1 w-full overflow-hidden sm:my-1 sm:px-1 sm:w-full md:my-1 md:px-1 md:w-full lg:my-3 lg:ml-2 lg:mr-2 lg:px-3 lg:w-1/4 xl:my-3 xl:px-3 xl:w-1/4 h-8 bg-green-200 rounded-lg">
          asdf
        </div>

      </div>
    </section>
      {{-- JS --}}
      <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
