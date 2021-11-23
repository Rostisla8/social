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
  <form action = "backRegistr.php" method = 'POST'>
    <h1 class="h3 mb-3 fw-normal">Введите данные</h1>

    <div class="form-floating">
      <input name = 'login' type="login" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating">
      <input name = 'password' type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Регистрация</button>
  </form>
</main>
</body>
</html>