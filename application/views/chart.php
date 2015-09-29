<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url('fusioncharts/js/fusioncharts.js')?>"></script>
<script type="text/javascript" src="<?=base_url('fusioncharts/js/themes/fusioncharts.theme.fint.js')?>"></script>
<style>
  #container{
    width:700px;
    height:500px;
    float:left;
    margin:10px;
  }
  #container1{
    float:left;
  }
</style>
</head>
<body>
  <div id='container'>
  <table class="table table-striped">
<thead>
<tr>
<th>Month</th>
<th>Revenue</th>
</tr>
</thead>
<tbody>
<tr>
<td>January</td>
<td>$420,000</td>
</tr>
<tr>
<td>February</td>
<td>$810,000</td>
</tr>
<tr>
<td>March</td>
<td>$720,000</td>
</tr>
<tr>
<td>April</td>
<td>$550,000</td>
</tr>
<tr>
<td>May</td>
<td>$910,000</td>
</tr>
<tr>
<td>June</td>
<td>$510,000</td>
</tr>
<tr>
<td>July</td>
<td>$680,000</td>
</tr>
<tr>
<td>August</td>
<td>$620,000</td>
</tr>
<tr>
<td>September</td>
<td>$610,000</td>
</tr>
<tr>
<td>October</td>
<td>$490,000</td>
</tr>
<tr>
<td>November</td>
<td>$900,000</td>
</tr>
<tr>
<td>December</td>
<td>$730,000</td>
</tr>
</tbody>
</table>
  </div>
  <div id='container1'>
    <h3>Please select what type of chart you want to draw:</h3>
  <select id="menu" onChange="go(this.value)">
    <option value="column2d">column2d</option>
    <option value="column3d" >column3d</option>  
    <option value="pie2d" >pie2d</option>  
    <option value="pie3d" >pie3d</option>
    <option value="line" >line</option>
</select>
  <div id="chartContainer">FusionCharts XT will load here!</div>
</div>
  
</body>
<script>
  function go(type){
   FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
        "type": type,
        "renderAt": "chartContainer",
        "width": "500",
        "height": "300",
        "dataFormat": "json",
        "dataSource":  {
          "chart": {
             "caption": "Monthly Revenue",
        "subCaption": "Last year",
        "xAxisName": "Month",
        "yAxisName": "Amount (In USD)",
        "numberPrefix": "$",
        "canvasBgAlpha": "0",
        "bgColor": "#DDDDDD",
        "bgAlpha": "50",
        "theme": "fint",
        "exportEnabled": "1",
        "exportFormats": "PNG=Export as High Quality Image|JPG|PDF=Export as PDF File",
        "exportTargetWindow": "_self",
        "exportFileName": "Monthly_Revenue"
         },
         "data": [
            {
               "label": "Jan",
               "value": "420000"
            },
            {
               "label": "Feb",
               "value": "810000"
            },
            {
               "label": "Mar",
               "value": "720000"
            },
            {
               "label": "Apr",
               "value": "550000"
            },
            {
               "label": "May",
               "value": "910000"
            },
            {
               "label": "Jun",
               "value": "510000"
            },
            {
               "label": "Jul",
               "value": "680000"
            },
            {
               "label": "Aug",
               "value": "620000"
            },
            {
               "label": "Sep",
               "value": "610000"
            },
            {
               "label": "Oct",
               "value": "490000"
            },
            {
               "label": "Nov",
               "value": "900000"
            },
            {
               "label": "Dec",
               "value": "730000"
            }
          ]
      }

  });
    //revenueChart.args.type='pie2d';
    //console.dir(revenueChart.args);
    revenueChart.render();
})
  }
</script>
</html>