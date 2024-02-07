<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet scolaire - Liste transactions</title>
    <!-- CSS TYLES -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>
  <body>
    
    <?php include '../inc/navigation.php' ?>

    <main>
      <header>
        <div class="topbar">
          <div class="topbar__search">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-search"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
              />
            </svg>
            <input
              type="search"
              placeholder="Recherchez des opérations, des rapports et plus encore"
            />
          </div>
          <div class="topbar__settings">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-question-circle"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                />
                <path
                  d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"
                />
              </svg>
              Aide
            </span>
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-gear"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"
                />
                <path
                  d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"
                />
              </svg>
            </span>
            <div class="topbar__profile">G</div>
          </div>
        </div>

        <div class="header__navigation m-r-30 border-b">
          <!-- <div class="header__backlink"></div> -->
          <div class="header__wrapper">
            <h1 class="header__title">Transactions</h1>
            <div class="header__actions">
              <div class="grouped__btn">
                <a href="/school-app-maquette/users/users-add.php" class="btn primary">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-plus"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"
                    />
                  </svg>
                  Nouvelle transaction
                </a>
                <button class="btn primary">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-three-dots-vertical"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
                    />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="content m-r-30">
        <div class="topbar m-b-2">
          <div class="topbar__search">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-search"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
              />
            </svg>
            <input
              type="search"
              placeholder="Rechercher par description"
            />
          </div>
          <div class="topbar__settings">
            <button class="btn secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/>
              </svg>
              Filtrer
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </button>
          </div>
        </div>

        <div class="table__container box">
          <div class="table__container__header">
            <div class="table__container__header-toolbar">
              <!-- <div class="table__checkbox__wrapper">
                <input type="checkbox">
              </div> -->
            </div>
            <div class="table__container__header-settings">
              <button class="btn secondary outlined">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0292 5.25244L11.5805 2.80377V14.6667C11.5814 14.7547 11.5641 14.842 11.5298 14.9231C11.4955 15.0042 11.445 15.0774 11.3812 15.1382C11.3204 15.2017 11.2471 15.2521 11.166 15.2862C11.0849 15.3203 10.9977 15.3374 10.9097 15.3364C10.8214 15.3376 10.7338 15.3211 10.652 15.2878C10.5702 15.2546 10.496 15.2053 10.4335 15.1428C10.3711 15.0804 10.3218 15.0061 10.2886 14.9243C10.2553 14.8426 10.2388 14.755 10.2399 14.6667V2.84664L7.81377 5.25244C7.75541 5.31992 7.68291 5.37372 7.60142 5.41002C7.51993 5.44632 7.43144 5.46423 7.34225 5.46248C7.25323 5.46407 7.16496 5.44608 7.08366 5.40979C7.00237 5.37349 6.93004 5.31978 6.8718 5.25244C6.80529 5.19567 6.75209 5.12496 6.71598 5.04532C6.67986 4.96568 6.66172 4.87907 6.66284 4.79164C6.66284 4.61053 6.73249 4.45086 6.8718 4.31155L10.9322 0.355103L14.9915 4.31155C15.0474 4.38124 15.0932 4.45844 15.1276 4.54088C15.1618 4.62047 15.1796 4.7061 15.1801 4.79271C15.1795 4.87896 15.1616 4.96421 15.1276 5.04347C15.0964 5.12138 15.0502 5.19238 14.9915 5.25244C14.9299 5.3184 14.8554 5.37105 14.7726 5.40717C14.6899 5.44329 14.6006 5.46211 14.5104 5.46248C14.4199 5.46226 14.3304 5.44351 14.2475 5.40739C14.1646 5.37126 14.0899 5.31853 14.0281 5.25244H14.0292ZM21.6431 18.3981C21.6431 18.7485 21.5145 19.0443 21.2563 19.2843C20.9981 19.5245 20.656 19.6538 20.3036 19.6444H1.55011C1.17289 19.6444 0.855691 19.5244 0.597429 19.2843C0.340238 19.0443 0.210571 18.7485 0.210571 18.3981V10.1744C0.210571 9.83686 0.339167 9.54431 0.597429 9.29783C0.855691 9.05136 1.17289 8.92812 1.55011 8.92812H7.59944V10.1937H2.36668C2.15462 10.1896 1.9489 10.2662 1.79122 10.408C1.71479 10.4724 1.65354 10.5528 1.61186 10.6436C1.57017 10.7344 1.54908 10.8332 1.55011 10.9331V17.6394C1.55011 17.8462 1.63048 18.0252 1.79122 18.1752C1.94638 18.3221 2.15305 18.4022 2.36668 18.3981L19.487 18.3788C19.7008 18.3826 19.9075 18.3021 20.0625 18.1548C20.1387 18.088 20.1997 18.0056 20.2413 17.9131C20.2829 17.8207 20.3041 17.7204 20.3036 17.619V10.9331C20.3046 10.8332 20.2835 10.7344 20.2418 10.6436C20.2001 10.5528 20.1389 10.4724 20.0625 10.408C19.9048 10.2662 19.6991 10.1896 19.487 10.1937H14.2757V8.92812H20.3036C20.6808 8.92812 20.998 9.05136 21.2563 9.29783C21.5134 9.54431 21.6431 9.83686 21.6431 10.1744V18.3981Z" fill="#100D59"/>
              </svg>
              </button>
            </div>
            <div class="table__container__header-pagination-info">
              <span><em>1 - 25 sur 1,343</em></span>
            </div>
          </div>
          <div class="table__container__content">
            <table>
              <thead>
                <tr>
                  <th>N° Transaction</th>
                  <th>Type Transaction</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Elève</th>
                  <th>Montant</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>72</td>
                  <td>Recette</td>
                  <td>01/01/2023</td>
                  <td>Inscription</td>
                  <td>Georges Souop</td>
                  <td>700 000 F CFA</td>
                  <td>
                    <button class="btn secondary outlined">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-three-dots-vertical"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>73</td>
                  <td>Recette</td>
                  <td>01/01/2023</td>
                  <td>Inscription</td>
                  <td>Georges Souop</td>
                  <td>80 000 F CFA</td>
                  <td>
                    <button class="btn secondary outlined">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-three-dots-vertical"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>74</td>
                  <td>Recette</td>
                  <td>01/01/2023</td>
                  <td>Inscription</td>
                  <td>Georges Souop</td>
                  <td>90 000 F CFA</td>
                  <td>
                    <button class="btn secondary outlined">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-three-dots-vertical"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
                <tr>
                    <td>75</td>
                    <td>Recette</td>
                    <td>01/01/2023</td>
                    <td>Frais scolaires</td>
                    <td>Georges Souop</td>
                    <td>100 000 F CFA</td>
                  <td>
                    <button class="btn secondary outlined">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-three-dots-vertical"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"
                        />
                      </svg>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table__container__footer"></div>
        </div>
      </div>
    </main>

    <!-- JAVASCRIPT CODE -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
