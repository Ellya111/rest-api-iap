function searchMovie() {
    $.ajax({
        url: 'https://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': 'd7998028',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response === "True") {
                $('#movie-list').html(''); // clear sebelum append baru
                let movies = result.Search;

                $.each(movies, function (i, data) {
                    $('#movie-list').append(`
                        <div class="col-md-4">
                            <div class="card mb-3">
                                <img src="${data.Poster}" class="card-img-top" alt="${data.Title}">
                                <div class="card-body">
                                    <h5 class="card-title">${data.Title}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">${data.Year}</h6>
                                    <a href="#" class="card-link see-detail" data-id="${data.imdbID}" data-bs-toggle="modal" data-bs-target="#exampleModal">See Detail</a>
                                </div>
                            </div>
                        </div>
                    `);
                });

                $('#search-input').val('');
            } else {
                $('#movie-list').html('<h1 class="text-center">Movie Not Found!</h1>');
            }
        }
    });
}

$('#search-button').on('click', function () {
    searchMovie();
});

$('#search-input').on('keyup', function (e) {
    if (e.keyCode === 13) {
        searchMovie();
    }
});

// Event delegation untuk modal detail
$('#movie-list').on('click', '.see-detail', function () {
    $.ajax({
        url: 'https://www.omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': 'd7998028',
            'i': $(this).data('id')
        },
        success: function (movie) {
            if (movie.Response === "True") {
                $('.modal-title').html(movie.Title);
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="${movie.Poster}" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Released:</strong> ${movie.Released}</li>
                                    <li class="list-group-item"><strong>Genre:</strong> ${movie.Genre}</li>
                                    <li class="list-group-item"><strong>Director:</strong> ${movie.Director}</li>
                                    <li class="list-group-item"><strong>Actors:</strong> ${movie.Actors}</li>
                                    <li class="list-group-item"><strong>Plot:</strong> ${movie.Plot}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    });
});
