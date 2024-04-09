<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Agenda de contatos</a>
</nav>
<div class="container-fluid">
    <div class="'row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="{{route('inicio')}}">
                            <span data-feather="home">
                                Página inicial 
                                <span class="sr-only">
                                    (atual)
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pesquisarContato')}}">
                            <span data-feather="file">
                                Exibir contatos cadastrados 
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('novoContato')}}">
                            <span data-feather="shopping-cart">
                                Cadastro de contatos
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pesquisarContato')}}">
                            <span data-feather="users">
                                Pesquisar contato 
                            </span>
                        </a>
                    </li>      
                </ul>
            </div>
        </nav>
    </div>
</div>