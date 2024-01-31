<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Modification eleve</title>
    <!-- CSS TYLES -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>
  <body>
    
    <?php include '../inc/navigation.php' ?>

    <main>
      <header>
        <div class="header__navigation m-r-30">
          <a href="/school-app-maquette/users/users-list.php" class="header__backlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Denis Norvilus
          </a>
          <div class="header__wrapper">
            <h1 class="header__title">Modification eleve</h1>
            <button class="btn primary">Mettre a jour</button>
          </div>
        </div>
      </header>

      <div class="content w-40">
        <div class="content__wrapper">
          <div class="box">
            <div class="box__wrapper">
              <div class="box__header">
                <h2 class="box__title">#Denis Norvilus</h2>
              </div>
              <div class="box__content">
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Nom *</label>
                    <div class="form__item">
                      <input type="text" value="NORVILUS">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Prenom *</label>
                    <div class="form__item">
                      <input type="text" value="Denis">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Date naissance</label>
                    <div class="form__item">
                      <input type="date" value="">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Ville</label>
                    <div class="form__item">
                      <input type="text" value="Yaounde">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Quartier</label>
                    <div class="form__item">
                      <input type="text" value="Biyemassi">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Sexe</label>
                    <div class="form__item">
                      <select name="" id="">
                        <option value="masculin">Masculin</option>
                        <option value="masculin" selected>Feminin</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Photo</label>
                    <div class="form__item">
                      <input type="file">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="box">
            <div class="box__wrapper">
              <div class="box__header">
                <h2 class="box__title">Informations supplementaires </h2>
              </div>
              <div class="box__content">
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Matricule *</label>
                    <div class="form__item">
                      <input type="text" value="HRTG7">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Classe</label>
                    <div class="form__item">
                      <select name="" id="">
                        <option value="6m1">6M1</option>
                        <option value="5m3" selected>5M3</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Date d'entree *</label>
                    <div class="form__item">
                      <input type="date">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Nom parent *</label>
                    <div class="form__item">
                      <input type="text" value="ADAMOU Theodore">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Telephone parent *</label>
                    <div class="form__item">
                      <input type="text" value="684 545 545">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Email parent</label>
                    <div class="form__item">
                      <input type="text">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Observations</label>
                    <textarea style="width: 100%;" name="" id="" cols="30" rows="10">Enfant discipline, a encourager !!</textarea>
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
