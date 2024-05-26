@extends('layouts.app')
@section('content')
    <!-- main layout -->
    <x-header>Tambah Pengguna Baru</x-header>
    <div class="ganti-password">
        <div>
            
            <div class="pb-10">
                <form action="" action="">
                    @csrf
                    <div class="mb-6 flex gap-6">
                        <div class="w-full">
                            <label for="name">Nama Depan</label>
                            <input type="text" name="name" id="name"
                                class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full "
                                placeholder="Masukan Nama depan anda">
                        </div>
                        <div class="w-full">
                            <label for="name">Nama Belakang</label>
                            <input type="text" name="name" id="name"
                                class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                                placeholder="Masukan Nama belakang anda">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" name="username" id="username"
                            class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                            placeholder="Masukan nama pengguna anda">
                    </div>
                    <div class="mb-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                            placeholder="masukan email anda disni">
                    </div>
                    <div class="mb-6">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan"
                            class="px-4 py-3 border border-line rounded-lg focus:outline-spotSubtle block mt-3 w-full"
                            placeholder="Masukan Jabatan apa anda sekarang">
                    </div>
                    <div class="mb-6">
                        <label for="password">Kata Sandi</label>
                        <!-- <input type="password" name="password" placeholder="Masukan Kata Sandi" class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3"> -->
                        <div class="relative">
                            <input type="password" name="password" placeholder="Masukan Kata Sandi" id="password"
                                class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3"
                                autocomplete="off">
                            <div id="show" class="absolute cursor-pointer top-[25px] right-6">
                                <i class="fas fa-eye fa-lg"></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="px-6 py-3 bg-primary rounded-lg text-white font-semibold w-full">Ubah
                            Kata Sandi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- main layout end -->
@endsection
@push('script')
<script>
    $("#show i").click(function () {
        // console.log("ok")
        if ($('#password').prop('type') === 'password') {
            $('#password').prop('type', 'text');
            $('#show i').removeClass('fa-eye').addClass('fa-eye-slash')
        } else {
            $('#password').prop('type', 'password');
            $('#show i').removeClass('fa-eye-slash').addClass('fa-eye')
        }
    })
</script>
@endpush