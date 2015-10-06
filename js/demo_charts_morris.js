
var morrisCharts = function() {

   var months = ['jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    Morris.Line({
      element: 'morris-line-example',

      data: [
        { month: '2013', a: 2},
        { month: '2014', a: 97 },
        { month: '2015', a: 22 },

      ],
      xkey: 'month',
      ykeys: ['a'],
      labels: ['Annual Totals'],
      resize: true,
      xLabels: 'year',
      lineColors: ['#BF2A2F'],
      // xLabelFormat : function (x) {
      //   return months[x.getMonth()];
      //   }
    });


    Morris.Area({
        element: 'morris-area-example',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        resize: true,
        lineColors: ['#5bbbff', '#003459']
    });






    Morris.Donut({
        element: 'morris-donut-example',
        data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
        ],
        colors: ['#95B75D', '#3FBAE4', '#FEA223']
    });

}();

