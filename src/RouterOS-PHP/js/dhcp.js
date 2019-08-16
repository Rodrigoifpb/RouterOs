const tabelacliente = document.querySelector('#dhcpcliente tbody')
const tabelaservidor = document.querySelector('#dhcpservidor tbody')

fetch(`./back/comandos.php?valor=6`)
  .then(res => res.json())
  .then(json => fillClient(json))

  function fillClient(dhcp){
    for(let x of dhcp){    
        const valor = `
            <tr>
                <th scope="row">${x.interface}</th>
                <td>${x.use}</td>
                <td>${x.addDefautRoute}</td>
                <td>${x.status}</td>
                <td>${x.address}</td>
            </tr>
            `
            tabelacliente.insertAdjacentHTML('beforeend', valor)
    }

}

fetch(`./back/comandos.php?valor=7`)
    .then(res => res.json())
    .then(json => fillServer(json))


function fillServer(dhcpServer){
  for(let i of dhcpServer){    
      const valor = `
      <tr>
           <th scope="row">${i.name}</th>
           <td>${i.interface}</td>
           <td>${i.addressPool}</td>
           <td>${i.leaseTime}</td>
      </tr>
          `
          tabelaservidor.insertAdjacentHTML('beforeend', valor)
  }

}