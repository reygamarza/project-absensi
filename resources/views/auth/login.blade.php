<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets/web-template/build/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/web-template/build/assets/img/iconabas.png') }}" />
    <title>Absensi Sebelas</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/web-template/build/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/web-template/build/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('assets/web-template/build/assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}"
        rel="stylesheet" />
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <main class="mt-0 transition-all duration-200 ease-in-out">
      <section>
        <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
          <div class="container z-1">
            <div class="flex flex-wrap -mx-3">
              <div class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0">
                    <h4 class="font-bold">Sign In</h4>
                    <p class="mb-0">Enter your email and password to sign in</p>
                  </div>
                  <div class="flex-auto p-6">
                    <form role="form">
                      <div class="mb-4">
                        <input type="email" placeholder="Email" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                      </div>
                      <div class="mb-4">
                        <input type="password" placeholder="Password" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                      </div>
                      <div class="text-center">
                        <button type="button" class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Sign in</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                <div class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg')] rounded-xl ">
                  <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60"></span>
                  <h4 class="z-20 mt-12 font-bold text-white">"Attention is the new currency"</h4>
                  <p class="z-20 text-white ">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>

<!-- Main scripts -->
<script src="{{ asset('assets/web-template/build/assets/js/argon-dashboard-tailwind.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/argon-dashboard-tailwind.min.js') }}"></script>

<!-- Plugin scripts -->
<script src="{{ asset('assets/web-template/build/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>

<!-- Component scripts -->
<script src="{{ asset('assets/web-template/build/assets/js/sidenav-burger.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/navbar-sticky.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/fixed-plugin.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/dropdown.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/nav-pills.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/navbar-collapse.js') }}"></script>
<script src="{{ asset('assets/web-template/build/assets/js/tooltips.js') }}"></script>

</html>

