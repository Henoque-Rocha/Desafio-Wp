const API_KEY = '07cc5478de6f4a8d5f24e527d7ee799d';
const BASE_URL = 'https://api.themoviedb.org/3/movie/popular?api_key=';
const API_URL = BASE_URL + API_KEY + '&language=pt-br&page=1';
/*Filmes*/

const IMG_URL = 'https://image.tmdb.org/t/p/w500';

const main = document.getElementById('Filmes');
const documentarios = document.getElementById('Documentarios');
const series = document.getElementById('Series');
const Home = document.getElementById('home');


getMovies(API_URL);


fetch('https://api.themoviedb.org/3/tv/popular?api_key=07cc5478de6f4a8d5f24e527d7ee799d&language=pt-br&page=1',{
    method:'GET'
}).then(response=>response.json()).then((data)=>{
    showSeries(data.results);
})

fetch('https://api.themoviedb.org/3/discover/tv?api_key=07cc5478de6f4a8d5f24e527d7ee799d&language=pt-br&sort_by=popularity.desc&page=1&timezone=America%2FNew_York&include_null_first_air_dates=false&with_watch_monetization_types=flatrate&with_status=0&with_type=0',{
    method:'GET'
}).then(response=>response.json()).then((data)=>{
    showDocumentarios(data.results);
})

/*New Movie*/
fetch('https://api.themoviedb.org/3/tv/popular?api_key=07cc5478de6f4a8d5f24e527d7ee799d&language=pt-br&page=1',{
    method:'GET'
}).then(response=>response.json()).then((data)=>{
    data.results.map((val,movie)=>{
        const BGVIDEO = document.getElementById('background-video');
        const BGHome = document.getElementById('mainOver');
        const {name,poster_path,vote_average,id,overview,backdrop_path} = val;
        const movieEl = document.createElement('div');
        movieEl.classList.add('filmes-bg-home');
        BGHome.style.backgroundImage = `url('${IMG_URL+backdrop_path}')`;
        home.innerHTML = `
        <div class="filme-bg-home">
        <span>Filmes</span> <span>`+val.vote_average+`</span>
        <h2>`+val.name+`</h2>
        <a href="/wordpress/PaginaSolo">Assistir</a>
        </div><!--filme-bg-home-->
    `;
    })
})



function getMovies() {
    fetch(API_URL).then(response=>response.json())
    .then((data)=> {

        showMovies(data.results);
    })
}

function showMovies (data) {
    /*Filmes*/
    main.innerHTML = '';

    data.forEach(movie => {
        const {title,poster_path,vote_average,id} = movie;
        const movieEl = document.createElement('div');
        movieEl.classList.add('box_filme');
        movieEl.innerHTML = `
        
        <div class="bg-filme">
            <img src="${IMG_URL+poster_path}">
        </div><!--bg-filme-->
        <div class="descricao">
            <span>${vote_average}</span> 
            <p>${title}</p>
        </div><!--descricao-->
        `;

        main.appendChild(movieEl);
    });
}

function showDocumentarios (data) {
        /*Documentarios*/

        documentarios.innerHTML = '';

        data.forEach(movie => {
            const {original_name,poster_path,vote_average,id} = movie;
            const movieEl = document.createElement('div');
            movieEl.classList.add('box_filme');
            movieEl.innerHTML = `
            
    
            <div class="bg-filme">
                <img src="${IMG_URL+poster_path}">
            </div><!--bg-filme-->
            <div class="descricao">
                <span>${vote_average}</span> 
                <p>${original_name}</p>
            </div><!--descricao-->
            
            `;
    
            documentarios.appendChild(movieEl);
        });
}

function showSeries(data) {
    series.innerHTML = '';

    data.forEach(movie => {
        const {original_name,poster_path,vote_average,id} = movie;
        const movieEl = document.createElement('div');
        movieEl.classList.add('box_filme');
        movieEl.innerHTML = `
        
        <div class="bg-filme">
        <img src="${IMG_URL+poster_path}">
        </div><!--bg-filme-->
        <div class="descricao">
        <span>${vote_average}</span> 
        <p>${original_name}</p>
        </div><!--descricao-->
        
        `;

    series.appendChild(movieEl);
});
}





























