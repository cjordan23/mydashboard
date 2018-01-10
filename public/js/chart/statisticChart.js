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
    option:{}
});

var ctx = document.getElementById("statisticChart1");
let statChart = new Chart (ctx,{
    type:'bar',
    data: {
        labels:["Microsoft","Apple","Linux"],
        datasets: [{
            data:[60,25,15],
            backgroundColor:'#6287DE',
            borderColor:'#00FFFF',
            borderWidth:2

        }]
    },
    option:{}
});


var ctx = document.getElementById("statisticChart2");
let statChart2 = new Chart(ctx, {
    type:'line',
    data: {
        labels:["Microsoft","Apple","Linux"],
        datasets: [{
            data:[35,20,5],
            lineColor: '#334466',
            backgroundColor:'#eee9e9'
        }]
    },
    option:{
        scale:{
            yAxes:[{
                ticks:{
                    beginAtZero:true 
                }
            }]
        }
    }
})

var ctx = document.getElementById("statisticChart3");
let statChart3 = new Chart(ctx , {
    type:'doughnut',
    data: {
        labels:["Microsoft","Apple","Linux"],
        datasets: [{
            data:[50,30,20] ,
            backgroundColor:['#eee9e9','#B0B0B0','#E2E86D']
        }]
    },
    option:{
       
    }

})

var ctx = document.getElementById("statisticChart4");
let statChart4 = new Chart(ctx, {
    type:'polarArea',
    data: {
        labels:["Microsoft","Apple","Linux","Android","iOS"],
        datasets: [{
            label:'Points', 
            data:[35,20,5,25,15] ,
            backgroundColor:["#6987FF","#E1E2E6","#E3D734","#14E36E","#14C7E3"]
        }]
    },
    option:{
        
        
    }
})
