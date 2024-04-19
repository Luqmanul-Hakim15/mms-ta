<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Management System PT. Javas Teknologi Integrator</title>
    
    {{-- VITE --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Resource --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    
<!-- nav -->
{{-- Section Navbar Start  --}}
<nav class="px-10 py-10 fixed top-0 left-0 right-0 bg-white z-50" x-data="{openLog:false}">
    <div class="w-full flex justify-between">
        
        {{-- Section Left Start --}}
        <div class="flex-1 relative">
            <div class="flex gap-x-10 flex-2">
                <h1 class="text-3xl text-primary font-bold">JAVAS <span class="text-black font-bold">MMS</span></h1>
                <div class="w-10 h-10 rounded-full bg-slate-200">
                    <div class="flex justify-center mt-2"> <img src="images/list.svg" alt="#" class="w-6"></i></div>
                </div>
            </div>
        </div>
        {{-- Section Left End  --}}

        {{-- Section Right Start --}}
        <div>
            <div>
                <div><img src="" alt=""></div>
                <div class="profile w-10 relative h-10 rounded-full bg-slate-400 bg-cover bg-center bg-no-repeat" style="background-image: url(https://source.unsplash.com/featured?profile);"></div>
            </div>
        </div>
        {{-- Section Right End --}}
    </div>
</nav>

<section class="flex relative ">
    <!-- sidebar -->
    <aside id="sidebar" class="w-[250px] py-6 px-6 bg-white ">
        <div class="fixed ">

            <div class="pt-20 h-[600px] overflow-auto scroll-side">
                <div class="pb-6 pt-3">
                    <a href="buat-surat.html"
                        class="block px-4 py-4 rounded-lg font-semibold hover:font-semibold  text-black bg-spotSubtle bg-opacity-10  hover:bg-opacity-50">
                        <i class="fa-solid fa-paper-plane fa-lg me-2"></i>
                        Buat Surat
                    </a>
                </div>
                <h2 class="mb-4 text-sm font-bold">Menu</h2>
                <ul class="flex flex-col gap-3">
                    <!-- <li>
                       <a href="javascript:void(0)" id="arsip"
                           class=" w-full block p-3 bg-primary text-white rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                           <i class="fa-solid fa-box-archive fa-lg me-3"></i>
                           Arsip</a>
                           <ul id="subIndex" x-transition.duration.500ms.origin.top.bottom class="mt-3 hidden transition duration-150 ease-in-out">
                            <li class="mb-3">
                                <a href="index.html" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black">Surat Keluar</a>
                            </li>
                            <li class="mb-3">
                                <a href="index-masuk.html" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black">Surat Masuk</a>
                            </li>
                           </ul>
                   </li> -->
                    <!--  <li>
                       <a href="javascript:void(0)" id="templateToggle"
                           class="block p-3 rounded-lg font-medium hover:bg-primary hover:bg-opacity-5">
                           <i class="fa fa-brush fa-lg me-2"></i>
                           Manajemen Template
                       </a>
                     <ul class="ml-6 hidden" id="templateSubmenu">
                           <li class="mb-3">
                               <a class="block px-3 py-2  text-primary rounded-md font-semibold" href="kategori.html">Kategori</a>
                           </li>
                           <li class="mb-3">
                               <a class="block px-3 py-2  text-primary rounded-md font-semibold" href="header.html">Header</a>
                           </li>
                           <li class="mb-3">
                               <a class="block px-3 py-2  text-black rounded-md font-semibold" href="footer.html">Footer</a>
                           </li>
                       </ul>
                   </li> -->
                    <li><a href="index.html" id="arsip"
                            class=" w-full block p-3  text-black rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                            <i class="fa-solid fa-envelopes-bulk fa-lg me-3"></i>
                            Surat Keluar</a></li>
                    <li><a href="surat-masuk.html" id="arsip"
                            class=" w-full block p-3 bg-primary text-white rounded-lg font-semibold hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                            <i class="fa-solid fa-box-archive fa-lg me-3"></i>
                            Surat Masuk</a></li>
                    <li>
                        <a href="kategori.html"
                            class="w-full block p-3  text-black rounded-lg font-semibold hover:bg-primary hover:bg-opacity-5 hover:text-black">
                            <i class="fa fa-brush fa-lg me-2"></i>
                            Template Kategori
                        </a>
                    </li>
                    <li>
                        <a href="template-header.html"
                            class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                            <i class="fa fa-heading fa-lg me-2"></i>
                            Template Header
                        </a>
                    </li>
                    <li>
                        <a href="template-footer.html"
                            class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                            <i class="fa fa-f fa-lg me-2"></i>
                            Template Footer
                        </a>
                    </li>
                    <li>
                        <a href="verifikator.html"
                            class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                            <i class="fa-solid fa-fingerprint fa-lg me-2"></i>
                            verifikator
                        </a>
                    </li>
                    <li>
                        <a href="penerima.html"
                            class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                            <i class="fa fa-envelope-open fa-lg me-2"></i>
                            Penerima
                        </a>
                    </li>
                </ul>
                <div>
                    <h2 class="mb-4 mt-6 text-sm font-bold">Menu Administrator</h2>
                    <ul class="flex flex-col gap-3 pb-20">
                        <li>
                            <a href="akun.html"
                                class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i
                                    class="fa fa-user fa-lg me-2"></i> Akun</a>
                        </li>
                        <li>
                            <a href="ganti-password.html"
                                class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i
                                    class="fa fa-key fa-lg me-2"></i> Ganti Password</a>
                        </li>
                        <li>
                            <a href="users.html"
                                class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i
                                    class="fa fa-users fa-lg me-2"></i>Akun Users</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </aside>
    <!-- end sidebar -->

    <main class="flex-1 relative" x-data="{delete:false, popOpenDelete:false}">

        <!-- main layout -->
        <div class="penerima pt-28">
            <div class="px-10 py-6 ">
                <!-- <div class="card-analistik grid grid-cols-3 gap-4">

                    <div
                        class="surat-keluar p-6 bg-white rounded-xl drop-shadow-md flex flex-row-reverse justify-between items-center">
                        <div
                            class="bg-spotSubtle p-1 rounded-full flex items-center justify-center w-[50px] h-[50px] mb-3">
                            <i class="fa-solid fa-paper-plane fa-xl text-primary"></i>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">54</div>
                            <div class="font-light opacity-50">Surat Masuk</div>
                        </div>
                    </div>
                    <div
                        class="surat-ttd p-6 bg-white rounded-xl drop-shadow-md flex flex-row-reverse justify-between items-center">
                        <div
                            class="bg-spotSubtle p-1 rounded-full flex items-center justify-center w-[50px] h-[50px] mb-3">
                            <i class="fa fa-pen-clip fa-xl text-primary"></i>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">24</div>
                            <div class="font-light opacity-50">Kategori</div>
                        </div>
                    </div>
                    <div
                        class="surat-ttd p-6 bg-white rounded-xl drop-shadow-md flex flex-row-reverse justify-between items-center">
                        <div
                            class="bg-spotSubtle p-1 rounded-full flex items-center justify-center w-[50px] h-[50px] mb-3">
                            <i class="fa fa-inbox fa-xl text-primary"></i>
                        </div>
                        <div>
                            <div class="text-4xl font-bold">24</div>
                            <div class="font-light opacity-50">Arsip</div>
                        </div>
                    </div>

                </div> -->
                <div class="">
                    <div class="p-6 bg-white rounded-xl drop-shadow-md">
                        <div class="flex justify-between items-center">
                            <div>
                                <!-- <button class="p-2 hover:bg-slate-200 rounded-full w-10 h-10"><i
                                        class="fa-solid fa-arrow-rotate-right fa-md"></i></button> -->
                                <a href="tambah-surat-masuk.html"
                                    class="px-4 py-2 text-sm rounded-xl bg-primary font-semibold text-white"
                                    type="button">Tambah Surat Masuk</a>
                            </div>

                            <div class="filter flex gap-6 items-center">
                                <div class="relative inline-block text-left" x-data="{filter:false}">

                                    <div class="flex gap-3">

                                        <button type="button" @click="filter=!filter"
                                            class="flex items-center w-full justify-center gap-x-1.5 rounded-md bg-primary text-white px-3 py-2 text-sm font-semibold shadow-sm hover:text-black hover:bg-gray-50 transition duration-200 ease-in-out"
                                            id="menu-button">
                                            Filter
                                            <i class="fas fa-filter"></i>
                                        </button>

                                        <div class="sort flex gap-3 items-center">
                                            <div class="relative inline-block text-left" x-data="{filter:false}">
                                                <div>
                                                    <button type="button" @click="filter=!filter"
                                                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                                                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                        Terbaru
                                                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="absolute right-0 z-10 mt-2 w-56  origin-top-right rounded-md bg-white shadow-lg ring-1 ring-line  focus:outline-none"
                                                    x-show="filter" @click.away="filter=false" role="menu"
                                                    aria-orientation="vertical" aria-labelledby="menu-button"
                                                    tabindex="-1">
                                                    <div class="py-1" role="none">
                                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-700 block px-4 py-2 text-sm"
                                                            role="menuitem" tabindex="-1"
                                                            id="menu-item-0">Terbaru</a>
                                                        <a href="javascript:void(0)"
                                                            class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100"
                                                            role="menuitem" tabindex="-1"
                                                            id="menu-item-1">Terlama</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="absolute right-0 z-10 mt-2 w-[600px]  origin-top-right rounded-md bg-white shadow-lg ring-1 ring-line  focus:outline-none"
                                        x-show="filter" @click.away="filter=false" x-transition>
                                        <div class="p-6">

                                            <div>
                                                <label for="dateFilter">Tanggal Masuk</label>
                                                <input type="text" name="dateFilter" id="dateFilter"
                                                    class="w-full relative dateFilter pickadate py-2 px-3 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                            </div>
                                            <div class="mt-3">
                                                <p class="font-semibold">Nama penerima</p>
                                                <div class="mt-3">
                                                    <input type="checkbox" name="user1" id="user1">
                                                    <label for="user1">Didik</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="user2" id="user2">
                                                    <label for="user2">Abdul Kholid</label>
                                                </div>
                                                <div>
                                                    <input type="checkbox" name="user3" id="user3">
                                                    <label for="user3">Andariska Pramudita</label>
                                                </div>
                                            </div>

                                            <div class="pt-4 flex gap-4">
                                                <button
                                                    class="px-3 mt-6 py-2 flex-1 bg-primary rounded-xl text-white ">Filter</button>
                                                <button
                                                    class="px-3 rounded-xl flex-1 mt-6 py-2 border border-line">Reset
                                                    Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="flex gap-6">
                                    <li><a href="" class="p-2 hover:bg-slate-200 rounded-full w-10 h-10">
                                            <i class="fa-solid fa-chevron-left fa-md"></i>
                                        </a></li>
                                    <li><a href="" class="p-2 hover:bg-slate-200 rounded-full w-10 h-10">
                                            <i class="fa-solid fa-chevron-right fa-md"></i>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="w-full text-start table mt-6" id="style">
                            <thead>
                                <tr>
                                    <th>

                                    </th>

                                    <th>File</th>
                                    <th>Tanggal</th>
                                    <th>Penerima</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="" class="w-full ">
                                    </td>



                                    <td>
                                        <img src="/assets/img/spk.png" class="w-14 bg-cover" alt="">
                                    </td>
                                    <td>
                                        Selasa, 17 Des 2023
                                    </td>
                                    <td>
                                        Abdul Kholid
                                    </td>
                                    <td>
                                        <div class="relative" x-data="{open: false}">
                                            <button id="popUp" x-on:click="open = ! open"
                                                class="flex  gap-3  items-center p-2 border rounded-lg">Actions
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="showPop" x-show="open" @click.away="open=false"
                                                class="rounded-lg  absolute z-20  bg-white mt-1 justify-center  w-40 border border-line">
                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Download</a>

                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">View</a>
                                                <a href="javascript:void(0)" @click="popOpenDelete= true"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Hapus</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="" class="w-full ">
                                    </td>



                                    <td>
                                        <img src="/assets/img/spk.png" class="w-14 bg-cover" alt="">
                                    </td>
                                    <td>
                                        Selasa, 17 Des 2023
                                    </td>
                                    <td>
                                        Abdul Kholid
                                    </td>
                                    <td>
                                        <div class="relative" x-data="{open: false}">
                                            <button id="popUp" x-on:click="open = ! open"
                                                class="flex  gap-3  items-center p-2 border rounded-lg">Actions
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="showPop" x-show="open" @click.away="open=false"
                                                class="rounded-lg  absolute z-20  bg-white mt-1 justify-center  w-40 border border-line">
                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Download</a>

                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">View</a>
                                                <a href="javascript:void(0)" @click="popOpenDelete= true"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Hapus</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="" class="w-full ">
                                    </td>


                                    <td>
                                        <img src="/assets/img/spk.png" class="w-14 bg-cover" alt="">
                                    </td>
                                    <td>
                                        Selasa, 17 Des 2023
                                    </td>
                                    <td>
                                        Abdul Kholid
                                    </td>
                                    <td>
                                        <div class="relative" x-data="{open: false}">
                                            <button id="popUp" x-on:click="open = ! open"
                                                class="flex  gap-3  items-center p-2 border rounded-lg">Actions
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <div id="showPop" x-show="open" @click.away="open=false"
                                                class="rounded-lg  absolute z-20  bg-white mt-1 justify-center  w-40 border border-line">
                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Download</a>

                                                <a href="javascript:void(0)"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">View</a>
                                                <a href="javascript:void(0)" @click="popOpenDelete= true"
                                                    class="py-2 px-4 hover:bg-primary cursor-pointer hover:bg-opacity-5 block ">Hapus</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
        <!-- main layout end -->

        <!-- proses unggah -->
        <div class="fixed bottom-0 w-[30%] right-0 progres-unggah">
            <div class="rounded-xl bg-white">
                <div class="flex bg-slate-100 px-4 py-2">
                    <h5 class="flex-1 font-bold text-md">1 Upload Selesai</h5>
                    <button id="hideProgres" class="me-3"><i class="fas fa-chevron-down fa-lg"></i></button>
                    <button id="closeProgres"><i class="fas fa-xmark fa-lg"></i></button>
                </div>
                <div class="transition duration-1000 ease-in-out" id="contentUnggah">
                    <div id="timeProgres" class="flex px-4 py-2 justify-between items-center bg-blue-50">
                        <div class=" text-xs">5 Menit lagi</div>
                        <button class="text-primary text-xs">Batal</button>
                    </div>
                    <div id="listUnggah" class="px-4 py-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <i class="far fa-file "></i>
                                <p class="text-sm">Suratan.pdf</p>
                            </div>
                            <div role="status" id="status">
                                <svg aria-hidden="true"
                                    class="w-4 h-4 me-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- proses unggah end -->

        <!-- pop up delete -->
        <div x-show="popOpenDelete" @click.away="popOpenDelete=false">
            <div x-show="popOpenDelete" x-transition>

                <div class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div x-show="popOpenDelete" x-transition.origin.bottom.duration.700ms
                class="bg-white absolute top-[200px] border border-line rounded-xl left-[350px] p-6 drop-shadow-md w-[300px] flex flex-col gap-3">
                <div class="flex flex-col gap-6 justify-center items-center">
                    <div><i class="far fa-circle-xmark text-6xl text-primary"></i></div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold">Berhasil dihapus</h3>
                        <p class="text-sm opacity-50">Penerima Berhasil dihapus</p>
                    </div>
                    <div><button @click="popOpenDelete= false" type="button"
                            class="w-40 px-3 py-2 bg-primary rounded-xl text-white font-semibold">Oke</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- pop up delete end -->
    </main>
</section>

<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="../assets/dist/main.js"></script>
<!-- <script src="/node_modules/air-datepicker/air-datepicker.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.2/picker.js"></script>
<script src="../node_modules/dropify/dist/js/dropify.min.js"></script>
<script src="/node_modules/pickadate.js/lib/picker.js"></script>
<script src="/node_modules/pickadate.js/lib/picker.date.js"></script>
<script src="/node_modules/pickadate.js/lib/translations/id_ID.js"></script>

<script>
    $(document).ready(function () {
        $('#closeProgres').click(function () {
            // console.log('ok')
            $('.progres-unggah').addClass('hidden')
        })

        $('#hideProgres').click(function (e) {
            e.preventDefault()
            // console.log('ok')
            $('#contentUnggah').toggleClass('hidden');
        })
    })
</script>



</body>
</html>