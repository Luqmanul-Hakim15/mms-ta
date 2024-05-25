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
    <style>
        #dropzone.dragover {
            border-color: #333;
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>

@include('layouts.navbar')

<main class="flex">
@include('layouts.sidebar')

{{-- Section Main Start  --}}
    <div class="flex-auto px-6 pt-28">
        <div class="">
            <h3 class="font-semibold text-xl pb-6">Tambah Verifikator</h3>
            <form action="{{ route('verificator-post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="namaVerif" class="">Nama Verifikator</label>
                    <input type="text" name="name" id="namaVerif" placeholder="Cth. Luqman"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <!-- <div class="mb-6">
                    <label for="peruRif" class="">Perusahaan</label>
                    <input type="text" name="" id="peruRif" placeholder="Cth. Javas Teknologi"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div> -->
                <div class="mb-6">
                    <label for="jabVerif" class="">Jabatan</label>
                    <input type="text" name="position" id="jabVerif" placeholder="Cth. Board of Directors"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <div class="mb-2">
                        <label for="ttdVerif">Unggah Tanda Tangan</label>
                    </div>
                    <div id="dropzone" class="px-16 py-16 border-4 border-dashed rounded-2xl grid justify-items-center"
                        onclick="fileInput.click()" ondragover="handleDragOver(event)" ondragleave="handleDragLeave(event)"
                        ondrop="handleDrop(event)">
                        <p id="fileName" class="absolute top-2 left-2 text-sm font-semibold text-gray-700"></p>
                        <div class="place-content-center">
                            <i class="ph-bold ph-cloud-arrow-up fa-lg"></i>
                            <p class="text-primary" id="dropzoneText">Drag & drop your file here</p>
                            <p>Or click to select files</p>
                            <input type="file" id="fileInput" name="signatureImage" accept="image/*" style="display: none;"
                                onchange="handleFiles(this.files)">
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
    <script>
        function handleDragOver(event) {
            event.preventDefault();
            event.target.classList.add('dragover');
        }

        function handleDragLeave(event) {
            event.preventDefault();
            event.target.classList.remove('dragover');
        }

        function handleDrop(event) {
            event.preventDefault();
            event.target.classList.remove('dragover');
            const files = event.dataTransfer.files;
            handleFiles(files);
        }

        function handleFiles(files) {
            const fileInput = document.getElementById('fileInput');
            fileInput.files = files;

            // Tampilkan nama file di dropzone
            const fileNameElement = document.getElementById('fileName');
            fileNameElement.textContent = files[0].name;

            // Sembunyikan teks drag & drop
            const dropzoneText = document.getElementById('dropzoneText');
            dropzoneText.style.display = 'none';
        }
    </script>

</body>