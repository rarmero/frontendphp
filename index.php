<html>
<body>
<p>Hello world!</p>
<p>Today is : <?=date("m.d.y")?></p>

<form action="http://test2php-env.eba-qp7eqdkw.eu-west-3.elasticbeanstalk.com/create.php" method="post">

<div class="form-group row">
<label class="form-label">Comienzo del ciclo</label>
<input type='date' name='start' class="form-control">
</div>
<div class="form-group row">
<div class="col-sm-12 mt-3">
<button type="submit" name="submit" class="btn btn-primary btn-block">Aceptar</button>
</div>
</div>
</form>
</body>
</html>


