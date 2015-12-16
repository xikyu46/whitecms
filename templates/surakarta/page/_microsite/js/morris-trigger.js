$(document).ready(function(){
    new Morris.Bar({
      // ID of the element in which to draw the chart.
      element: 'main-chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        { jam: '00.00', value: 20 },
        { jam: '01.00', value: 10 },
        { jam: '02.00', value: 5 },
        { jam: '03.00', value: 9 },
        { jam: '04.00', value: 11 },
        { jam: '05.00', value: 8 },
        { jam: '06.00', value: 5 },
        { jam: '07.00', value: 15 },
        { jam: '08.00', value: 30 },
        { jam: '09.00', value: 5 },
        { jam: '10.00', value: 21 },
        { jam: '11.00', value: 1 },
        { jam: '12.00', value: 8 },
        { jam: '13.00', value: 15 },
        { jam: '14.00', value: 36 },
        { jam: '15.00', value: 41 },
        { jam: '16.00', value: 24 },
        { jam: '17.00', value: 20 },
        { jam: '18.00', value: 14 },
        { jam: '19.00', value: 11 },
        { jam: '20.00', value: 1 },
        { jam: '21.00', value: 3 },
        { jam: '22.00', value: 5 },
        { jam: '23.00', value: 1 },
      ],
      // The name of the data record attribute that contains x-values.
      xkey: 'jam',
      // A list of names of data record attributes that contain y-values.
      ykeys: ['value'],
      parseTime: false,
      // Labels for the ykeys -- will be displayed when you hover over the
      // chart.
      labels: ['Jobs']
    });
    new Morris.Donut({
      // ID of the element in which to draw the chart.
      element: 'second-chart',
      // Chart data records -- each entry in this array corresponds to a point on
      // the chart.
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ]
    });
    
  });  