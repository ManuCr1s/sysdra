<div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
            {{env('APP_ABBR')}}
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{env('APP_COMP')}}
        </a></div>
      <div class="sidebar-wrapper">
            <div class="user">
            <div class="photo">
                <img src="../assets/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                <span>
                    Tania Andrew
                    <b class="caret"></b>
                </span>
                </a>
                <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> MP </span>
                        <span class="sidebar-normal"> Mi Perfil </span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> EP </span>
                        <span class="sidebar-normal"> Editar Perfil </span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="sidebar-mini"> H </span>
                        <span class="sidebar-normal"> Herramientas </span>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{route('mainView')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="material-icons">image</i>
                    <p> Productores
                        <b class="caret"></b>
                    </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                        <a class="nav-link" href="{{route('productView')}}">
                            <span class="sidebar-mini"> P </span>
                            <span class="sidebar-normal"> Productores </span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#2">
                    <i class="material-icons">apps</i>
                    <p> Llamas
                        <b class="caret"></b>
                    </p>
                    </a>
                    <div class="collapse" id="2">
                    <ul class="nav">
                        <li class="nav-item ">
                        <a class="nav-link" href="{{route('llamaView')}}">
                            <span class="sidebar-mini"> LL </span>
                            <span class="sidebar-normal"> Llamas </span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#3">
                    <i class="material-icons">content_paste</i>
                    <p> Pedigri
                        <b class="caret"></b>
                    </p>
                    </a>
                    <div class="collapse" id="3">
                    <ul class="nav">
                        <li class="nav-item ">
                        <a class="nav-link" href="{{route('pedigriView')}}">
                            <span class="sidebar-mini"> P </span>
                            <span class="sidebar-normal"> Pedigri </span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#4">
                    <i class="material-icons">grid_on</i>
                    <p> Reportes
                        <b class="caret"></b>
                    </p>
                    </a>
                    <div class="collapse" id="4">
                    <ul class="nav">
                        <li class="nav-item ">
                        <a class="nav-link" href="{{route('reportView')}}">
                            <span class="sidebar-mini"> R </span>
                            <span class="sidebar-normal"> Reportes </span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>        
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('graficaView')}}">
                    <i class="material-icons">timeline</i>
                    <p> Graficas </p>
                    </a>
                </li>
          
            </ul>
      </div>