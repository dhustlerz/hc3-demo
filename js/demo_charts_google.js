googlecharts();
function googlecharts() {

    /*
     * Google Pie Chart
     */
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(googlePieChart);
      function googlePieChart() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Initiation Treatment',     19],
          ['Patient Compliance',      14],
          ['Medication Choice',  25],
          ['Diet Exercise', 12],
          ['Sleep',    30]
        ]);

        var options = {
          height: 300,
           colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
        };

        var chart = new google.visualization.PieChart(document.getElementById('google-pie-chart'));

        chart.draw(data, options);
      }
    /*
     * Google Column chart
     */
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(googleColumnBarChart);
    function googleColumnBarChart() {


      var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Self Learning", 25, "#5bbbff"],
        ["Online Courses", 18, "#5bbbff"],
        ["Symposia", 16, "#5bbbff"],
        ["Interactive Cases", 15, "#5bbbff"],
        ["Mixed topic education", 13, "color: #5bbbff"],
        ["Webinars", 11, "color: #5bbbff"],
        ["Others", 2, "color: #5bbbff"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {


        height: 300,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
        vAxis: {format: '#\'%\''}
        //isStacked: true,
        // vAxis:   {

        //   maxValue: 100
        // } ,

      };
      var chart = new google.visualization.ColumnChart(document.getElementById("google-column-bar-chart"));
      chart.draw(view, options);
    }

//var googleStackedChart = function() {
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawGoogleStackedChart);
  function drawGoogleStackedChart() {
    // jQuery(window).resize(function(){
    //   drawGoogleStackedChart();
    // });
  var data = google.visualization.arrayToDataTable([
   ['B_UNIT', 'Cardiovascular', 'Asthama', 'CNS', 'Oncology',
       'Diabetes',  { role: 'annotation' } ],
      ['PEI', 10, 25, 45, 25, 18, ''],
      ['NFLD', 15, 35, 55, 45, 16, ''],
      ['NB', 20, 45, 65, 65, 55,  ''],
      ['NS', 25, 55, 75, 85, 65, ''],
      ['MB', 30, 65, 85, 102, 85, ''],
      ['SASK',35, 75, 95, 125, 96,  ''],
      ['BC', 40, 85, 105, 155, 99, ''],
      ['AB', 45, 95, 115, 185, 105, ''],
      ['OC', 50, 100, 125, 190, 115, ''],
      ['ON', 55, 105, 135, 200, 125,  ''],

    ]);
    var view = new google.visualization.DataView(data);


    var options = {

      height: 300,
      legend: { position: 'top', maxLines: 3 },
      bar: { groupWidth: '85%' },
      colors: ['#7A92A3','#0B62A4','#2DAAE1','#002840','#3C5B9B'],
      isStacked: true,
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("google-stacked-chart"));
    chart.draw(view, options);
  }
//}
//var googleHorizontalStackedChart = function() {
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawGoogleHorizontalStackedChart);
  function drawGoogleHorizontalStackedChart() {

    var data = google.visualization.arrayToDataTable([
            ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
            ['Adding Meal-Time Insulin to Basal Insulin', 7, 10, ''],
            ['Different Pokes for Different Folks', 4, 22,  ''],
            ['Endocrine Emergencies', 4, 19,  ''],
            ['From Sliding Scale to Basal Bolus', 2, 40,  ''],
            ['Insulin Empowerment Program', 5, 20,  ''],
            ['Insulinothérapie: Mise à jour pour les infirmières en milieu ', 2, 30,  ''],
            ['Lapproche motivationelle chez le patient diabetique', 2, 70,  ''],
            ['La transition des patients DT1 en milieu adulte: Un cheminement', 1, 50,  ''],
            ['le traitement du diabète chez la personne âgée', 1, 12,  ''],
            ['Lignes directrices de pratique clinique 2013 de lACD: vole...', 1, 42,  ''],
            ['Passer à un régime basal-prandial : Parcourir le labyrinthe de l...', 3, 32,  ''],
            ['Practical Management of Diabetes in the Elderly', 3, 12,  ''],
            ['Premix Insulin and Type 2 Diabetes', 2, 12,  '']

    ]);

        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes"));
        chart.draw(view, options);
    }

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawGoogleHorizontalStackedChartDiabetesAccr);
    function drawGoogleHorizontalStackedChartDiabetesAccr() {

    var data = google.visualization.arrayToDataTable([
            ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
            ['Adding Meal-Time Insulin to Basal Insulin', 7, 10, ''],
            ['Different Pokes for Different Folks', 4, 22,  ''],
            ['Endocrine Emergencies', 4, 19,  ''],
            ['From Sliding Scale to Basal Bolus', 2, 40,  ''],
            ['Insulin Empowerment Program', 5, 20,  ''],
            ['Insulinothérapie: Mise à jour pour les infirmières en milieu ', 2, 30,  ''],
            ['Lapproche motivationelle chez le patient diabetique', 2, 70,  ''],
            ['La transition des patients DT1 en milieu adulte: Un cheminement', 1, 50,  ''],
            ['le traitement du diabète chez la personne âgée', 1, 12,  '']

    ]);

        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes-acc"));
        chart.draw(view, options);
    }

    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawGoogleHorizontalStackedChartDiabetesNonAccr);
    function drawGoogleHorizontalStackedChartDiabetesNonAccr() {
    var data = google.visualization.arrayToDataTable([
      ['Meetings', 'Total Programs', 'Evaluation', { role: 'annotation' } ],
      ['Lignes directrices de pratique clinique 2013 de lACD: vole...', 1, 42,  ''],
      ['Passer à un régime basal-prandial : Parcourir le labyrinthe de l...', 3, 32,  ''],
      ['Practical Management of Diabetes in the Elderly', 3, 12,  ''],
      ['Premix Insulin and Type 2 Diabetes', 2, 12,  '']



    ]);


        var view = new google.visualization.DataView(data);


        var options = {
          height: 270,
          legend: { position: 'top', maxLines: 3 },
          bar: { groupWidth: '65%' },
          colors: ['#7A92A3','#0B62A4'],
          isStacked: true,

        };
        var chart = new google.visualization.BarChart(document.getElementById("google-stacked-chart-diabetes-non-accr"));
        chart.draw(view, options);
//}
    }


}

