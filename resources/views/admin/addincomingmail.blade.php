@extends('layouts.app')

@section('content')
    <x-header>Surat Masuk</x-header>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-toast-alert type="error" message="{{ $error }}" />
        @endforeach
    @endif
    <form action="{{ route('incomingmail-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 relative">
            <label for="tanggal">Tanggal Masuk</label>
            <input type="text" name="tanggal" id="tanggal" value="{{ $date }}" class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle" readonly>
        </div>
        <div class="mb-6 relative">
            <label for="name">Judul Surat</label>
            <input type="text" name="fileName" id="fileName" class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
        </div>
        <div class="mb-6">
            <label for="incomingLetter" class="mb-2">Unggah Surat Masuk</label>
            <input type="file" name="fileInput" class="dropIncomingMail" id="incomingLetter">
        </div>
        <div class="flex justify-end gap-4">
            <a href="index.html" class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
            <button id="buttonPreview" class="px-6  py-2 border-line border text-md rounded-md bg-primary text-white font-semibold">Simpan
                Pesan Masuk</button>
        </div>
    </form>
@endsection
@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.dropIncomingMail').dropify({
                tpl: {
                    message: '<div class="dropify-message"><span class="file-icon" /> <p style="font-size: 24px;">Drag and drop a file here or click</p></div>',
                }
            })
        })
    </script>
@endpush
