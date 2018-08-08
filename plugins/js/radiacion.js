Highcharts.chart('container 3', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Indice de Radición UV'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Nivel Ruv'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Managua',
        data: [1.5, 3.6, 5.3, 11.5, 6.5, 8.5, 7, 4.3, 8.2, 9.4, 11.5, 11.9]
    },
  ]
});
