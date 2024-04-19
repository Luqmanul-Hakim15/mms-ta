$(document).ready(function () {
    $("#ttdVerif").dropify();
    $("#ttdPenerima").dropify();
  
    // index
    $("#arsip").click(function () {
      $("#subIndex").toggleClass("hidden");
    });
  
    // akun
    $('#imgAkun').click(function (){
      // console.log('ok')
      $('#fileAkun').click()
  })
  
    // surat Masuk
    $("#arsip").click(function () {
      $("#subIndex").toggleClass("hidden");
    });
  
    $(".toggleFa").on("click", function () {
      $(this).toggleClass("text-yellow-500 fas fa-solid");
    });
  
    $(".dateFilter").pickadate({
      labelMonthNext: "Bulan Selanjutnya",
      labelMonthPrev: "Bulan Sebelumnya",
      labelMonthSelect: "Pilih Bulan",
      labelYearSelect: "Pilih Tahun",
      selectMonths: true,
      selectYears: true,
      format: "dddd, dd mmm yyyy",
      formatSubmit: "yyyy/mm/dd",
      hiddenPrefix: "prefix__",
      hiddenSuffix: "__suffix",
    });
  });
  