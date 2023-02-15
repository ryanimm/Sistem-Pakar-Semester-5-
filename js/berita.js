$(this).ready(function() {
    getNews()

    function getNews() {
        $.ajax({
            type: "GET",
            url: "_php/getBerita.php",
            dataType: "JSON",
            success: function(response) {
                var kode = "";
                $.each(response, function(i, obj) {
                    console.log(kode)
                    kode += '<div class="card kartu pb-3"><div class="card-img-body"><img class="card-img" src="gambar/Berita/' + obj.gambar_berita + '" alt="Card imagecap"></div><div class="card-body"><h4 class="card-title">' + obj.nama_berita + '</h4><p class="card-text">' + obj.keterangan_berita.substring(0, 250) + '....</p><a href="isiBerita.php?id=' + obj.id + '#disqus_thread" class="btn btn-success mt-5">Read More</a></div></div>'
                    $("#listberita").html(kode);
                })

            }
        });
    }

})