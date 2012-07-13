// JavaScript Document
var chart;
$(document).ready(function() {
	$.get(base_url+'index.php/api/stats/data/format/json',function (event) {	
		var colors = Highcharts.getOptions().colors;
		var	categories = event.gender.campuses;
		var name = 'Campus';
		var data = event.gender.data;
		
		$('#egender').html(event.gender.table);
		
		// Build the data arrays
		var browserData = [];
		var versionsData = [];
		for (var i = 0; i < data.length; i++) {
	
			// add browser data
			browserData.push({
				name: categories[i],
				y: data[i].y,
				color: data[i].color
			});
	
			// add version data
			for (var j = 0; j < data[i].drilldown.data.length; j++) {
				var brightness = 0.2 - (j / data[i].drilldown.data.length) / 5 ;
				versionsData.push({
					name: data[i].drilldown.categories[j],
					y: data[i].drilldown.data[j],
					color: Highcharts.Color(data[i].color).brighten(brightness).get()
				});
			}
		}
	
		// Create the chart
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'gender',
				type: 'pie'
			},
			title: {
				text: ''
			},
			yAxis: {
				title: {
					text: ''
				}
			},
			plotOptions: {
				pie: {
					shadow: false
				}
			},
			tooltip: {
				formatter: function() {
					return '<b>'+ this.point.name +'</b>: '+ this.y;
				}
			},
			series: [{
				name: 'Campus',
				data: browserData,
				size: '60%',
				dataLabels: {
					formatter: function() {
						return this.y > 5 ? this.point.name : null;
					},
					color: 'white',
					distance: -30
				}
			}, {
				name: 'Versions',
				data: versionsData,
				innerSize: '60%',
				dataLabels: {
					formatter: function() {
						// display only if larger than 1
						return this.y > 1 ? '<b>'+ this.point.name +':</b> '+ this.y  : null;
					}
				}
			}]
		});
		$('#header').animate({top:'0%'},500,function() {
			$('.container').fadeIn();
		});
	},'json');
});