<div class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <p>{{ link_to("/admin", 'Admin Page', ['class' => 'navbar-brand'] ) }}</p>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/notices">Noticias</a></li>
          	<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
          </ul>

          <div class="navbar-right">
          <ul class="nav navbar-nav">
              <li>{{ link_to("/", 'Site') }}</li>
              <li>{{ link_to("logout", 'Logout') }}</li>
          </ul>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>