$(document).ready(function() {
    $.material.init();//start material effect

    var showingMovies = $('#nowShowingMovies');
    var commingSoonMovies = $('#commingSoonMovies');

    //hide comming soon movies by default
    commingSoonMovies.hide();

    $('#nowShowingBtn').on('click', function() {
        console.log('show');
        //hide comming soon movies
        commingSoonMovies.hide(500);

        showingMovies.show(500);
    });

    $('#commingSoonBtn').on('click', function() {
        console.log('comming');
        showingMovies.hide(500);
        commingSoonMovies.show(500);
    });
});


