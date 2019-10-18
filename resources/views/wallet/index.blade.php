<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>My Wallet</title>
</head>
<body class="bg-dark">
<div class="navigation-wrap  start-header" style="background-color: #1d2124">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="m-auto navbar-brand text-center" href="#" target="_blank">
                        <img style="width: 42px" src="{{asset('img/money.png')}}" alt="">
                        <span class="text-center text-white font-weight-bold">My Wallet</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card bg-warning text-black" style="max-width: 250px">
        <div class="card-header">
            <h5 class="">Patrimomio Total</h5>
        </div>
        <div class="card-body">
            <h4  class="card-title font-weight-bold">R$ 2000.00</h4>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <button class="btn btn-warning font-weight-bold">Adicionar Ativo</button>
        </div>
        <div class="card-body">
            <h5 class="card-title font-weight-bold">Meus ativos</h5>
            <table class="table table">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Quantidade</th>
                    <th>Cotação/Preço</th>
                    <th>Total Investido</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ITSA3</td>
                    <td>2</td>
                    <td>R$ 12.29</td>
                    <td>R$ 24,64</td>
                    <td>
                        <button class="btn btn-success">Editar</button>
                        <button class="btn btn-danger">Deletar</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
