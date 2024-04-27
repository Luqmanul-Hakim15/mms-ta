<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Management System PT. Javas Teknologi Integrator</title>
    
    {{-- VITE --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Resource --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    
<!-- NAVBAR -->
{{-- Section Navbar Start  --}}
<nav class="fixed top-0 left-0 right-0 bg-white z-50 shadow-md">
    <div class="w-full">
        <div class="flex relative justify-between">
            <div class="py-3 px-10 flex gap-x-10 flex-2">
                <h1 class="text-3xl text-primary font-bold">JAVAS <span class="text-black font-bold">MMS</span></h1>
                <div class="w-10 h-10 rounded-full bg-slate-200">
                    <div class="flex justify-center mt-2"> <img src="images/list.svg" alt="#" class="w-6"></i></div>
                </div>
            </div>
            
        <div class="flex items-center px-6">
            <div class="flex relaive px-16"><img src="images/bell.svg" alt="#" class="w-6"></i></div>
            <div class="profile w-10 relative h-10 rounded-full bg-slate-400 bg-cover bg-center bg-no-repeat" style="background-image: url(https://source.unsplash.com/featured?profile);"></div>
        </div>
    </div>
</nav>
{{-- Section Navbar End  --}}

{{-- SIDEBAR  --}}
{{-- Section Sidebar Start  --}}
<aside id="sidebar" class="w-[260px] py-6 px-6 bg-white ">
    <div class="fixed ">
        
         {{-- Menu Admin  --}}
         <div class="pt-16 h-screen">
             <div class="pb-6 pt-3">
                 <a href="buat-surat.html"
                     class="block px-4 py-4 rounded-lg bg-primary font-semibold text-white hover:font-medium  hover:text-black    hover:bg-opacity-10">
                     <i class="ph-fill ph-paper-plane-tilt fa-lg me-3"></i>
                     Buat Surat
                 </a>
             </div>
             
             <h2 class="mb-4 text-sm font-bold">Menu</h2>
             <ul class="flex flex-col gap-3">
                 <li><a href="#" id="#"
                    class=" w-full block p-3  text-black rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                    <i class="ph-fill ph-microsoft-outlook-logo fa-lg me-3"></i>
                    Surat Keluar</a>
                </li>
                 <li><a href="surat-masuk.html" id="arsip"
                    class=" w-full block p-3 rounded-lg font-medium hover:bg-spotSubtle hover:bg-opacity-50 hover:text-black">
                    <i class="ph-fill ph-archive fa-lg me-3"></i>
                    Surat Masuk</a>
                </li>
                 <li><a href="kategori.html"
                    class="w-full block p-3  text-black rounded-lg font-semibold hover:bg-primary hover:bg-opacity-5 hover:text-black">
                    <i class="ph-fill ph-paint-brush-broad fa-lg me-3"></i>
                    Template Kategori</a>
                 </li>
                 <li><a href="template-header.html"
                    class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                    <i class="ph-fill ph-gradient fa-lg me-3"></i>
                    Template Header</a>
                 </li>
                 <li><a href="template-footer.html"
                    class="block p-3 rounded-lg font-medium  hover:bg-primary hover:bg-opacity-5">
                    <i class="ph-fill ph-paint-roller fa-lg me-3"></i>
                    Template Footer</a>
                 </li>
                 <li><a href="verifikator.html"
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
                      <a href="akun.html" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="fa fa-user fa-lg me-2"></i> Akun</a>
                  </li>
                  <li>
                      <a href="ganti-password.html" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="fa fa-key fa-lg me-2"></i> Ganti Password</a>
                  </li>
                  <li>
                    <a href="users.html" class="w-full block p-3  text-black rounded-lg font-medium hover:bg-primary hover:bg-opacity-5 hover:text-black"><i class="fa fa-users fa-lg me-2"></i>Akun Users</a>
                </li>
              </ul>
             </div>
         </div> 
    </div>
  </aside>
  <!-- Section Sidebar end -->



</body>
</html>