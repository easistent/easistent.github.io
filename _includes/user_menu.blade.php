<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle profile-name" data-toggle="dropdown"><img src="" class="img-responsive profile-img img-rounded" width="31" height="31">
                    {{ Auth::user()->fullName }}
                    &nbsp;<span class="caret"></span>
                </a>
                <ul class="dropdown-menu subdropdown" role="menu">
                    <li>{{ HTML::link('', _("Moj profil")) }}</li>
                    <li role="presentation" class="divider"></li>
                    <li>{{ HTML::link('logout', _("Odjava")) }}</li>
                </ul>
            </li>
        </ul>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle profile-name" data-toggle="dropdown"><img src="" class="img-responsive profile-img img-rounded" width="31" height="31">
                GIM KR
                &nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu subdropdown" role="menu">
                <li>{{ HTML::link('', 'GIM NM') }}</li>
                <li role="presentation" class="divider"></li>
                <li>{{ HTML::link('', 'STROJNA') }}</li>
            </ul>
        </li>
    </ul>
</div><!-- /.navbar-collapse -->
