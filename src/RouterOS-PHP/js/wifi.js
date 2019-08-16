const tabela = document.querySelector('#tabela-wlan tbody')
const tabDisable = document.querySelector('#tabela-disable tbody')

const hideTab = document.querySelector('#tabela-wlan')
const interNav = document.querySelector('#nav-wlan-tab')
const addNav = document.querySelector('#nav-add-tab')
const disableNav = document.querySelector('#nav-disable-tab')

const interface = document.querySelector("#selectInterface")
const showUP = document.querySelector('.showUP')


const url = `./back/comandos.php?valor=3`
  fetch(url)
  .then(res => res.json())
  .then(json => fillTable(json))

function fillTable(wlan) {
    for (let x of wlan) {
        const valor = `
        <tr>
           <th scope="row">${x.online}</th>
           <td>${x.name}</td>
           <td>${x.type}</td>
           <td>${x.mtu}</td>
           <td>${x.tx}</td>
           <td>${x.rx}</td>
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
  
          const virtual = `
          <form action="" method="post">
            <div class="form-group row pl-5">
              <label for="name" class="col-2">Name</label>
              <input type="text" id="nome-inter" class="form-control col-8" placeholder="wlan1">
            </div>
            <div class="form-group row pl-5">
              <label for="mac" class="col-2">MTU</label>
              <input type="text" id="mac-inter" class="form-control col-8" placeholder="1500">
            </div>
            <div class="form-group row pl-5">
              <label for="type" class="col-2">L2 MTU</label>
              <input type="text" id="arp-inter" class="form-control col-8" placeholder="1600">
            </div>
            <hr>
            <div class="form-group row pl-5">
              <label for="mtu" class="col-2">MAC Address</label>
              <input type="text" id="mtu-inter" class="form-control col-8" placeholder="00:00:00:00:00:00">
            </div>
            <div class="form-group row pl-5">
              <label for="type" class="col-2">ARP</label>
              <input type="text" id="arp-inter" class="form-control col-8" placeholder="enabled/disabled">
            </div>
            <hr>
          </form>
          <div class="row justify-content-center">
            <button type="button" class="btn btn-success col-3 m-3">OK</button>
            <button type="button" class="btn btn-danger col-3 m-3">Cancelar</button>
          </div>
          </div>

         `
        showUP.insertAdjacentHTML('beforeend', virtual)
        break;
  
        case "2":
            const wds = `
            <form action="" method="post">
              <div class="form-group row pl-5">
                <label for="name" class="col-2">Name</label>
                <input type="text" id="nome-inter" class="form-control col-8" placeholder="wds1">
              </div>
              <div class="form-group row pl-5">
                <label for="mac" class="col-2">MTU</label>
                <input type="text" id="mac-inter" class="form-control col-8" placeholder="1500">
              </div>
              <div class="form-group row pl-5">
                <label for="type" class="col-2">L2 MTU</label>
                <input type="text" id="arp-inter" class="form-control col-8" placeholder="1600">
              </div>
              <hr>
              <div class="form-group row pl-5">
                <label for="type" class="col-2">ARP</label>
                <input type="text" id="arp-inter" class="form-control col-8" placeholder="enabled/disabled">
              </div>
              <hr>
            </form>
            <div class="row justify-content-center">
              <button type="button" class="btn btn-success col-3 m-3">OK</button>
              <button type="button" class="btn btn-danger col-3 m-3">Cancelar</button>
            </div>
          </div>
  
        `
        showUP.insertAdjacentHTML('beforeend', wds)
        break;
            
      }
  })