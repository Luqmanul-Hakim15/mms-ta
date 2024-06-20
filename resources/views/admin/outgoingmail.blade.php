@extends('layouts.app')

@section('content')
<x-header>Surat Keluar</x-header>

<div class="grid grid-cols-2 gap-6 mb-10">
    {{-- surat terkirim start  --}}
    <div class="flex items-center justify-between shadow-md bg-white px-6 py-4 rounded-xl">
        <div class="text-4xl font-bold">
            <div>{{ $outgoing }}</div>
            <div class="text-xs font-normal mt-2">Surat Keluar</div>
        </div>
        <div class="bg-[#FFF1F3] rounded-full w-12 h-12 flex items-center justify-center">
            <i class="ph-fill ph-telegram-logo text-3xl text-primary"></i>
        </div>
    </div>
    {{-- surat terkirim end  --}}
    {{-- kategori start  --}}
    <div class="flex items-center justify-between shadow-md bg-white px-6 py-4 rounded-xl">
        <div class="text-4xl font-bold">
            <div>3</div>
            <div class="text-xs font-normal mt-2">Kategori</div>
        </div>
        <div class="bg-[#FFF1F3] rounded-full w-12 h-12 flex items-center justify-center">
            <i class="ph-fill ph-pen text-3xl text-primary"></i>
        </div>
    </div>
    {{-- kategori end  --}}
</div>

<div class="">
    <table class="border-[.5px] border-collapse w-full border-neutral-100 table table-auto">
        <thead class="bg-spotSubtle">
            <tr>
                <th class="border border-neutral-100 px-6 py-3 !w-[50px]">No</th>
                <th class="border border-neutral-100 px-6 py-3 text-left">Nomor Surat</th>
                <th class="border border-neutral-100 px-6 py-3 text-left">Nama Penerima</th>
                <th class="border border-neutral-100 px-6 py-3 text-left">Kategori</th>
                <th class="border border-neutral-100 px-6 py-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($letter as $key => $l)
            <tr>
                <td class="border border-neutral-100 px-6 py-3 !w-[50px] text-center">{{ $key + 1 }}</td>
                <td class="border border-neutral-100 px-6 py-3 text-left">{{ $l->reference_number }}</td>
                <td class="border border-neutral-100 px-6 py-3 text-left">{{ $l->name }}</td>
                <td class="border border-neutral-100 px-6 py-3 text-left">Magang</td>
                <td class="border border-neutral-100 p-2 text-left flex justify-center items-center gap-3">
                    <a href="{{ route('surat.internship', $l->id) }}" class="flex justify-center items-center bg-greenSpot text-white p-2 rounded-lg w-8 h-8 text-center"><i class="fa-solid fa-eye"></i></a>
                    <form action="{{ route('internLetter.destroy', $l->id) }}" method="POST" class="m-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="flex justify-center items-center bg-red-600 text-white p-2 rounded-lg w-8 h-8 text-center"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection