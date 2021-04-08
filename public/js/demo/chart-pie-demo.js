// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["کرج", " آمل ", "تهران","بابل","دیگر شهرها"],
    datasets: [{
      data: [window.receiptsAmountsCity_karaj, window.receiptsAmountsCity_amol, window.receiptsAmountsCity_tehran,window.receiptsAmountsCity_babol,window.receiptsAmountsCity_oders],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#97a547','#6E47A5'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#97a547','#6E47A5'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
