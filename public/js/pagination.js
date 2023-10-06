const totalPages = 5;
const paginationList = document.getElementById('pagination-list');

for (let i = 1; i <= totalPages; i++) {
    const pageLink = document.createElement('a');
    pageLink.href = '#';
    pageLink.textContent = i;
    if (i === 1) {
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
    });
}
const lastLink = document.createElement('a');
lastLink.href = '#';
lastLink.textContent = '»';
paginationList.appendChild(lastLink);