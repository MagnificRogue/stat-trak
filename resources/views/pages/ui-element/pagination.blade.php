@extends('layouts.dashboard')

@section('section')
<div class="conter-wrapper">                
    <div class="row">
        <div class="col-lg-6 col-md-12 pr0">
            <div class="card card-inverse">
                <div class="card-header card-success">
                    Breadcrumbs
                </div>
                <div class="card-block">
                    <div class="clearfix">
                        <ol class="breadcrumb no-bg no-m-t">
                            <li class="active"><i class="fa fa-home"></i></li>
                            <li><a href="javascript:void(0)">Library</a></li>
                            <li><a href="javascript:void(0)">Home</a></li>
                        </ol>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ol class="breadcrumb pull-right no-bg m-t">
                            <li><a href="javascript:void(0)">Home</a></li>
                            <li><a href="javascript:void(0)">Library</a></li>
                            <li class="active"><i class="fa fa-home"></i></li>
                        </ol>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ol class="breadcrumb m-t no-m-b">
                            <li class="active"><i class="fa fa-home"></i></li>
                            <li><a href="javascript:void(0)">Library</a></li>
                            <li><a href="javascript:void(0)">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="card card-inverse">
                <div class="card-header card-warning">
                    Pager
                </div>
                <div class="card-block">
                    <div class="clearfix">
                        <ul class="pager no-m-t">
                            <li><a href="javascript:void(0)">Previous</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card card-inverse">
                <div class="card-header card-info">
                    Pagination
                </div>
                <div class="card-block bg-white">
                    <div class="clearfix text-xs-left">
                        <div class="clearfix">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">‹</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">5</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">6</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">7</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">›</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix text-xs-center">
                        <div class="clearfix ">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">‹</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">5</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">6</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">7</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">›</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix text-xs-right">
                        <div class="clearfix ">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">‹</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">5</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">6</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">7</a>
                                </li>
                                <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">›</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix text-center">
                        <pagination boundary-links="true" total-items="totalItems" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination>   
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix pull-right no-m-b">
                        <pagination boundary-links="true" total-items="totalItems" class="pagination-sm" previous-text="&lsaquo;" next-text="&rsaquo;" first-text="&laquo;" last-text="&raquo;"></pagination> 
                    </div>
                </div>
            </div>
            <div class="card card-inverse">
                <div class="card-header card-danger">
                    Pagination Sizes
                </div>
                <div class="card-block">
                    <div class="clearfix">
                        <ul class="pagination pagination-lg">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="line-h-ex"></div>
                    <div class="clearfix">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="line-h-ex"></div>

                    <div class="clearfix">
                        <ul class="pagination pagination-sm">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop