@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Panel</h1>
@stop

@section('content')
    @livewire('admin.home-index')
@stop

@section('footer')
    <div class="footer text-center py-3">
        © 2024 Todos los derechos reservados. Tienda XStation
    </div>
@stop

@section('css')
    <style>
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            bottom: 0;
            width: 100%;
            z-index: 1030; /* Ensure it is above other elements */
            box-shadow: 0 -1px 5px rgba(0,0,0,.1); /* Optional shadow for better separation */
        }
    </style>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // Datos y opciones para el gráfico de área
            var ctxRevenue = document.getElementById('revenue-chart-canvas').getContext('2d');
            var revenueChart = new Chart(ctxRevenue, {
                type: 'line',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                        label: 'Revenue',
                        data: [12, 74, 24, 10, 62, 58, 89, 100, 78, 47, 45, 25],
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        fill: true // Para que el área debajo de la línea esté rellena
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: false,
                            }
                        }]
                    }
                }
            });
            // Datos y opciones para el gráfico de dona
            var ctxSales = document.getElementById('sales-chart-canvas').getContext('2d');
            var salesChart = new Chart(ctxSales, {
                type: 'doughnut',
                data: {
                    labels: ['Consolas', 'Computadoras', 'Perifericos'],
                    datasets: [{
                        data: [30, 50, 20],
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    }
                }
            });
        });
    </script>
@stop
