const iplist = document.querySelector('#iplist tbody')

const url = `./back/comandos.php?valor=4`
  fetch(url)
  .then(res => res.json())
  .then(json => fillTable(json))


function fillTable(list) {
    for (let x of list) {
        const valor = `
        <tr>
           <td>${x.address}</td>
           <td>${x.network}</td>
           <td>${x.interface}</td>
        </tr>
        `
        iplist.insertAdjacentHTML('beforeend', valor)
    }
    
}

