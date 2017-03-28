<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel='stylesheet prefetch' href='/css/general.css'>
  </head>
  <body>
      <h1 class="input-gestante">
    ESTÁ CHEGAAAAAANDO!
      </h1>
          <p>
            Está tudo bem! Estamos indo para o hospital e será um prazer recebermos a sua visita quando puder!

          </p>
          <p>
            Um beijo ;*

          </p>
          <p>
            Mamãe {{ Auth::user()->apelido }}.
          </p>
      <br><br><br>
      <div class="text-center">
        <img src="{{ $message->embed('img/89995.gif') }}">
      </div>

  </body>
</html>
