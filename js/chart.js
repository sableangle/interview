$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Unity 3D','Shiva3D', '3D Max', 'MotionBuilder','MAYA','Blender', 'AfterEffect', 'Photoshop','C++/C#','CSS','HTML','MySQL','Linux (Ubuntu)','CakeWalk Sonar','Fl Studio','Cubase','Vocaloid','Arduino'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '百分比(%)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' %'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 200,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: '熟練程度',
            data: [95,80, 50, 40, 30,20, 60,70,90,80,80,40,60,65,45,40,55,75]
        }
        ]
    });
});