document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const nombreEtablissements = data.map(item => item.NombreEtablissements);
            const nombreLits = data.map(item => item.NombreLits);

            var ctx = document.getElementById('chart1').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar', // Ou 'line', selon le type de graphique souhaité
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nombre d\'établissements',
                        data: nombreEtablissements,
                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                        borderWidth: 1,
                        yAxisID: 'y',
                    }, {
                        label: 'Capacité d\'accueil (lits)',
                        data: nombreLits,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        borderWidth: 1,
                        yAxisID: 'y',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Nombre d\'établissements / Capacité d\'accueil (lits)'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});

document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart2-data') // Assurez-vous que cela pointe vers le bon endpoint pour les données de chart2
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const nombreEtablissements = data.map(item => item.NombreEtablissements);
            const nombreLits = data.map(item => item.CapaciteAccueil); // Assurez-vous que le nom de la clé correspond à votre structure de données
            const tauxOccupation = data.map(item => item.TauxOccupation);

            var ctx = document.getElementById('chart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line', // Type de graphique
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nombre d\'établissements',
                        data: nombreEtablissements,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1,
                        yAxisID: 'yAxisEstablishments',
                    }, {
                        label: 'Capacité d\'accueil (lits)',
                        data: nombreLits,
                        borderColor: 'rgb(255, 99, 132)',
                        tension: 0.1,
                        yAxisID: 'yAxisCapacities',
                    }, {
                        label: 'Taux d\'occupation (%)',
                        data: tauxOccupation,
                        borderColor: 'rgb(54, 162, 235)',
                        tension: 0.1,
                        yAxisID: 'yAxisOccupancy',
                    }]
                },
                options: {
                    scales: {
                        yAxisEstablishments: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Nombre d\'établissements'
                            }
                        },
                        yAxisCapacities: {
                            type: 'linear',
                            display: true,
                            position: 'right', // Changement ici pour mieux distinguer les échelles
                            title: {
                                display: true,
                                text: 'Capacité d\'accueil (lits)'
                            },
                            min: 0, // Ajustez en fonction de vos données si nécessaire
                            max: 20000, // Ajustez en fonction de vos données si nécessaire
                        },
                        yAxisOccupancy: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            max: 100,
                            title: {
                                display: true,
                                text: 'Taux d\'occupation (%)'
                            },
                            // Ajustement pour éviter le chevauchement des axes
                            grid: {
                                drawOnChartArea: false, // Ne dessine pas la grille pour cet axe
                            },
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart3-data') // URL de votre API
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const budgetBas = data.map(item => parseFloat(item.BudgetBas));
            const budgetMoyen = data.map(item => parseFloat(item.BudgetMoyen));
            const budgetEleve = data.map(item => parseFloat(item.BudgetEleve));

            var ctx = document.getElementById('chart3').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar', // Utilisation d'un diagramme à barres empilées
                data: {
                    labels: labels, // Les années
                    datasets: [{
                        label: 'Bas prix',
                        data: budgetBas,
                        backgroundColor: 'rgba(255, 99, 132, 0.7)' // Couleur pour les bas prix
                    }, {
                        label: 'Prix moyen',
                        data: budgetMoyen,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)' // Couleur pour les prix moyens
                    }, {
                        label: 'Prix élevé',
                        data: budgetEleve,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)' // Couleur pour les prix élevés
                    }]
                },
                options: {
                    scales: {
                        x: {
                            stacked: true, // Empile les données en axe X
                        },
                        y: {
                            stacked: true, // Empile les données en axe Y
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Prix moyens par nuit (en dirhams)'
                            }
                        }
                    },
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Prix moyens par nuit pour les hébergements à Fès de 2000 à 2022'
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});




document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart4-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.TypeHebergement);
            const printemps = data.map(item => item.Printemps);
            const ete = data.map(item => item.Ete);
            const automne = data.map(item => item.Automne);
            const hiver = data.map(item => item.Hiver);

            var ctx = document.getElementById('chart4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar', // Utilisation d'un diagramme en barres groupées
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Printemps',
                        data: printemps,
                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                        borderWidth: 1
                    }, {
                        label: 'Été',
                        data: ete,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        borderWidth: 1
                    }, {
                        label: 'Automne',
                        data: automne,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)',
                        borderWidth: 1
                    }, {
                        label: 'Hiver',
                        data: hiver,
                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Nombre de jours'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});
