<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Nouvelle transaction   </title>
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
            <h1 class="header__title">Nouvelle transaction</h1>
            <div class="header__actions">
              <button class="btn secondary">
                Enregistrer & ajouter un autre
              </button>
              <button class="btn primary">
                Enregistrer
              </button>
            </div>
          </div>
        </div>
      </header>

      <div class="content w-40">
        <div class="content__wrapper">
            <div class="box">
                <div class="box__wrapper">
                    <div class="box__header">
                        <h2 class="box__title">Saisir une nouvelle transaction</h2>
                        <span class="box__info">* Information requise</span>
                    </div>
                    <div class="box__content">
                        <div class="form__row">
                            <div class="form__group">
                                <label for="date-transaction">Date de transaction *</label>
                                <div class="form__item">
                                    <input type="date" id="date-transaction">
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="type-transaction">Type de transaction *</label>
                                <div class="form__item">
                                    <select name="type-transaction" id="type-transaction">
                                        <option value="frais_scolaires">Frais scolaires</option>
                                        <option value="inscription">Inscription</option>
                                        <option value="fournitures_de_bureau">Fournitures de bureau</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Nouveau champ pour "Elève" -->
                        <div class="form__row">
                            <div class="form__group">
                                <label for="eleve">Elève *</label>
                                <div class="form__item">
                                    <input type="text" id="eleve">
                                </div>
                            </div>
                        </div>
                        <!-- Nouveau champ pour "Montant" -->
                        <div class="form__row">
                            <div class="form__group">
                                <label for="montant">Montant *</label>
                                <div class="form__item">
                                    <input type="number" id="montant">
                                </div>
                            </div>
                        </div>
                        <!-- Nouveau champ pour "Notes supplémentaires" -->
                        <div class="form__row">
                            <div class="form__group">
                                <div class="form__group">
                                    <label for="notes">Notes supplémentaires *</label>
                                    <div class="form__item">
                                        <input type="text" id="notes"> 
                                    </div>
                                </div>
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
