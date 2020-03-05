window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {

      title:{
      text: "Product Price - Per Month (2019)"
      },
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
      },
      axisY:{
        includeZero: false

      },
      data: [
      {
        type: "line",
        markerColor : "purple",

        dataPoints: [
        { x: new Date(2019, 00, 1), y: 450 },
        { x: new Date(2019, 01, 1), y: 415},
        { x: new Date(2019, 02, 1), y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle"},
        { x: new Date(2019, 03, 1), y: 460 },
        { x: new Date(2019, 04, 1), y: 450 },
        { x: new Date(2019, 05, 1), y: 520 },
        { x: new Date(2019, 06, 1), y: 480 },
        { x: new Date(2019, 07, 1), y: 480 },
        { x: new Date(2019, 08, 1), y: 410 , indexLabel: "lowest",markerColor: "red", markerType: "cross"},
        { x: new Date(2019, 09, 1), y: 500 },
        { x: new Date(2019, 10, 1), y: 480 },
        { x: new Date(2019, 11, 1), y: 510 }
        ]
      }
      ]
    });

    chart.render();
  }