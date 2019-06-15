$(function() {
    "use strict";

    //Simple line chart
    new Chartist.Line('#simple-line-chart', {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        series: [
            [1, 9, 7, 8, 5, 12, 5],
            [2, 12, 9, 11, 7, 10, 3]
        ]
    }, {
        fullWidth: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value * 500);
            }
        },
        chartPadding: {
            right: 40
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });

    //Simple line chart
    new Chartist.Line('#simple-line-chart2', {
        labels: false,
        series: [
            [1, 9, 7, 8, 5, 12, 15],
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            left: -20
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
    //Simple line chart
    new Chartist.Line('#simple-line-chart3', {
        labels: false,
        series: [
            [12, 9, 7, 8, 5, 12, 15],
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            left: -20
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
    //Simple line chart
    new Chartist.Line('#simple-line-chart4', {
        labels: false,
        series: [
            [1, 2, 3, 2, 5, 3, 3],
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            left: -20
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
    //Simple line chart
    new Chartist.Line('#simple-line-chart5', {
        labels: false,
        series: [
            [1, 2, 4, 8, 5, 6, 5],
        ]
    }, {
        fullWidth: true,
        chartPadding: {
            left: -20
        },
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });


    $('#circle').circleProgress({
        value: 1,
        size: 130,
        fill: {
            color: ["#e53632"]
        }
    });
    $('#circle1').circleProgress({
        value: 1,
        size: 130,
        fill: {
            color: ["#e53632"]
        }
    });
    $('#circle2').circleProgress({
        value: 1,
        size: 200,
        fill: {
            color: ["#e53632"]
        }
    });

});