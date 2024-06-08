{{-- Section Sidebar Start  --}}
<aside id="sidebar" class="flex w-[240px] fixed h-full bg-white shadow-lg">
    <div class="pt-24 top-0 left-0 w-[240px] h-screen overflow-auto scroll-side">
        {{-- Menu Admin  --}}
        <div class="px-3 w-full  -z-10 ">
            <div class="mb-6">
                <a href="{{ route('createmail') }}"
                    class="block px-4 py-4 rounded-lg transition duration-200 delay-75 {{ Request::routeIs('createmail', 'premail', 'mailshare') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}  ">
                    <i class="ph-fill ph-paper-plane-tilt fa-lg me-3"></i>
                    Buat Surat
                </a>
            </div>

            <h2 class="mb-4 text-sm font-bold">Menu</h2>
            <ul class="flex flex-col gap-3">
                <li><a href="{{ route('outmail') }}" id="#"
                        class=" w-full block p-3  rounded-lg  transition duration-200 delay-75 {{ Request::routeIs('outmail') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }} ">
                        <i class="ph-fill ph-microsoft-outlook-logo fa-lg me-3"></i>
                        Surat Keluar</a>
                </li>
                <li><a href="{{ route('surat-masuk') }}" id="#"
                        class=" w-full block p-3 rounded-lg  transition duration-200 delay-75 {{ Request::routeIs('surat-masuk', 'addmail') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }} ">
                        <i class="ph-fill ph-archive fa-lg me-3"></i>
                        Surat Masuk</a>
                </li>
                <li><a href="{{ route('admin.templatecategory') }}"
                        class="w-full block p-3 rounded-lg  transition duration-200 delay-75 {{ Request::routeIs('admin.templatecategory') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }} ">
                        <i class="ph-fill ph-paint-brush-broad fa-lg me-3"></i>
                        Kategori Surat</a>
                </li>
                <li><a href="{{ route('admin.templateheader') }}"
                        class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.templateheader') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}">
                        <i class="ph-fill ph-gradient fa-lg me-3"></i>
                        Template Header</a>
                </li>
                <li><a href="{{ route('admin.templatefooter') }}"
                        class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.templatefooter') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}">
                        <i class="ph-fill ph-paint-roller fa-lg me-3"></i>
                        Template Footer</a>
                </li>
                <li><a href="{{ route('admin.verifikator') }}"
                        class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.verifikator', 'admin.addverifikator') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}">
                        <i class="ph-bold ph-fingerprint-simple fa-lg me-3"></i>
                        Verifikator</a>
                </li>
            </ul>

            {{-- Super Admin Menu  --}}
            <div>
                <h2 class="mb-4 mt-6 text-sm font-bold">Menu Administrator</h2>
                <ul class="flex flex-col gap-3 pb-20">
                    <li>
                        <a href="{{ route('admin.profil') }}"
                            class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.profil') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}"><i
                                class="ph-fill ph-user fa-lg me-3"></i></i> Akun</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.change') }}"
                            class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.change') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}"><i
                                class="ph-fill ph-key fa-lg me-3"></i>Ganti Password</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users') }}"
                            class="block p-3 rounded-lg   transition duration-200 delay-75 {{ Request::routeIs('admin.users', 'admin.adduser') ? 'bg-primary font-semibold text-white hover:font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black' : 'hover:bg-primary hover:bg-opacity-5 hover:text-black bg-white font-medium' }}"><i
                                class="ph-fill ph-users-three fa-lg me-3"></i>Logout</a>
                    <li>
                      <a href="{{ route('logout') }}" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="ph-bold ph-sign-out fa-lg me-3"></i>Log out</a>
                  </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
<!-- Section Sidebar end -->
