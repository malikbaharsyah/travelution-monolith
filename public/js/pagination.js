document.addEventListener("DOMContentLoaded" , async () => {
    const urlParams = new URLSearchParams(window.location.search);
    var currentPage = urlParams.get('page');

    const lib = new Lib();
    const res = await lib.get('/api/get-places-count');
    // console.log(res);
    const jsonRes = JSON.parse(res);
    const totalPages = Math.ceil(jsonRes["message"][0]["placeCount"]/18);
    const url = window.location.origin + window.location.pathname;
    const paginationList = document.getElementById('pagination-list');

    
    while (paginationList.firstChild) {
        paginationList.removeChild(paginationList.firstChild);
    }
    const prevLink = document.createElement('a');
    prevLink.href = url + "?page=" + (currentPage-1);
    prevLink.textContent = '«';
    paginationList.appendChild(prevLink);
    for (let i = 1; i <= totalPages; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = url + "?page=" + (i);
        pageLink.textContent = i;
        pageLink.id = i;
        if (i === currentPage) {
            pageLink.classList.add('active');
        }
        paginationList.appendChild(pageLink);
        pageLink.addEventListener('click', (event) => {
            event.preventDefault();
            const paginationLinks = paginationList.querySelectorAll('a');
            paginationLinks.forEach(link => {
                link.classList.remove('active');
            });
            pageLink.classList.add('active');
            currentPage = i;
            window.location.href = pageLink.href;
        });
    }
    const nextLink = document.createElement('a');
    nextLink.href = url + "?page=" + (currentPage+1);
    nextLink.textContent = '»';
    paginationList.appendChild(nextLink);

    prevLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage > 1) {
            const curPage = document.getElementById(currentPage);
            curPage.classList.remove('active');
            currentPage--;
            // updatePagination();
            const newPage = document.getElementById(currentPage);
            newPage.classList.add('active');
            window.location.href = url + "?page=" + (currentPage);
        }
    });

    nextLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage < totalPages) {
            const curPage = document.getElementById(currentPage);
            curPage.classList.remove('active');
            currentPage++;
            // updatePagination();
            const newPage = document.getElementById(currentPage);
            newPage.classList.add('active');
            window.location.href = url + "?page=" + (currentPage);
        }
    });

    
    
    // updatePagination();
});



