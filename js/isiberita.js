$(this).ready(function() {

    function getParam(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }



    getNewsContent()

    function getNewsContent() {
        var id = getParam('id');
        $.ajax({
            type: "GET",
            url: "_php/getIsiBerita.php?id=" + id,
            dataType: "JSON",
            success: function(result) {
                console.log(result[0].nama_berita)
                var kodezz = "";
                kodezz += '<div class="kategoricaption mb-5"><div class="row"><div class="col"><P class="mb-5"><a href="berita.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/></svg> Kembali ke Halaman Berita</a></P><h1 class="text-center fw-bold judulkategori">' + result[0].nama_berita + '</h1><hr class="mx-auto" style="width:10%; background-color: #f49f16;"></div></div><div class="row "><div class="col"><img class="imgisiberita" src="gambar/Berita/' + result[0].gambar_berita + '"><span class="caption">' + result[0].keterangan_gambar + '</span><div class="mt-3"><p style="white-space: pre-line;text-align:justify;">' + result[0].keterangan_berita + '</p></div></div></div></div>'
                $("#isiberita").html(kodezz);
            }
        });
    }

})