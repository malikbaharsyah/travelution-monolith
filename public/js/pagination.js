const totalPages = 10;
let currentPage = 1; 

const paginationList = document.getElementById('pagination-list');

function updatePagination() {
    while (paginationList.firstChild) {
        paginationList.removeChild(paginationList.firstChild);
    }
    const prevLink = document.createElement('a');
    prevLink.href = '#';
    prevLink.textContent = '«';
    paginationList.appendChild(prevLink);
    for (let i = 1; i <= totalPages; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = '#';
        pageLink.textContent = i;
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
        });
    }

    const nextLink = document.createElement('a');
    nextLink.href = '#';
    nextLink.textContent = '»';
    paginationList.appendChild(nextLink);

    prevLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            updatePagination();
        }
    });

    nextLink.addEventListener('click', (event) => {
        event.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            updatePagination();
        }
    });
}
updatePagination();
