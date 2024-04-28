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

<main class="flex">
@include('layouts.sidebar')

{{-- Section Main Start  --}}
    <div class="flex-auto px-6 pt-28">

        <div class="">
            <h3 class="font-semibold text-xl pb-6">Tambah Verifikator</h3>
            <form action="">
                <div class="mb-6">
                    <label for="namaVerif" class="">Nama Verifikator</label>
                    <input type="text" name="" id="namaVerif" placeholder="Cth. Luqman"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                        
                </div>
                <div class="mb-6">
                    <label for="peruRif" class="">Perusahaan</label>
                    <input type="text" name="" id="peruRif" placeholder="Cth. Javas Teknologi"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <label for="jabVerif" class="">Jabatan</label>
                    <input type="text" name="" id="jabVerif" placeholder="Cth. Board of Directors"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <div class="mb-2">
                        <label for="ttdVerif">Unggah Tanda Tangan</label>
                    </div>
                    <div class="px-16 py-16 border-4 border-dashed rounded-2xl grid justify-items-center">
                        <div class="place-content-center">
                            <i class="ph-bold ph-cloud-arrow-up fa-lg"></i>
                            <p class="text-primary">Upload a File <span class="text-gray-800">or drag and drop</span></p>
                            <p>Or click to select files</p>
                        </div>
                    </div>
                    
                </div>
                <div class="flex justify-end mb-6">
                    <button type="submit"
                        class="px-6 py-3 bg-primary text-white font-semibold rounded-xl">Tambah
                        Verifikator</button>
                </div>
            </form>

        </div>

    </div>
{{-- Section Main End  --}}
</main>
</section>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assets/dist/main.js"></script>
    <script src="../node_modules/dropify/dist/js/dropify.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

</body>