const listarp = document.querySelector('#listarp tbody')

const url = `./back/comandos.php?valor=5`
  fetch(url)
  .then(res => res.json())
  .then(json => fillTable(json))

function fillTable(arp) {
    
    for (let x of arp) {
        const valor = `
        <tr>
           <td>${x.ip}</td>
           <td>${x.mac}</td>
           <td>${x.interface}</td>
        </tr>
        `
        listarp.insertAdjacentHTML('beforeend', valor)
    }

}
