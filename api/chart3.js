document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart9-data') // Utilisez l'endpoint correct pour les données de chart9
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Année);
            const taxisExistants = data.map(item => item.Taxis_existants);
            const nombreTotalTaxisFes = data.map(item => item.Nombre_total_de_taxis_à_Fès);
            const tauxCroissanceAnnuel = data.map(item => item.Taux_de_croissance_annuel);

            var ctx = document.getElementById('chart9').getContext('2d'); // Assurez-vous que l'ID 'chart9' correspond à votre élément canvas
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Taxis existants',
                        data: taxisExistants,
                        borderColor: 'rgb(255, 102, 102)', // Rouge clair
                        backgroundColor: 'rgba(255, 102, 102, 0.2)', // Rouge clair avec transparence
                        tension: 0.4,
                        fill: true,
                    }, {
                        label: 'Nombre total de taxis à Fès',
                        data: nombreTotalTaxisFes,
                        borderColor: 'rgb(255, 204, 0)', // Jaune clair
                        backgroundColor: 'rgba(255, 204, 0, 0.2)', // Jaune clair avec transparence
                        tension: 0.4,
                        fill: true,
                    }, {
                        label: 'Taux de croissance annuel',
                        data: tauxCroissanceAnnuel,
                        borderColor: 'rgb(153, 204, 255)', // Bleu clair
                        backgroundColor: 'rgba(153, 204, 255, 0.2)', // Bleu clair avec transparence
                        tension: 0.4,
                        fill: true,
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
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart10-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Année);
            const investissementsRoutes = data.map(item => item.Investissements_routes_millions_MAD);
            const investissementsTransports = data.map(item => item.Investissements_transports_en_commun_millions_MAD);
            const investissementsAutres = data.map(item => item.Investissements_autres_infrastructures_millions_MAD);

            var ctx = document.getElementById('chart10').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Investissements Routes (en millions MAD)',
                        data: investissementsRoutes,
                        backgroundColor: 'rgba(255, 99, 132, 0.7)', // Rouge clair avec transparence
                    }, {
                        label: 'Investissements Transports en commun (en millions MAD)',
                        data: investissementsTransports,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)', // Bleu clair avec transparence
                    }, {
                        label: 'Investissements Autres infrastructures (en millions MAD)',
                        data: investissementsAutres,
                        backgroundColor: 'rgba(255, 206, 86, 0.7)', // Jaune clair avec transparence
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Investissements (en millions MAD)'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Année'
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});




document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart12-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Année);
            const voyageurs = data.map(item => item.Nombre_total_de_voyageurs_millions);
            const trainsParJour = data.map(item => item.Nombre_total_de_trains_par_jour);
            const quais = data.map(item => item.Nombre_total_de_quais);
            const superficieGares = data.map(item => item.Superficie_totale_des_gares_m);
            const tauxSatisfaction = data.map(item => item.Taux_de_satisfaction_moyen_des_clients);

            var ctx = document.getElementById('chart12').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nombre total de voyageurs (en millions)',
                        data: voyageurs,
                        borderColor: 'rgba(255, 99, 132, 0.7)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    }, {
                        label: 'Nombre total de trains par jour',
                        data: trainsParJour,
                        borderColor: 'rgba(54, 162, 235, 0.7)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    }, {
                        label: 'Nombre total de quais',
                        data: quais,
                        borderColor: 'rgba(255, 206, 86, 0.7)',
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    }, {
                        label: 'Superficie totale des gares (en m²)',
                        data: superficieGares,
                        borderColor: 'rgba(75, 192, 192, 0.7)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    }, {
                        label: 'Taux de satisfaction moyen des clients',
                        data: tauxSatisfaction,
                        borderColor: 'rgba(153, 102, 255, 0.7)',
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    }]
                },
                options: {
                    scales: {
                        r: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});


document.addEventListener('DOMContentLoaded', function() {
    fetch('http://localhost:3000/chart11-data')
        .then(response => response.json())
        .then(data => {
            const labels = data.map(item => item.Type_transport);
            const pourcentages = data.map(item => item.Pourcentage_utilisation);

            var ctx = document.getElementById('chart11').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: pourcentages,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)', // Rouge clair
                            'rgba(54, 162, 235, 0.7)', // Bleu clair
                            'rgba(153, 102, 255, 0.7)', // Jaune clair
                            'rgba(255, 206, 86, 0.7)', // Vert clair
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'right'
                        }
                    }
                }
            });
        })
        .catch(error => console.log('Error fetching data:', error));
});
