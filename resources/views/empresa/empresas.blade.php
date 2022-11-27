<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script rel="stylesheet" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script  src="{{ asset('js/main.js')}}" type="module" defer></script>
    <title>Empresas</title>
</head>
<body class="p-3 m-0 border-0 bd-example">
  <div>
    <a type="button" id="lado" class="btn btn-outline-primary"  href="{{route('empresa.create')}}"   data-bs-toggle="modal"  data-bs-target="#add">Nova Empresa</a>
    <a type="button" id="lado" class="btn btn-outline-secondary"  href="{{route('empresa.home')}}" >Voltar</a>
    @include('empresa.modal.addEmpresa')
  </div>
  
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasDarkNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>

<div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Disabled</a>
        </li>
      </ul>
  </div>
</div>
  </nav>
        

    <div class="table-responsive">
    <table class="table table-dark table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Razão social</th>
            <th scope="col">CNPJ</th>
            <th scope="col">E-mail</th>
            <th scope="col">Enotas</th>
            <th scope="col">Cidade/ UF</th>
            <th scope="col">Garantia</th>
            <th scope="col">Enviar NF</th>
            <th scope="col">Cliente</th>
            <th scope="col">Validade Certificado</th>
            <th scope="col">Status</th>
            <th scope="col">Plataforma de emissão</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        {{-- Laço com for --}}
        
    @for($i = 0; $i < count($empresas); $i++)
    @include('empresa.modal.edit')
    @if($empresas[$i]['enviaNota'] == true ? $empresas[$i]['enviaNota'] = 'Sim' : $empresas[$i]['enviaNota'] = 'Não')
        <tr>
            <th scope="row"><a type="button" href="{{ route('empresa.show', $empresas[$i]['id']) }}"  class="btn btn-outline-warning"   data-bs-toggle="modal"  data-bs-target="#ModalEdit{{ $empresas[$i]['id'] }}">{{ $empresas[$i]['id'] }}</a></th>
            <td>{{ $empresas[$i]['razaoSocial'] }}</td>
            <td>{{ $empresas[$i]['cnpj'] }}</td>
            <td>{{ $empresas[$i]['email'] }}</td>
            <td>{{ $empresas[$i]['idEnotas'] }}</td>
            <td>{{ $empresas[$i]['cidade'].' / '.$empresas[$i]['estado'] }}</td>
            <td>{{ $empresas[$i]['garantia'] }}</td>
            
            <td>{{ $empresas[$i]['enviaNota']}}</td>
            <td>{{ $empresas[$i]['clienteMjp']}}</td> 
            <td>{{ $empresas[$i]['validadeCertificado']}}</td> 
            <td>{{ $empresas[$i]['status']}}</td> 
            <td>{{ $empresas[$i]['plataformaEmissao']}}</td> 
           
        </tr>
        @endif
        @endfor
        
        {{-- Laço com foreach --}}

        {{-- @foreach($empresas as $key => $empresa)
        @if($empresa['enviaNota'] == true ? $empresa['enviaNota'] = 'Sim' : $empresa['enviaNota'] = 'Não')
        <tr>
            <th scope="row">{{ $empresa['id'] }}</th>
            <td>{{ $empresa['razaoSocial'] }}</td>
            <td>{{ $empresa['cnpj'] }}</td>
            <td>{{ $empresa['email'] }}</td>
            <td>{{ $empresa['idEnotas'] }}</td>
            <td>{{ $empresa['cidade'].' / '.$empresa['estado'] }}</td>
            <td>{{ $empresa['garantia'] }}</td>
            <td>{{ $empresa['enviaNota']}}</td> 
            <td>{{ $empresa['clienteMjp']}}</td> 
            <td>{{ $empresa['validadeCertificado']}}</td> 
            <td>{{ $empresa['status']}}</td> 
            <td>{{ $empresa['plataformaEmissao']}}</td> 
           
        </tr>
        @endif
    @endforeach --}}
    </tbody>   
      
</table>
</div>
    
    {{ $empresas->links() }} 

    


</body>

</html>