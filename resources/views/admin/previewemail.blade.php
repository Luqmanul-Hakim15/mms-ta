@extends('layouts.app')


@section('content')
    <div class="penerima pt-6">
        <div class="px-6 py-6 ">
            <div class="flex items-center mb-20 w-[400px] mx-auto justify-center">
                <div class="flex items-center text-white relative">
                    <div 
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ Request::routeIs('premail') ? 'bg-none text-primary border-primary' : 'bg-none border-gray-300 text-gray-500'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bookmark ">
                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase {{ Request::routeIs('premail') ? 'text-primary' : 'text-gray-500' }}">
                        Buat Surat</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out {{ Request::routeIs('premail') ? 'border-primary' : 'border-gray-300' }}"></div>
                <div class="flex items-center text-primary relative">
                    <div
                        class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 {{ Request::routeIs('premail') ? 'bg-primary text-white border-primary' : 'bg-none border-gray-300 text-gray-500'}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-user-plus ">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase {{ Request::routeIs('premail') ? 'text-primary' : 'text-gray-500' }}">
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

            <div class="bg-white pb-6 ">
                <div class="pb-6 text-3xl font-semibold">Buat Surat</div>
                <div class="w-full  drop-shadow-lg p-6 text-md h-screen border border-line overflow-auto scroll-side">
                    <table class="w-full leading-relaxed font-tahoma">
                        <tr>
                            <td>
                                <img src="../assets/img/javas-logo.png" class="w-40 mx-auto my-10" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center pt-10 pb-3">
                                <div class="text-center">Perjanjian Magang</div>
                                <span class="bg-yellow-300">NO: JVS/HR/INT/02/III/2023</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center py-3">
                                <div class="text-center">Antara</div>
                                <span class="bg-yellow-300">PT. JAVAS TEKNOLOGI INTEGRATOR</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center pt-3 pb-10">
                                <div class="text-center">Dengan</div>
                                <span class="bg-yellow-300">Idola Aji Bayu Darma</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center pt-20">
                                <span class="bg-yellow-300">2023</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-20 leading-relaxed">
                                Perjanjian Magang <span class="font-bold">(“PERJANJIAN”)</span> ini
                                dibuat dan ditandatangani di <span class="bg-yellow-300">Yogyakarta</span> pada
                                <span class="bg-yellow-300">Jumat, 01 September</span>Dua Ribu Dua Puluh
                                Tiga oleh dan antara:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <div class="ml-3">1. Nama Perusahaan <span class="mx-2">:</span>
                                        <span class="font-bold mx-3">Javas Technology</span>
                                    </div>
                                    <div class="ml-6 leading-relaxed">suatu badan usaha perseroan
                                        terbatas, berkedudukan di (Jl. Pandean Sari, Blok 4 No.12
                                        Condong Catur, Sleman, Yogyakarta), dalam kesempatan ini
                                        diwakili oleh <span class="font-bold">Didi Nur Kartiyono</span>
                                        dalam jabatannya sebagai <span class="font-bold">Chief of
                                            Executive Oﬃcer</span>, oleh dan karenanya sah bertindak
                                        untuk dan atas nama <span class="font-bold">PT. JAVAS TEKNOLOGI
                                            INTEGRATOR</span> serta selanjutnya disebut sebagai <span
                                            class="font-bold">PIHAK PERTAMA</span> dan</div>
                                </div>
                                <div class="pt-3">
                                    <div class="ml-3 py-2">2. <span class="bg-yellow-300">Nama Lengkap :
                                            Idola AJi Bayu Darma</span></div>
                                    <div class="ml-6 py-2"><span class="bg-yellow-300">Jenis Kelamain :
                                            Laki-laki</span></div>
                                    <div class="ml-6 py-2"><span class="bg-yellow-300">Alamat domisili :
                                            Panaragan Jaya, Tulang Bawang Tengah</span></div>
                                    <div class="ml-6 py-2"><span class="bg-yellow-300">Nik :
                                            1812011912020004</span></div>
                                    <div class="ml-6 py">yang dalam <span class="font-bold">PERJANJIAN</span> ini
                                        bertindak atas nama
                                        pribadi mengikatkan diri ke dalam <span class="font-bold">PERJANJIAN</span>
                                        ini, yang selanjutnya
                                        disebut sebagai <span class="font-bold">PIHAK KEDUA.</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3">
                                <span class="font-bold">PIHAK PERTAMA</span> dan <span class="font-bold">PIHAK
                                    KEDUA</span>ara bersama-sama disebut <span class="font-bold">“PARA
                                    PIHAK”</span>,menerangkan terlebih dahulu
                                hal-hal sebagai berikut:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ol class="ml-3">
                                    <li>1. <span class="font-bold">PARA PIHAK</span> menjamin keterangan
                                        yang mereka berikan dalam <span class="font-bold">PERJANJIAN</span> ini
                                        adalah benar adanya
                                        dan bertanggung jawab secara penuh atas segala akibat hukum yang
                                        mungkin dan/atau akan timbul dengan ditandatanganinya <span
                                            class="font-bold">PERJANJIAN</span> ini;</li>
                                    <li>
                                        2. <span class="font-bold">PIHAK PERTAMA</span> adalah
                                        perusahaan yang bergerak dibidang pengembangan piranti lunak dan
                                        konsultasi teknologi yang meliputi bidang pembuatan website,
                                        aplikasi, dan tools penunjang integrasi teknologi lainnya.
                                    </li>
                                    <li>
                                        3. <span class="font-bold">PIHAK KEDUA</span> adalah
                                        perseorangan yang berkeinginan untuk menjadi peserta dalam
                                        program magang yang diselenggarakan oleh <span class="font-bold">PIHAK
                                            PERTAMA</span>;
                                    </li>
                                </ol>
                                <div class="pt-3">Berdasarkan hal-hal di atas, maka <span class="font-bold">PARA
                                        PIHAK</span>epakat untuk mengikatkan diri
                                    dalam <span class="font-bold">PERJANJIAN</span> dengan syarat dan
                                    ketentuan sebagai berikut:</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold pt-6">Pasal 1</td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold">ikatan kerja</td>
                        </tr>
                        <tr>
                            <td><span class="font-bold">PIHAK PERTAMA</span>dengan ini menerima <span
                                    class="font-bold">PIHAK KEDUA</span> menjadi peserta dalam program
                                magang yang diselenggarakan oleh <span class="font-bold">PIHAK
                                    PERTAMA</span> sebagai <span class="bg-yellow-300">Front-end Intern
                                    di kantor Yogyakarta.</span></td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold pt-6">Pasal 2</td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold">HAK DAN KEWAJIBAN</td>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li class="font-bold uppercase">1. hak pihak pertama</li>
                                    <ol class="ml-3">
                                        <li>a. Mendapatkan prestasi PIHAK KEDUA sesuai dengan target
                                            yang
                                            telah ditentukan oleh PIHAK PERTAMA;</li>
                                        <li>b. Mengadakan tindakan korektif kepada PIHAK KEDUA jika
                                            terjadi
                                            pelanggaran perjanjian;</li>
                                        <li>c. Memutuskan perjanjian tanpa dikenakan sanksi dalam hal
                                            PIHAK
                                            KEDUA tidak dapat menunjukkan hasil kinerja yang memenuhi
                                            syarat
                                            PIHAK PERTAMA;</li>
                                        <li>d. Melakukan pemutusan perjanjian apabila selama dalam masa
                                            perjanjian PIHAK KEDUA dianggap menurut PIHAK PERTAMA
                                            mengganggu
                                            proses magang dan/atau melakukan kesepakatan rahasia dengan
                                            pihak lain, baik secara langsung maupun tidak langsung,
                                            berkaitan dengan isi baik perjanjian antara peserta magang
                                            di
                                            PIHAK PERTAMA;</li>
                                    </ol>
                                    <li class="font-bold uppercase">2. kewajiban pihak pertama</li>
                                    <ol class="ml-3">
                                        <li>a. Melalui Koordinator Magang, memberikan poin-poin atau
                                            pengetahuan dari produk dan jasa yang dilakukan perusahaan,
                                            serta memberikan pendidikan berupa materi-materi pengetahuan
                                            sesuai bidang yang ditekuni;</li>
                                        <li>b. Melalui Koordinator Magang, materi pendukung berupa:</li>
                                        <ol class="ml-3">
                                            <li>b.1. Jadwal Magang;</li>
                                            <li>b.2. SOP Magang;</li>
                                            <li>b.3. Materi terkait posisi Magang;</li>
                                            <li>b.4. Kelas-kelas yang menunjang skill Magang;</li>
                                        </ol>
                                        <li>c. Melalui Koordinator Magang memberikan arahan rencana
                                            pengembangan skill/kemampuan dan penentuan pembagian
                                            pelaksanaan pekerjaan selama magang sesuai posisi yang
                                            ditetapkan;</li>
                                        <li>d. Memberikan peringatan yang dapat disertai sanksi jika ada
                                            pelanggaran;</li>
                                        <li>e. Melakukan pengawasan dan evaluasi kinerja;</li>
                                        <li>f. Memberikan insentif berupa uang makan dan transportasi
                                            kepada <span class="font-bold">PIHAK KEDUA </span>sesuai
                                            dengan besaran yang telah disepakati pada saat
                                            penandatanganan <span class="font-bold">PERJANJIAN</span>;
                                        </li>
                                    </ol>
                                    <li class="font-bold uppercase">3. Hak PIHAK KEDUA</li>
                                    <ol class="ml-3">
                                        <li>a. Hak <span class="font-bold">PIHAK KEDUA </span>menerima
                                            orientasi standar tentang perusahaan yang akan diberikan
                                            <span class="font-bold">PIHAK PERTAMA</span> untuk memenuhi
                                            seluruh target/standar/capaian yang telah ditentukan oleh
                                            koordinator magang <span class="font-bold">PIHAK
                                                KEDUA</span>;
                                        </li>
                                        <li>b. Memberikan masukan atau pertimbangan yang tidak mengikat
                                            kepada<span class="font-bold"> PIHAK PERTAMA</span>atas
                                            seluruh aktivitas selama periode magang berlangsung;</li>
                                        <li>c. <span class="bg-yellow-300">Menerima pembayaran atas
                                                periode magang yang sebagaimana diatur dalam perjanjian
                                                ini, yaitu uang makan sejumlah Rp 0,- ditambah uang
                                                transportasi Rp 0,- dalam 1 hari</span>;</li>
                                        <li>d. Total pembayaran dalam 1 bulan berdasarkan absensi;</li>
                                        <li>e. Fee Magang akan diberikan dalam bentuk transfer antar
                                            bank setiap tanggal 1 perbulannya;</li>
                                    </ol>
                                    <li class="font-bold">4. Kewajiban PIHAK KEDUA</li>
                                    <ol class="ml-3">
                                        <li>a. Menaati semua peraturan, ketentuan dan standar yang telah
                                            ditetapkan oleh <span class="font-bold">PIHAK
                                                PERTAMA;</span></li>
                                        <li>b. Melaporkan segala sesuatu yang berkaitan dengan aktivitas
                                            pengelolaan pekerjaan kepada <span class="font-bold">PIHAK
                                                PERTAMA;</span></li>
                                        <li>c. Aktif hadir dan ikut dalam diskusi tentang projek-projek
                                            <span class="font-bold">PIHAK PERTAMA;</span>
                                        </li>
                                        <li>d. Melakukan konsultasi dalam hal magang dengan <span
                                                class="font-bold">PIHAK PERTAMA</span>
                                            selama periode magang berlangsung;
                                        </li>
                                        <li>e. Menaati peraturan serta ketentuan dalam pedoman-pedoman
                                            magang yang ditetapkan <span class="font-bold">PIHAK
                                                PERTAMA</span>,</li>
                                        <li>f. Tidak mengundurkan diri di tengah pelaksanaan tugas yang
                                            diberikan selama masa internship.</li>
                                        <li>g. Menjaga kerahasiaan mengenai segala macam dan bentuk
                                            informasi, data, dokumentasi ataupun pengetahuan lain yang
                                            berhubungan dengan <span class="font-bold">PIHAK
                                                PERTAMA</span> misalnya dan tidak terbatas pada:</li>
                                        <ol class="ml-3">
                                            <li>b.1. Jadwal Magang,</li>
                                            <li>b.2. SOP Magang,</li>
                                            <li>b.3. Materi terkait posisi Magang</li>
                                        </ol>
                                    </ol>
                                    <li class="font-bold uppercase">5. Deskripsi Pekerjaan</li>
                                    <ol class="ml-3">
                                        <li>a. Turut serta dan aktif dalam proses pekerjaan yang
                                            akan dilakukan
                                            <span class="font-bold">
                                                PIHAK PERTAMA;
                                            </span>
                                        </li>
                                        <li>b. Ikut dalam pembuatan ide dan memberikan masukan
                                            mengenai produk yang dibuat oleh <span class="font-bold">PIHAK
                                                PERTAMA;</span></li>
                                        <li>c. Melakukan review berkala pada saat periode
                                            internship;</li>
                                        <li>d. Wajib menyelesaikan tugas yang diberikan oleh <span
                                                class="font-bold">PIHAK PERTAMA</span>
                                            selama periode internship;
                                        </li>
                                    </ol>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold pt-6">Pasal 3</td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold">jangka waku perjanjian</td>
                        </tr>
                        <tr>
                            <td>Perjanjian ini berlaku mulai <span class="bg-yellow-300">1 September
                                    2023 - 31 Desember 2023</span>Namun demikian perjanjian menjadi
                                tidak berlaku apabila (salah satu dari):</td>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li>1. <span class="font-bold">PIHAK KEDUA</span> tidak dapat
                                        menunjukkan hasil magang yang memenuhi syarat <span class="font-bold">PIHAK
                                            PERTAMA</span> selama jangka waktu
                                        perjanjian;</li>
                                    <li>2. <span class="font-bold">PIHAK KEDUA</span> dan <span class="font-bold">PIHAK
                                            PERTAMA</span> setuju untuk
                                        menghentikan kesepakatan dalam Perjanjian ini;</li>
                                    <li>3. Terjadinya pemutusan Hubungan Magang sebagaimana diatur dalam
                                        Perjanjian ini;</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold pt-6">Pasal 4</td>
                        </tr>
                        <tr>
                            <td class="uppercase text-center font-bold">Jadwal Magang</td>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li>
                                        1. Hari magang efektif adalah Senin - Jumat, pukul: 09.00 -
                                        18.00 WIB;
                                    </li>
                                    <li>
                                        2. Apabila <span class="font-bold">PIHAK KEDUA</span> tidak
                                        dapat memenuhi kewajiban pada hari tertentu, wajib
                                        memberitahukan kepada <span class="font-bold">PIHAK
                                            PERTAMA</span> dengan tenggat waktu minimal 2 (dua) hari
                                        sebelum hari perijinan (H-2);
                                    </li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">
                                Surat Perjanjian ini dibuat rangkap 2 (dua) yang akan dibubuhi materai
                                secukupnya dan masing-masing mempunyai kekuatan hukum yang sama setelah
                                ditandatangani oleh <span class="font-bold">PIHAK PERTAMA</span> dan
                                <span class="font-bold">PIHAK KEDUA</span> pada hari dan tanggal
                                tersebut diatas.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="w-full text-center">
                                    <tr class="border border-black w-1/2 text-center">
                                        <th class="font-bold border border-black uppercase">Pihak
                                            Pertama</th>
                                        <th class="font-bold border border-black uppercase">Pihak Kedua
                                        </th>
                                    </tr>
                                    <tr class="w-1/2 text-center h-60">
                                        <td class="font-bold border border-black uppercase p-3">
                                            <div>
                                                <img src="../assets/img/ttd-javas.png" alt="" class="w-36 mx-auto">
                                                <span class="font-bold uppercase">DIDI NUR
                                                    KARTIYONO</span>
                                            </div>
                                        </td>
                                        <td class="font-bold border border-black uppercase p-3">
                                            <div>
                                                <img src="" alt="">
                                                <span class="font-bold bg-yellow-300 uppercase">IDOLA
                                                    AJI BAYU DARMA</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
<div class="flex gap-3 justify-end items-center">
    <a href="{{ route('createmail') }}" class="px-5 py-2 border border-line text-gray-500 rounded-lg">Kembali</a>
    <a href="{{ route('mailshare') }}" class="px-5 py-2 bg-primary text-white rounded-lg">Selanjutnya</a>
</div>
        </div>
    </div>
@stop
