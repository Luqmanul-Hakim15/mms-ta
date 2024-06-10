@extends('layouts.app')

@section('content')
<x-header>Verifikator</x-header>
<div class="verifikator">
    <div>
        <div class="flex justify-end mb-4">
            <a href="{{ route ('admin.addverifikator') }}" type="button" class="bg-primary px-6 py-3 rounded-xl text-white font-medium text-sm">Tambah Verifikator</a>
        </div>
        <table class="w-full table-auto" id="style">
            <thead class="text-lg font-semibold bg-primary bg-opacity-10">
                <tr>
                    <td>Kode TTD</td>
                    <td>Nama</td>
                    <td>Jabatan</td>
                    <td></td>
                </tr>
            </thead>
            <tbody class="text-md">
                @foreach($data as $d)
                <tr>
                    <td>
                        {{ $d->signature_code }}
                    </td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->position }}</td>
                    <td class="flex gap-2 text-white justify-center items-center">
                        <a href="{{ route('verificator.edit', $d->id) }}" class="flex justify-center items-center bg-teal-500 p-2 rounded-lg w-8 h-8 text-center">
                            <i class="fa-solid fa-pen fa-sm"></i>
                        </a>
                        <form action="{{ route('verificator.delete', $d->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            <button @click="popOpenDelete=true" class="bg-red-600 text-center rounded-lg w-8 h-8 text-white flex justify-center items-center p-2 hover:bg-opacity-50"><i class="fa-solid fa-trash fa-sm"></i></button>
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-end py-6">
        <ul class="inline-flex -space-x-px text-sm">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 "><i class="ph-bold ph-caret-left fa-lg"></i></a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-white bg-primary border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-black border border-gray-300 bg-white hover:bg-spotSubtle  ">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-spotSubtle hover:text-gray-700 ">...</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-primary bg-opacity-15 border-gray-300 rounded-r-lg hover:bg-spotSubtle hover:text-gray-700 "><i class="ph-bold ph-caret-right"></i></a>
            </li>
        </ul>
    </div>

</div>
<!-- main layout end -->
{{--
<div x-show="popOpenDelete"  @click.away="popOpenDelete=false">
    <div x-show="popOpenDelete"  x-transition>
       
        <div class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div x-show="popOpenDelete" x-transition.origin.bottom.duration.700ms
        class="bg-white absolute top-[200px] border border-line rounded-xl left-[350px] p-6 drop-shadow-md w-[300px] flex flex-col gap-3">
        <div class="flex flex-col gap-6 justify-center items-center">
            <div><i class="far fa-circle-xmark text-6xl text-primary"></i></div>
            <div class="text-center">
                <h3 class="text-2xl font-bold">Berhasil dihapus</h3>
                <p class="text-sm opacity-50">Penerima Berhasil dihapus</p>
            </div>
            <div><button @click="popOpenDelete= false" type="button"
                    class="w-40 px-3 py-2 bg-primary rounded-xl text-white font-semibold">Oke</button>
            </div>
        </div>
    </div>
</div>  --}}
@endsection