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
});