<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function() {
        var chart;
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'stats',
                    type: 'areaspline',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Website Stats',
                    x: -20
                },
                xAxis: {
                    categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']
                },
                yAxis: {
                    title: {
                        text: 'Visitors'
                    },
                    plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + '</b><br/>' +
                                this.x + ': ' + this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: [{
                        name: 'Page Views',
                        data: [20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100, 20, 30, 50, 60, 80, 100]
                    },
                    {
                        name: 'Visitors',
                        data: [5, 10, 5, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60, 5, 10, 15, 25, 40, 60]
                    },
                    {
                        name: 'Unique Visitors',
                        data: [100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 100, 60, 40, 30, 20, 5, 0]
                    }
                ]
            });
        });
    });
</script>
<div id="stats" style="width:100%; height:400px;"></div>