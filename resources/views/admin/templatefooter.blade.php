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

@include('layouts.navbar')
{{-- SIDEBAR  --}}
{{-- Section Sidebar Start  --}}
<section class="flex relative">
@include('layouts.sidebar')

<main class="flex-1 relative"  x-data="{popOpenDelete:false}">
    <!-- nav -->
    <nav class="px-10 py-6  fixed top-0 left-0 right-0 bg-white z-50">
        <div class="w-full flex justify-between">

            <div class="flex-1">
                <div class="flex gap-x-32 flex-1">
                    <div class="logo text-center ">
                        <h1 class="text-3xl text-black font-bold">Suratan</h1>
                    </div>
                    <form action="">
                        <div class="bg-blue-50 w-[400px] px-4 flex items-center rounded-lg">
                            <label for="searchbar"><i class="ph ph-magnifying-glass  text-darkGrey"
                                    style="font-size: 28px;"></i></label>
                            <input type="search" name="searchbar" id="searchbar"
                                class="w-full bg-blue-50 placeholder:text-darkGrey ps-3 h-10 focus:outline-none rounded-e-xl"
                                placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <div class="profile w-10 h-10 rounded-full bg-slate-400 bg-cover bg-center bg-no-repeat"
                    style="background-image: url(https://source.unsplash.com/featured?profile);"></div>
                <div class="text-lg font-semibold flex items-center gap-1">Admin <i
                        class="fa fa-angle-down fa-xs"></i>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <!-- main layout -->
    <div  x-data="{footerAdd:false ,footerTem:null}">
        <div class="kategori py-28 min-h-screen">
            <div class="px-10">
                <div class="bg-white p-6 rounded-xl drop-shadow-lg">
                    <div class="flex justify-end pb-6">
                        <button @click="footerAdd=true" type="button" class="block px-6 py-3 text-white font-medium bg-primary rounded-xl">Tambah
                            template</button>
                    </div>
                    <div class="grid grid-cols-2 gap-6  py-6">
                       
                        <a href="javascript:void(0)">
                            <div class="card-tempalte-1 text-center ">
                               <div class="relative" @mouseenter="footerTem='footer1'" @mouseleave="footerTem=null">
                                    <div x-show="footerTem === 'footer1'" x-transition
                                        class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                    </div>
                                    <div x-show="footerTem ==='footer1'"
                                        class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                        <button
                                        class="bg-amber-400 rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-star"></i></button>
                                        <button
                                            class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                                class="fa fa-pen"></i></button>
                                        <button @click="popOpenDelete=true"
                                            class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                                class="fa fa-trash"></i></button>
                                    </div>

                                    <img src="../assets/img/footer.jpg" class=" " alt="">
                                </div>
                                <h3 class="py-3 font-semibold">footer 1</h3>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="card-tempalte-1 text-center ">
                               <div class="relative" @mouseenter="footerTem='footer2'" @mouseleave="footerTem=null">
                                    <div x-show="footerTem === 'footer2'" x-transition
                                        class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                    </div>
                                    <div x-show="footerTem ==='footer2'"
                                        class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                        <button
                                            class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                                class="fa fa-pen"></i></button>
                                        <button @click="popOpenDelete=true"
                                            class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                                class="fa fa-trash"></i></button>
                                    </div>

                                    <img src="../assets/img/footer.jpg" class=" " alt="">
                                </div>
                                <h3 class="py-3 font-semibold">footer 2</h3>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="card-tempalte-1 text-center ">
                               <div class="relative" @mouseenter="footerTem='footer3'" @mouseleave="footerTem=null">
                                    <div x-show="footerTem === 'footer3'" x-transition
                                        class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                    </div>
                                    <div x-show="footerTem ==='footer3'"
                                        class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                        <button
                                        class="bg-amber-400 rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-star"></i></button>
                                        <button 
                                            class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                                class="fa fa-pen"></i></button>
                                        <button @click="popOpenDelete=true"
                                            class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center    p-2 hover:bg-opacity-50"><i
                                                class="fa fa-trash"></i></button>
                                    </div>

                                    <img src="../assets/img/footer.jpg" class=" " alt="">
                                </div>
                                <h3 class="py-3 font-semibold">footer 3</h3>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="card-tempalte-1 text-center ">
                               <div class="relative" @mouseenter="footerTem='footer4'" @mouseleave="footerTem=null">
                                    <div x-show="footerTem === 'footer4'" x-transition
                                        class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                    </div>
                                    <div x-show="footerTem ==='footer4'"
                                        class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                        <button
                                        class="bg-amber-400 rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-star"></i></button>
                                        <button
                                            class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                                class="fa fa-pen"></i></button>
                                        <button @click="popOpenDelete=true"
                                            class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                                class="fa fa-trash"></i></button>
                                    </div>

                                    <img src="../assets/img/footer.jpg" class=" " alt="">
                                </div>
                                <h3 class="py-3 font-semibold">footer 4</h3>
                            </div>
                        </a>
                        <a href="javascript:void(0)">
                            <div class="card-tempalte-1 text-center ">
                               <div class="relative" @mouseenter="footerTem='footer5'" @mouseleave="footerTem=null">
                                    <div x-show="footerTem === 'footer5'" x-transition
                                        class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                    </div>
                                    <div x-show="footerTem ==='footer5'"
                                        class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                        <button
                                        class="bg-amber-400 rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-star"></i></button>
                                        <button
                                            class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                                class="fa fa-pen"></i></button>
                                        <button @click="popOpenDelete=true"
                                            class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                                class="fa fa-trash"></i></button>
                                    </div>

                                    <img src="../assets/img/footer.jpg" class=" " alt="">
                                </div>
                                <h3 class="py-3 font-semibold">footer 5</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex justify-end py-6">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 "><i class="ph-bold ph-caret-left fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-primary border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-black border border-gray-300 bg-white hover:bg-spotSubtle  ">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">...</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-primary bg-opacity-15 border-gray-300 rounded-r-lg hover:bg-spotSubtle hover:text-gray-700 "><i class="ph-bold ph-caret-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div x-show="footerAdd" x-transition>
                <div class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 opacity-75 min-h-screen"></div>
            </div>
            <div x-show="footerAdd" x-transition.origin.bottom.duration.500ms id="tambahKop"class="w-1/2 bg-white rounded-xl p-6 absolute top-[100px] left-[250px]  drop-shadow-md">
                <div class="flex justify-between items-start pb-6">
                    <div class="flex flex-col ">
                        <h3 class="text-xl font-bold">Tambah Footer</h3>
                        <p class="text-sm opacity-50 w-3/4">tambah Footer surat anda agar berfariasi ketika memakainya nanti</p>
                    </div>
                    <button @click="footerAdd=false"><i class="fas fa-xmark fa-xl"></i></button></div>
                <form action="">
                    <div class="mb-6">
                        <label for="nameFooter" class="pb-3">Nama Footer</label>
                        <input type="text" id="nameFooter"
                            class="px-4 mt-3 rounded-lg py-2 border border-line w-full focus:outline-spotSubtle">
                    </div>
                    <div class="mb-6 flex gap-2 items-center">
                    
                        <div>
                            <input type="radio" name="ukuran" id="A4">
                            <label for="A4">3508 x 2480 px (A4)</label>
                        </div>
                        <div>
                            <input type="radio" name="ukuran" id="legal">
                            <label for="legal">3400 x 5600 px (legal)</label>
                        </div>
                        <div>
                            <input type="radio" name="ukuran" id="tabloid">
                            <label for="tabloid">3300 x 5100 px (Tabloid)</label>
                        </div>
                    </div>
                    <div class="mb-6 flex gap-2 items-center">
            
                        <input type="checkbox" name="default" id="defaultFooter">
                        <label for="defaultFooter">Jadikan sebagai default footer</label>
                    </div>
                    <div>
                        <label for="templateFooter">Template Footer</label>
                        <input type="file" name="" id="templateFooter">
                    </div>
                    <div class="flex justify-center mt-6"><button class="px-4 py-2 rounded-lg bg-primary w-full text-white font-semibold">Tambah Footer</button></div>
                </form>
            </div>
            <div class="flex justify-end py-6">
                <ul class="inline-flex -space-x-px text-sm">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 "><i class="ph-bold ph-caret-left fa-lg"></i></a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-primary border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-black border border-gray-300 bg-white hover:bg-spotSubtle  ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">...</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-primary bg-opacity-15 border-gray-300 rounded-r-lg hover:bg-spotSubtle hover:text-gray-700 "><i class="ph-bold ph-caret-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main layout end -->
    
    <div x-show="popOpenDelete"  >
        <div x-show="popOpenDelete"  x-transition>
           
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
</main>