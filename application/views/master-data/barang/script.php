<script type="text/javascript">
    var harga_pokok = document.getElementById("harga_pokok");
    var harga_jual = document.getElementById("harga_jual");
    var harga_grosir = document.getElementById("harga_grosir");

    harga_pokok.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_pokok.value = formatRupiah(this.value);
    });

    harga_jual.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_jual.value = formatRupiah(this.value);
    });

    harga_grosir.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_grosir.value = formatRupiah(this.value);
    });

    var harga_pokok_edit = document.getElementById("harga_pokok_edit");
    var harga_jual_edit = document.getElementById("harga_jual_edit");
    var harga_grosir_edit = document.getElementById("harga_grosir_edit");

    harga_pokok_edit.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_pokok_edit.value = formatRupiah(this.value);
    });

    harga_jual_edit.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_jual_edit.value = formatRupiah(this.value);
    });

    harga_grosir_edit.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      harga_grosir_edit.value = formatRupiah(this.value);
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        console.log(number_string)

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return prefix == undefined ? rupiah : rupiah ? rupiah : "";
}
</script>