@extends('layouts.app')

@section('content')
    <x-header>Surat Masuk</x-header>
    <div class="flex justify-between mb-10">
        <a href="{{ route('addmail') }}"
            class="px-4 py-2 bg-primary rounded-xl flex justify-center items-center text-white font-medium">Tambah
            Surat Masuk</a>
        <div class="flex justify-center items-center gap-3">
            <button
                class="px-4 py-2 bg-primary text-lg rounded-xl text-white flex justify-center items-center">Filter&nbsp;<i
                    class="ph-fill ph-funnel text-xl"></i>
            </button>
            <button
                class="px-4 py-2 bg-white border-black border rounded-xl flex justify-center items-center gap-2 text-base">Terbaru
                <i class="ph ph-caret-down text-xl"></i></button>
            <button class="px-2 w-10 h-10 py-2 bg-slate-200 flex justify-center items-center rounded-full"><i
                    class="ph ph-caret-left text-xl"></i></button>
            <button class="px-2 w-10 h-10 py-2 bg-slate-200 flex justify-center items-center rounded-full"><i
                    class="ph ph-caret-right text-xl"></i></button>
        </div>
    </div>
    <div class="">
        <table class="border-[.5px] border-collapse w-full border-neutral-100 table table-auto">
            <thead class="bg-spotSubtle">
                <tr>
                    <th class="border border-neutral-100 px-6 py-3 !w-[50px]">No</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Nama Surat</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Tanggal</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Penerima</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $surat_masuk = [
                        ['Surat Undangan RSI Sultan Agung', '10-05-2024', 'Abdul Kholid'],
                        ['Surat Perjanjian Kerjasama Piwulang Becik', '13-05-2024', 'Abdul Kholid'],
                        ['Surat Permohonan Magang Universitas Amikom Yogyakarta', '17-05-2024', 'Andariska Pramudita'],
                        ['Jawaban Surat Perjanjian Kerjasama Adaro', '25-05-2024', 'Didi Nur Kartiyono'],
                    ];
                @endphp
                @foreach ($surat_masuk as $key => $item)
                
                    <tr>
                        <td class="border border-neutral-100 px-6 py-3 !w-[50px] text-center">{{ $key + 1 }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[0] }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[1] }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[2] }}</td>
                        <td class="border border-neutral-100 p-2 text-left flex justify-center items-center gap-3">
                            {{-- <a href="#"
                                class="flex justify-center items-center bg-teal-500 text-white  p-2 rounded-lg w-8 h-8 text-center"><i class="fa-solid fa-download"></i></a> --}}
                            <a href="#" class="flex justify-center items-center bg-blue-600 text-white p-2 rounded-lg w-8 h-8 text-center"><i class="fa-solid fa-eye"></i></i></a>
                            <form action="" class="m-0">
                                <button type="submit" href="#" class="flex justify-center items-center bg-red-600 text-white p-2 rounded-lg w-8 h-8 text-center"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- proses unggah -->
    <div class="fixed bottom-0 w-[30%] right-0 progres-unggah">
        <div class="rounded-xl bg-white">
            <div class="flex bg-slate-100 px-4 py-2">
                <h5 class="flex-1 font-bold text-md">1 Upload Selesai</h5>
                <button id="hideProgres" class="me-3"><i class="fas fa-chevron-down fa-lg"></i></button>
                <button id="closeProgres"><i class="fas fa-xmark fa-lg"></i></button>
            </div>
            <div class="transition duration-1000 ease-in-out" id="contentUnggah">
                <div id="timeProgres" class="flex px-4 py-2 justify-between items-center bg-blue-50">
                    <div class=" text-xs">5 Menit lagi</div>
                    <button class="text-primary text-xs">Batal</button>
                </div>
                <div id="listUnggah" class="px-4 py-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <i class="far fa-file "></i>
                            <p class="text-sm">Suratan.pdf</p>
                        </div>
                        <div role="status" id="status">
                            <svg aria-hidden="true"
                                class="w-4 h-4 me-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- proses unggah end -->
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#closeProgres').click(function() {
                // console.log('ok')
                $('.progres-unggah').addClass('hidden')
            })

            $('#hideProgres').click(function(e) {
                e.preventDefault()
                // console.log('ok')
                $('#contentUnggah').toggleClass('hidden');
            })
        })
    </script>
@endpush
