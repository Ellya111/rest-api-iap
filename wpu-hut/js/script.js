function tampilkanSemuaMenu() {
    $.getJSON('data/pizza.json', function (data) {
        let menu = data.menu;
        let content = '';

        $.each(menu, function (i, data) {
            content += '<div class="col-md-4">';
            content += '<div class="card mb-3">';
            content += '<img src="img/menu/' + data.gambar + '" class="card-img-top w-100">';
            content += '<div class="card-body">';
            content += '<h5 class="card-title">' + data.nama + '</h5>';
            content += '<p class="card-text">' + data.deskripsi + '</p>';
            content += '<h5 class="card-title">' + data.harga + '</h5>';
            content += '<a href="#" class="btn btn-primary">Pesan Sekarang</a>';
            content += '</div></div></div>';
        });

        $('#daftar-menu').html(content); // ganti isinya, bukan ditambah
    });
}

tampilkanSemuaMenu(); // Panggil pertama kali

$('.nav-link').on('click', function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);

    if (kategori == 'All Menu') {
        tampilkanSemuaMenu();
        return;
    }

    $.getJSON('data/pizza.json', function (data) {
        let menu = data.menu;
        let content = '';

        $.each(menu, function (i, data) {
            if (data.kategori == kategori.toLowerCase()) {
                content += '<div class="col-md-4">';
                content += '<div class="card mb-3">';
                content += '<img src="img/menu/' + data.gambar + '" class="card-img-top w-100">';
                content += '<div class="card-body">';
                content += '<h5 class="card-title">' + data.nama + '</h5>';
                content += '<p class="card-text">' + data.deskripsi + '</p>';
                content += '<h5 class="card-title">' + data.harga + '</h5>';
                content += '<a href="#" class="btn btn-primary">Pesan Sekarang</a>';
                content += '</div></div></div>';
            }
        });

        $('#daftar-menu').html(content); // ganti isinya, bukan ditambah
    });
});
