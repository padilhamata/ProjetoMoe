<?php echo $this->include('Login/login_header', array('titulo'=> $titulo)); ?>

<div class="container">
<h1>Mural de Oportunidades de Estágio (MOE) </h1>
<p>Digite seu e-mail e sua senha para fazer login ou caso não tenha clique em criar uma conta</p>



<form action="#" class="col">
<div class="row ">
        <div class="input-field col s9">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        </div>

        <div class="row" >
        <div class="input-field col s9">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
<div class="row">
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
<a href="#" class="btn waves-effect waves-light">Inscrever</a>
      </div>
      <br>
      </form>
      </div>
     


       <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>