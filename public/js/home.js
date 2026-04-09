const ctxMat = document.getElementById('chartMateriaux').getContext('2d');
new Chart(ctxMat, {
    type: 'bar',
    data: {
        labels: ['PVC', 'PLA', 'PET', 'PC (POCKIT)'],
        datasets: [{
            label: 'Solidité',
            data: [4, 3, 6, 10],
            backgroundColor: '#c9a050',
            borderRadius: 5
        }, {
            label: 'Rigidité',
            data: [6, 8, 5, 9.5],
            backgroundColor: 'rgba(255,255,255,0.1)',
            borderColor: 'rgba(255,255,255,0.2)',
            borderWidth: 1,
            borderRadius: 5
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: { beginAtZero: true, grid: { color: '#222' }, ticks: { color: '#666' } },
            x: { grid: { display: false }, ticks: { color: '#fff' } }
        },
        plugins: { legend: { labels: { color: '#fff', font: { size: 10 } } } }
    }
});

const ctxPuce = document.getElementById('chartPuce').getContext('2d');
new Chart(ctxPuce, {
    type: 'radar',
    data: {
        labels: [
            ['Stabilité de', 'réécriture'],
            ['Stockage de', 'contacte'],
            ['Clés d\'accès', 'multiples'],
            'Polyvalence',
            ['Sécurité des', 'données']
        ],
        datasets: [{
            label: 'POCKIT (1 Ko)',
            data: [96, 100, 95, 100, 92],
            borderColor: '#c9a050',
            backgroundColor: 'rgba(201, 160, 80, 0.2)',
            pointBackgroundColor: '#c9a050',
            borderWidth: 2
        }, {
            label: 'Norme (144 o)',
            data: [92, 45, 20, 40, 85],
            borderColor: 'rgba(255,255,255,0.9)',
            backgroundColor: 'rgba(255,255,255,0.3)',
            pointBackgroundColor: '#555',
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            r: {
                grid: { color: '#333' },
                angleLines: { color: '#333' },
                suggestedMin: 0,
                suggestedMax: 100,
                ticks: { display: false },
                pointLabels: {
                    color: '#fff',
                    font: { size: 10 },
                    padding: 20,
                    centerPointLabels: true
                }
            }
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: { color: '#fff', padding: 20 }
            }
        }
    }
});