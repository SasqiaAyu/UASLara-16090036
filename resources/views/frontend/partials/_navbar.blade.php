<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  
                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                  </ul>
                </li>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>