'use strict';

const chartOne = document.getElementById('incomeChart').getContext('2d');
const myIncomeChart = new Chart(chartOne, {
  type: 'line',
  data: {
    labels: monthArr,
    datasets: [{
      label: 'Monthly Income',
      data: incomeArr,
      borderColor: '#1d7af3',
      pointBorderColor: '#FFF',
      pointBackgroundColor: '#1d7af3',
      pointBorderWidth: 2,
      pointHoverRadius: 4,
      pointHoverBorderWidth: 1,
      pointRadius: 4,
      backgroundColor: 'transparent',
      fill: true,
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'bottom',
      labels: {
        padding: 10,
        fontColor: '#1d7af3'
      }
    },
    tooltips: {
      bodySpacing: 4,
      mode: 'nearest',
      intersect: 0,
      position: 'nearest',
      xPadding: 10,
      yPadding: 10,
      caretPadding: 10
    },
    layout: {
      padding: {
        left: 15,
        right: 15,
        top: 15,
        bottom: 15
      }
    }
  }
});

const chartTwo = document.getElementById('enrolmentChart').getContext('2d');
const myEnrolmentChart = new Chart(chartTwo, {
  type: 'line',
  data: {
    labels: monthArr,
    datasets: [{
      label: 'Monthly Enrolments',
      data: enrolmentArr,
      borderColor: '#1d7af3',
      pointBorderColor: '#FFF',
      pointBackgroundColor: '#1d7af3',
      pointBorderWidth: 2,
      pointHoverRadius: 4,
      pointHoverBorderWidth: 1,
      pointRadius: 4,
      backgroundColor: 'transparent',
      fill: true,
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
      position: 'bottom',
      labels: {
        padding: 10,
        fontColor: '#1d7af3'
      }
    },
    tooltips: {
      bodySpacing: 4,
      mode: 'nearest',
      intersect: 0,
      position: 'nearest',
      xPadding: 10,
      yPadding: 10,
      caretPadding: 10
    },
    layout: {
      padding: {
        left: 15,
        right: 15,
        top: 15,
        bottom: 15
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          stepSize: 1
        }
      }]
    }
  }
});
