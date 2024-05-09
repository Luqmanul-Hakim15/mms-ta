@extends('layouts.app');

@section('content')
    <x-header>Surat Masuk</x-header>
    <form action="">
        <div class="mb-6 relative">
            <label for="Tanggal">Tanggal Masuk</label>
            <input type="text" name="Tanggal" id="tanggal"
                class="w-full tanggal pickadate py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
        </div>
        <div id="dropzone" class="mb-6">
            <div
                class="relative border-dashed border-4  border-primary h-72 flex justify-center items-center rounded-md bg-primary bg-opacity-5">
                <label for="fileInput" class="text-center cursor-pointer">
                    <i class="ph ph-cloud-arrow-up text-primary text-6xl"></i>
                    <h2 class="text-xl font-semibold my-2 text-primary">Drag and drop your files
                        here</h2>
                    <p class="text-primary">or click to select files</p>
                    <input type="file" name="fileInput" id="fileInput"
                        class="absolute h-full w-full cursor-pointer hidden" accept="application/pdf" multiple>
                </label>
            </div>
            <div id="fileList" class="text-center flex gap-3 flex-wrap"></div>
        </div>
        <div class="flex justify-end gap-4">
            <a href="index.html" class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
            <button id="buttonPreview"
                class="px-6  py-2 border-line border text-md rounded-md bg-primary text-white font-semibold">Simpan
                Pesan Masuk</button>
        </div>
    </form>
@endsection


@push('script')
    <script type="text/javascript">
        $(document).ready(function() {

            const dropzone = $('#dropzone');
            const inputFile = $('#fileInput');
            const listFile = $('#fileList');

            dropzone.on('dragover', function(e) {
                e.preventDefault();
                dropzone.addClass('border-blue-500');
            });
            dropzone.on('dragleave', function(e) {
                e.preventDefault();
                dropzone.removeClass('border-blue-500');
            })
            dropzone.on('drop', function(e) {
                e.preventDefault();
                dropzone.removeClass('border-blue-500');
                const files = e.originalEvent.dataTransfer.files;
                handleFiles(files);
            });
            inputFile.on('change', function() {
                const files = inputFile[0].files;
                handleFiles(files);
            });

            function handleFiles(files) {
                for (const file of files) {
                    if (file.type === 'application/pdf') {
                        const listItem = $('<div>').addClass(
                            'bg-primary bg-opacity-5 p-2 mt-2 rounded-md flex justify-between items-center');
                        const fileName = $('<span>').text(file.name);
                        const deleteButton = $('<button>').html('<i class="fa fa-trash"></i>').addClass(
                            'text-red-500 ml-4 cursor-pointer');

                        deleteButton.on('click', function() {
                            listItem.remove();
                        });

                        listItem.append(fileName, deleteButton);
                        listFile.append(listItem);
                        // $('#alertRed').addClass('hidden')
                        // $('#masukSurat').removeClass('mt-6')
                    } else {
                        // $('#masukSurat').addClass('mt-6')
                        // $('#alertRed').addClass('block')
                    }
                }
            }

            $('.tanggal').pickadate({
                labelMonthNext: 'Bulan Selanjutnya',
                labelMonthPrev: 'Bulan Sebelumnya',
                labelMonthSelect: 'Pilih Bulan',
                labelYearSelect: 'Pilih Tahun',
                selectMonths: true,
                selectYears: true,
                format: 'dddd, dd mmm yyyy',
                formatSubmit: 'yyyy/mm/dd',
                hiddenPrefix: 'prefix__',
                hiddenSuffix: '__suffix'
            });
        })
    </script>
@endpush
