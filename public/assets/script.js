


function dataTest() {
    return fetch('/test')
        .then(response => response.json())
        .then(response => response);
}


async function cetakData() {
    const data = await dataTest();
    data.forEach(d => {
        console.log(`nama : ${d.name}
        email : ${d.email}`);
    });
}

const btn = document.getElementById('share');

btn.addEventListener('click', () => cetakData());