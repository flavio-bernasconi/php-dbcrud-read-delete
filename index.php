<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <script  src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.2.0/handlebars.js" charset="utf-8"></script>

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="script.js"></script>


    <title>pagamenti database</title>


  </head>
  <body>
    <h1>pagamenti</h1>
    <div class="container">
      <div id="pagamenti-pending">

      </div>
      <div id="pagamenti-accepted">

      </div>
      <div id="pagamenti-rejected">

      </div>
    </div>




    <script id="template" type="text/x-handlebars-template">
          <div class="pagamento" data-id="{{id}}">
            <a href="#" class="btn-delete">delete</a>
            <div class="dettagli">
              <p>{{id}}</p>
              <h3>Prezzo : {{price}}</h3>
              <p>prenotazione : {{prenotazione_id}}</p>
            </div>
          </div>
    </script>



  </body>
</html>
