const tabela = document.querySelector('#tabela-ether tbody')
const tabDisable = document.querySelector('#tabela-disable tbody')

const hideTab = document.querySelector('#tabela-ether')
const interNav = document.querySelector('#nav-ether-tab')
const addNav = document.querySelector('#nav-add-tab')
const disableNav = document.querySelector('#nav-disable-tab')

const interface = document.querySelector("#selectInterface")
const showUP = document.querySelector('.showUP')


const url = `./back/comandos.php?valor=2`
  fetch(url)
  .then(res => res.json())
	.then(json => fillTable(json))


function fillTable(ether) {
    for (let x of ether) {
        const valor = `
        <tr>
           <th scope="row">${x.online}</th>
           <td>${x.name}</td>
           <td>${x.type}</td>
           <td>${x.mtu}</td>
        </tr>
        `
        tabela.insertAdjacentHTML('beforeend', valor)
    }
}

interface.addEventListener('click', function( event ){
  event.preventDefault()
  
  showUP.innerHTML = ``
  switch(interface.value){

        case "1": 

            const vlan = `
                    <form action="./back/comandos.php?valor=13" method="post">
                      <div class="form-group row pl-5">
                        <label for="name" class="col-2">Name</label>
                        <input type="text" name="nome-inter" class="form-control col-8" placeholder="vlan1">
                      </div>
                      <div class="form-group row pl-5">
                        <label for="mac" class="col-2">MTU</label>
                        <input type="text" name="mtu" class="form-control col-8" placeholder="1500">
                      </div>
                      <div class="form-group row pl-5">
                        <label for="type" class="col-2">ARP</label>
                        <input type="text" name="arp-inter" class="form-control col-8" placeholder="enabled/disabled">
                      </div>
                      <hr>
                      <div class="form-group row pl-5">
                        <label for="vlan-id" class="col-2">VLAN-ID</label>
                        <input type="text" name="vlan-id-inter" class="form-control col-8" placeholder="1">
                      </div>
                      <div class="form-group row pl-5">
                        <label for="interfface" class="col-2">Interface</label>
                        <input type="text" name="interface" class="form-control col-8" placeholder="ether1">
                      </div>
                      <hr>
                      <div class="row justify-content-center">
                        <button type="submit" class="btn btn-success col-3 m-3">OK</button>
                      </div>
                    </form>
                  </div>

            `
            showUP.insertAdjacentHTML('beforeend', vlan)
            break;

      case "2":
          const bridge = `
                      <form action="./back/comandos.php?valor=14" method="post">
                        <div class="form-group row pl-5">
                          <label for="name" class="col-2">Name</label>
                          <input type="text" name="nome-inter" class="form-control col-8" placeholder="bridge1">
                        </div>
                        <div class="form-group row pl-5">
                          <label for="type" class="col-2">ARP</label>
                          <input type="text" name="arp-inter" class="form-control col-8" placeholder="enabled/disabled">
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                        <button type="submit" class="btn btn-success col-3 m-3">OK</button>
                      </div>
                      </form>
                    </div>

              `
            showUP.insertAdjacentHTML('beforeend', bridge)
            break;
    }
})

