<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf8>

        <title>Inclusão de usuários</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">      
    </head>
    
    <body style="background-color:#9ab3e5;">
        <div class="container">
            <br><br>
            <h2 class="col-md-4">Incluir Usuário</h2><br>
            <form action=salvar.php class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="nome1" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Data de Nascimento</label>
                    <input type="date" name="data1" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Salário</label>
                    <input type="text" onkeyup="k(this);" name="salario1" class="form-control" id="exampleInputPassword1" placeholder="Digite um valor" >
                    <small class="form-text">Exemplo:  2200.45</small>
                </div>
                <button type="submit" class="btn btn-primary" value="salvar">Salvar</button>
                <a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Voltar</a>
            </form>
        </div>

        <footer class="py-5">
            <div class="container">
                <div class="small text-center">Copyright &copy; 2019 - Tiago Silva</div>
            </div>
       </footer>      
    </body>
</html>