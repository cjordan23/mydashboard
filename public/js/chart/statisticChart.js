//Global Configuration  
// Chart.default.global.responsive = true;
// Chart.default.global.maintainAspectRatio = true;
// Chart.default.global.responsiveAnimationDuration = 12;

//Specific Chart Configuration
var ctx = document.getElementById("chartLine");
let chartLine = new Chart (ctx, {
    type :'line',
    data:{
        labels: ["Januari", "Februari","Maret","April","Mei","Juni","July"],
        datasets: [{
            label:"Contoh Dataset",
            fill: false,
            lineTension: 0.25,
            backgroundColor:"#6287DE",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle:'miter',
            pointBorderColor: "rgba(75,192,192,1)",
            pointBackgroundColor: "#6287DE",
            pointBorderWidth:1,
            pointBorderRadius:5,
            pointHoverBackgroundColor: "rgba(75,192,192,1)",
            pointHoverBorderColor: "rgba(220,220,220,1)",
            pointHoverBorderWidth:2,
            pointRadius:1,
            pointHitRadius:10,
            data:[65,59,80,89,76,65,55],
        }]
    },
    option:{
        responsive: true,
        maintainAspectRatio: true,
        responsiveAnimationDuration: 1        
    }
});

var ctx = document.getElementById("pieChart");
let pieChart = new Chart (ctx,{
    type: 'pie',
    data: data,
    options: options
});