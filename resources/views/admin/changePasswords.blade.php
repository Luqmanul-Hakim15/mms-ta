@extends('layouts.app')
@section('content')
<!-- main layout -->
<div class="ganti-password">
    <div class="px-10  flex justify-center items-center">

        <div class=" p-6 rounded-xl w-1/2  ">

            <div>
                <!-- <div class="mb-6">
                    <h1 class="text-center text-4xl font-bold text-primary">Suratan</h1>
                </div> -->
                <div class="py-10">
                    <h2 class="text-center text-3xl font-semibold">Kata Sandi Baru</h2>
                    <p class="text-center text-sm opacity-50 font-normal mt-2 w-3/4 mx-auto">Masukan kata sandi baru pada form di
                        bawah ini. Maksimal harus 8 karakter</p>
                </div>
                <div class="pb-10">
                    <form action="{{ route('change.password') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="password">Kata Sandi Lama</label>
                            <!-- <input type="password" name="password" placeholder="Masukan Kata Sandi Lama" class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3"> -->
                            <div class="relative">
                                <input type="password" name="password" placeholder="Masukan Kata Sandi Lama"
                                    id="password"
                                    class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3" autocomplete="off">
                                <div id="show" class="absolute cursor-pointer top-[25px] right-6">
                                    <i class="fas fa-eye fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="newPassword" name="newPassword">Kata Sandi Baru</label>
                            <div class="relative">
                                <input type="password" name="newPassword" placeholder="Masukan Kata Sandi Lama"
                                    id="newPassword"
                                    class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3" autocomplete="on">
                                <div id="showNew" class="absolute cursor-pointer top-[25px] right-6">
                                    <i class="fas fa-eye fa-lg"></i>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="px-6 py-3 bg-primary rounded-lg text-white font-semibold w-full">Ubah
                                Kata Sandi</button>
                        </div>
                    </form>
                </div>
            </div>

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
    $("#showNew i").click(function () {
        // console.log("ok")
        if ($('#newPassword').prop('type') === 'password') {
            $('#newPassword').prop('type', 'text');
            $('#showNew i').removeClass('fa-eye').addClass('fa-eye-slash')
        } else {
            $('#newPassword').prop('type', 'password');
            $('#showNew i').removeClass('fa-eye-slash').addClass('fa-eye')
        }
    })
</script>
@endpush