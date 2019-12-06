$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Skripsi');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nim').val('');
        $('#judul').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Skripsi');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpci/skripsi/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpci/skripsi/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#judul').val(data.judul);
                $('#id').val(data.id);
            }
        });
        
    });

});