@extends('layouts.app')


@section('content')
    <div class="penerima pt-12">
        <div class=" ">
            <div class="flex items-center mb-20 w-[400px] mx-auto justify-center">
                <div class="flex items-center !text-primary relative">
                    <div class="rounded-full transition  duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ Request::routeIs('mailshare') ? 'bg-none text-primary border-primary' : 'bg-none border-gray-300 text-gray-500'}} ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bookmark ">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase  {{ Request::routeIs('mailshare') ? 'text-primary' : 'text-gray-500' }}">
                        Buat Surat</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-primary"></div>
                <div class="flex items-center text-primary relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ Request::routeIs('mailshare') ? 'bg-none text-primary border-primary' : 'bg-none border-gray-300 text-gray-500'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus ">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase {{ Request::routeIs('mailshare') ? 'text-primary' : 'text-gray-500' }}">
                        Preview</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-primary"></div>

                <div class="flex items-center text-white relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ Request::routeIs('mailshare') ? 'bg-primary text-white border-primary' : 'bg-none border-gray-300 text-gray-500'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database ">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase {{ Request::routeIs('mailshare') ? 'text-primary' : 'text-gray-500' }}">
                        Selesai</div>
                </div>
            </div>
            <div class="py-10 px-10 rounded-xl drop-shadow-lg">
                <h2 class="font-semibold text-2xl text-center pb-10">Surat Selesai dibuat</h2>
                <ul class="flex gap-6 justify-center items-center">
                    <li>
                        <a href="#"
                            class=" p-3 w-12 flex items-center justify-center text-primary hover:bg-primary hover:text-white h-12 bg-spotSubtle rounded-full"><i
                                class="fa-brands fa-whatsapp fa-xl"></i></a>
                    </li>
                    <li>
                        <a href="#"
                            class=" p-3 flex items-center justify-center w-12 text-primary hover:bg-primary hover:text-white h-12 bg-spotSubtle rounded-full"><i
                                class="fa-regular fa-paper-plane fa-xl"></i></a>
                    </li>
                    <li>
                        <a href="#"
                            class=" p-3 flex items-center justify-center w-12 text-primary hover:bg-primary hover:text-white h-12 bg-spotSubtle rounded-full"><i
                                class="fa-regular fa-envelope fa-xl"></i></a>
                    </li>

                </ul>
                <div class="flex flex-col items-center gap-3 pt-10 justify-center">
                    <button
                        class="px-6 py-2 bg-primary hover:bg-spotSubtle hover:text-primary text-lg  font-semibold text-white rounded-full w-60">Copy
                        Link</button>
                    <a href="{{ route('outmail') }}"
                        class="px-6 py-2 text-lg border text-center hover:bg-primary hover:text-white border-primary font-semibold text-primary rounded-full w-60">Kembali
                        ke Arsip</a>
                </div>
            </div>

        </div>
    </div>
@stop
