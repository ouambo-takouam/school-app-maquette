<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Nouvelle note   </title>
    <!-- CSS TYLES -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>
  <body>
    
    <?php include '../inc/navigation.php' ?>

    <main>
      <header>
        <div class="header__navigation m-r-30 border-b">
          <a href="/school-app-maquette/users/users-list.php" class="header__backlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Liste des notes
          </a>
  
          </div>
        </div>
      </header>

      <div class="content w-40">
        <div class="content__wrapper">
            <div class="box">
                <div class="box__wrapper">
                    <div class="bulletin-row">
                        <img class="logo-img-bulletin" src="../assets/images/png/png_imagepardefaut.png" alt="image par defaut">
                        <div class="bulletin-element">
                            <p>Bulletin de :</p>
                            <span> Trimestre 1</span>
                        </div>
                    </div>
                    
                    <div class="bulletin-row">
                        <div class="bulletin-block">
                            <div class="bulletin-element">
                                <p>Année scolaire :</p>
                                <span> 2022-2023</span>
                            </div>
                            <div class="bulletin-element">
                                <p>Classe :</p>
                                <span> 2nde</span>
                            </div>
                            <div class="bulletin-element">
                                <p>Professeur principal :</p>
                                <span> Toto Brice</span>
                            </div>
                        </div>
                        <div class="bulletin-block">
                            <div class="bulletin-element">
                                <p>Elève : </p>
                                <span> Georges Souop</span>
                            </div>
                            <div class="bulletin-element">
                                <p>Né le : </p>
                                <span> 10 octobre 2020</span>
                            </div>
                            <div class="bulletin-element">
                                <p>M. ou Mme (Parent ou tuteur): </p>
                                <span> Anderson, Carol </span>
                            </div>
                        </div> 
                    </div> 
                    <table>
                        <thead>
                            <tr>
                            <th>Matière</th>
                            <th>Enseignant</th>
                            <th>Notes</th>
                            <th>Coefficient</th>
                            <th>Total</th>
                            <th>Note la + basse</th>
                            <th>Note la + haute</th>
                            <th>Appréciation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mathématiques</td>
                                <td>M. Dupont</td>
                                <td>15</td>
                                <td>3</td>
                                <td>45</td>
                                <td>12</td>
                                <td>18</td>
                                <td>Bien</td>
                            </tr>
                            <tr>
                                <td>Physique</td>
                                <td>Mme. Martin</td>
                                <td>13</td>
                                <td>2</td>
                                <td>26</td>
                                <td>10</td>
                                <td>16</td>
                                <td>Correct</td>
                            </tr>
                            <tr>
                                <td>Chimie</td>
                                <td>Dr. Lefebvre</td>
                                <td>17</td>
                                <td>2</td>
                                <td>34</td>
                                <td>15</td>
                                <td>19</td>
                                <td>Très bien</td>
                            </tr>
                            <tr>
                                <td>Histoire</td>
                                <td>M. Bernard</td>
                                <td>12</td>
                                <td>2</td>
                                <td>24</td>
                                <td>8</td>
                                <td>14</td>
                                <td>Moyen</td>
                            </tr>
                            <tr>
                                <td>Anglais</td>
                                <td>Mme. Smith</td>
                                <td>14</td>
                                <td>1</td>
                                <td>14</td>
                                <td>11</td>
                                <td>17</td>
                                <td>Bien</td>
                            </tr>
                            <tr>
                                <td>Informatique</td>
                                <td>M. Dupuis</td>
                                <td>16</td>
                                <td>4</td>
                                <td>64</td>
                                <td>13</td>
                                <td>18</td>
                                <td>Très bien</td>
                            </tr>
                            <tr>
                                <td>Économie</td>
                                <td>Mme. Lemaire</td>
                                <td>11</td>
                                <td>3</td>
                                <td>33</td>
                                <td>9</td>
                                <td>13</td>
                                <td>Moyen</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bulletin-element">
                        <p>Moyenne générale : </p>
                        <span>9.4/20</span>
                    </div>
                    <div class="bulletin-element">
                        <p>Absences, vie scolaire</p>
                        <div class="bulletin-ecrire"></div>
                        <span>Visa du chef d'établissement ou de son délégué</span>
                    </div>
                    <div class="bulletin-element">
                        <p>Appréciation générale</p>
                        <div class="bulletin-ecrire"></div>
                        <span>Signature des parents</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

    <!-- JAVASCRIPT CODE -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/hideElement.js"></script>
  </body>
</html>
