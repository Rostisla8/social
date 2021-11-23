<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main class="form-signin">
  <form action = "second.php" method = 'POST'>
    <h1 class="h3 mb-3 fw-normal">Войдите, пожалуйста</h1>

    <div class="form-floating">
      <input name = 'login' type="login" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating">
      <input name = 'password' type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Запомнить меня
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Авторизоваться</button>
    <button class="registration w-100 btn btn-lg btn-primary" type="button">Регистрация</button>
    <p class="mt-5 mb-3 text-muted">&copy;Rancevich2021</p>
  </form>
</main>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></scrip>
</body>
</html>