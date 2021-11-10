//Object Untuk mengatur urutan penulisan tabel
const colList = {
    "user": ['name', 'email'],
    "kategori": ['nama', 'catatan', 'type']
}

const page = document.querySelector('meta[name=page]').getAttribute('content');//menginisiasi head halaman
const dataTable = document.querySelector('.data-table');//menginisiasi table halaman

// inisiasi tombol
const btnReload = document.querySelector('.reload');//tombol reload



/* globals Chart:false, feather:false */
function setIcon() {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

}

// Ambil data
function fetchData(page) {
    page = 'get-data-' + page;
    return fetch(page)
        .then(response => response.json())
        .then(response => response);
}

//fungsi untuk mereload data table
async function loadData(page, col, tab) {
    let str = '';
    let i = 1;
    const data = await fetchData(page);
    data.forEach(d => {
        str = str + `<tr><th>${i}</th>`;
        col[page].forEach(c => {
            str = str + `<td>${d[c]}</td>`
        });
        str = str + `<td>
        <a href="edit-user-${d['id']}" class="badge bg-warning me-3"><span data-feather="edit"></span></a>
            <form action="/users/${d['id']}" method="post" class="d-inline">
              <button class="badge bg-danger border-0 btn-sm"><span data-feather="trash-2"></span></button>
            </form>
        </td></tr>`;
        i += 1;
    });

    tab.innerHTML = str;

    setIcon();
}



btnReload.addEventListener('click', () => {
    loadData(page, colList, dataTable)
});


loadData(page, colList, dataTable)

// //jalankan fungsi load data
// loadData(page, colList, dataTable);


//tambah data











const dataToken = document.querySelector('meta[name=csrf-token]').getAttribute('content');//menginisiasi head halaman

// Example POST method implementation:
async function postData(url = '', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': dataToken
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

// const t = [{
//     answer: 42,
//     b: 'asdf',
// }]


// postData('test', t)
//     .then(data => {
//         console.log(data); // JSON data parsed by `data.json()` call
//     });




// console.log(dataForm)
var myModal = new bootstrap.Modal(document.getElementById('addmodal'))
const btnSimpan = document.querySelector('.btn-simpan');
btnSimpan.addEventListener('click', () => {
    const addData = document.querySelectorAll('input.add');
    const dataForm = {};

    addData.forEach(d => {
        dataForm[d.getAttribute('name')] = d.value
    });
    dataForm['_token'] = dataToken;
    postData(page + 's', [dataForm])
        .then(data => {
            console.log(data); // JSON data parsed by `data.json()` call
        });

    // myModal.hide();
    // loadData(page, colList, dataTable)

});




