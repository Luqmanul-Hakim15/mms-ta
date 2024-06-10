@extends('layouts.app')

@section('content')
<x-header>Template Footer</x-header>
<div x-data="{ footerAdd: false, footerTem: null }">
    <div class="kategori">
        <div class="rounded-xl drop-shadow-lg">
            <div class="flex justify-end pb-6">
                <button @click="footerAdd=true" type="button" class="block px-6 py-3 text-white font-medium bg-primary rounded-xl">Tambah
                    template</button>
            </div>
            <div class="grid grid-cols-2 gap-6 py-6">
                @foreach($data as $d)
                <a href="javascript:void(0)">
                    <div class="card-tempalte-1 text-center ">
                        <div class="relative" @mouseenter="footerTem='footer{{ $d->id }}'" @mouseleave="footerTem=null">
                            <div x-show="footerTem === 'footer{{ $d->id }}'" x-transition class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-black opacity-50">
                            </div>
                            <div x-show="footerTem ==='footer{{ $d->id }}'" class="absolute flex items-center justify-center gap-4 top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 bg-opacity-75">
                                @if($d->default == 0)
                                <form action="{{ route('update-default', $d->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-amber-400 rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2">
                                        <i class="fa fa-star"></i>
                                    </button>
                                </form>
                                @endif
                                <button class="bg-greenSpot rounded-full w-10 h-10 text-white flex justify-center items-center hover:bg-opacity-50 p-2"><i class="fa fa-pen"></i></button>
                                <form action="{{ route('delete.footer', $d->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    <button @click="popOpenDelete=true" class="bg-primary rounded-full w-10 h-10 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>

                            <img src="{{ asset($d->image) }}" class=" " alt="">
                        </div>
                        <h3 class="py-3 font-semibold">{{ $d->name }}</h3>
                    </div>
                </a>
                @endforeach
                <div>
                    <div x-show="footerAdd" x-transition>
                        <div class="fixed top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 opacity-75  z-10">
                        </div>
                    </div>
                    <div x-show="footerAdd" x-transition.origin.bottom.duration.500ms id="tambahKop" class="w-1/2 bg-white rounded-xl p-6 absolute mx-auto top-[100px] left-[350px] z-20 drop-shadow-md">
                        <div class="flex justify-between items-start pb-6">
                            <div class="flex flex-col ">
                                <h3 class="text-xl font-bold text-primary">Tambah Footer</h3>
                                <p class="text-sm opacity-50 w-3/4">tambah Footer surat anda agar berfariasi ketika memakainya
                                    nanti</p>
                            </div>
                            <button @click="footerAdd=false"><i class="fas fa-xmark fa-xl"></i></button>
                        </div>
                        <form action="{{ route('footer-post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="nameFooter" class="pb-3">Nama Footer</label>
                                <input type="text" id="nameFooter" name="name" class="px-4 mt-3 rounded-lg py-2 border border-line w-full focus:outline-spotSubtle">
                            </div>
                            <div class="mb-6 flex gap-2 items-center">
                                <div>
                                    <input type="radio" name="ukuran" id="A4" value="a4">
                                    <label for="A4">3508 x 2480 px (A4)</label>
                                </div>
                                <div>
                                    <input type="radio" name="ukuran" id="legal" value="legal">
                                    <label for="legal">3400 x 5600 px (legal)</label>
                                </div>
                                <div>
                                    <input type="radio" name="ukuran" id="tabloid" value="tabloid">
                                    <label for="tabloid">3300 x 5100 px (Tabloid)</label>
                                </div>
                            </div>
                            <div class="mb-6 flex gap-2 items-center">
                                <input type="checkbox" name="default" id="defaultFooter">
                                <label for="defaultFooter">Jadikan sebagai default footer</label>
                            </div>
                            <div>
                                <label for="templateFooter">Template Footer</label>
                                <input type="file" name="templateFooter" id="templateFooter" class="dropify dropFooter">
                            </div>
                            <div class="flex justify-center mt-6"><button class="px-4 py-2 rounded-lg bg-primary w-full text-white font-semibold">Tambah Footer</button>
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-end py-6">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 "><i class="ph-bold ph-caret-left fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-primary border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-black border border-gray-300 bg-white hover:bg-spotSubtle  ">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">...</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-primary bg-opacity-15 border-gray-300 rounded-r-lg hover:bg-spotSubtle hover:text-gray-700 "><i class="ph-bold ph-caret-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- Section Main End  --}}

            {{-- Section Pop Up Start  --}}
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
            {{-- Section Pop Up End  --}}
            @endsection


            @push('style')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            @endpush

            @push('script')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script>
                $(document).ready(function() {
                    $('.dropFooter').dropify({
                        tpl: {
                            message: '<div class="dropify-message"><span class="file-icon" /> <p style="font-size: 24px;">Drag and drop a file here or click</p></div>',
                        }
                    })
                })
            </script>
            @endpush