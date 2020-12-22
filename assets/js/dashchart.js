var ctx = document.getElementById('btc-chart').getContext('2d');

	// Canvans Gradiant
	var grad = ctx.createLinearGradient(100,200,100,0);
	grad.addColorStop(0, 'rgba(226,241,255,0)');
	grad.addColorStop(0.33, 'rgba(219,243,249,0.75)');
	grad.addColorStop(1, 'rgba(205,250,239,1)');

    // Shadow
	let draw = Chart.controllers.line.prototype.draw;
	Chart.controllers.line = Chart.controllers.line.extend({
		draw: function() {
			draw.apply(this, arguments);
			let ctx = this.chart.chart.ctx;
			let _stroke = ctx.stroke;
			ctx.stroke = function() {
				ctx.save();
				ctx.shadowColor = 'rgba(0,0,0,0.09)';
				ctx.shadowBlur = 10;
				ctx.shadowOffsetX = 0;
				ctx.shadowOffsetY = 3;
				_stroke.apply(this, arguments)
				ctx.restore();
			}
		}
	});

	var chart = new Chart(ctx, {
		// The type of chart we want to create
		type: 'line',

		// The data for our dataset
		data: {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'BTC chart',
				backgroundColor: grad,
				borderColor: 'rgba(226,241,255,1)',
				data: [25, 35, 20, 15, 20, 30, 35,],
				// fill: false
			}]
		},

		// Configuration options go here
		options: {
			legend: {
				display: false,
			},
			title:{
				display: true
			},
			elements:{
				point:{
					pointStyle: "dash",
					radius: 3
				},
				line:{
					borderColor: 'rgba(0, 0, 0, 0.1)'
				},
				rectangle:{
					borderWidth: 2
				}

			},
			scales: {
				yAxes: [{
					gridLines: {
						display: false,
						lineWidth: 0
					},
					ticks: {
						display: false
					},
				}],
				xAxes: [{
					gridLines: {
						display: false,
					},
					ticks: {
						display: false
					},
				}],
			},
			
    	}
    });