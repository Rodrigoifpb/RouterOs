const cpu = document.querySelector('#cpu')
const ram = document.querySelector('#ram')
const time = document.querySelector('#contador')
const table = document.querySelector('#tabela-info tbody')


setInterval(function () {
	const url = `./back/comandos.php?valor=1`
	fetch(url)
		.then(res => res.json())
		.then(json => cards(json))
}, 1000);

function cards(message) {
	cpu.innerHTML = message[0].cpu.concat("%")
	ram.innerHTML = message[0].ram
	time.innerHTML = message[0].time
}

const url = `./back/comandos.php?valor=1`
fetch(url)
	.then(res => res.json())
	.then(json => fillTable(json))

function fillTable(message) {

	const view = `
		<tr>
			<th scope="row">version:</th>
			<td>${message[1].version}</td>
		<tr>
		<tr>
			<th scope="row">Buld-Time:</th>
			<td>${message[1].buildTime}</td>
		<tr>
		<tr>
			<th scope="row">Total-Memory:</th>
			<td>${message[1].totalMemory}</td>
		<tr>
		<tr>
			<th scope="row">CPU:</th>
			<td>${message[1].cpu}</td>
		<tr>
		<tr>
			<th scope="row">Total-HDD-Space:</th>
			<td>${message[1].totalHddSpace}</td>
		<tr>
		<tr>
			<th scope="row">Architecture-Name:</th>
			<td>${message[1].architectureName}</td>
		<tr>
		<tr>
			<th scope="row">Platform:</th>
			<td>${message[1].platform}</td>
		</tr>
		`
	table.insertAdjacentHTML('beforeend', view)

}

let tempo = 0
let segundos = 30
var ctx = document.getElementById('graphic').getContext('2d');
var chart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ['0:00:00', '0:00:03', '0:00:06', '0:00:09', '0:00:12', '0:00:15', '0:00:18', '0:00:21', '0:00:24', '0:00:27', '0:00:30'],
		datasets: [{
			label: 'Rx',
			backgroundColor: window.chartColors.orange,
			borderColor: window.chartColors.orange,
			data: [],
			fill: false,
		}, {
			label: 'Tx',
			fill: false,
			backgroundColor: window.chartColors.green,
			borderColor: window.chartColors.green,
			data: [],
		}]
	},
	options: {
		responsive: true,
		title: {
			display: true,
			text: 'Monitor Traffic Interface'
		},
		tooltips: {
			mode: 'index',
			intersect: true,
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Timeline'
				},
			}],
			yAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'kbps'
				},
				ticks: {
					min: 0,

					// forces step size to be 5 units
					stepSize: 10
				}
			}]
		}
	}
});

setInterval(function () {
	fetch('./back/comandos.php?valor=12')
		.then(res => res.json())
		.then(json => graph(json))
}, 3000);

function graph(json) {
	tempo++;

	if (tempo <= 11) {
		chart.data.datasets[0].data.push(parseFloat(json[0].value))
		chart.data.datasets[1].data.push(parseFloat(json[1].value))
	} else {
		segundos += 3
		seconds = moment().startOf('day').seconds(segundos).format('H:mm:ss');
		chart.data.labels.shift()
		chart.data.labels.push(seconds)
		chart.data.datasets[0].data.shift()
		chart.data.datasets[0].data.push(parseFloat(json[0].value))
		chart.data.datasets[1].data.shift()
		chart.data.datasets[1].data.push(parseFloat(json[1].value))

	}


	chart.update()
}
