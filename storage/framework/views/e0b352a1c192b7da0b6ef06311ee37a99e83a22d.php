<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                Selamat Datang Admin!!
                <hr>
                <h4 class="text-header"> Statistics Authors </h4>
                <canvas id="chartPenulis" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src=" <?php echo e(asset('js/Chart.min.js')); ?> "></script>

    <script>
    var dataChart = {
        labels: <?php echo json_encode($authors); ?>,
        datasets: [{
            label: 'Jumlah Buku',
            data: <?php echo json_encode($books); ?>,
            backgroundColor: "rgba(151,187,205,0.5)",
            borderColor: "rgba(151,187,205,0.8)",
        }]
    };

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }]
        }
    };

    var ctx = document.getElementById("chartPenulis").getContext("2d");
    console.log(ctx);

    var authorChart = new Chart(ctx, {
        type: 'line',
        data: dataChart,
        option: options
    });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>