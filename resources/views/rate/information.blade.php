<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Unklab Dine made by SE Summer 2022" />
    <meta name="author" content="SE Summer 2022" />
    <title>U Dine</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="../../assets/images/favicon.svg"
    />
    <!-- CSS only -->
    <link rel="stylesheet" href="../../assets/css/main.min.css" />
    <link rel="stylesheet" href="../../assets/css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body class="d-flex flex-column h-100 pt-5">
    <header class="header-shadow">
      <!-- Fixed navbar -->
      <nav
        class="navbar navbar-expand-md navbar-white fixed-top bg-white shadow-sm"
      >
        <div class="container">
          <div>
            <img src="../../assets/images/header-icon.svg" alt="" />
            <a
              class="navbar-brand fw-normal text-black ms-2 logo-font"
              href="../"
              >Unklab Dine</a
            >
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list text-dark"></i>
          </button>
          <div class="collapse navbar-collapse flex-grow-0" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 fw-medium">
              <li class="nav-item">
                <a class="nav-link" href="../../">Home</a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active text-primary"
                  aria-current="page"
                  href="#"
                  >Rate</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href=".././menu">Best Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=".././rating"
                  >Overall Rating</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main class="mt-4">
      <!-- Header -->
      <div
        class="container d-flex justify-content-between flex-lg-row flex-column"
      >
        <div class="d-flex align-items-center">
          <h3 class="fw-semibold text-primary me-3">Rating</h3>
          <p class="mt-2 fw-light">{{$quote[rand(0, sizeof($quote))]->quote}}</p>
        </div>
        <div
          class="d-flex flex-row-reverse flex-lg-row justify-content-between"
        >
          <p
            class="fw-medium text-primary lh-sm me-lg-3 text-lg-end text-start"
          >
          <?php echo date('l')?> <br/>
          <span class="text-primary-dark"><?php echo date('d F Y')?></span>
          </p>
          <!-- <div>
            <button
              class="btn btn-primary text-white fw-medium px-5 btn-shadow"
            >
              Rate Now!
            </button>
          </div> -->
        </div>
      </div>
      <!-- End of Header -->
      <!-- <div class="container">
        <br /><br />
        <ul class="list-unstyled multi-steps">
          <li class="is-active">Environment</li>
          <li>Service</li>
          <li>Food</li>
        </ul>
      </div> -->
<br><br>
      <div class="container text-center">
        <h1 class="fw-bold text-primary lh-1">Information</h1>
        <p class="text-muted">
          Before we start please fill up the blank fields below
        </p>
      </div>
      <div class="container field-container">
        <form action="/rate/store" method="POST">
          <div class="mb-3">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">Name</label
              ><span class="fs-smaller text-mute">optional</span>
            </div>
            <input
              name="responden"
              type="text"
              class="form-control"
              id="inputName"
              placeholder="Anonymous"
              aria-describedby="name"
            />
          </div>

          <!-- <div class="mb-3">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">What you eat?</label>
            </div>
            <select
              type="email"
              class="form-select"
              id="inputName"
              aria-describedby="name"
              required
            >
              <option selected disabled value="">Nasi, sayur, roti</option>
              <option value="">...</option>
            </select>
          </div> -->
          <div class="mb-5">
            <div class="d-flex align-items-center">
              <label for="name" class="fw-medium me-1">What you eat?</label
              >
              <!-- <span class="fs-smaller text-mute"
                ><i
                  class="bi bi-exclamation-circle-fill me-2 fs-6 text-warning"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-custom-class="custom-tooltip"
                  title="Add if your didn't find the food"
                ></i
              ></span> -->
            </div>
            <input
              type="email"
              class="form-control"
              id="inputName"
              placeholder="Nasi, sayur, roti"
              aria-describedby="name"
            />
          </div>
          
          <div class="mb-3">
            <a
              class="btn btn-primary fw-medium w-100 btn-shadow mb-3 text-white"
              href="../rate/environment"
              >Next</a
            >
            <a
              class="btn border border-2 border-primary text-primary fw-medium w-100"
              href="javascript:history.back()"
              >Back</a
            >
          </div>
        </form>
      </div>
      </form>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
      <div class="container text-center">
        <span class="text-muted">Made by SE Summer 2022 with ❤️</span>
      </div>
    </footer>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
  <script src="../../assets/js/main.js"></script>
</html>
