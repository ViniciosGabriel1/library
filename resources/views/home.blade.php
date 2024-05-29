@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">
                        10
                        <small>%</small>
                    </span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>

            </div>

        </div>


        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>

            </div>

        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>

            </div>

        </div>
        <div class="row">
</div>
<div class="col-md-8">
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Empréstimos Recentes</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>ID do Empréstimo</th>
                            <th>Livro</th>
                            <th>Status</th>
                            <th>Popularidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM9842</a></td>
                            <td>O Senhor dos Anéis</td>
                            <td><span class="badge badge-success">Devolvido</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM1848</a></td>
                            <td>Harry Potter e a Pedra Filosofal</td>
                            <td><span class="badge badge-warning">Pendente</span></td>
                            <td>
                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM7429</a></td>
                            <td>1984</td>
                            <td><span class="badge badge-danger">Atrasado</span></td>
                            <td>
                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM7429</a></td>
                            <td>O Pequeno Príncipe</td>
                            <td><span class="badge badge-info">Em Processamento</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM1848</a></td>
                            <td>Dom Quixote</td>
                            <td><span class="badge badge-warning">Pendente</span></td>
                            <td>
                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM7429</a></td>
                            <td>Moby Dick</td>
                            <td><span class="badge badge-danger">Atrasado</span></td>
                            <td>
                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">EM9842</a></td>
                            <td>As Crônicas de Nárnia</td>
                            <td><span class="badge badge-success">Devolvido</span></td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Registrar Novo Empréstimo</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver Todos os Empréstimos</a>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Livros Recentemente Registrados</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Book Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">O Senhor dos Anéis
                            <span class="badge badge-warning float-right">Fantasia</span></a>
                        <span class="product-description">
                            Autor: J.R.R. Tolkien
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Book Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Harry Potter e a Pedra Filosofal
                            <span class="badge badge-info float-right">Fantasia</span></a>
                        <span class="product-description">
                            Autor: J.K. Rowling
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Book Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                            1984 <span class="badge badge-danger float-right">
                                Distopia
                            </span>
                        </a>
                        <span class="product-description">
                            Autor: George Orwell
                        </span>
                    </div>
                </li>

                <li class="item">
                    <div class="product-img">
                        <img src="dist/img/default-150x150.png" alt="Book Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">O Pequeno Príncipe
                            <span class="badge badge-success float-right">Infantil</span></a>
                        <span class="product-description">
                            Autor: Antoine de Saint-Exupéry
                        </span>
                    </div>
                </li>
            </ul>
        </div>

        <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">Ver Todos os Livros</a>
        </div>
    </div>
</div>



</div>
@stop
