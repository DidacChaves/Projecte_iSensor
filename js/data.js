$(function () {
    var dataDia = [{
        y: '2012-02-24 1:00',
        a: 12
      }, {
        y: '2012-02-24 2:00',
        a: 11
      }, {
        y: '2012-02-24 3:00',
        a: 9
      }, {
        y: '2012-02-24 4:00',
        a: 8
      }, {
        y: '2012-02-24 5:00',
        a: 6
      }, {
        y: '2012-02-24 6:00',
        a: 6
      }, {
        y: '2012-02-24 7:00',
        a: 9
      }, {
        y: '2012-02-24 8:00',
        a: 14
      }, {
        y: '2012-02-24 9:00',
        a: 17
      }, {
        y: '2012-02-24 10:00',
        a: 19
      }, {
        y: '2012-02-24 11:00',
        a: 20
      }, {
        y: '2012-02-24 12:00',
        a: 21
      }, {
        y: '2012-02-24 13:00',
        a: 21
      }, {
        y: '2012-02-24 14:00',
        a: 22
      }, {
        y: '2012-02-24 15:00',
        a: 21
      }, {
        y: '2012-02-24 16:00',
        a: 21
      }, {
        y: '2012-02-24 17:00',
        a: 20
      }, {
        y: '2012-02-24 18:00',
        a: 20
      }, {
        y: '2012-02-24 19:00',
        a: 19
      }, {
        y: '2012-02-24 20:00',
        a: 18
      }, {
        y: '2012-02-24 21:00',
        a: 16
      }, {
        y: '2012-02-24 22:00',
        a: 14
      }, {
        y: '2012-02-24 23:00',
        a: 13
      }, {
        y: '2012-02-24 24:00',
        a: 10
      }];
    var dataSetmana = [{
      y: '2012-02-1',
      a: 18,
      b: 19
    }, {
      y: '2012-02-2',
      a: 19,
      b: 20
    }, {
      y: '2012-02-3',
      a: 20,
      b: 20
    }, {
      y: '2012-02-4',
      a: 18,
      b: 19
    }, {
      y: '2012-02-5',
      a: 17,
      b: 19
    }, {
      y: '2012-02-6',
      a: 21,
      b: 21
    }, {
      y: '2012-02-7',
      a: 22,
      b: 19
    }];
    var dataMes = [{
      y: '2012-01',
      a: 15,
      b: 16,
      c: 10
    }, {
      y: '2012-02',
      a: 17,
      b: 15,
      c: 11
    }, {
      y: '2012-03',
      a: 21,
      b: 23,
      c: 14
    }, {
      y: '2012-04',
      a: 20,
      b: 20,
      c: 13
    }, {
      y: '2012-05',
      a: 23,
      b: 21,
      c: 12
    }, {
      y: '2012-07',
      a: 19,
      b: 20,
      c: 18
    }, {
      y: '2012-08',
      a: 15,
      b: 18,
      c: 12
    }, {
      y: '2012-09',
      a: 15,
      b: 18,
      c: 12
    }, {
      y: '2012-10',
      a: 15,
      b: 18,
      c: 12
    }, {
      y: '2012-11',
      a: 15,
      b: 18,
      c: 12
    }, {
      y: '2012-12',
      a: 15,
      b: 18,
      c: 12
    }];
    var dataAny = [{
      y: '2011',
      a: 20,
      b: 16,
      c: 10
    }, {
      y: '2012',
      a: 17,
      b: 15,
      c: 20
    }, {
      y: '2013',
      a: 21,
      b: 23,
      c: 14
    }, {
      y: '2014',
      a: 15,
      b: 20,
      c: 13
    }];
    dia = {
      element: 'morris-line-chart',
      data: dataDia,
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Aula20'],
      hideHover: 'auto',
      resize: true,
      xLabels: "hour",
      xLabelAngle: 35,
      postUnits: ' Cº',
      formatter: function (y) {
            return y + " Cº";
        }
    }
    setmana = {
      element: 'morris-line-chart',
      data: dataSetmana,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Aula19', 'Aula20'],
      hideHover: 'auto',
      resize: true,
      xLabels: "day",
      xLabelAngle: 35,
      postUnits: ' Cº',
      formatter: function (y) {
            return y + " Cº";
        }
    }
    mes = {
      element: 'morris-line-chart',
      data: dataMes,
      xkey: 'y',
      ykeys: ['a', 'b', 'c'],
      labels: ['Aula18', 'Aula19', 'Aula20'],
      hideHover: 'auto',
      resize: true,
      xLabels: "month",
      xLabelAngle: 35,
      postUnits: ' Cº',
      formatter: function (y) {
            return y + " Cº";
        }
      }
    any = {
      element: 'morris-line-chart',
      data: dataAny,
      xkey: 'y',
      ykeys: ['a', 'b', 'c'],
      labels: ['Aula18', 'Aula19', 'Aula20'],
      hideHover: 'auto',
      resize: true,
      xLabels: "year",
      xLabelAngle: 35,
      postUnits: ' Cº',
      formatter: function (y) {
            return y + " Cº";
        }
    }
    Morris.Line(setmana);
  });