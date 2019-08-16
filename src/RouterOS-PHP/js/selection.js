class IpTables {

    constructor() {
      this.addresses = []
  
      this.ipTableContent = document.querySelector('table#iptable tbody')
      this.warningField = document.querySelector('#warning')
      this.addressForm = document.querySelector('form#add-ip')
      this.addressInput = Array.from(this.addressForm.querySelectorAll('input'))
  
      this.loadAddAddreessEvent(document.querySelector('button'))
    }
  
    addAddress(address) {
      this.addresses.push(address)
    }
  
    hasAddress(address) {
      return this.addresses.some(addressSelected => addressSelected.ip == address)
    }
  
    // View
    render() {
      this.addresses.forEach(address => this.genRowContent(address))
    }
  
    addRow(address) {
        const url = `./db/lerBanco.php?valor=1`
        const config = {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: `ip=${address.ip}&user=${address.user}&pass=${address.pass}`
        }
  
      fetch(url, config)
      
    }
  
    genRowContent(address) {
      const row = `
        <tr data-ip="${address.ip}">
        <td class="ip">${address.ip}</td>
        <td class="user">${address.user}</td>
        <td><button class="btn"><i class="fa fa-trash"></i></button></td>
        <td><a href="index.php" class="btn btn-success btn-lg"></a></td>
      </tr>`
      this.ipTableContent.insertAdjacentHTML('afterbegin', row)
    }
  
    showAlert() {
      this.warningField.innerHTML = `
      <div class="alert alert-warning" role="alert">
        <strong>O endereço já foi adicionado.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`
    }
  
    hiddenAlert() {
      this.warningField.innerHTML = ''
    }
  
    // Events
    loadAddAddreessEvent(addButton) {
      addButton.addEventListener('click', (event) => {
        event.preventDefault()
  
        const formData = new FormData(this.addressForm)
        const ip = formData.get('ip') || '-'
        const user = formData.get('user') || '-'
        const key = formData.get('key') || '-'
        const address = { ip, user, key }
  
        this.addressInput.forEach(input => input.value = '')
        this.addRow(address)
        addButton.blur()
      })
    }
  
  }
  
  const iptables = new IpTables()


  const tabela = document.querySelector('#iptable tbody')
  

  const url = `./db/lerBanco.php?valor=2`
  fetch(url)
  .then(res => res.json())
	.then(json => fillTable(json))


function fillTable(ether) {
    for (let x of ether) {
        const valor = `
        <tr>
           <th scope="row">${x.id}</th>
           <td>${x.ip}</td>
           <td>${x.user}</td>
           <td><button id="remover" class="btn"><i class="fa fa-trash"></i></button></td>
           <td><a href="index.php?id=${x.id}" class="btn btn-success btn-lg"></a></td>
        </tr>
        `
        tabela.insertAdjacentHTML('beforeend', valor)
    }
}

addEventListener('click', function(event){
  if( event.target === "button" ){
    console.log('teste')
  }
})