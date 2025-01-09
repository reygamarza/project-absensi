<div>
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="#">
                <img src="{{ asset('assets/web-template/build/assets/img/iconabas.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                    alt="main_logo" />
                <img src="{{ asset('assets/web-template/build/assets/img/iconabas.png') }}"
                    class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                    alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Absensi Sebelas</span>
            </a>
        </div>

        <hr
            class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                @if ($operator)
                    <!-- Koordinat | Waktu Presensi -->
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="./pages/dashboard.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center relative">
                                <i class="text-2xl text-blue-500 dark:text-blue-400 ni ni-map-big"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Koordinat | Waktu
                                Presensi</span>
                        </a>
                    </li>

                    <!-- Kelas | Jurusan -->
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Kelas
                            |
                            Jurusan</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="./pages/profile.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-green-500 dark:text-green-400 text-lg ni ni-building"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Daftar Kelas</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="./pages/profile.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-yellow-500 dark:text-yellow-400 text-lg ni ni-hat-3"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Daftar Jurusan</span>
                        </a>
                    </li>

                    <!-- Daftar Pengguna -->
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            Daftar
                            Pengguna</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="./pages/profile.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-red-500 dark:text-red-400 text-lg ni ni-circle-08"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Kesiswaan</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="./pages/profile.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-indigo-500 dark:text-indigo-400 text-lg ni ni-briefcase-24"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Wali Kelas</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                            href="./pages/profile.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-purple-500 dark:text-purple-400 text-lg ni ni-user-run"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Wali Siswa</span>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            Settings</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a
                            class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-blue-500 dark:text-blue-400 text-lg ni ni-badge"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="text-orange-500 dark:text-orange-400 text-lg ni ni-button-power"></i>
                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Logout</span>
                            </button>
                        </form>
                    </li>
                @else
                    <!-- Dashboard -->
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="./pages/dashboard.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center relative">
                                <i class="text-2xl text-blue-500 ni ni-tv-2"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                        </a>
                    </li>

                    <!-- Laporan Absensi -->
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors"
                            href="./pages/dashboard.html">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center relative">
                                <i class="text-2xl text-blue-500 ni ni-books"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Laporan Absensi</span>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">
                            Settings</h6>
                    </li>
                    <li class="mt-0.5 w-full">
                        <a
                            class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors">
                            <div
                                class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="text-blue-500 text-lg ni ni-badge"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                        </a>
                    </li>
                    <li class="mt-0.5 w-full">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors">
                                <div
                                    class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <i class="text-orange-500 text-lg ni ni-button-power"></i>
                                </div>
                                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Logout</span>
                            </button>
                        </form>
                    </li>
                @endif

            </ul>
        </div>
    </aside>
</div>
