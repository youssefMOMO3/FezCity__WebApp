document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart5-data') // Utilisez l'endpoint correct pour les données de chart5
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const nouveauxRestaurants = data.map(item => item.Nouveaux_restaurants);
            const nouveauxCafes = data.map(item => item.Nouveaux_cafes);
            const investissements = data.map(item => item.Investissements);

            var ctx = document.getElementById('chart5').getContext('2d'); // Assurez-vous que l'ID 'chart5' correspond à votre élément canvas
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nouveaux restaurants',
                        data: nouveauxRestaurants,
                        borderColor: 'rgb(255, 102, 102)', // Rouge clair
                        backgroundColor: 'rgba(255, 102, 102, 0.2)', // Rouge clair avec transparence
                        tension: 0.4,
                        fill: true,
                    }, {
                        label: 'Nouveaux cafés',
                        data: nouveauxCafes,
                        borderColor: 'rgb(255, 204, 0)', // Jaune clair
                        backgroundColor: 'rgba(255, 204, 0, 0.2)', // Jaune clair avec transparence
                        tension: 0.4,
                        fill: true,
                    }, {
                        label: 'Investissements (en millions)',
                        data: investissements,
                        borderColor: 'rgb(153, 204, 255)', // Bleu clair
                        backgroundColor: 'rgba(153, 204, 255, 0.2)', // Bleu clair avec transparence
                        tension: 0.4,
                        fill: true,
                        yAxisID: 'y-axis-invest',
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre'
                            }
                        },
                        'y-axis-invest': {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Investissements (en millions)'
                            },
                            grid: {
                                drawOnChartArea: false,
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});




document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart6-data') // Assurez-vous que l'URL pointe vers votre API
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const cuisineMarocaine = data.map(item => item.Cuisine_Marocaine);
            const cuisineInternationale = data.map(item => item.Cuisine_Internationale);

            var ctx = document.getElementById('chart6').getContext('2d'); // Assurez-vous que 'chart6' est l'ID de votre élément canvas
            var myChart = new Chart(ctx, {
                type: 'bar', // Utilisez 'bar' pour un graphique à barres
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Cuisine Marocaine',
                        data: cuisineMarocaine,
                        backgroundColor: 'rgb(230, 179, 255)',
                    }, {
                        label: 'Cuisine Internationale',
                        data: cuisineInternationale,
                        backgroundColor: 'rgb(153, 204, 255)',
                    }]
                },
                options: {
                    scales: {
                        x: {
                            stacked: true, // Empile les barres sur l'axe des X
                        },
                        y: {
                            stacked: true, // Empile les barres sur l'axe des Y
                            beginAtZero: true, // Commence l'axe des Y à 0
                            title: {
                                display: true,
                                text: 'Pourcentage (%)'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart7-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const nouveauxEmplois = data.map(item => item.Nouveaux_Emplois);
            const nombreTotalEmployes = data.map(item => item.Nombre_Total_Employes);

            var ctx = document.getElementById('chart7').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nouveaux Emplois',
                        data: nouveauxEmplois,
                        backgroundColor: 'rgb(217, 136, 185)',
                    }, {
                        label: 'Nombre Total Employés',
                        data: nombreTotalEmployes,
                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    }]
                },
                options: {
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre d\'employés'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart8-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Annee);
            const nouveauxEtablissements = data.map(item => item.Nouveaux_Etablissements);
            const investissements = data.map(item => item.Investissements_Millions_Dirhams);
            const popularite = data.map(item => item.Popularite_Cuisine_Marocaine);
            const employes = data.map(item => item.Nombre_Employes);
            const tauxCroissance = data.map(item => item.Taux_Croissance_Emploi);

            var ctx = document.getElementById('chart8').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nouveaux Établissements',
                        data: nouveauxEtablissements,
                        backgroundColor: 'rgb(217, 136, 185)',
                    }, {
                        label: 'Investissements (Millions de Dirhams)',
                        data: investissements,
                        backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    }, {
                        label: 'Popularité Cuisine Marocaine',
                        data: popularite,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)',
                    }, {
                        label: 'Nombre d\'Employés',
                        data: employes,
                        backgroundColor: 'rgba(153, 102, 255, 0.7)',
                    }, {
                        label: 'Taux de Croissance de l\'Emploi',
                        data: tauxCroissance,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    }]
                },
                options: {
                    scales: {
                        x: {
                            stacked: true,
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Valeurs'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});
