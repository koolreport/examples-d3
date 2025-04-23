<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <title>KoolReport Examples &amp; Demonstration</title>

    <link href="./assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/main.css" rel="stylesheet">

    <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .fa-plus-square-o,
    .fa-minus-square-o {
        cursor: pointer;
    }
</style>
<script>
    function toggleExpandCollapse(i) {
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }

    function toggleExpandCollapseAll(i) {
        let div = i.parentElement.parentElement;
        let expandCollapseButtons = div.querySelectorAll('.expand-collapse');
        expandCollapseButtons.forEach(function(btn) {
            if (i.classList.contains('fa-plus-square-o')) {
                if (btn.classList.contains('fa-plus-square-o')) {
                    btn.click();
                }
            } else if (i.classList.contains('fa-minus-square-o')) {
                if (btn.classList.contains('fa-minus-square-o')) {
                    btn.click();
                }
            }
        })
        i.classList.toggle('fa-plus-square-o');
        i.classList.toggle('fa-minus-square-o');
    }
</script>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a id="baseUrl" class="navbar-brand" href="https://www.koolreport.com/examples">KoolReport Examples</a>
        <a id="repoUrl" class="navbar-brand" href="https://github.com/koolreport/examples-datasources">GitHub</a>
        <ul id="topMenu" class="navbar-nav mr-auto">

        </ul>
        <div class="my-2 my-lg-0">
            <a href="https://www.koolreport.com/get-koolreport-pro" class="btn-get-koolreort-pro btn btn-outline-success my-2 my-sm-0">Get KoolReport Pro</a>
        </div>
    </nav>
    <main class="container">
        <?php
        $root_url = ".";
        $reportJson = <<<EOD
            {
                "EXTENDED PACKAGES": {
                    "<i class='fa fa-pie-chart'></i>D3": {
                        "Basic": {
                            "Collection": "/reports/d3/collection/",
                            "Column Chart": "/reports/d3/column_chart/",
                            "Bar Chart": "/reports/d3/bar_chart/",
                            "Line Chart": "/reports/d3/line_chart/",
                            "Spline Chart": "/reports/d3/spline_chart/",
                            "Area Chart": "/reports/d3/area_chart/",
                            "Pie Chart": "/reports/d3/pie_chart/",
                            "Donut Chart": "/reports/d3/donut_chart/",
                            "Waterfall": "/reports/d3/waterfall/",
                            "Funnel Chart": "/reports/d3/funnel_chart/"
                        },
                        "Further": {
                            "Line Chart": "/reports/d3/chart/Line_Chart/",
                            "Timeseries Chart": "/reports/d3/chart/Timeseries_Chart/",
                            "Spline Chart": "/reports/d3/chart/Spline_Chart",
                            "Simple XY Line Chart": "/reports/d3/chart/Simple_XY_Line_Chart",
                            "Multiple XY Line Chart": "/reports/d3/chart/Multiple_XY_Line_Chart",
                            "Line Chart with Regions": "/reports/d3/chart/Line_Chart_With_Regions",
                            "Step Chart": "/reports/d3/chart/Step_Chart",
                            "Area Chart": "/reports/d3/chart/Area_Chart",
                            "Stacked Area Chart": "/reports/d3/chart/Stacked_Area_Chart",
                            "Bar Chart": "/reports/d3/chart/Bar_Chart",
                            "Stacked Bar Chart": "/reports/d3/chart/Stacked_Bar_Chart",
                            "Scatter Plot": "/reports/d3/chart/Scatter_Plot",
                            "Pie Chart": "/reports/d3/chart/Pie_Chart",
                            "Donut Chart": "/reports/d3/chart/Donut_Chart",
                            "Gauge Chart": "/reports/d3/chart/Gauge_Chart",
                            "Combination Chart": "/reports/d3/chart/Combination_Chart"
                        },
                        "Axis": {
                            "Category Axis": "/reports/d3/axis/Category_Axis",
                            "Rotated Axis": "/reports/d3/axis/Rotated_Axis",
                            "Additional Y Axis": "/reports/d3/axis/Additional_Y_Axis",
                            "X Axis Tick Format": "/reports/d3/axis/X_Axis_Tick_Format",
                            "X Axis Tick Count": "/reports/d3/axis/X_Axis_Tick_Count",
                            "X Axis Tick Values": "/reports/d3/axis/X_Axis_Tick_Values",
                            "X Axis Tick Culling": "/reports/d3/axis/X_Axis_Tick_Culling",
                            "X Axis Tick Fitting": "/reports/d3/axis/X_Axis_Tick_Fitting",
                            "X Axis Timezone": "/reports/d3/axis/X_Axis_Timezone",
                            "Rotate X Axis Tick Text": "/reports/d3/axis/Rotate_X_Axis_Tick_Text",
                            "Y Axis Tick Format": "/reports/d3/axis/Y_Axis_Tick_Format",
                            "Padding for Y Axis": "/reports/d3/axis/Padding_For_Y_Axis",
                            "Range for Y Axis": "/reports/d3/axis/Range_For_Y_Axis",
                            "Axis Label": "/reports/d3/axis/Axis_Label",
                            "Axis Label Position": "/reports/d3/axis/Axis_Label_Position"
                        },
                        "Data": {
                            "Column Oriented Data": "/reports/d3/data/Column_Oriented_Data",
                            "Row Oriented Data": "/reports/d3/data/Row_Oriented_Data",
                            "Data from URL": "/reports/d3/data/Data_From_URL",
                            "Category Data": "/reports/d3/data/Category_Data",
                            "Load Data": "/reports/d3/data/Load_Data",
                            "Data Name": "/reports/d3/data/Data_Name",
                            "Data Color": "/reports/d3/data/Data_Color",
                            "Data Order": "/reports/d3/data/Data_Order",
                            "Data Label": "/reports/d3/data/Data_Label",
                            "Data Label Format": "/reports/d3/data/Data_Label_Format",
                            "Number Format Localization": "/reports/d3/data/Number_Format_Localization"
                        },
                        "Grid": {
                            "Grid Lines": "/reports/d3/grid/Grid_Lines",
                            "Optional X Grid Lines": "/reports/d3/grid/Optional_X_Grid_Lines",
                            "Optional Y Grid Lines": "/reports/d3/grid/Optional_Y_Grid_Lines"
                        },
                        "Region": {
                            "Region": "/reports/d3/region/Region",
                            "Region with Timeseries": "/reports/d3/region/Region_With_Timeseries"
                        },
                        "Interaction": {
                            "Sub Chart": "/reports/d3/interaction/Sub_Chart",
                            "Zoom": "/reports/d3/interaction/Zoom"
                        },
                        "Legend": {
                            "Hide Legend": "/reports/d3/legend/Hide_Legend",
                            "Legend Position": "/reports/d3/legend/Legend_Position"
                        },
                        "Tooltip": {
                            "Hide Tooltip": "/reports/d3/tooltip/Hide_Tooltip",
                            "Tooltip Grouping": "/reports/d3/tooltip/Tooltip_Grouping",
                            "Tooltip Format": "/reports/d3/tooltip/Tooltip_Format"
                        },
                        "Chart Options": {
                            "Chart Size": "/reports/d3/chart_options/Chart_Size",
                            "Padding": "/reports/d3/chart_options/Padding",
                            "Color Pattern": "/reports/d3/chart_options/Color_Pattern",
                            "Duration of Transition": "/reports/d3/chart_options/Duration_Of_Transition"
                        },
                        "Line Chart Options": {
                            "Hide Points": "/reports/d3/line_chart_options/Hide_Points"
                        },
                        "Pie Chart Options": {
                            "Pie Label Format": "/reports/d3/pie_chart_options/Pie_Label_Format"
                        },
                        "API": {
                            "Flow": "/reports/d3/api/Flow",
                            "Data Name": "/reports/d3/api/Data_Name",
                            "Data Color": "/reports/d3/api/Data_Color",
                            "Axis Label": "/reports/d3/api/Axis_Label",
                            "Axis Range": "/reports/d3/api/Axis_Range",
                            "Resize": "/reports/d3/api/Resize",
                            "X Grid": "/reports/d3/api/X_Grid"
                        },
                        "Transform": {
                            "To Line Chart": "/reports/d3/transform/To_Line_Chart",
                            "To Spline Chart": "/reports/d3/transform/To_Spline_Chart",
                            "To Bar Chart": "/reports/d3/transform/To_Bar_Chart",
                            "To Area Chart": "/reports/d3/transform/To_Area_Chart",
                            "To Area Spline Chart": "/reports/d3/transform/To_Area_Spline_Chart",
                            "To Pie Chart": "/reports/d3/transform/To_Pie_Chart",
                            "To Donut Chart": "/reports/d3/transform/To_Donut_Chart"
                        },
                        "Style": {
                            "Style for Region": "/reports/d3/style/Style_For_Region",
                            "Style for Grid": "/reports/d3/style/Style_For_Grid"
                        }
                    }
                }
            }        
        EOD;

        $menu = json_decode($reportJson, true);
        foreach ($menu as $section_name => $section) {
        ?>
            <h4 class="section-header"><?php echo $section_name; ?></h4>
            <div class="row">
                <?php
                foreach ($section as $group_name => $group) {
                    $hasChildArray = false;
                    foreach($group as $sname=>$surl) {
                        if(is_array($surl)) {
                            $hasChildArray = true;
                            break;
                        }
                    }
                ?>
                    <div class="col-md-3 example-group col-sm-6">
                        <h5>
                            <?php if ($hasChildArray) { ?>
                                <i class='fa fa-minus-square-o' data-toggle="collapse" onclick="toggleExpandCollapseAll(this);"></i>
                            <?php } ?>
                            <?php echo (strpos($group_name, "</i>") > 0) ? $group_name : "<i class='icon-layers'></i>$group_name"; ?></h5>
                        <ul class="list-unstyled">
                            <?php
                            foreach ($group as $sname => $surl) {
                                if (is_string($surl)) {
                            ?>
                                    <li><a href="<?php echo $root_url . $surl; ?>"><?php echo $sname; ?></a></li>
                                <?php
                                } else {
                                    $idName = $sname;
                                    $idName = str_replace(" ", "", $idName);
                                    $idName = str_replace("/", "", $idName);
                                    $idName = str_replace("&", "", $idName);
                                ?>
                                    <li>
                                        <strong><i class='fa fa-minus-square-o expand-collapse' data-toggle="collapse" data-target="#<?php echo $idName; ?>" onclick="toggleExpandCollapse(this);"></i> <?php echo $sname; ?></strong>
                                        <ul class="list-unstyled collapse show" id="<?php echo $idName; ?>">
                                            <?php
                                            foreach ($surl as $tname => $turl) {
                                            ?>
                                                <li><a href="<?php echo $root_url . $turl; ?>"><?php echo $tname; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </main>
</body>

</html>