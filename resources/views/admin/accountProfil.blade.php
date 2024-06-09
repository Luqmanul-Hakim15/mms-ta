@extends('layouts.app')
@section('content')
    <x-header>Profil</x-header>
    <!-- main layout -->
    <div class="ganti-password">
        <div class=" pb-10">

            <div class=" rounded-xl   ">
                <div>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex items-center gap-6 mb-10 ">
                            <div id="imgAkun"
                                class="w-[100px] h-[100px] bg-cover rounded-full bg-no-repeat bg-center cursor-pointer"
                                style="background-image: url('{{ asset($user->image_profile) }}')" ;>
                            </div>
                            <input type="file" name="imageProfile" id="fileAkun" class="hidden">
                            <div>
                                <h3 class="font-semibold mb-3">Foto Profil</h3>
                                <p class="text-xs opacity-50">PNG, JPG, GIF max size of 5MB</p>
                            </div>
                        </div>
                        <div class="mb-6 flex gap-6">
                            <div class="w-full">
                                <label for="name">Nama Depan</label>
                                <input type="text" name="firstname" id="name"
                                    class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full "
                                    placeholder="Masukan Nama depan anda" value="{{ $user->firstname }}">
                            </div>
                            <div class="w-full">
                                <label for="name">Nama Belakang</label>
                                <input type="text" name="lastname" id="name"
                                    class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                                    placeholder="Masukan Nama belakang anda" value="{{ $user->lastname }}">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="username">Nama Pengguna</label>
                            <input type="text" name="username" id="username"
                                class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                                placeholder="Masukan nama pengguna anda" value="{{ $user->username }}">
                        </div>
                        <div class="mb-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                                placeholder="masukan email anda disni" value="{{ $user->email }}">
                        </div>
                        <div class="mb-6">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" name="position" id="jabatan"
                                class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                                placeholder="Masukan Jabatan apa anda sekarang" value="{{ $user->position }}">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-primary rounded-xl font-semibold text-white">Simpan
                                Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- main layout end -->
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#imgAkun').click(function() {
                // console.log('ok')
                $('#fileAkun').click();
            });
        });
    </script>
@endpush
