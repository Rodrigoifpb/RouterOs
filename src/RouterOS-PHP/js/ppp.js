const tabela2 = document.querySelector('#tabela-ppp2 tbody')
const tabela3 = document.querySelector('#tabela-ppp3 tbody')


const url = `./back/comandos.php?valor=8`
  fetch(url)
  .then(res => res.json())
  .then(json => fillTable(json))


function fillTable(abc) {
    console.log(abc)
    for(let x of abc){ 
    const valor = `
        <tr>
            <th scope="row">${x.user}</th>
            <td>${x.serviceName}</td>
            <td>${x.pap}</td>
            <td>${x.chap}</td>
        </tr>
        `
        tabela2.insertAdjacentHTML('beforeend', valor)
    }  
}

const url2 = `./back/comandos.php?valor=9`
  fetch(url2)
  .then(res => res.json())
  .then(json => fillTable2(json))

function fillTable2(abc) {
    for(let x of abc){    
    const valor = `
        <tr>
            <th scope="row">${x.port}</th>
            <td>${x.address}</td>
            <td>${x.pap}</td>
            <td>${x.chap}</td>
        </tr>
        `
        tabela3.insertAdjacentHTML('beforeend', valor)
    }  
}