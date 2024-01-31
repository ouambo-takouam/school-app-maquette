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
        <div class="header__navigation m-r-30">
          <a href="/school-app-maquette/users/users-list.php" class="header__backlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            Albert TENHO
          </a>
          <div class="header__wrapper">
            <h1 class="header__title">Modification utilisateur</h1>
          </div>
        </div>
      </header>

      <div class="content">
        <div class="content__wrapper">
          <div class="details__navigation w-60">
            <div class="details__navigation__links">
              <a href="#" class="details__navigation__item active">Details</a>
              <a href="#" class="details__navigation__item">Mot de passe</a>
            </div>
            <div class="details__navigation__cta">
              <button class="btn primary">Mettre a jour</button>
            </div>
          </div>

          <div class="box w-40">
            <div class="box__wrapper">
              <div class="box__header">
                <h2 class="box__title">Créer un nouveau utilisateur</h2>
                <span class="box__info">* Information requise</span>
              </div>
              <div class="box__content">
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Nom *</label>
                    <div class="form__item">
                      <input type="text" value="ABOU">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Prenom *</label>
                    <div class="form__item">
                      <input type="text" value="Vincent">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Email *</label>
                    <div class="form__item">
                      <input type="text" value="abou@gmail.com">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Role *</label>
                    <div class="form__item">
                      <select name="" id="">
                        <option value="teacher">Enseignant</option>
                        <option value="provisor">Proviseur</option>
                        <option value="admin">Administrateur</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="box w-40">
            <div class="box__wrapper">
              <div class="box__header">
                <h2 class="box__title">Informations supplementaires </h2>
              </div>
              <div class="box__content">
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Date naissance</label>
                    <div class="form__item">
                      <input type="date" value="1990-07-15">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Ville</label>
                    <div class="form__item">
                      <input type="text" value="Douala">
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Quartier</label>
                    <div class="form__item">
                      <input type="text" value="Makepe">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Sexe</label>
                    <div class="form__item">
                    <select name="" id="">
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="form__row">
                  <div class="form__group">
                    <label for="#">Telephone</label>
                    <div class="form__item">
                      <input type="text" value="685 457 888">
                    </div>
                  </div>
                  <div class="form__group">
                    <label for="#">Photo *</label>
                    <div class="form__item">
                      <input type="file">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <button class="btn danger">Desactiver</button>
        </div>
      </div>
    </main>

    <!-- JAVASCRIPT CODE -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
