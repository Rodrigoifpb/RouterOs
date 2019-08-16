const ping = document.querySelector('#link-ping')
const torch = document.querySelector('#link-torch')
const terminal = document.querySelector('#link-terminal')
const pingresult = document.querySelector('#pingtest')
const log = document.querySelector('#link-log')
const logsterm = document.querySelector('#logsterm')
const tping = document.querySelector('#teste #start')

addEventListener('click', function(event){

    switch (event.target) {

        case ping: document.querySelector('#ping').classList.remove('d-none');
            document.querySelector('#log').classList.add('d-none');
            break;

        case torch: document.querySelector('#ping').classList.add('d-none');
            document.querySelector('#log').classList.add('d-none');
            break;

        case log: document.querySelector('#ping').classList.add('d-none');
            document.querySelector('#log').classList.remove('d-none');
            break;
    }
})


tping.addEventListener('click', function(event){

    const ip = document.querySelector('#ip').value
  
    fetch(`./back/comandos.php?valor=10&address=${ip}`)
    .then(res => res.json())
    .then(json => fillTable(json))

  function fillTable(ping) {
        pingresult.insertAdjacentHTML('beforeend',ping)
}

})


fetch(`./back/comandos.php?valor=11`)
    .then(res => res.json())
    .then(json => fillTable(json))


  function fillTable(logs) {
         logsterm.insertAdjacentHTML('beforeend',logs)
}