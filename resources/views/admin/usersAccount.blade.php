@extends('layouts.app')
@section('content')
    <x-header>List Akun pengguna</x-header>
    <!-- main layout -->
    <div class="ganti-password">
        <div class=" py-6 ">

            <div class="">

                <div class="mb-10 flex justify-between items-center">
                    {{--  <h1 class="text-xl font-semibold"></h1>  --}}
                    <div>
                        <a href="{{ route('admin.adduser') }}"
                            class="block px-6 py-2 bg-primary rounded-lg font-semibold text-white">Tambah Akun</a>
                    </div>
                </div>
                <div>
                    <table class="w-full text-left" id="style">
                        <thead class="border-[.5px] border-collapse w-full border-neutral-100 ">
                            <tr class="bg-spotSubtle">
                                <th class="border border-neutral-100 px-6 py-3 !w-[100px]"></th>
                                <th class="border border-neutral-100 px-6 py-3 text-left">Nama</th>
                                <th class="border border-neutral-100 px-6 py-3 text-left">Email</th>
                                {{--  <th class="border border-neutral-100 px-6 py-3 text-left">No Telepon</th>  --}}
                                <th class="border border-neutral-100 px-6 py-3 text-left">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-neutral-100 px-6 py-3 !w-[100px] text-center">
                                    <img src="https://source.unsplash.com/featured?profile" alt="user1"
                                        class="w-10 h-10 mx-auto bg-cover bg-center bg-no-repeat rounded-full">
                                </td>
                                <td class="border border-neutral-100 px-6 py-3 text-left">Abdul Kholid</td>
                                <td class="border border-neutral-100 px-6 py-3 text-left">KholidPdi@gmail.com</td>
                                {{--  <td class="border border-neutral-100 px-6 py-3 text-left">088543452435</td>  --}}
                                <td class="border border-neutral-100 px-6 py-3 text-left">
                                    <div x-data="{ show: On }">
                                        <div
                                            class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                            <input type="checkbox" name="toggle" x-model="show" id="toggle"
                                                class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                                            <label for="toggle"
                                                class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                        </div>
                                        <label for="toggle" class="text-xs text-gray-700" x-text="show"></label>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- main layout end -->
@endsection
