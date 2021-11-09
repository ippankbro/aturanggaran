
const colList = {
    "user": ['name', 'email'],
    "kategori": ['nama', 'catatan', 'type']
}

function fetchData(page) {
    page = 'get-data-' + page;
    return fetch(page)
        .then(response => response.json())
        .then(response => response);
}
async function loadData(page, col) {
    const str = '';
    const data = await fetchData(page);
    data.forEach(d => {
        col[page].forEach(c => {
            console.log(d[c]);
        });
    });
}

const page = document.querySelector('meta[name=page]').getAttribute('content');

loadData(page, colList);


// colList[page].forEach(col => {
//     console.log(col);
// });