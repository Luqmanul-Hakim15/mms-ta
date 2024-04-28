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

<main class="flex-1 relative" x-data="{popOpenDelete:false}">
          
<!-- Section Main Start -->
    <div class="kategori py-28" x-data="{showHover: null}">

        <div class="px-10">

            <div class="bg-white p-6 rounded-xl drop-shadow-lg">
                <div class="flex justify-end">
                    <a href="tambah-template.html" class="block px-6 py-3 text-white font-medium bg-primary rounded-xl">Tambah
                        template</a>
                </div>
                <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px">
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Magang</a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block p-4 text-primary border-b-2 border-primary rounded-t-lg active "
                                aria-current="page">Surat Perjanjian Kerjasama</a>
                        </li>
                        <li class="mr-2">
                            <a href="#"
                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">BAST</a>
                        </li>
                    </ul>
                </div>
                <div class="grid grid-cols-4 gap-6  py-6">
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                            <div class="relative" @mouseenter="showHover='template1'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template1'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template1'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Perseorangan</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                            <div class="relative" @mouseenter="showHover='template2'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template2'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template2'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK BUMN</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template3'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template3'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template3'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Pemkab</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template4'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template4'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template4'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Karang Taruna</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template5'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template5'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template5'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Karang Taruna</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template6'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template6'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template6'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Karang Taruna</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template7'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template7'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template7'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Karang Taruna</h3>
                        </div>
                    </a>
                    <a href="javascript:void(0)">
                        <div class="card-tempalte-1 text-center ">
                             <div class="relative" @mouseenter="showHover='template8'" @mouseleave="showHover=null">
                                <div x-show="showHover === 'template8'" x-transition
                                    class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                                </div>
                                <div x-show="showHover ==='template8'"
                                    class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                    <button
                                        class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i
                                            class="fa fa-pen"></i></button>
                                    <button @click="popOpenDelete=true"
                                        class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                                <img src="../assets/img/spk.png" class=" " alt="">
                            </div>
                            <h3 class="py-3 font-semibold">SPK Karang Taruna</h3>
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
    <!-- main layout end -->

    <!-- pop up delete -->
    {{-- <div x-show="popOpenDelete"  >
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
                </div> --}}
    <!-- pop up delete end -->