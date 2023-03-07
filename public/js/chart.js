var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earning').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels:['Send', 'Failed', 'Inprogress'],
        datasets: [{
            label: 'Traffic Source',
            data: [1500, 900, 3000],
            backgroundColor: [
                '#002F42',
                'rgba(54, 162, 235, 1)',
                '#00C1C6'  
            ],
        }]
    },
    options: {
        responsive: true,
    }
})
var earning = new Chart(earning, {
    type: 'bar',
    data: {
        labels:['January', 'February', 'march', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
            label: 'Rate of msg',
            data: [1200, 1900, 3000, 5000, 2000, 3000, 4800, 4578, 25566, 8545, 4587, 9000],
            backgroundColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',  
                '#00C1C6',  
                'rgba(54, 162, 235, 1)',  
                'rgba(54, 162, 235, 1)',   
                'rgba(54, 162, 235, 1)',
                'rgba(54, 162, 235, 1)',
                '#002F42',  
                '#00C1C6',  
                'rgba(54, 162, 235, 1)',  
                '#00C1C6'   
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
    }
})