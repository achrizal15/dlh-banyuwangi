// import Chart from 'chart.js/auto';
// const ctxbarChart = document.getElementById('barChart');

// const MONTHS = [
//     'January',
//     'February',
//     'March',
//     'April',
//     'May',
//     'June',
//     'July',
//     'August',
//     'September',
//     'October',
//     'November',
//     'December'
// ];
// const COLORS = [
//     '#4dc9f6',
//     '#f67019',
//     '#f53794',
//     '#537bc4',
//     '#acc236',
//     '#166a8f',
//     '#00a950',
//     '#58595b',
//     '#8549ba'
// ];
// const labels = [
//     'January',
//     'February',
//     'March',
//     'April',
//     'May',
//     'June',
//     'July']

// const data = {
//     labels: labels,
//     datasets: [{
//         label: 'Bar Statistik',
//         data: [65, 59, 80, 81, 56, 55, 40],
//         backgroundColor: [
//             'rgba(255, 99, 132, 0.2)',
//             'rgba(255, 159, 64, 0.2)',
//             'rgba(255, 205, 86, 0.2)',
//             'rgba(75, 192, 192, 0.2)',
//             'rgba(54, 162, 235, 0.2)',
//             'rgba(153, 102, 255, 0.2)',
//             'rgba(201, 203, 207, 0.2)'
//         ],
//         borderColor: [
//             'rgb(255, 99, 132)',
//             'rgb(255, 159, 64)',
//             'rgb(255, 205, 86)',
//             'rgb(75, 192, 192)',
//             'rgb(54, 162, 235)',
//             'rgb(153, 102, 255)',
//             'rgb(201, 203, 207)'
//         ],
//         borderWidth: 1
//     }]
// };
// let delayed;
// new Chart(ctxbarChart, {
//     type: 'bar',
//     labels:labels,
//     data:data,
//     options: {
//         animation: {
//             onComplete: () => {
//               delayed = true;
//             },
//             delay: (context) => {
//               let delay = 0;
//               if (context.type === 'data' && context.mode === 'default' && !delayed) {
//                 delay = context.dataIndex * 800 + context.datasetIndex * 800;
//               }
//               return delay;
//             },
//           },
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });