
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Annual Salary Range - USA"
	},
	axisY: {
		title: "Annual Salary (in USD)",
		prefix: "$",
		interval: 40000,
		labelFormatter: addSymbols
	},
	data: [{
		type: "boxAndWhisker",
		// url:"../php/chart.php",
		yValueFormatString: "$#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function addSymbols(e){
	var suffixes = ["", "K", "M", "B"];
 
	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);
	if(order > suffixes.length - 1)
		order = suffixes.length - 1;
 
	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}
 
}