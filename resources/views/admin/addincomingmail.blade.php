@extends('layouts.app');

@section('content')
    <x-header>Surat Masuk</x-header>
    <form action="{{ route('incomingmail-post') }}" method="POST" enctype="multipart/form-data">>
        <div class="mb-6 relative">
            <label for="tanggal">Tanggal Masuk</label>
            <input type="text" name="tanggal" id="tanggal" value="{{ $date }}"
                class="w-full py-3 px-4 mt-3 tanggal border-line border rounded-md focus:outline-spotSubtle" readonly>
        </div>
        <div class="mb-6">
            <label for="incomingLetter" class="mb-2">Unggah Surat Masuk</label>
            <input type="file" name="fileInput" class="dropIncomingMail" id="incomingLetter">
        </div>
        <div class="flex justify-end gap-4">
            <a href="index.html" class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
            <button id="buttonPreview"
                class="px-6  py-2 border-line border text-md rounded-md bg-primary text-white font-semibold">Simpan
                Pesan Masuk</button>
        </div>
    </form>


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
    
@endpush
