@extends('layouts.dashboard')
@section('section')
<div class="conter-wrapper">                
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-inverse">
                <div class="card-header card-primary">
                    Buttons
                </div>
                <div class="card-block">
                    <p>
                        <button type="button" class="btn btn-secondary btn-rounded">Default Button</button> 
                        <button type="button" class="btn btn-primary btn-rounded">Primary Button</button> 
                        <button type="button" class="btn btn-success btn-rounded">Success Button</button> 
                        <button type="button" class="btn btn-info btn-rounded">Info Button</button> 
                        <button type="button" class="btn btn-warning btn-rounded">Warning Button</button> 
                        <button type="button" class="btn btn-danger btn-rounded">Danger Button</button>
                    </p>
                    <hr>
                    <p>
                        <button type="button" class="btn btn-secondary">Default Button</button> 
                        <button type="button" class="btn btn-primary">  Primary Button</button> 
                        <button type="button" class="btn btn-success">Success Button</button> 
                        <button type="button" class="btn btn-info">Info Button</button> 
                        <button type="button" class="btn btn-warning">Warning Button</button> 
                        <button type="button" class="btn btn-danger">Danger Button</button>
                    </p>
                <hr>
                    <p>
                        <button type="button" class="btn btn-info-outline btn-rounded">Info Button</button> 
                        <button type="button" class="btn btn-primary-outline btn-rounded">Primary Button</button> 
                        <button type="button" class="btn btn-success-outline btn-rounded">Success Button</button> 
                        <button type="button" class="btn btn-warning-outline btn-rounded">Warning Button</button> 
                        <button type="button" class="btn btn-danger-outline btn-rounded">Danger Button</button> 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="card card-inverse">
                <div class="card-header card-primary">
                    Button Sizes
                </div>
                <div class="card-block">
                    <p>
                        <button type="button" class="btn btn-success btn-rounded btn-sm">Small Button</button> 
                    </p>
                    <p>
                        <button type="button" class="btn btn-info btn-rounded btn-lg">Large Button</button> 
                    </p>
                    <p>    
                        <button type="button" class="btn btn-warning btn-block btn-rounded">Block Level Button</button> 
                    </p>
                </div>
            </div>
        </div>
            <div class="col-lg-8 col-md-12">
                <div class="card card-inverse">
                    <div class="card-header card-primary">
                        Button Groups
                    </div>
                    <div class="card-block">
                        <p>
                        </p><div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Primary Button</button>
                        <button type="button" class="btn btn-secondary">Default Button</button>
                    </div>
                    <p></p>
                    <hr>    
                    <h4>Justified Button Groups</h4>
                    <p>
                    </p>
                    <div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Primary </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-info">Info</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Warning</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card card-inverse">
                <div class="card-header card-primary">
                    Buttons with Icons
                </div>
                <div class="card-block">
                <div class="">
                    
                </div>
                    <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-warning btn-rounded">Download&nbsp;&nbsp;<i class="fa fa-download"></i></button>
                    <button type="button" class="btn btn-success btn-bordered"><i class="fa fa-plus"></i>&nbsp;&nbsp;View More</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-phone"></i>&nbsp;&nbsp;Call Us!</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop