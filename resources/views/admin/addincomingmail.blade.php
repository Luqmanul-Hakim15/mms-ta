@extends('layouts.app');

@section('content')
    <x-header>Surat Masuk</x-header>
    <form action="{{ route('incomingmail-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 relative">
            <label for="fileName">Nama Surat</label>
            <input type="text" name="fileName" id="fileName"
                class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
        </div>
        <div class="mb-6 relative">
            <label for="tanggal">Tanggal Masuk</label>
            <input type="text" name="tanggal" id="tanggal" value="{{ $date }}"
                class="w-full py-3 px-4 mt-3 tanggal border-line border rounded-md focus:outline-spotSubtle" readonly>
        </div>
        <div class="mb-6">
            <label for="incomingLetter" class="mb-2">Unggah Surat Masuk</label>
            <input type="file" name="fileInput" class="dropIncomingMail" id="incomingLetter">
        </div>
        {{--  <!-- <div id="dropzone" class="mb-6">
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
        </div> -->   --}}
        <div class="flex justify-end gap-4">
            <a href="index.html" class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
            <button id="buttonPreview"
                class="px-6  py-2 border-line border text-md rounded-md bg-primary text-white font-semibold">Simpan
                Pesan Masuk</button>
        </div>
    </form>
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
            $('.dropIncomingMail').dropify({
                tpl: {
                    message: '<div class="dropify-message"><span class="file-icon" /> <p style="font-size: 24px;">Drag and drop a file here or click</p></div>',
                }
            });
            {{--  $('.tanggal').pickadate({
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
            });  --}}
        })
    </script>
    {{--  <!-- <script type="text/javascript">
        $(document).ready(function() {
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
    </script> -->  --}}
@endpush
