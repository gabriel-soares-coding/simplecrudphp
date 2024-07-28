<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js">
    <style>
        body {
            background-color: #8B00CC;
            font-weight: bold;
            color: #FFFFFF;
        }
        article {
            color: #000000;
            font-weight: normal;
        }
    </style>
    <title>Um Crud Simples de Cadastro</title>
</head>
<body class="accordion-body">
    <header>
        <h1 class="card-title text-center">
            Form
        </h1>
        <h2 class="card-subtitle text-center mb-3">
            User Registration
        </h2>
    </header>
    <article class="accordion-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputName" placeholder="Name">
            <label for="floatingInputName">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInputDateOfBirth" placeholder="Date of Birth">
            <label for="floatingInputDateOfBirth">Date of Birth</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInputCpf" placeholder="CPF">
            <label for="floatingInputCpf">CPF</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInputEmail" placeholder="E-mail">
            <label for="floatingInputEmail">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInputTelephone" placeholder="Telephone">
            <label for="floatingInputTelephone">Telephone</label>
        </div>
    </article>
</body>
</html>