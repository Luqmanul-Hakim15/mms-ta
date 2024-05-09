@extends('layouts.app');

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
                    <th class="border border-neutral-100 px-6 py-3 text-left">Tanggal</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Penerima</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Jumlah Surat Masuk</th>
                    <th class="border border-neutral-100 px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $surat_masuk = [
                        ['12-12-2024', 'Rhonda Rheos', 125],
                        ['13-12-2024', 'Rhondi Rheos', 100],
                        ['14-12-2024', 'Rhondo Rheos', 225],
                        ['15-12-2024', 'Rhondu Rheos', 25],
                    ];
                @endphp
                @foreach ($surat_masuk as $key => $item)
                    <tr>
                        <td class="border border-neutral-100 px-6 py-3 !w-[50px] text-center">{{ $key + 1 }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[0] }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[1] }}</td>
                        <td class="border border-neutral-100 px-6 py-3 text-left">{{ $item[2] . ' Surat Masuk' }}</td>
                        <td class="border border-neutral-100 p-2 text-left flex justify-center items-center gap-3">
                            <a href="#" class="px-2 py-1 bg-green-500 text-white rounded">Unduh</a>
                            <a href="#" class="px-2 py-1 bg-blue-500 text-white rounded">Lihat</a>
                            <form action="" class="m-0">
                                <button type="submit" href="#"
                                    class="px-2 py-1 bg-red-500 text-white rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
