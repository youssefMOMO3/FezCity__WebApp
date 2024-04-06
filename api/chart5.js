fetch('http://localhost:3000/EtudeDecetionnel-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.Age);
        const counts = data.map(row => row.count);

        var ctx = document.getElementById('chart17').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par âge',
                    data: counts,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });




    fetch('http://localhost:3000/EtudeDecetionnel2-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.Sexe);
        const counts = data.map(row => row.count);

        var ctx = document.getElementById('chart18').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par sexe',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Rouge pour Homme
                        'rgba(54, 162, 235, 0.2)'   // Bleu pour Femme
                        // Vous pouvez ajouter d'autres couleurs pour d'autres catégories de sexe si nécessaire
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });

    fetch('http://localhost:3000/SituationFamiliale-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.EtatCivil);
        const counts = data.map(row => row.count);

        var ctx = document.getElementById('chart19').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par situation familiale',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Rouge pour Marié
                        'rgba(54, 162, 235, 0.2)', // Bleu pour Célibataire
                        'rgba(255, 206, 86, 0.2)'  // Jaune pour Veuve
                        // Ajoutez d'autres couleurs pour d'autres catégories si nécessaire
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });


fetch('http://localhost:3000/Nationalite-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.Nationalite);
        const counts = data.map(row => row.count);
        var ctx = document.getElementById('chart20').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par nationalité',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Rouge
                        'rgba(54, 162, 235, 0.2)', // Bleu
                        'rgba(255, 206, 86, 0.2)', // Jaune
                        'rgba(75, 192, 192, 0.2)', // Vert
                        'rgba(153, 102, 255, 0.2)', // Violet
                        'rgba(255, 204, 204, 0.2)', // Rouge clair
                        'rgba(173, 216, 230, 0.2)', // Bleu clair
                        'rgba(255, 255, 153, 0.3)', // Jaune clair
                        'rgba(144, 238, 144, 0.2)', // Vert clair
                        'rgba(218, 112, 214, 0.2)' // Violet clair
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 204, 204, 1)',
                        'rgba(173, 216, 230, 1)',
                        'rgba(255, 255, 153, 2)',
                        'rgba(144, 238, 144, 1)',
                        'rgba(218, 112, 214, 1)'
                        // Ajoutez d'autres couleurs au besoin
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });

    fetch('http://localhost:3000/PeriodeVisite-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.PeriodeDeVisite);
        const counts = data.map(row => row.count);
        // Définir une liste de couleurs pour chaque mois
        const colors = [
            'rgba(255, 99, 132, 0.7)',  // Janvier
            'rgba(54, 162, 235, 0.7)',  // Février
            'rgba(255, 206, 86, 0.7)',  // Mars
            'rgba(75, 192, 192, 0.7)',  // Avril
            'rgba(153, 102, 255, 0.7)', // Mai
            'rgba(255, 159, 64, 0.7)',  // Juin
            'rgba(255, 99, 132, 0.7)',  // Juillet
            'rgba(54, 162, 235, 0.7)',  // Août
            'rgba(255, 206, 86, 0.7)',  // Septembre
            'rgba(75, 192, 192, 0.7)',  // Octobre
            'rgba(153, 102, 255, 0.7)', // Novembre
            'rgba(255, 159, 64, 0.7)',  // Décembre
        ];

        var ctx = document.getElementById('chart21').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par période de visite',
                    data: counts,
                    backgroundColor: colors,
                    borderColor: colors,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });

    fetch('http://localhost:3000/Devises-data') 
    .then(response => response.json())
    .then(data => {
        const labels = data.map(row => row.Devises);
        const counts = data.map(row => row.count);
        // Définir une liste de couleurs pour chaque devise
        const colors = [
            'rgba(255, 99, 132, 0.7)',  // Euro
            'rgba(54, 162, 235, 0.7)',  // Dollar
            'rgba(255, 206, 86, 0.7)',  // Dinar algérien
            'rgba(75, 192, 192, 0.7)',  // Sterling britannique
            // Ajoutez d'autres couleurs pour d'autres devises au besoin
        ];

        var ctx = document.getElementById('chart22').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Effectifs par devise',
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)', // Jaune
                        'rgba(255, 99, 132, 0.2)', // Rouge
                        'rgba(54, 162, 235, 0.2)', // Bleu
                        'rgba(75, 192, 192, 0.2)', // Vert
                        'rgba(153, 102, 255, 0.2)', // Violet
                        'rgba(255, 204, 204, 0.2)', // Rouge clair
                        'rgba(173, 216, 230, 0.2)', // Bleu clair
                        'rgba(255, 255, 153, 0.3)', // Jaune clair
                        'rgba(144, 238, 144, 0.2)', // Vert clair
                        'rgba(218, 112, 214, 0.2)' // Violet clair
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 204, 204, 1)',

                        // Ajoutez d'autres couleurs au besoin
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
    .catch(err => {
        console.error('Error fetching data:', err);
    });

