Morris.Line({
  element: 'morris-line-chart',
  data: [{
      y: '2012-02-24 16:00',
      a: 15,
      b: 16,
      c: 10
    }, {
      y: '2012-02-24 17:00',
      a: 17,
      b: 15,
      c: 11
    }, {
      y: '2012-02-24 18:00',
      a: 21,
      b: 23,
      c: 14
    }, {
      y: '2012-02-24 19:00',
      a: 20,
      b: 20,
      c: 13
    }, {
      y: '2012-02-24 20:00',
      a: 23,
      b: 21,
      c: 12
    }, {
      y: '2012-02-24 21:00',
      a: 19,
      b: 20,
      c: 18
    }, {
      y: '2012-02-24 22:00',
      a: 15,
      b: 18,
      c: 12
    }],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Aula1', 'Aula2', 'Aula3'],
    lineColors: ['#ff4400', '#22aa22','#cccc99'],
    hideHover: 'auto',
    resize: true
  });
//Informació -------------->>  http://www.oesmith.co.uk/