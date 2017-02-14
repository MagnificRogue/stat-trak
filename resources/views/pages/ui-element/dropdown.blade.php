@extends('layouts.dashboard')

@section('section')
<div class="conter-wrapper">        
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-inverse">
                <div class="card-header card-primary">
                    Navbar
                </div>
                <div class="card-block">
                    Default Style
                    <nav class="navbar navbar-light bg-faded" style="padding:0 6px;">
                        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-xs" id="bs-example-navbar-collapse-4">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="nav-item active">
                                    <a class="nav-link nav-link-1st" href="javascript:void(0)">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Link</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">One More Separated link</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="navbar-form form-inline" style="display:inline-block; padding: 6px 10px;">
                                <input class="form-control" type="text" placeholder="Search">
                                <button class="btn btn-secondary" type="submit">Submit</button>
                            </form>
                            <ul class="nav navbar-nav pull-xs-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0)">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="left:auto; right:0;">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <br />
                    Inverted Style
                    <nav class="navbar navbar-dark bg-primary" style="padding:0 6px;">
                        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-xs" id="bs-example-navbar-collapse-5">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="nav-item active">
                                    <a class="nav-link nav-link-2nd" href="javascript:void(0)">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">Link</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">One More Separated link</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <form class="navbar-form form-inline" style="display:inline-block; padding: 6px 10px;">
                                <input class="form-control" type="text" placeholder="Search">
                                <button class="btn btn-secondary" type="submit">Submit</button>
                            </form>
                            <ul class="nav navbar-nav pull-xs-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="javascript:void(0)">Link <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="left:auto; right:0;">
                                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-inverse">
                <div class="card-header card-warning">
                    Regular Dropdown
                </div>                
                <div class="card-block">
                        @include('widgets.dropdown-button', array('value'=>'Button Dropdown', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Button Dropdown', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Button Dropdown', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Button Dropdown', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Button Dropdown', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    <hr>
                        @include('widgets.dropdown-button', array('value'=>'Button Dropdown', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Button Dropdown', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Button Dropdown', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Button Dropdown', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                        @include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Button Dropdown', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))

                    <hr>
                    @include('widgets.dropdown-button', array('value'=>'Button Dropdown', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Button Dropdown', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Button Dropdown', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Button Dropdown', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Button Dropdown', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                </div>
            </div>
        </div> 
    </div>     
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-inverse">

                <div class="card-header card-success">
                    Split-Button Dropdown
                </div>
                <div class="card-block">
                    @include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Action', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Action', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Action', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Action', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Action', 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    <hr>
                    @include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Action', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Action', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Action', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Action', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Action', 'rounded'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    <hr>                    
                    @include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Action', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Action', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Action', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Action', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                    @include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Action', 'bordered'=>true, 'submenu'=> array( 'lists' => array('name' => 'Action', 'link' => '#'),array('name' => 'Another action', 'link' => '#'))))
                </div>
            </div>

        </div>
    </div>  
</div>
@stop