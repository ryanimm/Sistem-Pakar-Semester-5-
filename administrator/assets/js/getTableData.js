$(this).ready(function() {

    function getParam(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }


    getTableData()

    function getTableData() {
        var view = getParam('view');
        if (view == 'berita') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td><img src="../gambar/Berita/' + obj.gambar_berita + '" width="50" height="50"></td><td>' + obj.nama_berita + '</td><td><a href="#editBerita' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusBerita' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }


        if (view == 'kontak') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.fullname + '</td><td>' + obj.email + '</td><td>' + obj.message + '</td><td><a href="#hapusKontak' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'useradmin') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.username + '</td><td>' + obj.password + '</td><td><a href="#editAdmin' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusAdmin' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'keyadmin') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.admin_key + '</td><td><a href="#editAdminKey' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusAdminKey' + obj.id + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'penyakit') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.nama_penyakit + '</td><td>' + obj.det_penyakit + '</td><td>' + obj.srn_penyakit + '</td><td><a href="#editPenyakit' + obj.kode_penyakit + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusPenyakit' + obj.kode_penyakit + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'gejala') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.nama_gejala + '</td><td><a href="#editGejala' + obj.kode_gejala + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusGejala' + obj.kode_gejala + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }

        if (view == 'pengetahuan') {
            $.ajax({
                type: "GET",
                url: "_adminphp/getTableData.php?view=" + view,
                dataType: "JSON",
                success: function(response) {
                    var kode = "";
                    var no = 1;
                    $.each(response, function(i, obj) {
                        console.log(kode)
                        kode += '<tr><td>' + no++ + '</td><td>' + obj.nama_penyakit + '</td><td>' + obj.nama_gejala + '</td><td>' + obj.mb + '</td><td>' + obj.md + '</td><td><a href="#editPengetahuan' + obj.kode_pengetahuan + '" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> </i> Edit</a> <a href="#hapusPengetahuan' + obj.kode_pengetahuan + '" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</a></td></tr>'
                        $("tbody").html(kode);
                    })

                }
            });
        }


    }

});