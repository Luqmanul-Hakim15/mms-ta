@extends('layouts.app')
@section('content')
    <x-header>Tambah Verifikator</x-header>
    <div class="flex-auto pb-10">
        <div class="">
            {{--  <h3 class="font-semibold text-xl pb-6"></h3>  --}}
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
                    <label for="ttdVerif" class="mb-2">Unggah Tanda Tangan</label>
                    <input type="file" name="" class="dropVerif" id="">
                </div>
                <div class="flex justify-end mb-6">
                    <button type="submit" class="px-6 py-3 bg-primary text-white font-semibold rounded-xl">Tambah
                        Verifikator</button>
                </div>
            </form>

        </div>

    </div>
@endsection


@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.dropVerif').dropify({
                tpl: {
                    message: '<div class="dropify-message"><span class="file-icon" /> <p style="font-size: 24px;">Drag and drop a file here or click</p></div>',
                }
            })
        })
        /* function handleDragOver(event) {
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
         } */
    </script>
@endpush
