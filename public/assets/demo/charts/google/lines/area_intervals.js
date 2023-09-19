/* ------------------------------------------------------------------------------
 *
 *  # Google Visualization - area intervals
 *
 *  Google Visualization area chart with intervals demonstration
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var GoogleAreaIntervals = function() {


    //
    // Setup module components
    //

    // Area intervals
    var _googleAreaIntervals = function() {
        if (typeof google == 'undefined') {
            console.warn('Warning - Google Charts library is not loaded.');
            return;
        }

        // Switch colors in dark and light themes
        function color_theme(darkColor, lightColor) {
            return document.documentElement.getAttribute('data-color-theme') == 'dark' ? darkColor : lightColor
        }

        // Initialize chart
        google.charts.load('current', {
            callback: function () {

                // Draw chart
                drawAreaIntervals();

                // Resize on sidebar width change
                var sidebarToggle = document.querySelectorAll('.sidebar-control');
                if (sidebarToggle) {
                    sidebarToggle.forEach(function(togglers) {
                        togglers.addEventListener('click', drawAreaIntervals);
                    });
                }

                // Resize on window resize
                var resizeAreaIntervals;
                window.addEventListener('resize', function() {
                    clearTimeout(resizeAreaIntervals);
                    resizeAreaIntervals = setTimeout(function () {
                        drawAreaIntervals();
                    }, 200);
                });

                // Redraw chart when color theme is changed
                document.querySelectorAll('[name="main-theme"]').forEach(function(radio) {
                    radio.addEventListener('change', drawAreaIntervals);
                });
            },
            packages: ['corechart']
        });

        // Chart settings
        function drawAreaIntervals() {

            // Define charts element
            var area_intervals_element = document.getElementById('google-area-intervals');

            // Data
            var data = new google.visualization.DataTable();
                data.addColumn('string', 'x');
                data.addColumn('number', 'values');
                data.addColumn({id:'i0', type:'number', role:'interval'});
                data.addColumn({id:'i1', type:'number', role:'interval'});
                data.addColumn({id:'i2', type:'number', role:'interval'});
                data.addColumn({id:'i2', type:'number', role:'interval'});
                data.addColumn({id:'i2', type:'number', role:'interval'});
                data.addColumn({id:'i2', type:'number', role:'interval'});

            data.addRows([
                ['a', 100, 90, 110, 85, 96, 104, 120],
                ['b', 120, 95, 130, 90, 113, 124, 140],
                ['c', 130, 105, 140, 100, 117, 133, 139],
                ['d', 90, 85, 95, 85, 88, 92, 95],
                ['e', 70, 74, 63, 67, 69, 70, 72],
                ['f', 30, 39, 22, 21, 28, 34, 40],
                ['g', 80, 77, 83, 70, 77, 85, 90],
                ['h', 100, 90, 110, 85, 95, 102, 110]]);


            // The intervals data as areas
            var options_area_intervals = {
                fontName: 'var(--body-font-family)',
                height: 400,
                curveType: 'function',
                fontSize: 12,
                lineWidth: 2,
                pointSize: 7,
                backgroundColor: 'transparent',
                chartArea: {
                    left: '5%',
                    width: '94%',
                    height: 350
                },
                tooltip: {
                    textStyle: {
                        fontSize: 14
                    }
                },
                intervals: { 'style': 'area' }, // Use area intervals.
                vAxis: {
                    title: 'Number values',
                    titleTextStyle: {
                        fontSize: 14,
                        italic: false,
                        color: color_theme('#fff', '#333')
                    },
                    textStyle: {
                        color: color_theme('#fff', '#333')
                    },
                    baselineColor: color_theme('#6e6f71', '#9CA3AF'),
                    gridlines:{
                        color: color_theme('#4d4d51', '#E5E7EB'),
                        count: 10
                    },
                    minorGridlines: {
                        color: color_theme('#3f4044', '#F3F4F6')
                    },
                    minValue: 0
                },
                hAxis: {
                    textStyle: {
                        color: color_theme('#fff', '#333')
                    }
                },
                legend: 'none',
                series: [{'color': '#ffb980'}]
            };

            // Draw chart
            var area_intervals = new google.visualization.LineChart(area_intervals_element);
            area_intervals.draw(data, options_area_intervals);
        }
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _googleAreaIntervals();
        }
    }
}();


// Initialize module
// ------------------------------

GoogleAreaIntervals.init();
