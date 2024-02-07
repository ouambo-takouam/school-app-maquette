<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Nouvelle presence   </title>
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
            Liste des présences
          </a>
          <div class="header__wrapper">
            <h1 class="header__title">Nouvelle presence</h1>
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
                        <h2 class="box__title">Faire l'appel</h2>
                    </div>
                    <div class="box__content">
                        <div class="form__row">
                            <div class="form__group">
                                <label for="date-transaction">Date de l'appel *</label>
                                <div class="form__item">
                                    <input type="date" id="date-transaction">
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="classe">Classe</label>
                                <div class="form__item">
                                    <select name="classe" id="classe">
                                        <option value="6eme">6ème</option>
                                        <option value="5eme">5ème</option>
                                        <option value="4eme">4ème</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="matiere">Matière</label>
                                <div class="form__item">
                                    <select name="matiere" id="matiere">
                                        <option value="francais">Français</option>
                                        <option value="math">Mathématiques</option>
                                        <option value="anglais">Anglais</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="debut-cours">Début du cours</label>
                                <div class="form__item">
                                    <select name="debut-cours" id="debut-cours">
                                        <option value="8h">08:00</option>
                                        <option value="9h">09:00</option>
                                        <option value="10h">10:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="fin-cours">Fin du cours</label>
                                <div class="form__item">
                                    <select name="fin-cours" id="fin-cours">
                                        <option value="8h">08:00</option>
                                        <option value="9h">09:00</option>
                                        <option value="10h">10:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="header__actions">
                            <button class="btn secondary">
                              Annuler
                            </button>
                            <button class="btn primary" id="firstNextButton">
                              Suivant
                            </button>
                          </div>
                    </div>
                    <div class="box__content">
                        <div class="box__header">
                            <h2 class="box__title">Cocher les élèves présents</h2>
                        </div>
                        <div class="form__group_checkbox" action="">
                            <div class="form__row_checkbox">
                                <div>
                                    <input type="checkbox" id="option1" name="option1" value="Option1">
                                </div>
                                <label for="option1">Willy Baller</label>
                            </div>
                            <div class="form__row_checkbox">
                                <div>
                                    <input type="checkbox" id="option2" name="option2" value="Option2">
                                </div>
                                <label for="option2">Alain Proust</label>
                            </div>
                            <div class="form__row_checkbox">
                                <div>
                                    <input type="checkbox" id="option2" name="option2" value="Option2">
                                </div>
                                <label for="option2">Norbert Colbert</label>
                            </div>
                            <div class="form__row_checkbox">
                                <div>
                                    <input type="checkbox" id="option2" name="option2" value="Option2">
                                </div>
                                <label for="option2">Cathy Aymerine</label>
                            </div>
                            <div class="header__actions">
                                <button class="btn secondary">
                                  Annuler
                                </button>
                                <button class="btn primary" id="secondNextButton">
                                  Suivant
                                </button>
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
    <script src="../assets/js/hideElement.js"></script>
  </body>
</html>
