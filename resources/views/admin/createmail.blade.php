@extends('layouts.app')


@section('content')
    <div class="penerima pt-6">
        <div class="px-6 py-6 ">
            <div class="flex items-center mb-20 w-[400px] mx-auto justify-center">
                <div class="flex items-center text-white relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-primary {{ Request::routeIs('createmail') ? 'bg-primary text-white' : 'bg-none border-gray-300 text-gray-500'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bookmark ">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-primary">
                        Buat Surat</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-primary relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus ">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Preview</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>

                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-database ">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">
                        Selesai</div>
                </div>
            </div>

            <x-alerts type="info">Silahkan pilih kategori surat terlebih dahulu agar form pengisian muncul</x-alerts>

            <div class="bg-white">
                <div class="pb-6 text-3xl font-semibold">Buat Surat</div>

                <form action="" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6" x-data="{ selectedOption: '', isOpen: false }">
                        <label for="kasur">Kategori Surat</label>
                        <select name="kasur" id="kasur" x-model="selectedOption"
                            @change="$refs[selectedOption].focus(), isOpen = true"
                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500"
                            placeholder="isikan perihal surat anda">
                            <option value=""> Pilih Kategori</option>
                            <option value="Magang">Magang</option>
                            <option value="SPK">Surat Perjanjian Kerjasama</option>
                            <option value="BAST">Berita Acara Serah Terima</option>
                        </select>
                        {{--  form magang start  --}}
                        <div class="my-3" x-show="isOpen && selectedOption === 'Magang'" x-ref="Magang"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2">
                            <div class="mb-3">
                                <label for="nomorSurat">Nomor Surat</label>
                                <input type="text" name="nomorSurat" id="nomorSurat"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="namaPihakPertama">Nama pihak pertama</label>
                                    <input type="text" name="namaPihakPertama" id="namaPihakPertama"
                                        value="PT. Javas Teknologi Integrator"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                                <div class="w-full">
                                    <label for="namaPihakKedua">Nama pihak pertama</label>
                                    <input type="text" name="namaPihakKedua" id="namaPihakKedua"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="Nik">Nomor Induk Kepundudukan</label>
                                <input type="text" name="Nik" id="Nik"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin">Jenis kelamin</label>
                                <select name="kelamin" id="kelamin"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="tempatDibuat">Tempat dibuat</label>
                                    <select name="tempatDibuat" id="tempatDibuat"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="tanggalDibuat">Tanggal dibuat</label>
                                    <input type="date" name="tanggalDibuat" id="tanggalDibuat"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="posisiKerja">Posisi Kerja</label>
                                    <select name="posisiKerja" id="posisiKerja"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="Penempatan">Penempatan</label>
                                    <input type="text" name="Penempatan`" id="Penempatan`"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="font-semibold text-2xl mb-3">Pembayaran</div>
                                <div class="mb-3">
                                    <input type="checkbox" name="pembayaran" id="pembayaran" class="mr-2">
                                    <label for="pembayaran">Tidak menerima pembayaran</label>
                                </div>
                                <div class="mb-3 flex gap-6">
                                    <div class="w-full">
                                        <label for="tanggalDibuat">Uang makan</label>
                                        <input type="text" name="tanggalDibuat" id="tanggalDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                                            placeholder="0">
                                    </div>
                                    <div class="w-full">
                                        <label for="tanggalDibuat">Uang transportasi</label>
                                        <input type="text" name="tanggalDibuat" id="tanggalDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                                            placeholder="0">
                                    </div>
                                    <div class="w-full">
                                        <label for="tempatDibuat">Dibayar dalam</label>
                                        <select name="tempatDibuat" id="tempatDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                            <option value="1 Hari">1 Hari</option>
                                            <option value="1 Minggu">1 Minggu</option>
                                            <option value="1 Bulan">1 Bulan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="tanggalDimulai">Tanggal dimulai</label>
                                    <input type="date" name="tanggalDimulai" id="tanggalDimulai"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                                <div class="w-full">
                                    <label for="tanggalBerakhir">Tanggal berakhir</label>
                                    <input type="date" name="tanggalBerakhir" id="tanggalBerakhir"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                        </div>
                        {{--  form magang end  --}}
                        {{--  form spk start  --}}
                        <div class="mt-3" x-show="isOpen && selectedOption === 'SPK'" x-ref="SPK"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2">
                            <div class="mb-3">
                                <label for="nomorSurat">Nomor Surat</label>
                                <input type="text" name="nomorSurat" id="nomorSurat"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="namaPihakPertama">Nama pihak pertama</label>
                                    <input type="text" name="namaPihakPertama" id="namaPihakPertama"
                                        value="PT. Javas Teknologi Integrator"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                                <div class="w-full">
                                    <label for="namaPihakKedua">Nama pihak pertama</label>
                                    <input type="text" name="namaPihakKedua" id="namaPihakKedua"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Nik">Nomor Induk Kepundudukan</label>
                                <input type="text" name="Nik" id="Nik"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                            </div>
                            <div class="mb-3">
                                <label for="kelamin">Jenis kelamin</label>
                                <select name="kelamin" id="kelamin"
                                    class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="tempatDibuat">Tempat dibuat</label>
                                    <select name="tempatDibuat" id="tempatDibuat"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="tanggalDibuat">Tanggal dibuat</label>
                                    <input type="date" name="tanggalDibuat" id="tanggalDibuat"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="posisiKerja">Posisi Kerja</label>
                                    <select name="posisiKerja" id="posisiKerja"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <label for="Penempatan">Penempatan</label>
                                    <input type="text" name="Penempatan`" id="Penempatan`"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="font-semibold text-2xl mb-3">Pembayaran</div>
                                <div class="mb-3">
                                    <input type="checkbox" name="pembayaran" id="pembayaran" class="mr-2">
                                    <label for="pembayaran">Tidak menerima pembayaran</label>
                                </div>
                                <div class="mb-3 flex gap-6">
                                    <div class="w-full">
                                        <label for="tanggalDibuat">Uang makan</label>
                                        <input type="text" name="tanggalDibuat" id="tanggalDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                                            placeholder="0">
                                    </div>
                                    <div class="w-full">
                                        <label for="tanggalDibuat">Uang transportasi</label>
                                        <input type="text" name="tanggalDibuat" id="tanggalDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                                            placeholder="0">
                                    </div>
                                    <div class="w-full">
                                        <label for="tempatDibuat">Dibayar dalam</label>
                                        <select name="tempatDibuat" id="tempatDibuat"
                                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle aria-pressed:outline-blue-500">
                                            <option value="1 Hari">1 Hari</option>
                                            <option value="1 Minggu">1 Minggu</option>
                                            <option value="1 Bulan">1 Bulan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 flex gap-6">
                                <div class="w-full">
                                    <label for="tanggalDimulai">Tanggal dimulai</label>
                                    <input type="date" name="tanggalDimulai" id="tanggalDimulai"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                                <div class="w-full">
                                    <label for="tanggalBerakhir">Tanggal berakhir</label>
                                    <input type="date" name="tanggalBerakhir" id="tanggalBerakhir"
                                        class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle">
                                </div>
                            </div>
                        </div>
                        {{--  form spk end  --}}
                    </div>
                    <div class="mb-6">
                        <label for="penerima">Pilih Verifikator</label>
                        <select name="penerima" id="penerima"
                            class="w-full py-3 px-4 mt-3 border-line border rounded-md focus:outline-spotSubtle"
                            placeholder="isikan perihal surat anda">
                            <option value="pilih penerima" selected disabled>pilih Verifikator</option>
                            <option value="Didi">Didi </option>
                            <option value="Abdul Kholid">Abdul Kholid </option>
                            <option value="Andariska Pramudita">Andariska Pramudita </option>
                            <option value="Afa">Afa </option>
                        </select>
                    </div>
                    <div class="flex space-x-3 items-center mb-6">
                        <input type="checkbox" name="ttd" id="ttd" class="w-5 h-5 accent-primary"
                            value="Tandai jika surat ini butuh tanda tangan penerima">
                        <label for="ttd" class="font-medium">Surat ini butuh tanda tangan penerima</label>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('outmail') }}"
                            class="px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
                        <a id="buttonPreview" href="{{ route('premail') }}"
                            class="px-3 w-40 py-2 border-line border text-md rounded-md text-center bg-primary text-white font-semibold" >Preview</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop
