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

  {{-- Main Section Start  --}}
  <main class="flex-1 relative">
    <div class="penerima pt-28">
        <div class="px-6 py-6 ">
            <div class="flex items-center mb-20 w-[400px] mx-auto justify-center">
                <div class="flex items-center text-white relative">
                    <div
                        class="rounded-full transition bg-primary duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-bookmark ">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-primary">
                        Buat Surat</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-primary relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus ">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Preview</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>

                <div class="flex items-center text-gray-500 relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database ">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Selesai</div>
                </div>
            </div>


            <div class="bg-white">
                <div class="pb-6 text-3xl font-semibold">Buat Surat</div>
                <form action="">
                    <div class="mb-6">
                        <label for="kasur">Kategori Surat</label>
                        <select name="kasur" id="kasur"
                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500"
                            placeholder="isikan perihal surat anda">
                            <option value="pilih"> Pilih Kategori</option>
                            <option value="Magang">Magang</option>
                            <option value="SPK">Surat Perjanjian Kerjasama</option>
                            <option value="BAST">Berita Acara Serah Terima</option>
                        </select>
                </div>
                    <div class="mb-6">
                        <label for="penerima">Pilih Verifikator</label>
                        <select name="penerima" id="penerima"
                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                            placeholder="isikan perihal surat anda">
                            <option value="pilih penerima" selected disabled>pilih Verifikator</option>
                            <option value="Didi">Didi </option>
                            <option value="Abdul Kholid">Abdul Kholid </option>
                            <option value="Andariska Pramudita">Andariska Pramudita </option>
                            <option value="Afa">Afa </option>
                        </select>
                    </div>
                    <div class="flex space-x-3 items-center mb-6">
                        <input type="checkbox" name="ttd" id="ttd" class="w-5 h-5 accent-primary" value="Tandai jika surat ini butuh tanda tangan penerima">
                        <label for="ttd" class="font-medium">Surat ini butuh tanda tangan penerima</label>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="index.html"
                            class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
                        <button id="buttonPreview"
                            class="px-3 w-40 py-2 border-line border text-md rounded-md bg-primary text-white font-semibold">Preview</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- main layout end -->
</main>
</section>

</body>
</html>