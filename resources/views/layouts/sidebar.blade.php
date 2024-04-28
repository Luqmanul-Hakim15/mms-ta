<aside id="sidebar" class="flex w-[220px] h-screen">
    <div class="fixed ">
         {{-- Menu Admin  --}}
         <div class="pt-28 h-screen shadow-xl px-3 w-full">
             <div class="mb-6">
                 <a href="route {{ 'admin.index' }}"
                     class="block px-4 py-4 rounded-lg bg-primary font-semibold text-white hover:font-medium  hover:text-black    hover:bg-opacity-10">
                     <i class="ph-fill ph-paper-plane-tilt fa-lg me-3"></i>
                     Buat Surat
                 </a>
             </div>

             <h2 class="mb-4 text-sm font-bold">Menu</h2>
             <ul class="flex flex-col gap-3">
                 <li><a href="route {{ 'admin.outgoingmail' }}" id="#"
                    class=" w-full block p-3  text-black rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                    <i class="ph-fill ph-microsoft-outlook-logo fa-lg me-3"></i>
                    Surat Keluar</a>
                </li>
                 <li><a href="route {{ 'admin.incomingmail' }}" id="#"
                    class=" w-full block p-3 rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                    <i class="ph-fill ph-archive fa-lg me-3"></i>
                    Surat Masuk</a>
                </li>
                 <li><a href="route {{ 'admin.templateheader' }}"
                    class="w-full block p-3  text-black rounded-lg font-semibold hover:bg-primary hover:bg-opacity-5 hover:text-black">
                    <i class="ph-fill ph-paint-brush-broad fa-lg me-3"></i>
                    Template Kategori</a>
                 </li>
                 <li><a href="route {{ 'admin.templateheader' }}"
                    class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                    <i class="ph-fill ph-gradient fa-lg me-3"></i>
                    Template Header</a>
                 </li>
                 <li><a href="route {{ 'admin.templatefooter' }}"
                    class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                    <i class="ph-fill ph-paint-roller fa-lg me-3"></i>
                    Template Footer</a>
                 </li>
                 <li><a href="route {{ 'admin.verifikator' }}"
                    class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                    <i class="ph-bold ph-fingerprint-simple fa-lg me-3"></i>
                    Verifikator</a>
                 </li>
             </ul>

             {{-- Super Admin Menu  --}}
             <div>
              <h2 class="mb-4 mt-6 text-sm font-bold">Menu Administrator</h2>
              <ul class="flex flex-col gap-3 pb-20">
                  <li>
                      <a href="route {{ 'superadmin.account' }}" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="ph-fill ph-user fa-lg me-3"></i></i> Akun</a>
                  </li>
                  <li>
                      <a href="route {{ 'superadmin.changepassword' }}" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="ph-fill ph-key fa-lg me-3"></i>Ganti Password</a>
                  </li>
                  <li>
                    <a href="route {{ 'superadmin.useraccounts' }}" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="ph-fill ph-users-three fa-lg me-3"></i>Akun Users</a>
                </li>
              </ul>
             </div>
         </div> 
    </div>
  </aside>
  <!-- Section Sidebar end -->