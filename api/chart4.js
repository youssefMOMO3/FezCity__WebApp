document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart13-data')
        .then(response => response.json())
        .then(data => {
            // Extraire les années uniques pour les étiquettes de l'axe X
            const years = [...new Set(data.map(item => item.Annee))].sort();

            // Groupes de données par pays
            const dataByCountry = {};
            data.forEach(item => {
                if (!dataByCountry[item.Pays]) {
                    dataByCountry[item.Pays] = Array(years.length).fill(0); // Initialiser avec des zéros
                }
                const yearIndex = years.indexOf(item.Annee);
                dataByCountry[item.Pays][yearIndex] = item.Nombre_Visiteurs;
            });

            // Couleurs pour les différents pays
            const colors = {
                'France': {
                    border: 'rgba(0, 123, 255, 0.5)',
                    background: 'rgba(0, 123, 255, 0.1)'
                },
                'Espagne': {
                    border: 'rgba(255, 193, 7, 0.8)',
                    background: 'rgba(255, 193, 7, 0.1)'
                },
                'États-Unis': {
                    border: 'rgba(40, 167, 69, 0.5)',
                    background: 'rgba(40, 167, 69, 0.1)'
                },
                'Chine': {
                    border: 'rgba(220, 53, 69, 0.5)',
                    background: 'rgba(220, 53, 69, 0.1)'
                }
            };


            // Créer les ensembles de données pour le graphique
            const datasets = Object.keys(dataByCountry).map(country => ({
                label: country,
                data: dataByCountry[country],
                borderColor: colors[country].border,
                backgroundColor: colors[country].background,
                fill: true,
                tension: 0.4
            }));

            // Configuration du graphique
            const config = {
                type: 'line',
                data: {
                    labels: years,
                    datasets: datasets
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre de visiteurs'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top'
                        }
                    }
                }
            };

            
            const ctx = document.getElementById('chart13').getContext('2d');
            const myChart = new Chart(ctx, config);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart14-data')
        .then(response => response.json())
        .then(data => {
            const nomsAttractions = data.map(item => item.Nom);
            const nombreVisiteurs = data.map(item => item.Nombre_Visiteurs_Annuels);

            var ctx = document.getElementById('chart14').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: nomsAttractions,
                    datasets: [{
                        label: 'Nombre de visiteurs annuels',
                        data: nombreVisiteurs,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)', // Rouge clair
                            'rgba(54, 162, 235, 0.7)', // Bleu clair
                            'rgba(255, 206, 86, 0.7)', // Jaune clair
                            'rgba(75, 192, 192, 0.7)', // Vert clair
                            'rgba(153, 102, 255, 0.7)', // Violet clair
                            'rgba(255, 159, 64, 0.7)', // Orange clair
                            'rgba(255, 205, 86, 0.7)', // Jaune clair
                            'rgba(75, 192, 192, 0.7)', // Vert clair
                            'rgba(153, 102, 255, 0.7)', // Violet clair
                            'rgba(255, 159, 64, 0.7)', // Orange clair
                            'rgba(255, 205, 86, 0.7)', // Jaune clair
                            'rgba(75, 192, 192, 0.7)', // Vert clair
                            'rgba(153, 102, 255, 0.7)', // Violet clair
                            'rgba(255, 159, 64, 0.7)', // Orange clair
                            'rgba(255, 205, 86, 0.7)', // Jaune clair
                        ],
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart15-data')
        .then(response => response.json())
        .then(data => {
            // This array should be manually created by you, one for each month.
            const months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
            
            const labels = data.map(item => item.Nom_Evenement); // Now we map event names to labels
            const nombreVisiteurs = data.map(item => item.Nombre_Visiteurs);

            var ctx = document.getElementById('chart15').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels, // Use event names for labels
                    datasets: [{
                        label: 'Nombre de Visiteurs',
                        data: nombreVisiteurs,
                        backgroundColor: 'rgb(230, 179, 255)',
                 
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre de Visiteurs'
                            }
                        },
                        x: {
                            // Here, we will assign a custom tick callback to display months instead of event names.
                            ticks: {
                                callback: function(value, index, values) {
                                    // This assumes that each event has a unique month and they're in the same order as the 'months' array.
                                    return months[index];
                                }
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});


document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart16-data')
        .then(response => response.json())
        .then(data => {
            const labels = [...new Set(data.map(item => item.Annee))];
            const categories = [...new Set(data.map(item => item.Categorie))];
            const datasets = categories.map(category => {
                return {
                    label: category,
                    data: data.filter(item => item.Categorie === category).map(item => item.Revenu_Millions_EUR),
                };
            });

            var ctx = document.getElementById('chart16').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: datasets,
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Revenu (Millions EUR)'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});
