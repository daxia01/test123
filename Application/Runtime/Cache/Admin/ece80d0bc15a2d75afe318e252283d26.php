<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>


<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>

		<style type="text/css">
       ${
       	demo.css
       }
		</style>
	</head>
	<body>
<script src="/Public/Admin/plugin/highcharts/code/highcharts.js"></script>
<script src="/Public/Admin/plugin/highcharts/code/modules/exporting.js"></script>

<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: '部门人数统计表'
    },
    subtitle: {
        text: '数据来源: <a href="http://www.baidu.com/">嘻哈百度</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '人数 (人)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: '当前: <b>{point.y:.0f} 人</b>'
    },
    series: [{
        name: 'Population',
        data: <?php echo ($str); ?>,
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
		</script>
	</body>
</html>