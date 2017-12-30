<div class="row">
<div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                THỐNG KÊ DOANH THU
                </h3>
                <div class="example-box-wrapper">
                    <canvas id="chart-0"></canvas>
        <div id="chart-analyser" class="analyser"></div>
        <script>
        var presets = window.chartColors;
        var utils = Samples.utils;
        var inputs = {
            min: 20,
            max: 80,
            count: 8,
            decimals: 2,
            continuity: 1
        };

        function generateData() {
            return utils.numbers(inputs);
        }

        function generateLabels(config) {
            return utils.months({count: inputs.count});
        }

        utils.srand(42);

        var data = {
            labels: generateLabels(),
            datasets: [{
                backgroundColor: utils.transparentize(presets.red),
                borderColor: presets.red,
                data: generateData(),
                hidden: true,
                label: 'D0'
            }, {
                backgroundColor: utils.transparentize(presets.orange),
                borderColor: presets.orange,
                data: generateData(),
                label: 'D1',
                fill: '-1'
            }, {
                backgroundColor: utils.transparentize(presets.yellow),
                borderColor: presets.yellow,
                data: generateData(),
                hidden: true,
                label: 'D2',
                fill: 1
            }, {
                backgroundColor: utils.transparentize(presets.green),
                borderColor: presets.green,
                data: generateData(),
                label: 'D3',
                fill: '-1'
            }, {
                backgroundColor: utils.transparentize(presets.blue),
                borderColor: presets.blue,
                data: generateData(),
                label: 'D4',
                fill: '-1'
            }, {
                backgroundColor: utils.transparentize(presets.grey),
                borderColor: presets.grey,
                data: generateData(),
                label: 'D5',
                fill: '+2'
            }, {
                backgroundColor: utils.transparentize(presets.purple),
                borderColor: presets.purple,
                data: generateData(),
                label: 'D6',
                fill: false
            }, {
                backgroundColor: utils.transparentize(presets.red),
                borderColor: presets.red,
                data: generateData(),
                label: 'D7',
                fill: 8
            }, {
                backgroundColor: utils.transparentize(presets.orange),
                borderColor: presets.orange,
                data: generateData(),
                hidden: true,
                label: 'D8',
                fill: 'end'
            }]
        };

        var options = {
            maintainAspectRatio: false,
            spanGaps: false,
            elements: {
                line: {
                    tension: 0.000001
                }
            },
            scales: {
                yAxes: [{
                    stacked: true
                }]
            },
            plugins: {
                filler: {
                    propagate: false
                },
                samples_filler_analyser: {
                    target: 'chart-analyser'
                }
            }
        };

        var chart = new Chart('chart-0', {
            type: 'line',
            data: data,
            options: options
        });

        function togglePropagate(btn) {
            var value = btn.classList.toggle('btn-on');
            chart.options.plugins.filler.propagate = value;
            chart.update();
        }

        function toggleSmooth(btn) {
            var value = btn.classList.toggle('btn-on');
            chart.options.elements.line.tension = value? 0.4 : 0.000001;
            chart.update();
        }

        function randomize() {
            chart.data.datasets.forEach(function(dataset) {
                dataset.data = generateData();
            });
            chart.update();
        }
    </script>

                </div>
            </div>
        </div>
    </div>
</div>






<div class="row">
<div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                THỐNG KÊ TÌNH TRẠNG ĐƠN HÀNG

                </h3>
                <div class="example-box-wrapper">
                          <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body>
        <canvas id="canvas"></canvas>

    <script>
        var MONTHS = ["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN"];
        var config = {
            type: 'line',
            data: {
                labels: ["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","CN"],
                datasets: [{
                    label: "Đơn hàng bị hoàn",
                    data: [40,93,67,45,15,22,77,78,70,69,58,46,39, 3,19,10, 8,27,13, 6,47,60,81,94, 1,37, 9,54,11,25
                    ],
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    fill: false,
                    borderDash: [5, 5],
                    pointRadius: 15,
                    pointHoverRadius: 10,
                }, {
                    label: "Đơn hàng đang xử lý",
                    data: [63,24,36,86,26,14,55,30,59, 2,90,35,42,79,71,44,89,52,18,72,83,100,34,50,80,96,91,12
                    ],
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    fill: false,
                    borderDash: [5, 5],
                    pointRadius: [2, 4, 6, 18, 0, 12, 20],
                }, {
                    label: "Đơn hàng hoàn thành",
                    data: [75,23,43,62,41,66,99,21,88,49,85,61,57,48,17,38, 4,51,53,92,28,33,64,31,32,65,84,56,29,76
                    ],
                    backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
                    fill: false,
                    pointHoverRadius: 30,
                }, {
                    label: "Đơn hàng hủy",
                    data: [16,98,73,68,97,74,95, 7,87, 5,82,20, 63,95,12,20,57,6,49,36,86,38,97,35,46,82,16,87,78,15
                    ],
                    backgroundColor: window.chartColors.yellow,
                    borderColor: window.chartColors.yellow,
                    fill: false,
                    pointHitRadius: 20,
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                hover: {
                    mode: 'index'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Thứ'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                title: {
                    display: true,
                    
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };
    </script>
</body>

                </div>
            </div>
        </div>
    </div>
</div>

