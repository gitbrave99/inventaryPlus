
// -------------------------------------------------------------
// CHART BAR TOP PRODUCTOS
var chartBarColors = getChartColorsArray("barChartTopProductos");
var options = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: [380, 430, 450, 475, 550]
    }],
    colors: chartBarColors,
    grid: {
        borderColor: '#f1f1f1',
    },
    xaxis: {
        categories: ['Violín', 'Guitarra', 'Bajo eléctrico', 'Flauta', 'Saxofón'],
    }
}

var chart = new ApexCharts(
    document.querySelector("#barChartTopProductos"),
    options
);

chart.render();


// -------------------------------------------------------------
// CHART PIE TOP PROVEEDORES

var chartPieBasicColors = getChartColorsArray("chartPieTopProveedores");
var options = {
    series: [44, 55, 13, 43, 22],
    chart: {
        height: 300,
        type: 'pie',
    },
    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        dropShadow: {
            enabled: false,
        }
    },
    colors: chartPieBasicColors
};

var chart = new ApexCharts(document.querySelector("#chartPieTopProveedores"), options);
chart.render();