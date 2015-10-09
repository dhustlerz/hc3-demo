googlecharts();
//old colour swatch
// colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
function googlecharts() {

/*
 * Business Unit: Rheumatory
 * Module: The Evolution of Rheumatoid Arthritis Common Barriers in RA Management Piecing Together Solutions.
 * Program: Pregnancy, Fertility and Breastfeeding
 */
    // var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
    // formatter.format(data, 1);


    // mydiv = $("#google-column-bar-chart");
    // chart = new google.visualization.ComboChart(mydiv[0]);
    // chart.draw(data, {
    //      height: 300, seriesType: 'bars',
    //     legend: {position: 'none'},
    //     bar: {groupWidth: "55%"},
    //     vAxis: {format: "#.#%"},
    //     vAxis:{gridlines: {count: 0}},
    //     chartArea: {left: 60, top: 30, width: 650},
    //     focusTarget: 'category',
    //     colors:['#5bbbff']

    // });

    /*
     * Google Bar Province Chart Start
     */

      // Question 1
      google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(eduObjGooglehBarQ1);
      function eduObjGooglehBarQ1() {
          // just a normal ComboChart setup
          var data = google.visualization.arrayToDataTable([
              ['Title', '' ],
              ['I would like to learn more', 0.02],
              ['I am ready to try this', 0.236],
              ['I am doing this consis-tently', 0.743],

          ]);
          var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
          formatter.format(data, 1);


          mydiv = $("#edu-obj-google-hBar-m2-q1");
          chart = new google.visualization.ComboChart(mydiv[0]);
          chart.draw(data, {
            height: 300, seriesType: 'bars',
            legend: {position: 'none'},
            bar: {groupWidth: "40%"},
            vAxis: {format: "#.#%"},
            vAxis:{gridlines: {count: 0}},
            chartArea: {left: 0, top: 60, width: 650},
            focusTarget: 'category',
            colors:['#5bbbff']
          });

          /* Here comes the hack!
          We're going to add a svg text element to each column bar.
          This code will work for this data setup only. If you add/remove a series, this code must be adapted
          */
          rects = mydiv.find('svg > g > g > g > rect');
          var row = 0;
          for (i = 0; i < rects.length; i++) {
              // this selector also retrieves gridlines
              // we're excluding them by height
              el = $(rects[i]);
              if (parseFloat(el.attr("width")) <= 2) { continue; }
              aparent = el.parent();
              do { // skips 'null' values
                  text = data.getValue(row++, 1);
              } while (text == null && row < data.getNumberOfRows());

              if (text) {
                  text = formatter.formatValue(text);
                  // see below
                  pos = getElementPos(el);
                  attrs = {x: pos.x + pos.width / 1-28, y: pos.y - 14,
                           fill: 'black', 'font-family': 'Arial', 'font-size': 13, 'text-anchor': 'middle'};
                  aparent.append(addTextNode(attrs, text, aparent));
              }
          }
      }

      // Question 1.1
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ1pt1);
      function speakerGoogleDonutQ1pt1() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     0],
          ['Equal',      48],
          ['High',  92],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q1-pt-1'));

        chart.draw(data, options);
      }

      // Question 1.2
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ1pt2);
      function speakerGoogleDonutQ1pt2() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     0],
          ['Equal',      54],
          ['High',  88],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q1-pt-2'));

        chart.draw(data, options);
      }

      // Question 2

      google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(eduObjGooglehBarQ2);
      function eduObjGooglehBarQ2() {
          // just a normal ComboChart setup
          var data = google.visualization.arrayToDataTable([
              ['I am not interested', '' ],
              //['I see the need BUT…', 0.006 ],
              ['I would like to learn more', 0.085],
              ['I am ready to try this', 0.25],
              ['I am doing this consis-tently', 0.664],

          ]);
          var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
          formatter.format(data, 1);


          mydiv = $("#edu-obj-google-hBar-m2-q2");
          chart = new google.visualization.ComboChart(mydiv[0]);
          chart.draw(data, {
            height: 300, seriesType: 'bars',
            legend: {position: 'none'},
            bar: {groupWidth: "40%"},
            vAxis: {format: "#.#%"},
            vAxis:{gridlines: {count: 0}},
            chartArea: {left: 0, top: 60, width: 650},
            focusTarget: 'category',
            colors:['#5bbbff']
          });

          /* Here comes the hack!
          We're going to add a svg text element to each column bar.
          This code will work for this data setup only. If you add/remove a series, this code must be adapted
          */
          rects = mydiv.find('svg > g > g > g > rect');
          var row = 0;
          for (i = 0; i < rects.length; i++) {
              // this selector also retrieves gridlines
              // we're excluding them by height
              el = $(rects[i]);
              if (parseFloat(el.attr("width")) <= 2) { continue; }
              aparent = el.parent();
              do { // skips 'null' values
                  text = data.getValue(row++, 1);
              } while (text == null && row < data.getNumberOfRows());

              if (text) {
                  text = formatter.formatValue(text);
                  // see below
                  pos = getElementPos(el);
                  attrs = {x: pos.x + pos.width / 1-28, y: pos.y - 14,
                           fill: 'black', 'font-family': 'Arial', 'font-size': 13, 'text-anchor': 'middle'};
                  aparent.append(addTextNode(attrs, text, aparent));
              }
          }
      }
       // Question 2.1
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ2pt1);
      function speakerGoogleDonutQ2pt1() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     0],
          ['Equal',      54],
          ['High',  88],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q2-pt-1'));

        chart.draw(data, options);
      }

      // Question 2.2
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ2pt2);
      function speakerGoogleDonutQ2pt2() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     0],
          ['Equal',      54],
          ['High',  89],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q2-pt-2'));

        chart.draw(data, options);
      }


            // Question 3

      google.load('visualization', '1', {packages: ['corechart']});
      google.setOnLoadCallback(eduObjGooglehBarQ3);
      function eduObjGooglehBarQ3() {
          // just a normal ComboChart setup
          var data = google.visualization.arrayToDataTable([
              ['I am not interested', '' ],
             // ['I see the need BUT…', 0.006 ],
              ['I would like to learn more', 0.078],
              ['I am ready to try this', 0.405],
              ['I am doing this consis-tently', 0.516],

          ]);
          var formatter = new google.visualization.NumberFormat({ pattern:'#.#%' });
          formatter.format(data, 1);


          mydiv = $("#edu-obj-google-hBar-m2-q3");
          chart = new google.visualization.ComboChart(mydiv[0]);
          chart.draw(data, {
            height: 300, seriesType: 'bars',
            legend: {position: 'none'},
            bar: {groupWidth: "40%"},
            vAxis: {format: "#.#%"},
            vAxis:{gridlines: {count: 0}},
            chartArea: {left: 0, top: 60, width: 650},
            focusTarget: 'category',
            colors:['#5bbbff']
          });

          /* Here comes the hack!
          We're going to add a svg text element to each column bar.
          This code will work for this data setup only. If you add/remove a series, this code must be adapted
          */
          rects = mydiv.find('svg > g > g > g > rect');
          var row = 0;
          for (i = 0; i < rects.length; i++) {
              // this selector also retrieves gridlines
              // we're excluding them by height
              el = $(rects[i]);
              if (parseFloat(el.attr("width")) <= 2) { continue; }
              aparent = el.parent();
              do { // skips 'null' values
                  text = data.getValue(row++, 1);
              } while (text == null && row < data.getNumberOfRows());

              if (text) {
                  text = formatter.formatValue(text);
                  // see below
                  pos = getElementPos(el);
                  attrs = {x: pos.x + pos.width / 1-28, y: pos.y - 14,
                           fill: 'black', 'font-family': 'Arial', 'font-size': 13, 'text-anchor': 'middle'};
                  aparent.append(addTextNode(attrs, text, aparent));
              }
          }
      }
               // Question 3.1
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ3pt1);
      function speakerGoogleDonutQ3pt1() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     1],
          ['Equal',      33],
          ['High',  105],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q3-pt-1'));

        chart.draw(data, options);
      }

      // Question 3.2
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ3pt2);
      function speakerGoogleDonutQ3pt2() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Low',     0],
          ['Equal',      59],
          ['High',  88],
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"70%",height:"70%"},
          colors:['#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('edu-obj-google-donut-m2-q3-pt-2'));

        chart.draw(data, options);
      }




        // Question 4

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(programGooglePieQ4);
      function programGooglePieQ4() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Strongly Disagree',     1],
          ['Disagree',     0],
          ['Somewhat Disagree',     0],
          ['Neutral',      0],
          ['Somewhat Agree',  10],
          ['Agree',       57],
          ['Strongly Agree',    88]
        ]);

        var options = {
          height: 300,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('program-google-pie-m2-q4'));

        chart.draw(data, options);
      }

      // Question 5

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(programGooglePieQ5);
      function programGooglePieQ5() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Strongly Disagree',     1],
          ['Disagree',     0],
          ['Somewhat Disagree',     0],
          ['Neutral',      3],
          ['Somewhat Agree',  14],
          ['Agree',       60],
          ['Strongly Agree',    78]
        ]);

        var options = {
          height: 300,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('program-google-pie-m2-q5'));

        chart.draw(data, options);
      }

      // Question 6

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(programGooglePieQ6);
      function programGooglePieQ6() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Strongly Disagree',     1],
          ['Disagree',     0],
          ['Somewhat Disagree',     0],
          ['Neutral',      2],
          ['Somewhat Agree',  5],
          ['Agree',       58],
          ['Strongly Agree',    91]
        ]);

        var options = {
          height: 300,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('program-google-pie-m2-q6'));

        chart.draw(data, options);
      }
      // Question 9

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ9);
      function speakerGoogleDonutQ9() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Strongly Disagree',     3],
          ['Disagree',     0],
          ['Somewhat Disagree',     0],
          ['Neutral',      0],
          ['Somewhat Agree',  2],
          ['Agree',       44],
          ['Strongly Agree',    96]
        ]);

        var options = {
          height: 300,
          pieHole: 0.4,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          // colors:['#5bbbff', '#cae9ff', '#005fa3','#D9D9D9','#003459'],
          colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('speaker-google-donut-m2-q9'));

        chart.draw(data, options);
      }
      // Question 10

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(speakerGoogleDonutQ10);
      function speakerGoogleDonutQ10() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Strongly Disagree',     3],
          ['Disagree',     0],
          ['Somewhat Disagree',     0],
          ['Neutral',      2],
          ['Somewhat Agree',  3],
          ['Agree',       54],
          ['Strongly Agree',    83]
        ]);

        var options = {
          pieHole: 0.4,
          height: 300,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          colors:['#5bbbff', '#cae9ff','#e9ffca','#cacfff','#005fa3','#D9D9D9','#003459'],
          legend: {  alignment: 'end',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('speaker-google-donut-m2-q10'));

        chart.draw(data, options);
      }
     // mainpage mainPage-google-donut

      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(mainPageGoogleDonut);
      function mainPageGoogleDonut() {

        var data = google.visualization.arrayToDataTable([
          ['Fear of Needles', 'Hours per Day'],
          ['Responded Yes',     77],
          ['Responded No',  23],
        ]);

        var options = {
          pieHole: 0.4,
          height: 280,
          chartArea:{left:"",top:"10%",width:"80%",height:"80%"},
          colors:['#5bbbff','#003459'],
          legend: {  alignment: 'top',textStyle: {fontSize: 12} ,position: 'none' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('mainPage-google-donut'));

        chart.draw(data, options);
      }


}
 function getElementPos($el) {
          // returns an object with the element position
          return {
              x: parseFloat($el.attr("x")),
              width: parseFloat($el.attr("width")),
              y: parseFloat($el.attr("y")),
              height: parseFloat($el.attr("height"))
          }
      }

      function addTextNode(attrs, text, _element) {
          // creates an svg text node
        var el = document.createElementNS('http://www.w3.org/2000/svg', "text");
        for (var k in attrs) { el.setAttribute(k, attrs[k]); }
        var textNode = document.createTextNode(text);
        el.appendChild(textNode);
        return el;
      }
