$(document).ready(function () {
    function getAll() {
        $("#dataPegawai").html(" ");
        $.ajax({
            url:'/pegawai',
            method: "GET",
            dataType: "json",
            success:function (data) {    
                let dataPegawai = data.data;
                for (let i = 0; i < dataPegawai.length; i++) {
                     $('#dataPegawai').append('<tr><td>'+ dataPegawai[i].nama+'</td><td>'+ dataPegawai[i].nip+'</td><td>'+ dataPegawai[i].kantor+'</td><td>'+ dataPegawai[i].homebase+'</td></tr>')
                 }
            }
        })
    }
    getAll();

    // add pegawai 

    $("#tambahPegawai").click(function () {
        let sNama = $("#nama").val();
        let sNip = $("#nip").val();
        let sKantor = $("#kantor").val();
        let sHomebase = $("#homebase").val();
        
        $.ajax({
            url: '/pegawai/create',
            method: "POST",
            data: {
                nama : sNama,
                nip : sNip,
                kantor : sKantor,
                homebase : sHomebase
            },
            success: function (data) {
                getAll();
            },
            statusCode: {
                500: function() {
                  $('#error-status').html('<span>Error pak</span>');
                }
              }
        })
    })

});