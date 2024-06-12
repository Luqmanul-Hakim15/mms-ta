<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suratan</title>

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- tailwind css -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        body {
            width: 210mm;
            /* Lebar A4 dalam mm */
            margin: 0 auto;
            /* Pusatkan konten */
            padding: 20px;
            /* Beri jarak di sekitar konten */
            box-sizing: border-box;
            /* Pastikan padding tidak menambah lebar body */
        }

        @media print {

            /* Sembunyikan button */
            .button-print {
                display: none;
            }

            /* Sembunyikan link */
            .link-class {
                display: none;
            }
        }

        @media print {

            /* Set ukuran halaman untuk cetak menjadi A4 */
            @page {
                size: A4;
                margin: 0;
                /* Hilangkan margin agar mencetak tepat di tepi halaman */
            }
        }
    </style>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="../node_modules/dropify/dist/css/dropify.css">
    <!-- <link rel="stylesheet" href="../node_modules/dropify/dist/fonts/dropify.woff"> -->


    <!-- phospor -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-background">

    <!-- main layout -->
    <div class="penerima" x-data="{popSurat:false, selesai:''}">
        <div class="bg-white w-full mx-auto py-6 px-6 drop-shadow-lg">
            <div class="">
                <!-- <object data="/assets/file/Kontrak Magang - Dola.pdf" width="457" height="550"></object> -->
            </div>
            <div class="w-full  drop-shadow-lg p-6 text-md">
                <table class="w-full leading-relaxed font-tahoma">
                    <tr>
                        <td>
                            <img src="{{asset('images/javas-logo.png')}}" class="w-40 mx-auto my-10" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center pt-10 pb-3">
                            <div class="text-center">Perjanjian Magang</div>
                            <span>NO: {{ $intern->reference_number }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center py-3">
                            <div class="text-center">Antara</div>
                            <span>PT. JAVAS TEKNOLOGI INTEGRATOR</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center pt-3 pb-10">
                            <div class="text-center">Dengan</div>
                            <span>{{ $intern->name }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center pt-20">
                            <span>2024</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-20 leading-relaxed">
                            Perjanjian Magang <span class="font-bold">(“PERJANJIAN”)</span> ini
                            dibuat dan ditandatangani di <span>{{ $intern->location_form }}</span> pada
                            <span>{{ \Carbon\Carbon::parse($intern->date_created)->translatedFormat('l, j F') }}</span> Dua Ribu Dua Puluh
                            Empat oleh dan antara:
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
                                        INTEGRATOR</span> serta selanjutnya disebut sebagai <span class="font-bold">PIHAK PERTAMA</span> dan</div>
                            </div>
                            <div class="pt-3">
                                <div class="ml-3 py-2">2. <span>Nama Lengkap :
                                        {{ $intern->name }}</span></div>
                                <div class="ml-6 py-2"><span>Jenis Kelamain :
                                        {{ $intern->gender }}</span></div>
                                <div class="ml-6 py-2"><span class="">Alamat domisili :
                                        {{ $intern->address }}</span></div>
                                <div class="ml-6 py-2"><span>Nik :
                                        {{ $intern->identification_number }}</span></div>
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
                                    mungkin dan/atau akan timbul dengan ditandatanganinya <span class="font-bold">PERJANJIAN</span> ini;</li>
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
                        <td><span class="font-bold">PIHAK PERTAMA</span>dengan ini menerima <span class="font-bold">PIHAK KEDUA</span> menjadi peserta dalam program
                            magang yang diselenggarakan oleh <span class="font-bold">PIHAK
                                PERTAMA</span> sebagai <span>{{ $intern->intern_position }}</span></td>
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
                                    <li>c. <span>Menerima pembayaran atas
                                            periode magang yang sebagaimana diatur dalam perjanjian
                                            ini, yaitu uang makan sejumlah Rp {{ number_format($intern->meal_allowance, 0, ',', '.') }},- ditambah uang
                                            transportasi Rp {{ number_format($intern->transport_allowance, 0, ',', '.') }},- dalam 1 hari</span>;</li>
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
                                    <li>d. Melakukan konsultasi dalam hal magang dengan <span class="font-bold">PIHAK PERTAMA</span>
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
                                    <li>d. Wajib menyelesaikan tugas yang diberikan oleh <span class="font-bold">PIHAK PERTAMA</span>
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
                        <td>Perjanjian ini berlaku mulai <span>{{ \Carbon\Carbon::parse($intern->start_date)->translatedFormat('j F Y') }} - {{ \Carbon\Carbon::parse($intern->end_date)->translatedFormat('j F Y') }}</span>Namun demikian perjanjian menjadi
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
                                            <img src="{{ asset($intern->verificator->signature_image) }}" alt="" class="w-36 mx-auto">
                                            <span class="font-bold uppercase">
                                                {{ $intern->verificator->name   }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="font-bold border border-black uppercase p-3">
                                        <div>
                                            <img src="" alt="">
                                            <span class="font-bold uppercase pt-5">{{ $intern->name }}</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- <div class="py-6">
                <form action="">
                    <!-- <div class="flex space-x-3 items-center mb-6">
                        <input type="checkbox" name="ttdPengesahan" id="ttdPengesahan"
                            class="w-5 h-5 accent-primary">
                        <label for="ttdPengesahan" class="font-medium">Silahkan tandai kotak jika ingin tanda
                            tangan</label>
                    </div> -->
            <!-- <div>
                        <label for="" class="block">
                            <span class="sr-only">choose file</span>
                            <input type="file" name="" id="" class="block w-full file:bg-primary file:bg-opacity-5 hover:file:bg-opacity-10 file:px-4 file:py-2 file:border-0 file:font-semibold file:text-primary file:rounded-xl file:mr-3 file:cursor-pointer cursor-pointer">
                        </label>
                    </div> -->
            <!--<div class="py-6 flex justify-center">
                        <button type="button" @click="popSurat=true" x-model="selesai"
                            class="px-6 py-3 flex gap-3 items-center justify-center bg-primary font-semibold text-white rounded-xl"><i
                                class="fa-solid fa-file-signature"></i>Verifikasi Surat</button>
                    </div>
                    <div x-show="popSurat">
                        <div class="absolute top-0 left-0 right-0 bottom-0 inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <div x-show="popSurat" x-transition.origin.bottom.duration.900ms
                        class="absolute left-0 right-0 flex justify-center bottom-20 ">
                        <div x-show="popSurat" class="w-1/2 p-6 border border-line bg-white rounded-lg">
                            <div class="flex justify-end items-center pb-4">
                                <button type="button" @click="popSurat=false"><i
                                        class="fas fa-xmark fa-xl"></i></button>
                            </div>
                            <h2 class="text-2xl font-bold mb-3 text-center text-primary">Tanda Tangan Penerima</h2>
                            <div class="text-black opacity-50 text-center mb-6">Upload Tanda Tangan anda di sini
                                untuk
                                mengesahkan surat kerjasama anda dengan kami</div>
                            <div>
                                <form action="">
                                    <input type="file" name="verifTtd" id="verifTtd">
                                    <div class="mt-5 flex justify-center">
                                        <a href="share.html" type="button" class="px-6 w-1/2 py-3 text-center flex gap-3 items-center justify-center bg-primary font-semibold text-white rounded-xl">Unggah Tanda Tangan</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
            <div class="flex justify-end gap-4">
                <a href="{{ route('outmail') }}" class="button-print px-4 py-2 border-line border text-md rounded-md text-grey font-semibold">Kembali</a>
                <button onclick="printPage()" class="button-print px-3 w-40 py-2 border-line border text-md rounded-md text-center bg-primary text-white font-semibold">Cetak</button>
            </div>
        </div>

    </div>
    <!-- main layout end -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
        function printPage() {
            window.print();
        }
    </script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/dropify/dist/js/dropify.min.js"></script>

</body>

</html>