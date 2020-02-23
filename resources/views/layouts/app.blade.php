<?php session_start(); ?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IHRDC') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/poc-logo.png') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <!-- Left Side Of Navbar -->
                        @else
                            @hasanyrole('general_director|super-admin')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Pre-Test Management System') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Candidate Page') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <a class="dropdown-item" href="#">
                                                {{ __('Test Invitation Email') }}
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                {{ __('Input Personal Info') }}
                                            </a>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Test Selection') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Personality Test') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('IQ/Aptitude Test') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Test Results') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Personality Test Results') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('IQ/Aptitude Test Results') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Recruiter Page') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <a class="dropdown-item" href="#">
                                                {{ __('Candidate List') }}
                                            </a>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Test Results Selection') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Test Results Selectioni by Candidate') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Test Results Selection by Job Titles') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Admin Page') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <a class="dropdown-item" href="#">
                                                {{ __('Add the Questions') }}
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                {{ __('Delete the Questions') }}
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                {{ __('Edit the Questions') }}
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                {{ __('Edit the Tests') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endhasanyrole
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Training Management') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                    @hasanyrole('employees|super-admin')
                                    <a class="dropdown-item" href="{{   route('IATP',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Individual Training') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('department_managers|director|super-admin')
                                    <a class="dropdown-item" href="{{ route('DATP',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Department Training') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('general_director|super-admin')
                                    <a class="dropdown-item" href="{{ route('CATP',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Company Training') }}
                                    </a>
                                    @endhasanyrole

                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Approve Training') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            @hasanyrole('employees|super-admin')
                                            <a class="dropdown-item" href="{{ route('AIATP',Auth::user()->id) }}"onclick="">{{ __('Approve Individual Training Plan') }}</a>
                                            @endhasanyrole
                                            @hasanyrole('department_managers|director|super-admin')
                                            <a class="dropdown-item" href="{{ route('ADATP',Auth::user()->id) }}"onclick="">{{ __('Approve Department Training Plan') }}</a>
                                            @endhasanyrole
                                            @hasanyrole('general_director|super-admin')
                                            <a class="dropdown-item" href="{{ route('ACATP',Auth::user()->id) }}"onclick="">{{ __('Approve Company Training Plan') }}</a>
                                            @endhasanyrole
                                        </div>
                                    </div>
                                    @hasanyrole('employees|super-admin')
                                    <a class="dropdown-item" href="{{ route('TI',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Training Implementation') }}
                                    </a>
                                    @endhasanyrole
                                    @hasanyrole('department_managers|director|super-admin')
                                    <a class="dropdown-item" href="#"
                                       onclick="">
                                        {{ __('Training Implementation') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('general_director|super-admin')
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-training-implementation" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Training Implementation') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="training-implementation-content">
                                            <a class="dropdown-item" href="{{route('CATPS')}}"onclick="">{{ __('New Trainning Course') }}</a>
                                            <a class="dropdown-item" href="{{route('CATPP')}}"onclick="">{{ __('Training Implementation') }}</a>
                                        </div>
                                    </div>
                                    @endhasanyrole
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Perfomance Management') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('My Performance') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            @hasanyrole('employees|department_managers|super-admin')
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Building My MSC Objectives') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{ route('BMAMO',Auth::user()->id) }}"onclick="">{{ __('Annual MSC') }}</a>
                                                    <a class="dropdown-item" href="{{ route('BMMMO',Auth::user()->id) }}"onclick="">{{ __('Monthly MSC') }}</a>
                                                </div>
                                            </div>
                                            @endhasanyrole
                                            @hasanyrole('employees|department_managers|super-admin')
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Rating My Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{ route('RMAP',Auth::user()->id) }}"onclick="">{{ __('Annual Performance') }}</a>
                                                    <a class="dropdown-item" href="{{ route('RMMP',Auth::user()->id) }}"onclick="">{{ __('Monthly Performance') }}</a>
                                                </div>
                                            </div>
                                            @endhasanyrole
                                        </div>
                                    </div>
                                    @hasanyrole('department_managers|director|super-admin')
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('My Staff Performance') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Approving My Staff MSC Objectives') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{ route('AMEAMO',Auth::user()->id) }}"onclick="">{{ __('Annual MSC Objectives') }}</a>
                                                    <a class="dropdown-item" href="{{ route('AMEMMO',Auth::user()->id) }}"onclick="">{{ __('Monthly MSC Objectives') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Approving My Staff Performance') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{ route('AMEMP',Auth::user()->id) }}"onclick="">{{ __('Monthly Performance') }}</a>
                                                    <a class="dropdown-item" href="{{ route('AMEAP',Auth::user()->id) }}"onclick="">{{ __('Annual Performance') }}</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endhasanyrole
                                    @hasanyrole('employees|general_director|super-admin')
                                    <a class="dropdown-item" href="{{route('performaceManagement')}}">
                                        {{ __('Performance Management') }}
                                    </a>
                                    @endhasanyrole
                                </div>
                            </li>

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script type="text/javascript">
    $(".datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
</html>
