


// function dataTest() {
//     return fetch('/test')
//         .then(response => response.json())
//         .then(response => response);
// }


// async function cetakData() {
//     const data = await dataTest();
//     data.forEach(d => {
//         console.log(`nama : ${d.name}
//         email : ${d.email}`);
//     });
// }

// const btn = document.getElementById('share');

// btn.addEventListener('click', () => cetakData());

function fetchData(page) {
    return fetch(page)
        .then(response => response.json())
        .then(response => response);
}
async function getData(page) {
    const data = await fetchData(page);
    console.log(data);
}

const page = document.querySelector('meta[name=page]').getAttribute('content');


getData(`get-data-${page}`);