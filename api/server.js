const express = require('express');
const mysql = require('mysql2/promise');
const cors = require('cors');
require('dotenv').config();

const server = express();
server.use(cors());


const config = {
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
};

async function executeQuery(sql) {
    try {
        const connection = await mysql.createConnection(config);
        const [rows] = await connection.execute(sql);
        await connection.end();
        return rows;
    } catch (err) {
        console.error('Error executing query', err);
        throw new Error('Error connecting to the database');
    }
}



// start
// hotels start 
server.get('/chart-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, NombreEtablissements, NombreLits FROM chart1');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart2-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, NombreEtablissements, CapaciteAccueil, TauxOccupation FROM chart2');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart3-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, BudgetBas, BudgetMoyen, BudgetEleve FROM chart3');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart4-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT TypeHebergement, Printemps, Ete, Automne, Hiver, Remarques FROM chart4');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});
// hotels end 
//ends 



// start
// restauration start
server.get('/chart5-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Nouveaux_restaurants, Nouveaux_cafes, Investissements FROM chart5');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


server.get('/chart6-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Cuisine_Marocaine, Cuisine_Internationale FROM chart6');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart7-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Nouveaux_Emplois, Nombre_Total_Employes, Taux_Croissance_Emploi FROM chart7');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


server.get('/chart8-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Nouveaux_Etablissements, Investissements_Millions_Dirhams, Popularite_Cuisine_Marocaine, Nombre_Employes, Taux_Croissance_Emploi FROM chart8');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


// restauration end 
// end 



server.get('/chart9-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Année, Taxis_existants, Nombre_total_de_taxis_à_Fès, Taux_de_croissance_annuel FROM chart9');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


server.get('/chart10-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Année, Investissements_routes_millions_MAD, Investissements_transports_en_commun_millions_MAD, Investissements_autres_infrastructures_millions_MAD FROM chart10');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


server.get('/chart12-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Année, Nombre_total_de_voyageurs_millions, Nombre_total_de_trains_par_jour, Nombre_total_de_quais, Superficie_totale_des_gares_m², Taux_de_satisfaction_moyen_des_clients FROM chart12');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart11-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Type_transport, Pourcentage_utilisation FROM chart11');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});




// start
// trnasport  start


server.get('/chart13-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Pays, Nombre_Visiteurs FROM chart13');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});



server.get('/chart14-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT ID_Attraction, Nom, Type, Nombre_Visiteurs_Annuels FROM chart14');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});

server.get('/chart15-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT ID_Evenement, Nom_Evenement, Mois, Nombre_Visiteurs FROM chart15');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


server.get('/chart16-data', async (req, res) => {
    try {
        const rows = await executeQuery('SELECT Annee, Categorie, Revenu_Millions_EUR FROM chart16');
        res.json(rows);
    } catch (err) {
        res.status(500).send({ message: err.message });
    }
});


// transport  end 
// end 





















const PORT = process.env.PORT || 3000;
server.listen(PORT, () => console.log(`Server running on port ${PORT}`));
