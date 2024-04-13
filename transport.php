<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Trnasport</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/table.css">

   

</head>

<body>

<?php
   include('includes/navbar.php');

 ?> 


  
<?php
require('./middlewares/db.php'); // Inclure le fichier de connexion à la base de données
include("./middlewares/db.php"); // Inclure le fichier de vérification de session
?>


<div class="video-container">
   <video autoplay loop muted plays-inline>
      <source src="./video/transport.mp4" type="video/mp4">
   </video>
   <h1 class="co">Transport</h1>
</div>

<style>
   /* Pour une vidéo */
   .video-container {
      position: relative;
      width: 100%;
      height: 0;
      padding-top: 56.25%; /* Ratio 16:9 pour une vidéo */
   }

   .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .video-container h1 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 40px; /* ajustez la taille du texte selon vos préférences */
      color: white; /* ajustez la couleur du texte selon vos préférences */
      z-index: 1; /* assurez-vous que le texte est au-dessus de la vidéo */
   }

   
</style>
 
</video>
  
</div>

<br>
<br>
<br>





<section class="packages">

   <h1 class="heading-title">Transport à Fès</h1>
<br>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="img/gare.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gare Ferroviaire (ONCF)</h3>
            <p>
            Avenue des Amohades 30 000, Fès<br>
    Tel : <a href="tel:+2120890203040">+212 (0) 8 90 20 30 40</a><br>
    Fax : <a href="tel:+212537770002">+212 5 37 77 00 02</a> / <a href="tel:+212537777857">+212 5 37 77 78 57</a><br>
    
</p>

            <a href="https://www.oncf.org.ma" class="btn">Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/aeroport.jpg" alt="">
         </div>
         <div class="content">
            <h3>Aéroport de Fès-Saïss</h3>
            <p>
    Km 15, Route d’Imouzzer, B.P 11 A<br>
    Tel : <a href="tel:+212535652161">+212 5 35 65 21 61</a><br>
    Fax : <a href="tel:+212535652664">+212 5 35 65 26 64</a><br>
  </p>
            <a href="https://www.onda.ma" class="btn">Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/ctm.jpg" alt="">
         </div>
         <div class="content">
            <h3>Gare routière CTM</h3>
            <p>
    Quartier Atlas,<br>
    En face du tribunal 1ère instance,<br>
    30 000, Fès<br>
    Tel : <a href="tel:+2120800090030">+212 (0) 800 0900 30</a><br>
     </p>

            <a href="https://www.ctm.ma" class="btn">Plus</a>
         </div>
      </div>

     
      <div class="box">
         <div class="image">
            <img src="img/bus.jpg" alt="">
         </div>
         <div class="content">
            <h3> Fes City Bus</h3>
            <p>

    Adresse: Route de Meknès, Km 3.5, BP 302, Fès, Maroc<br>
    Fax: +212 5 35 62 44 55<br>
</p>

            <a href="https://www.worldtravelguide.net/guides/africa/morocco/fes/gettingaround/" class="btn">Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/ptaxi.jpg" alt="">
         </div>
         <div class="content">
            <h3> Petit Taxi  </h3>
<p>Siège social : Route de Meknès, Km 3.5, BP 302, Fès, Maroc</p>
<p>Gare routière centrale : Avenue Hassan II, Fès, Maroc
   <br>
   Tel Station de taxis de la gare de Fès: <a href="tel:+2120800090030">+212 5 35 62 44 44</a><br>
   Tel Station de taxis de Bab Bou Jeloud: <a href="tel:+2120800090030">+212 5 35 62 44 55</a><br>
</p>
            <a href="" class="btn">Plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="img/Gtaxi.webp" alt="">
         </div>
         <div class="content">
    <h3> Grands Taxis </h3>
    <p>Siège social : Route de Meknès, Km 3.5, BP 302, Fès, Maroc</p>
    <p>Gare routière centrale : Avenue Hassan II, Fès, Maroc
       <br>
       Tel Station de taxis de la gare de Fès: <a href="tel:+212535624444">+212 5 35 62 44 44</a><br>
       Tel Station de taxis de Bab Bou Jeloud: <a href="tel:+212535624455">+212 5 35 62 44 55</a><br>
    </p>
    <a href="" class="btn">Plus</a>
</div>

         </div>
      </div>

      </section>      


<br>
<br>
<br>
<h1 class="heading-title">Transport <br><br> touristique</h1>
<table>
  <thead>
    <tr>
      <th>Nom de l'entreprise</th>
      <th>Adresse</th>
      <th>Téléphone</th>
      <th>Portable</th>
      <th>Email</th>
      <th>Site Web</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ste AS TRAVEL (SARL)</td>
      <td>LOT HABIB N" 21 ZOUAGHA BAS FES</td>
      <td>00212667393575</td>
      <td>N/A</td>
      <td>N/A</td>
      <td>www.astravelclick.com</td>
    </tr>
    <tr>
      <td>Ste ATLAS AMAZIGH TOUR</td>
      <td>47 rue 4 Q 3 al hadika route de meknes fès.</td>
      <td>N/A</td>
      <td>00212661216584</td>
      <td>N/A</td>
      <td>www.atlasamazightour.com</td>
    </tr>
    <tr>
      <td>Ste Al Adarissa TOURS</td>
      <td>N/A</td>
      <td>00212535653486</td>
      <td>00212661206364</td>
      <td>AdarissaTOURS@gmail.com</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste BACHIR ET FRERES TOURS</td>
      <td>DOUAR OLD KHLIFA AIN CHKEF FES</td>
      <td>00212661257900</td>
      <td>N/A</td>
      <td>N/A</td>
      <td>www.bachirTOURS.com</td>
    </tr>
    <tr>
      <td>Ste Classic Lines</td>
      <td>N° 55, Rue Ibn Maja, avenue des Al Mouahidine, VN Fès,</td>
      <td>+212 661.25.22.70 / +212 653.40.99.16</td>
      <td>N/A</td>
      <td>N/A</td>
      <td>www.classiclinesfes.com</td>
    </tr>
    <tr>
      <td>Ste eko TOURS</td>
      <td>107 hay Salam RTE bourkaiz fes.</td>
      <td>00212661562963</td>
      <td>N/A</td>
      <td>N/A</td>
      <td>www.ekoTOURS.net</td>
    </tr>
    <tr>
      <td>Ste Enjoy TOURS</td>
      <td>32 Rue tantane avenue wafae route de Sefrou. Fes</td>
      <td>00212535616446</td>
      <td>00212618593001</td>
      <td>Med.nouichi@hotmail.fr</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Fes Excursion</td>
      <td>3 ,Rca Qods route immouzer ,Appt 1 imm 3 etage 1 .Fes</td>
      <td>+212676605038</td>
      <td>N/A</td>
      <td>Transporttihami@gmail.com</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Fès TOURS</td>
      <td>Mont fleuri 2 lottissement benis tel 00212535625251 fax 00212535940277</td>
      <td>N/A</td>
      <td>00212661660123</td>
      <td>fesTOURS@menara.ma</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Four Season TOURS</td>
      <td>Rue tanger N 5 Imm .Ajiad 1er Etag N 3 - atlas -Fes</td>
      <td>N/A</td>
      <td>00212661483062</td>
      <td>tourisme.4saisons@gmail.com</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Fuma TOURS</td>
      <td>hay sidi el hadi rue 3 n 13 zougha fes.</td>
      <td>N/A</td>
      <td>00212664257479</td>
      <td>aziz.sahari@hotmail.fr</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste GM2 TOURS</td>
      <td>Adresse : av. des Far , imm. Fès Carrefour 2°ét. bur n° 7 30000 Fès Maroc.</td>
      <td> (+212) 0535 65 84 46</td>
      <td>00212661178991</td>
      <td>N/A</td>
      <td>www.gm2TOURS.ma</td>
    </tr>
    <tr>
      <td>good travels</td>
      <td>adresse: 44 espace fès rus brahim roudani bvd med v fes</td>
      <td>N/A</td>
      <td>00212661623201</td>
      <td>N/A</td>
      <td>www.morocco-goodtravels.com</td>
    </tr>
    <tr>
      <td>Ste GROWN TOURS</td>
      <td>15 Rue Hounaine Avenue Joulane Lido Fès Maroc.</td>
      <td>00212535731458</td>
      <td>00212661159045</td>
      <td>N/A</td>
      <td>www.grownTOURS.com</td>
    </tr>
    <tr>
      <td>Sté Jade TOURS sarl</td>
      <td>Adresse: n21 magasin 7 rue lakhdar ghilane VN Fes.</td>
      <td>N/A</td>
      <td>00212660548971 / 00212662158817</td>
      <td>N/A</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste KENZA TOURS</td>
      <td>78 Dalila 2 Zougha Fès.</td>
      <td>N/A</td>
      <td>+ 212 6 13 54 12 41</td>
      <td>N/A</td>
      <td>www.kenzaTOURS.com</td>
    </tr>
    <tr>
      <td>Ste Ktami Transport</td>
      <td>18 Rue jabel Aouam hay narjiss Fès 30000 Maroc.</td>
      <td>N/A</td>
      <td>00212661351176</td>
      <td>N/A</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Laoudyi transport</td>
      <td>Rue laayoune appt 3 résidence Abdellaoui sidi brahim Fès.</td>
      <td>N/A</td>
      <td>00212661665662</td>
      <td>laoudyitransport@gmail.com</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Lixsous TOURS</td>
      <td>N 232 bloc A Hay El Wifak Zouagha fes</td>
      <td>002126 61 60 25 52</td>
      <td>N/A</td>
      <td>lixsousTOURS@hotmail.fr</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Ste Medina TOURS SARL</td>
      <td>Adress : Hay Hassani Bloc E 3 N 8 Erac Sidi Brahim Fes .</td>
      <td>N/A</td>
      <td>00212673662067</td>
      <td>N/A</td>
      <td>www.medinaTOURS.net</td>
    </tr>

  </tbody>
</table>



<br>
<br>
<br>
<br>
<br>
<h1 class="heading-title">Agence de <br> <br> location</h1>
<br>
<br>
<table>
  <thead>
    <tr>
      <th>Agence</th>
      <th>Adresse</th>
      <th>Site Web</th>
      <th>E-mail</th>
      <th>Tel</th>
      <th>Fax</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Avis SCAL</td>
      <td>50, Bd Chefchaouni Aéroport, Fès Saïss</td>
      <td><a href="https://www.avis.ma">www.avis.ma</a></td>
      <td>fes@avis.ma</td>
      <td>+212 5 35 62 69 69</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Borjm an Car</td>
      <td>33, Rue Palestine, Rés. Al Houria</td>
      <td><a href="https://www.borjmancar.com">www.borjmancar.com</a></td>
      <td>info@borjmancar.com</td>
      <td>+212 5 35 65 34 35</td>
      <td>+212 5 35 65 43 03</td>
    </tr>
    <tr>
      <td>Classic Car SARL</td>
      <td>31, Rue Abdelkrim Khattabi, Imm. Ben Moussa</td>
      <td>N/A</td>
      <td>classiccar@gmail.com</td>
      <td>+ 212 5 35 94 05 53</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Dijoui Car</td>
      <td>39, Rue du 16 Novembre, Bd. Chefchaouni</td>
      <td><a href="https://www.dijouicar.com">www.dijouicar.com</a></td>
      <td>N/A</td>
      <td>+212 5 35 94 00 44</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Europcar</td>
      <td>45, Av. Hassan II</td>
      <td><a href="https://www.europcar.com">www.europcar.com</a></td>
      <td>fes@europcar.ma</td>
      <td>+212 5 35 62 65 45</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Flying Fès Car</td>
      <td>N/A</td>
      <td><a href="https://www.flyingfescar.com">www.flyingfescar.com</a></td>
      <td>contact@flyingfescar.com</td>
      <td>+ 212 5 35 62 67 85</td>
      <td>+ 212 5 35 62 67 85</td>
    </tr>
    <tr>
      <td>GM2 Car</td>
      <td>N/A</td>
      <td><a href="https://www.gm2car.com">www.gm2car.com</a></td>
      <td>contact@gm2car.com</td>
      <td>+212 5 35 73 29 07</td>
      <td>+212 5 35 64 41 50</td>
    </tr>
    <tr>
      <td>Hertz</td>
      <td>Bd. Lalla Meryem, Kiss. De la foire Aéroport Fès Saïss</td>
      <td><a href="https://www.hertz.ma">www.hertz.ma</a></td>
      <td>agence.fes@hertz.ma</td>
      <td>+212 5 35 62 28 12</td>
      <td>+212 5 35 62 28 12</td>
    </tr>
    <tr>
      <td>Perfect Car</td>
      <td>62, Bd Med V, Rés. Badr</td>
      <td><a href="https://www.perfectcarfes.com">www.perfectcarfes.com</a></td>
      <td>contact@perfectcarfes.com</td>
      <td>+212 5 35 65 15 15</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Saïss Car SARL</td>
      <td>9, Rue Ghassani Kanfani, Rés. Nabila</td>
      <td>N/A</td>
      <td>N/A</td>
      <td>+212 5 35 40 42 73</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Touring Car</td>
      <td>36, Bd Mohammed V</td>
      <td>N/A</td>
      <td>touringcar5@hotmail.com</td>
      <td>+212 5 35 94 26 74</td>
      <td>N/A</td>
    </tr>
    <tr>
      <td>Tourvilles</td>
      <td>13, Rue Mokhtar Soussi</td>
      <td><a href="https://www.tourvilles.net">www.tourvilles.net</a></td>
      <td>contact@tourvilles.net</td>
      <td>+212 5 35 62 66 35</td>
      <td>N/A</td>
    </tr>
  </tbody>
</table>








<?php
   include('includes/footer.php');

 ?> 
<!-- Lien JS de Swiper -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Lien du fichier JS personnalisé -->
<script src="js/script.js"></script>



</body>
</html>