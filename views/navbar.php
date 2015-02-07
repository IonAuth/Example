<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">IonAuth</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://github.com/IonAuth/IonAuth/issues"><span class="octicon octicon-bug"></span> Issues</a></li>
            <li><a href="http://ionauth.github.io/Docs/"><span class="octicon octicon-book"></span> Docs</a></li>
          </ul>

          <?php if(! $loggedIn: ?>
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
              <a role="button" class="btn btn-success" href="#">Register</a>
            </form>
          <?php else: ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="octicon octicon-person"></span>
                  Username
                </a>

                <ul class="dropdown-menu">
                  <li><a href="#">Change account information</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
