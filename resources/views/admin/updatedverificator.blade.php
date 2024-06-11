@extends('layouts.app')
@section('content')
    <x-header>Tambah Verifikator</x-header>
    <div class="flex-auto pb-10">
        <div class="">
            <!-- <h3 class="font-semibold text-xl pb-6"></h3> -->
            <form action="{{ route('verificator.update', $verificator->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="signatureCode" class="">Kode</label>
                    <input type="text" name="signatureCode" id="signatureCode" placeholder="Cth. JVS-xx" value="{{ $verificator->signature_code }}"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <label for="namaVerif" class="">Nama Verifikator</label>
                    <input type="text" name="name" id="namaVerif" placeholder="Cth. Luqman" value="{{ $verificator->name }}"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <label for="jabVerif" class="">Jabatan</label>
                    <input type="text" name="position" id="jabVerif" placeholder="Cth. Board of Directors" value="{{ $verificator->position }}"
                        class="w-full px-4 py-3 border mt-2 border-line rounded-md focus:outline-spotSubtle">
                </div>
                <div class="mb-6">
                    <label for="ttdVerif" class="mb-2">Unggah </label>
                    <input type="file" name="signatureImage" class="dropVerif" id="ttdVerif" data-default-file="{{ asset('images/signatures/'.$verificator->signature_image) }}">
                </div>
                <div class="flex justify-end mb-6">
                    <button type="submit" class="px-6 py-3 bg-primary text-white font-semibold rounded-xl">Update
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
    </script>
@endpush
