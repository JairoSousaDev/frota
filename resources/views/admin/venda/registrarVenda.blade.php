<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Vendas</title>
    <link rel="icon"  type="image/png"  href="{{asset('images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('frota/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frota/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frota/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body style="background-image:url({{asset('images/bg.png')}}); background-size: 1400px 800px;">
    <x-navbar/>
    <div class="container card bg-redCard mt-5">
        <div class="tab-content" id="nav-tabContent">
            <div class="labelCard">
                <h4>Registrar Nova Venda</h4>
            </div>
            <hr class="bg-white">
            <form method="POST" action="{{route('storeVenda')}}" autocomplete="off">
                @csrf
                <div class="form-row mt-4">
                    <div class="col-md-3">
                        <label class="labelCard" for="placaVeiculo">Placa*:</label>
                        <input class="typeaheadVeiculo form-control form-control-sm" type="text" name="placaVeiculo" id="placaVeiculo">
                        @error('placaVeiculo')
                            <div class="invalid-tooltip">
                                {{$message}}
                            </div>    
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="labelCard" for="nomeCliente">Cliente*:</label>
                        <input class="typeahead form-control form-control-sm @error('nomeCliente') is-invalid @enderror" type="text" name="nomeCliente" id="nomeCliente">
                        @error('nomeCliente')
                            <div class="invalid-tooltip">
                                {{$message}}
                            </div>    
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label class="labelCard" for="valorVenda">Valor da Venda*:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><span class="fas fa-dollar-sign"></span></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="valorVenda" name="valorVenda" placeholder="Valor">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="labelCard" for="dataVenda">Data da Venda:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><span class="fas fa-calendar-day"></span></span>
                            </div>
                            <input type="text" class="form-control form-control-sm" id="dataVenda" name="dataVenda" placeholder="00/00/0000">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <label class="labelCard" for="observacaoVenda">Observações:</label>
                        <textarea class="form-control" id="observacaoVenda" name="observacaoVenda" placeholder="Observações" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-row mt-3 justify-content-center">
                    <div class="mb-2 mr-2">
                        <button type="submit" class="btn btn-success btn-sm"> <span class="fas fa-save"></span> Salvar</button>
                    </div>
                    <div class="mb-2 mr-2">
                        <a class="btn btn-secondary btn-sm" href=""><span class="fas fa-eraser"></span> Limpar</a>
                    </div>
                    <div class="mb-2 mr-2">
                        <a href="{{route('painel')}}" class="btn btn-danger btn-sm w-100"> <span class="fas fa-eraser"></span> Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mx-auto mt-3">
                @foreach ($errors->all() as $error)
                    <label>{{$error}}</label> 
                @endforeach
            </div>
        @endif
    </div>
    <script src="{{asset('frota/js/fontawesome.js')}}"></script>
    <script src="{{asset('frota/js/bootstrap.js')}}"></script>
    <script type="text/javascript">
        var path = "{{ route('autocompleteCliente') }}";
        $('input.typeahead').typeahead({
            source:  function (nome, process) {
            return $.get(path, { term:nome}, function (data) {
                    return process(data);
                });
            }
        });

        var pathVeiculo = "{{ route('autocompleteVeiculo') }}";
        $('input.typeaheadVeiculo').typeahead({
            source:  function (veiculo, process) {
            return $.get(pathVeiculo, { term:veiculo}, function (data) {
                    return process(data);
                });
            }
        });
    </script>
</body>
</html>