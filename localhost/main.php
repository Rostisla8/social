        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="headers.css">
            <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        </head>

        <?php   
                $connections = mysqli_connect('localhost' , 'root' , 'root' , 'social') or die('Connection error');
                require 'functions.php';
                if(!empty($_POST)){
                    save_mess();
                }
                $result = get_mess();
                

                ?>

        <body>

            <header class="p-3 bg-dark text-white">
                <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="main.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="brest.jpg" alt="">
                    </a>
            
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Чат</a></li>

                    </ul>
    
                    <div class="text-end">
                    <button type="button" class="exitt btn btn-warning">Выйти</button>
                    </div>
                </div>
                </div>
            </header>
            <main>
            <?php
                foreach($result as $item){
                    echo "<div class = 'anyClass'>
                    <strong>Имя:{$item['name']} | Дата:{$item['date']} </strong><br>
                    Сообщение : {$item['text']}
                    </div>";
                }
                    ?>

                <div class="container-fluid  d-flex flex-column justify-content-center align-content-center">
                <form action = 'main.php' method = 'POST'>
                    <div >
                    <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Имя</label>
            <input name = 'name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Пожалуйста,введите ваше имя</div>
        </div>
        <div class="form-group mb-3 col-md-4">
    <label for="exampleFormControlTextarea2">Введите сообщение</label>
    <textarea name = 'text' class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
    </div>
    <div class="col-md-4">
    <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
                    </div>
        </form>
                </div>
            </main>
            
            <script src="script2.js"></script>
                <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>      
            </body>
        </html>