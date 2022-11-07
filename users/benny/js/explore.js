const filterArticles = () =>{
    var searchTerm = document.querySelector("#search").value;
    const articles = document.querySelectorAll("div.item");
    // console.log(articles);
    for (article of articles){
        console.log(article);
        var isMatch = article.innerText.toUpperCase().includes(searchTerm.toUpperCase())
        console.log(isMatch)
        if (isMatch){
            article.style.display='flex';
        }
        else{
            article.style.display='none';
        }
    }
};


document.querySelector('#search').onkeyup = filterArticles;