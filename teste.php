<!doctype html>
<html lang="pt-br">

<head>
  <title>Select para mostrar e esconder divs</title>
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <!--VersÃ£o 3.1.0-->
</head>
<style>
  .Div1,.Div2,.Div3{display:none;}
</style>
<body>
  <div class="Container">
    <form action="#">
      <select name="SelectOptions" id="SelectOptions" required>
        <option value="">Selecione</option>
        <option value="Div1">Div 1</option>
        <option value="Div2">Div 2</option>
        <option value="Div3">Div 3</option>
      </select>
    </form>

    <div class="DivPai">
      <div class="Div1">
        Qualquer Texto
      </div>

      <div class="Div2">
        <img src="Images/Farol.jpg" alt="Foto">
      </div>

      <div class="Div3">
        Outro texto
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      //Select para mostrar e esconder divs
      $('#SelectOptions').on('change', function() {
        var SelectValue = '.' + $(this).val();
        $('.DivPai div').hide();
        $(SelectValue).toggle();
      });
    });
  </script>
</body>

</html>