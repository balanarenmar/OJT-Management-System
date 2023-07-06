'use strict';
$(document).ready(function() {

    // satisfaction-chart
    // support-chart
    // support-chart1
    // support-chart2

    // [ support-chart ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#536dfe"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart"), options1).render();
    });
    // [ support-chart ] end
    // [ support-chart1 ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#4680ff"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart1"), options1).render();
    });
    // [ support-chart1 ] end
    // [ support-chart2 ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#9ccc65"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                name: 'series1',
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return ''
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart2"), options1).render();
    });
    // [ support-chart2 ] end

    // [ deployment-chart ] start
    $(function() {
        var options = {
            chart: {
                height: 400,
                type: 'pie',
            },
            series: [5, 5, 15, 15, 8],
            labels: ["Research Dept.", "CSIT Office", "BU Library", "Planning Office", "Outside"],
            legend: {
                show: true,
                offsetY: 50,
            },
            dataLabels: {
                formatter: function (val, opts) { //format to show whole number
                    return opts.w.config.series[opts.seriesIndex]
                },
                style: {
                    fontSize: '18px', // Increase the font size to make numbers appear larger
                },
            },
            theme: {
                monochrome: {
                    enabled: true,
                    color: '#009BDE',
                }
            },
            responsive: [{
                breakpoint: 768,
                options: {
                    chart: {
                        height: 320,

                    },
                    legend: {
                        position: 'bottom',
                        offsetY: 0,
                    }
                }
            }]
        }
        var chart = new ApexCharts(document.querySelector("#deployment-chart"), options);
        chart.render();
    });
    // [ deployment-chart ] end




    // [ latest-scroll ] start
    var px = new PerfectScrollbar('.latest-scroll', {
        wheelSpeed: .5,
        swipeEasing: 0,
        wheelPropagation: 1,
        minScrollbarLength: 40,
    });
    // [ latest-scroll ] end
});
