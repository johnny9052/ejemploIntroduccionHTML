/*Se cargan los paquetes del api de visualizacion*/
google.charts.load('current', {'packages': ['corechart', 'controls', 'bar']});
/*Se define la funcion graficadora*/
google.charts.setOnLoadCallback(dibujarGrafico1);
google.charts.setOnLoadCallback(dibujarGraficosMismoDataset);
google.charts.setOnLoadCallback(dibujarGrafico4);
google.charts.setOnLoadCallback(dibujarGrafico5);
google.charts.setOnLoadCallback(dibujarGraficoX);

function dibujarGrafico1() {
    //Se definen los datos
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Element');
    data.addColumn('number', 'Percentage');
    data.addRows([
        ['Nitrogen', 0.58],
        ['Oxygen', 0.21],
        ['Other', 0.21]
    ]);

    // Set chart options
    var options = {'title': 'Estos son los graficos',
        'width': 400,
        'height': 300,
        'legend': 'rigth'//Ubicacion de la descripcion de los colores
    };

    // Instantiate and draw the chart.
    var chart = new google.visualization.PieChart(document.getElementById('grafico1'));
    chart.draw(data, options);

}



function dibujarGraficosMismoDataset() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 3],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
    ]);

    /*Grafico 2*/
    var piechart_options = {title: 'Pie Chart: How Much Pizza I Ate Last Night',
        width: 400,
        height: 300,
        pieHole: 0.4//Espacio en el centro
    };
    var piechart = new google.visualization.PieChart(document.getElementById('grafico2'));

    piechart.draw(data, piechart_options);



    /*Grafico 3*/
    var barchart_options = {title: 'Barchart: How Much Pizza I Ate Last Night',
        width: 400,
        height: 300,
        legend: 'none'};
    var barchart = new google.visualization.BarChart(document.getElementById('grafico3'));

    /*-------------------LISTENER PARA EL GRAFICO----------------------------*/
    function funcionalidadGrafico() {
        var selectedItem = barchart.getSelection()[0];
        if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0); //ata.getValue(#Registro - #Atributo)
            alert('The user selected ' + topping);
        }
    }
    /*Se añade el listener antes de pintar la grafica (Grafica,nombre evento (onmouseover, select, etc), funcion a activar) */
    google.visualization.events.addListener(barchart, 'select', funcionalidadGrafico);

    barchart.draw(data, barchart_options);
}










function dibujarGrafico4() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'N');
    data.addColumn('number', 'Value');
    data.addRow(['V', 200]);

    var options = {
        width: 400,
        height: 240,
        animation: {
            duration: 1000,
            easing: 'out',
        },
        vAxis: {minValue: 0, maxValue: 1000}
    };


    var chart = new google.visualization.ColumnChart(
            document.getElementById('grafico4'));


    var button = document.getElementById('btnGrafico4');

    function drawChart() {
        chart.draw(data, options);
    }

    button.onclick = function () {
        var newValue = 1000 - data.getValue(0, 1);
        data.setValue(0, 1, newValue);
        drawChart();
    }

    drawChart();
}




function dibujarGrafico5() {
    var data = google.visualization.arrayToDataTable([
        ['Year', 'Sales', 'Expenses', 'Profit'],
        ['2014', 1000, 400, 200],
        ['2015', 1170, 460, 250],
        ['2016', 660, 1120, 300],
        ['2017', 1030, 540, 350]
    ]);

    var options = {
        chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
        }
    };

    var chart = new google.charts.Bar(document.getElementById('grafico5'));

    chart.draw(data, options);
}










function dibujarGraficoX() {

    /*Se definen los datos de la grafica*/
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Name');
    data.addColumn('number', 'Donuts eaten');
    data.addRows([
        ['Michael', 5],
        ['Elisa', 7],
        ['Robert', 3],
        ['John', 2],
        ['Jessica', 6],
        ['Aaron', 1],
        ['Margareth', 8]
    ]);


    /*Se define el dashboard*/
    var dashboard = new google.visualization.Dashboard(
            document.getElementById('grafico2'));

    /*Se define un slider para el filtro dinamico del dashboard*/
    //Variable global
    var slider = new google.visualization.ControlWrapper({
        'controlType': 'NumberRangeFilter', //Tipo control numerico
        'containerId': 'control_div', //ID del contenedor
        'options': {
            'filterColumnLabel': 'Donuts eaten',
            'ui': {'labelStacking': 'vertical'}
        }
    });

    /*Se define el tipo de grafica*/
    chart = new google.visualization.ChartWrapper({
        'chartType': 'PieChart', //Tipo de grafica
        'containerId': 'chart_div', //ID Contenedor
        'options': {/*Medidas*/
            'title': 'Esta es la grafica',
            'width': 300,
            'height': 300,
            //'legend': 'none',//Ocultar los indicadores de colores
            //Medida de distribucion de la grafica
            'chartArea': {'left': 15, 'top': 15, 'right': 0, 'bottom': 0}
            //Indica si quiere el valor de la tabla en la grafica o el %
            //'pieSliceText': 'value'
        }
    });



    document.getElementById("btnCambiaRango").onclick = function () {
        slider.setState({'lowValue': 2, 'highValue': 5});
        slider.draw();
    };

    document.getElementById("btnCambiar3D").onclick = function () {
        chart.setOption('is3D', true);
        //Repinte el grafico
        chart.draw();
    };


    /*Al dashboard se le añade el slider y la grafica*/
    dashboard.bind(slider, chart);
    /*Pinta el dashboard*/
    dashboard.draw(data);
}








