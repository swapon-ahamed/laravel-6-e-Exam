<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-division" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Question Sets</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-division">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questionsets')}}">View Question Sets</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questionsets.create')}}">Create Question Sets</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-questions" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Manage Questions</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-questions">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questions')}}">View Questions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.question.create')}}">Create Questions</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-questions" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Question Options</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-questions">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questionoptions')}}">View Question Options</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questionoption.create')}}">Create Question Option</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-questions" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Sections Question Set</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-questions">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.sections')}}">View Class Sections</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.section.create')}}">Create Section Question set</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#adminLogout">
                
                <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-danger">Logout</button>
                </form>

              </a>

            </li>

                       
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>