$(document).ready(function(){
    $('#historico').DataTable();
	
	$.ajax({
		type: 'GET',
		url: 'http://localhost:8080/dolar/precio/getData',
		success: function(response){
			let data = JSON.parse(response);
			let template = '';
			console.log(data);
			
			$.each(data, function(index, obj){

				if (obj.casa.nombre == "Dolar Blue") {
					$('#compraBlue').html("$" + obj.casa.compra);	
					$('#ventaBlue').html("$" + obj.casa.venta);	
					$('#variacionBlue').html("Variación: " + obj.casa.variacion);	

				}else if(obj.casa.nombre == "Dolar Oficial"){
					$('#compraOficial').html("$" + obj.casa.compra);	
					$('#ventaOficial').html("$" + obj.casa.venta);	
					$('#variacionOficial').html("Variación: " + obj.casa.variacion);
				
				}else if(obj.casa.nombre == "Dolar turista"){
					$('#ventaTurista').html("$" + obj.casa.venta);	
					$('#variacionTurista').html("Variación: " + obj.casa.variacion);
				
				}else if(obj.casa.nombre == "Dolar Contado con Liqui"){
					$('#compraCCL').html("$" + obj.casa.compra);	
					$('#ventaCCL').html("$" + obj.casa.venta);	
					$('#variacionCCL').html("Variación: " + obj.casa.variacion);
				}

				template += '<tr><td>' + obj.casa.nombre +'</td>'
						 + '<td>' + "$" + obj.casa.compra +'</td>'
						 + '<td>' + "$" + obj.casa.venta +'</td>'
						 + '<td>' + obj.casa.variacion +'</td></tr>'
			});

			$('#cuerpo').html(template);	
		}
	});

var id = $('#id').html();

$.ajax({
		type: 'GET',
		url: 'http://localhost:8080/dolar/precio/fetchGrafic&id=' + id,
		success: function(r){

			let valores = JSON.parse(r);
			let dpsCompra = [];
			let dpsVenta = [];

				valores.forEach(link => {
					var dolarCompra = parseFloat(link.compra)
					var dolarVenta = parseFloat(link.venta)
					dpsCompra.push({y: dolarCompra, label: link.fecha});
					dpsVenta.push({y: dolarVenta, label: link.fecha});
				})

			var options = {
				animationEnabled: true,
				theme: "light2",
				zoomEnabled: true,
				axisX:{
					valueFormatString: "DD MMM"
				},
				axisY: {
					title: "Compra",
					suffix: "Ars",
					minimum: 30
				},
				toolTip:{
					shared:true
				},  
				legend:{
					cursor:"pointer",
					verticalAlign: "bottom",
					horizontalAlign: "left",
					dockInsidePlotArea: true,
				},
				data: [{
					type: "spline",
					showInLegend: true,
					name: "Compra",
					markerType: "square",
					xValueFormatString: "DD MMM, YYYY",
					color: "#F08080",
					yValueFormatString: "#,##0",
					dataPoints: dpsCompra
				},
				{
					type: "spline",
					showInLegend: true,
					name: "Venta",
					lineDashType: "dash",
					yValueFormatString: "#,##0",
					dataPoints: dpsVenta
				}]
			};
			$("#chartDolarOficial").CanvasJSChart(options);	
		
		}
	});	
	


	

});