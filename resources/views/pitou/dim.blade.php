<!DOCTYPE html>
<html>
    <head>
        <title>
              get-out
        </title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>
    <body>
        <h1>ohh to be blessing my god!!</h1>
        <?=
        "je suis de sex $sex et je suis un $clas puis je reside dans la ville de $ville";
        ?>

<div class="field">
  <label class="label">marque</label>
  <div class="control">
    <input class="input" type="text" name="marque" placeholder="marque" value="{{ old('marque')}}">
  </div>
    </body>
</html>