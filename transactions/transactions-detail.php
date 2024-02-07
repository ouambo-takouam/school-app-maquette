<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Detail utilisateur</title>
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
            Liste des transactions
          </a>
          <div class="header__wrapper">
            <h1 class="header__title">Transaction n° 72</h1>
          </div>
        </div>
      </header>

      <div class="content w-40">
        <div class="content__wrapper">
          <div class="sub-header__wrapper">
            <h1 class="sub-header__title">Détails de transaction</h1>
            <a href="#" class="btn primary">Editer</a>
          </div>

          <div class="box">
            <div class="box__wrapper">
              <div class="box__header">
                <h2 class="box__title">Details</h2>
              </div>
              <div class="box__content">
                <div class="data__row">
                  <div class="data__group">
                    <label for="#">Date</label>
                    <p>01 Janvier 2023 </p>
                  </div>
                </div>
                <div class="data__row">
                  <div class="data__group">
                    <label for="#">Type de transaction</label>
                    <p>Frais d'inscription</p>
                  </div>
                </div>
                <div class="data__row">
                  <div class="data__group">
                    <label for="#">Elève</label>
                    <p>Georges Martial</p>
                  </div>
                </div>
                <div class="data__row">
                  <div class="data__group">
                    <label for="#">Montant</label>
                    <p> 50 000 F CFA</p>
                  </div>
                </div>
                <div class="data__row">
                  <div class="data__group">
                    <label for="#">Observations</label>
                    <p>Echelonnement de prêt sur 10 mois</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- JAVASCRIPT CODE -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
