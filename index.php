<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Economic Geography</title>

    <!-- Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/typeahead.js-bootstrap.css" rel="stylesheet" type="text/css"> <!--https://github.com/jharding/typeahead.js-bootstrap.css-->
    <link href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.css" rel="stylesheet" type="text/css">
    <link href="css/table_styles.css" rel="stylesheet" type="text/css" />
    <link href="css/icon_styles.css" rel="stylesheet" type="text/css" />

    
    <!-- calendar files -->
    <link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/skins/aqua/theme.css" title="win2k-cold-1" /> 

    <!--[if lte IE 8]>
        <link href="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.ie.css" rel="stylesheet" type="text/css">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!-- Custom styles for this template -->
    <style>
        html, body, #sidebar, #container {
            height: 100%;
            margin: 0px;
        }
        body {
            padding-top: 50px;
        }
        label {
            font-weight: normal;
        }
        #map {
            height: 100%;
            margin: 0px;
            -webkit-box-shadow: 0 -1px 10px rgba(0,0,0,0.5);
            -moz-box-shadow: 0 -1px 10px rgba(0,0,0,0.5);
            box-shadow: 0 -1px 10px rgba(0,0,0,0.5);
        }
        #loading {
            position: absolute;
            width: 220px;
            height: 19px;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -110px;
            z-index: 20001;
        }
        .navbar .navbar-brand {
            font-weight: bold;
            font-size: 22px;
            color: white;
            white-space: nowrap;
        }
        .tt-dropdown-menu {
            overflow: auto;
        }
        .tt-hint, .tt-query {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 4px;
        }
       /* .col-sm-3 {
            width: 30%;
        }
        .col-sm-9 {
            width: 70%;
        }  */   /* check @media calls */ 
        .typeahead-header {
            margin: 0 5px 5px 5px;
            padding: 3px 0;
            border-bottom: 1px solid #ccc;
        }
        .search-container {
            width: 250px;
        }
        #searchbox {
            -webkit-border-top-left-radius: 4px;
            -webkit-border-bottom-left-radius: 4px;
            -moz-border-top-left-radius: 4px;
            -moz-border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .leaflet-popup-content {
            margin-top: 14px;
            margin-bottom: 0px;
            margin-left: 20px;
            margin-right: 20px;
            max-height: 200px;
            overflow: scroll;
        }
        .panel-heading a:hover {
            text-decoration: none;
        }
        a.toggle {
            position: fixed;
            left: 0;
            bottom: 0;
            display: block;
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
            -webkit-border-top-right-radius: 4px !important;
            -moz-border-top-right-radius: 4px !important;
            border-top-right-radius: 4px !important;
            -webkit-border-bottom-right-radius: 4px !important;
            -moz-border-bottom-right-radius: 4px !important;
            border-bottom-right-radius: 4px !important;
            -webkit-transition: width 0.35s ease;
-moz-transition: width 0.35s ease;
-o-transition: width 0.35s ease;
transition: width 0.35s ease; 
            background-color: #222;
            color: white;
            opacity: 0.8;
            z-index: 100;
        }
        a:hover.toggle {
            background-color: #222;
            color: white;
            opacity: 1;
        }
        @media (max-width: 992px) {
            .navbar .navbar-brand {
                font-size: 18px;
                float: left;
            }
            .search-container {
                width: 150px;
            }
            .leaflet-control-attribution {
                display: none;
            }
        }
        @media (max-width: 768px){
            .search-container {
                width: 100%;
            }
        }
        /* Print Handling */
        @media print {
            .navbar, .toggle, #sidebar {
                display: none !important;
            }
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }
        .legend {
            text-align: left;
            line-height: 26px;
            color: #555;
        }
        .legend i {
            width: 18px;
            height: 26px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
  </head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="js/jscalendar/calendar.js"></script>
    <script type="text/javascript" src="js/jscalendar/lang/calendar-en.js"></script>
    <script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script>
  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="MIT_logo.gif" height=20px /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" onclick="$('#aboutModal').modal('show'); return false;"><i class="icon-question-sign" style="color: white"></i>&nbsp;&nbsp;Help</a></li>
                <li class="dropdown">
                    <a id="toolsDrop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe" style="color: white"></i>&nbsp;&nbsp;Tools <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" onclick="map.fitBounds(prov_pop.getBounds()); return false;"><i class="icon-fullscreen"></i>&nbsp;&nbsp;Zoom To Full Extent</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="input-group search-container">
                    <input id="searchbox" type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon"><i class="icon-search"></i></span>
                </div>
            </form>
        </div><!--/.navbar-collapse -->
    </div>

    <div class="row" id="container">
        <div class="col-sm-3 col-lg-3" id="sidebar" style="padding: 10px; overflow: auto;">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#layers" data-toggle="tab"><i class="icon-check"></i>&nbsp;Layers</a></li>
            </ul>


            <div class="tab-content" style="padding-top: 10px;">
                <div class="tab-pane active" id="layers">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#demographics">
                                    Demographics
                                </a>
                            </div>
                            <div id="demographics" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="prov_pop" z-index="2">
                                            Population Density&nbsp;<a href="JavaScript:newPopup('ajaxquery/query.php?name=prov_pop');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="citiesandvillages" z-index="2">
                                            Cities and Villages&nbsp;<a href="JavaScript:newPopup('ajaxquery/query.php?name=Cities_Villages');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="administrative_boundaries" z-index="1">
                                            Administrative Boundaries&nbsp;
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="administrative_boundaries2" z-index="3">
                                            Administrative Boundaries 2&nbsp;
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#overlay-layers">
                                    Power Plants
                                </a>
                            </div>
                            <div id="overlay-layers" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="nuc_pplant" z-index="3">
                                            Nuclear <a href="JavaScript:newPopup('ajaxquery/query.php?name=Nuc_PPlant');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="sol_pplant" z-index="3">Solar <a href="JavaScript:newPopup('ajaxquery/query.php?name=Sol_PPlant');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="wind_pplant" z-index="3">
                                            Wind <a href="JavaScript:newPopup('ajaxquery/query.php?name=Wind_PPlants');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="ugas_pplant" z-index="3">
                                            UGas <a href="JavaScript:newPopup('ajaxquery/query.php?name=UGas_PPlant');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="hydro_pplant" z-index="3">
                                            Hydro <a href="JavaScript:newPopup('ajaxquery/query.php?name=Hydro_PPlant');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="dams" z-index="3">
                                            Dams <a href="JavaScript:newPopup('ajaxquery/query.php?name=Dams');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="gas_pplant" z-index="3">
                                            Gas <a href="JavaScript:newPopup('ajaxquery/query.php?name=Gas_PPlant');">[View Data]</a>
                                        </label>
                                    </div>     
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="coal_pplant" z-index="3">
                                            Coal <a href="JavaScript:newPopup('ajaxquery/query.php?name=Coal_PPlant');">[View Data]</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#transportation">
                                    Transportation
                                </a>
                            </div>
                            <div id="transportation" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="lng_term" z-index="3">
                                            LNG Terminals <a href="JavaScript:newPopup('ajaxquery/query.php?name=LNG_Term');">[View Data]</a>
                                        </label>
                                    </div> 
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="railroads" z-index="3">
                                            Railroads <a href="JavaScript:newPopup('ajaxquery/query.php?name=railroads');">[View Data]</a>
                                        </label>
                                    </div> 
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="power_line" z-index="3">
                                            Power Lines <a href="JavaScript:newPopup('ajaxquery/query.php?name=power_line');">[View Data]</a>
                                        </label>
                                    </div> 
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="gas_pipeline" z-index="3">
                                            Gas Pipelines <a href="JavaScript:newPopup('ajaxquery/query.php?name=gas_pipelines');">[View Data]</a>
                                        </label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#energy">
                                    Energy Fuels
                                </a>
                            </div>
                            <div id="energy" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="oil_gas" z-index="3">
                                            Oil and Gas <a href="JavaScript:newPopup('ajaxquery/query.php?name=Oil_Gas');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="uncon_gas" z-index="3">
                                            Uncon Gas <a href="JavaScript:newPopup('ajaxquery/query.php?name=Uncon_gas');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="coal_mine" z-index="3">
                                            Coal Mine <a href="JavaScript:newPopup('ajaxquery/query.php?name=Coal_Mine');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="shale_gas" z-index="2">
                                            Shale Gas <a href="JavaScript:newPopup('ajaxquery/query.php?name=Shale_Gas');">[View Data]</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#energydata">
                                    Energy Data
                                </a>
                            </div>
                            <div id="energydata" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="power_generation" z-index="3">
                                            Power Generation <a href="JavaScript:newPopup('ajaxquery/query.php?name=POWER_GENERATION');">[View Data]</a>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="power_wastegas_water" z-index="3">
                                            Waste Water and Gas Emissions <a href="JavaScript:newPopup('ajaxquery/query.php?name=POWER_WASTEGAS_WATER');">[View Data]</a>
                                        </label>
                                    </div>    
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="investment_urban_energy_assets" z-index="3">
                                            Urban Energy Assets Investment <a href="JavaScript:newPopup('ajaxquery/query.php?name=INVESTMENT_URBAN_ENERGY_ASSETS');">[View Data]</a>
                                        </label>
                                    </div>    
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="investment_so_energy_assets" z-index="3">
                                            Investment Energy Fixed Assets <a href="JavaScript:newPopup('ajaxquery/query.php?name=INVESTMENT_SO_ENERGY_ASSETS');">[View Data]</a>
                                        </label>
                                    </div>    
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="heating" z-index="3">
                                            Heating <a href="JavaScript:newPopup('ajaxquery/query.php?name=HEATING');">[View Data]</a>
                                        </label>
                                    </div>   
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="gas_urban_regional" z-index="3">
                                            Gas Urban/Regional <a href="JavaScript:newPopup('ajaxquery/query.php?name=GAS_URBAN_REGIONAL');">[View Data]</a>
                                        </label>
                                    </div>   
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="fuel_resources" z-index="3">
                                            Fuel Resources <a href="JavaScript:newPopup('ajaxquery/query.php?name=FUEL_RESOURCES');">[View Data]</a>
                                        </label>
                                    </div>           
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="fuel_for_power_generation" z-index="3">
                                            Fuel for Power Generation <a href="JavaScript:newPopup('ajaxquery/query.php?name=FUEL_FOR_POWER_GENERATION');">[View Data]</a>
                                        </label>
                                    </div>      
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="overlayLayers" id="energy_consumption" z-index="3">
                                            Energy Consumption <a href="JavaScript:newPopup('ajaxquery/query.php?name=energy_consumption');">[View Data]</a>
                                        </label>
                                    </div>                             
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion_" href="#basemap-layers">
                                    Basemaps
                                </a>
                            </div>
                            <div id="basemap-layers" class="panel-collapse collapse in">
                                <div class="panel-body" style="padding: 0px 15px;">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="basemapLayers" id="mapquestOSM" checked>
                                            Streets
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="basemapLayers" id="mapquestOAM">
                                            Imagery
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="basemapLayers" id="mapquestHYB">
                                            Hybrid
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-lg-9" id="map">
            <div id="loading" style="display: block;">
                <div class="loading-indicator">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" style="width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" type="button" rel="tooltip" class="toggle btn btn-default" data-toggle="tooltip" data-placement="right" title="Toggle sidebar"><i class="icon-chevron-left"></i></a>

    <div class="modal fade" id="aboutModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Welcome </h4>
                </div>

                <div class="modal-body">
                     <ul id="aboutTabs" class="nav nav-tabs">
                        <li class="active"><a href="#about" data-toggle="tab"><i class="icon-question-sign"></i>&nbsp;Economic Geography Map</a></li>
                    </ul>
                    <div id="aboutTabsContent" class="tab-content" style="padding-top: 10px;">
                        <div class="tab-pane fade active in" id="about">
                            <p></p>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Features
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">Add data map elements by selecting from the layer panel located on the left</li>
                                    <li class="list-group-item">Basemap options are located at the bottom of the layer panel</li>
                                    <li class="list-group-item">Click any element on the map for its attribute data</li>
                                    <li class="list-group-item">For particular data layers, symbologies will appear in the bottom right. If multiple data layers with symbologies are selected, their legends will stack accordingly</li>
                                    <li class="list-group-item">The scale is located in the top right. Zoom function is located in the top left. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Contact Us!</h4>
                </div>
                <div class="modal-body">
                    <form id="contact-form">
                        <fieldset>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="3" id="comment"></textarea>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">Submit</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="legendModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Map Legend</h4>
                </div>
                <div class="modal-body">
                    <p>Map Legend goes here...</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->





    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/typeahead.min.js"></script> <!--https://github.com/twitter/typeahead.js/-->
    <script type="text/javascript" src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
    <script type="text/javascript" src="http://d3js.org/topojson.v1.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script> 
    <script type="text/javascript">

        var map, museumSearch = [], nuc_pplantSearch = [], sol_pplantSearch = [], provSearch = [];
        var mapLayerGroups = [];

        $(document).ready(function() {
            $('[rel=tooltip]').tooltip();
            if (document.body.clientWidth <= 767) {
                $('#sidebar').toggle();
                $('a.toggle i').toggleClass('icon-chevron-left icon-chevron-right');
            };
        });
        $(window).resize(function() {
            $('.tt-dropdown-menu').css('max-height', $('#container').height()-$('.navbar').height()-20);
        });

        $('a.toggle').click(function() {
            $('a.toggle i').toggleClass('icon-chevron-left icon-chevron-right');
            $('#map').toggleClass('col-sm-9 col-lg-9 col-sm-12 col-lg-12');
            $('#sidebar').toggle();
            map.invalidateSize();
            return false;
        });

        $('input[name="basemapLayers"]').change(function () {
            // Remove unchecked layers
            $('input:radio[name="basemapLayers"]:not(:checked)').each(function () {
                map.removeLayer(window[$(this).attr('id')]);
            });
            // Add checked layer
            $('input:radio[name="basemapLayers"]:checked').each(function () {
                map.addLayer(window[$(this).attr('id')]);
            });
        });

        $('input:checkbox[name="overlayLayers"]').change(function () {
            var layers = [];
            function sortByKey(array, key) {
                return array.sort(function (a, b) {
                    var x = a[key];
                    var y = b[key];
                    return ((x < y) ? -1 : ((x > y) ? 1 : 0));
                });
            }
            if ($('#' + $(this).attr('id')).is(':checked')) {
                $('input:checkbox[name="overlayLayers"]').each(function () {
                    // Remove all overlay layers
                    map.removeLayer(window[$(this).attr('id')]);
                    if ($('#' + $(this).attr('id')).is(':checked')) {
                        // Add checked layers to array for sorting
                        layers.push({
                            'z-index': $(this).attr('z-index'),
                            'layer': $(this)
                        });
                    }
                });
                // Sort layers array by z-index
                var orderedLayers = sortByKey(layers, 'z-index');
                // Loop through ordered layers array and add to map in correct order
                $.each(orderedLayers, function () {
                    map.addLayer(window[$(this)[0].layer[0].id]);
                });
            } else {
                // Simply remove unchecked layers
                map.removeLayer(window[$(this).attr('id')]);
            }
        });

        // Basemap Layers
        var mapquestOSM = L.tileLayer("http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: 'Tiles courtesy of Carto'
        });
        var mapquestOAM = L.tileLayer("https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}", {
            maxZoom: 18,
            attribution: 'Tiles courtesy of ESRI'
        });
        var mapquestHYB = L.layerGroup([L.tileLayer("https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}", {
            maxZoom: 18
        }), L.tileLayer("http://{s}.basemaps.cartocdn.com/light_only_labels/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: 'Labels courtesy of Carto'
        })]);

        // Overlay Layers
        var prov_pop = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.Pop_Dense >= 2.375746 && feature.properties.Pop_Dense <= 165.531219) {
                    return {  
                        fillColor: '#FFFFCC',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.Pop_Dense >= 165.531220 && feature.properties.Pop_Dense <= 370.647308) {
                    return {  
                        fillColor: '#C2E699',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.Pop_Dense >= 370.647309 && feature.properties.Pop_Dense <= 599.799011) {
                    return {  
                        fillColor: '#78C679',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.Pop_Dense >= 599.799012 && feature.properties.Pop_Dense <= 969.776306) {
                    return {  
                        fillColor: '#31A354',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.Pop_Dense >= 969.776307 && feature.properties.Pop_Dense <= 2861.54) {
                    return {  
                        fillColor: '#006837',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Province</th><td>' + feature.properties.Province + '</td></tr>'+
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>'+
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>'+
                                        '<tr><th>Trade Dollars</th><td>' + feature.properties.Trade_Doll + '</td></tr>'+
                                        '<tr><th>Percent Minority</th><td>' + feature.properties.Minority + '%</td></tr>'+
                                        '<tr><th>Percent Urban</th><td>' + feature.properties.Urban  + '%</td></tr>'+
                                        '<tr><th>Area km</th><td>' + feature.properties.Area_km + '</td></tr>'+
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>'+
                                        '<tr><th>GDP CA</th><td>' + feature.properties.GDP_CA + '</td></tr>'

                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    provSearch.push({
                        value: layer.feature.properties.Province,
                        tokens: [layer.feature.properties.Province],
                        layer: 'prov_pop',
                        id: layer._leaflet_id,
                        bounds: layer.getBounds()
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        prov_pop.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/prov_pop.json", function (data) {
            prov_pop.addData(data);
        });

        var citiesandvillages = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng);

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>'+
                                        '<tr><th>Population (2000)</th><td>' + feature.properties.Population + '</td></tr>'+
                                        '<tr><th>Rank</th><td>' + feature.properties.Rank + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.City,
                        tokens: [layer.feature.properties.City],
                        layer: 'Cities',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/citiesandvillages.json", function (data) {
            citiesandvillages.addData(data);
        });

        var nuc_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                if (feature.properties.Status === 'Operational') {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/radioactive1.gif',
                            iconSize: [14, 17],
                            iconAnchor: [8, 7],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.Name,
                        riseOnHover: true
                    });
                };
                if (feature.properties.Status === 'Under Construction' || feature.properties.Status === 'Under construction') {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/radioactive2.gif',
                            iconSize: [14, 17],
                            iconAnchor: [9, 8],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.Name,
                        riseOnHover: true
                    });
                }
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Name</th><td>' + feature.properties.Name + '</td></tr>'+
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>'+
                                        '<tr><th>MW Cap</th><td>' + feature.properties.Cap_MW + '</td></tr>'+
                                        '<tr><th>Starting Year</th><td>' + feature.properties.Start_Yr + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + 'Website' + '</a></td></tr>' +
                                        '<tr><th>Provice</th><td>' + feature.properties.Province + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan  + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>) </th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    nuc_pplantSearch.push({
                        value: layer.feature.properties.Name,
                        tokens: [layer.feature.properties.Name],
                        layer: 'Nuclear Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/nuc_pplant.json", function (data) {
            nuc_pplant.addData(data);
        });

        var sol_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/sun4.gif',
                        iconSize: [19, 22],
                        iconAnchor: [9, 9],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Plant_Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Plant_Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>'+
                                        '<tr><th>CO2 Tons 20</th><td>' + feature.properties.TonsCO2_20 + '</td></tr>'+
                                        '<tr><th>CO2 Tons 21</th><td>' + feature.properties.TonsCO2_21 + '</td></tr>'+
                                        '<tr><th>CO2 Tons Fu</th><td>' + feature.properties.TonsCO2_Fu + '</td></tr>' +
                                        '<tr><th>MWh 2004</th><td>' + feature.properties.MWh_2004 + '</td></tr>' +
                                        '<tr><th>MWh 2009</th><td>' + feature.properties.MWh_2009 + '</td></tr>' +
                                        '<tr><th>MWh Future</th><td>' + feature.properties.MWh_Future + '</td></tr>' +
                                        '<tr><th>Intensity</th><td>' + feature.properties.Intensity_ + '</td></tr>' +
                                        '<tr><th>Provice</th><td>' + feature.properties.Provice + '</td></tr>' +
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>' +
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>' +
                                        '<tr><th>Size</th><td>' + feature.properties.Size + '</td></tr>' +
                                        '<tr><th>Capacity</th><td>' + feature.properties.Capacity_M + '</td></tr>' +
                                        '<tr><th>Status</th><td>' + feature.properties.Status + '</td></tr>' +
                                        '<tr><th>Type</th><td>' + feature.properties.Type + '</td></tr>' +
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>' +
                                        '<tr><th>Coal Type</th><td>' + feature.properties.Coal_Type + '</td></tr>' +
                                        '<tr><th>Dom_Imp</th><td>' + feature.properties.Dom_Imp + '</td></tr>' +
                                        '<tr><th>Source</th><td>' + feature.properties.Source + '</td></tr>' +
                                        '<tr><th>Year</th><td>' + feature.properties.Year + '</td></tr>' +
                                        '<tr><th>Plant ID</th><td>' + feature.properties.Plant_ID + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +

                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.Plant_Name,
                        tokens: [layer.feature.properties.Plant_Name],
                        layer: 'Solar Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/sol_pplant.json", function (data) {
            sol_pplant.addData(data);
        });

        var wind_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/swirl.gif',
                        iconSize: [14, 17],
                        iconAnchor: [7, 10],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Turbines + '</td></tr>'+
                                        '<tr><th>CO2 Tons 20</th><td>' + feature.properties.MW + '</td></tr>'+
                                        '<tr><th>Provice</th><td>' + feature.properties.Provice + '</td></tr>'+
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +                                        
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.Name,
                        tokens: [layer.feature.properties.Name],
                        layer: 'Wind Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/wind_pplant.json", function (data) {
            wind_pplant.addData(data);
        });

        var ugas_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/star.gif',
                        iconSize: [14, 17],
                        iconAnchor: [9, 9],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Plant_Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Plant_Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>'+
                                        '<tr><th>TonsCO2_20</th><td>' + feature.properties.TonsCO2_20 + '</td></tr>'+
                                        '<tr><th>TonsCO2_21</th><td>' + feature.properties.TonsCO2_21 + '</td></tr>'+
                                        '<tr><th>TonsCO2_Fu</th><td>' + feature.properties.TonsCO2_Fu + '</td></tr>'+
                                        '<tr><th>MWh_2004</th><td>' + feature.properties.MWh_2004 + '</td></tr>'+
                                        '<tr><th>MWh_2009</th><td>' + feature.properties.MWh_2009 + '</td></tr>'+
                                        '<tr><th>MWh_Future</th><td>' + feature.properties.MWh_Future + '</td></tr>'+
                                        '<tr><th>Intensity_</th><td>' + feature.properties.Intensity_ + '</td></tr>'+
                                        '<tr><th>Intensity1</th><td>' + feature.properties.Intensity1 + '</td></tr>'+
                                        '<tr><th>Intensit_F</th><td>' + feature.properties.Intensit_F + '</td></tr>'+
                                        '<tr><th>Province</th><td>' + feature.properties.Province + '</td></tr>'+
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>'+
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>'+
                                        '<tr><th>Capacity_M</th><td>' + feature.properties.Capacity_M + '</td></tr>'+
                                        '<tr><th>Status</th><td>' + feature.properties.Status + '</td></tr>'+
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>'+
                                        '<tr><th>Coal_Type</th><td>' + feature.properties.Coal_Type + '</td></tr>'+
                                        '<tr><th>Dom_Imp</th><td>' + feature.properties.Dom_Imp + '</td></tr>'+
                                        '<tr><th>Source</th><td>' + feature.properties.Source + '</td></tr>'+
                                        '<tr><th>Plant_ID</th><td>' + feature.properties.Plant_ID + '</td></tr>'+
                                        '<tr><th>Hyperlink</th><td>' + feature.properties.Hyperlink + '</td></tr>'+
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.Plant_Name,
                        tokens: [layer.feature.properties.Plant_Name],
                        layer: 'UGas Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/ugas_pplant.json", function (data) {
            ugas_pplant.addData(data);
        });

        var hydro_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/shield2.gif',
                        iconSize: [14, 17],
                        iconAnchor: [7, 8],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Plant_Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Plant_Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>'+
                                        '<tr><th>CO2 Tons 20</th><td>' + feature.properties.TonsCO2_20 + '</td></tr>'+
                                        '<tr><th>CO2 Tons 21</th><td>' + feature.properties.TonsCO2_21 + '</td></tr>'+
                                        '<tr><th>CO2 Tons Fu</th><td>' + feature.properties.TonsCO2_Fu + '</td></tr>' +
                                        '<tr><th>MWh 2004</th><td>' + feature.properties.MWh_2004 + '</td></tr>' +
                                        '<tr><th>MWh 2009</th><td>' + feature.properties.MWh_2009 + '</td></tr>' +
                                        '<tr><th>MWh Future</th><td>' + feature.properties.MWh_Future + '</td></tr>' +
                                        '<tr><th>Intensity</th><td>' + feature.properties.Intensity_ + '</td></tr>' +
                                        '<tr><th>Provice</th><td>' + feature.properties.Provice + '</td></tr>' +
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>' +
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>' +
                                        '<tr><th>Size</th><td>' + feature.properties.Size + '</td></tr>' +
                                        '<tr><th>Capacity</th><td>' + feature.properties.Capacity_M + '</td></tr>' +
                                        '<tr><th>Status</th><td>' + feature.properties.Status + '</td></tr>' +
                                        '<tr><th>Type</th><td>' + feature.properties.Type + '</td></tr>' +
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>' +
                                        '<tr><th>Coal Type</th><td>' + feature.properties.Coal_Type + '</td></tr>' +
                                        '<tr><th>Dom_Imp</th><td>' + feature.properties.Dom_Imp + '</td></tr>' +
                                        '<tr><th>Source</th><td>' + feature.properties.Source + '</td></tr>' +
                                        '<tr><th>Year</th><td>' + feature.properties.Year + '</td></tr>' +
                                        '<tr><th>Plant ID</th><td>' + feature.properties.Plant_ID + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.Plant_Name,
                        tokens: [layer.feature.properties.Plant_Name],
                        layer: 'Hydro Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/hydro_pplant.json", function (data) {
            hydro_pplant.addData(data);
        });

        var dams = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/shield.gif',
                        iconSize: [14, 17],
                        iconAnchor: [6, 7],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Name</th><td>' + feature.properties.Name + '</td></tr>'+
                                        '<tr><th>River</th><td>' + feature.properties.River + '</td></tr>'+
                                        '<tr><th>Height</th><td>' + feature.properties.Height + '</td></tr>'+
                                        '<tr><th>Type</th><td>' + feature.properties.Type + '</td></tr>'+
                                        '<tr><th>Capacity</th><td>' + feature.properties.Capacity + '</td></tr>' +
                                        '<tr><th>Year Built</th><td>' + feature.properties.Year + '</td></tr>' +
                                        '<tr><th>Installed</th><td>' + feature.properties.Installed + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +                                        
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.dams,
                        tokens: [layer.feature.properties.dams],
                        layer: 'Dams',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/dams.json", function (data) {
            dams.addData(data);
        });

        var gas_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/star2.gif',
                        iconSize: [14, 17],
                        iconAnchor: [10, 11],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Plant_Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>'+
                                        '<tr><th>CO2 Tons 20</th><td>' + feature.properties.TonsCO2_20 + '</td></tr>'+
                                        '<tr><th>CO2 Tons 21</th><td>' + feature.properties.TonsCO2_21 + '</td></tr>'+
                                        '<tr><th>CO2 Tons Fu</th><td>' + feature.properties.TonsCO2_Fu + '</td></tr>' +
                                        '<tr><th>MWh 2004</th><td>' + feature.properties.MWh_2004 + '</td></tr>' +
                                        '<tr><th>MWh 2009</th><td>' + feature.properties.MWh_2009 + '</td></tr>' +
                                        '<tr><th>MWh Future</th><td>' + feature.properties.MWh_Future + '</td></tr>' +
                                        '<tr><th>Intensity</th><td>' + feature.properties.Intensity_ + '</td></tr>' +
                                        '<tr><th>Provice</th><td>' + feature.properties.Provice + '</td></tr>' +
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>' +
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>' +
                                        '<tr><th>Size</th><td>' + feature.properties.Size + '</td></tr>' +
                                        '<tr><th>Capacity</th><td>' + feature.properties.Capacity_M + '</td></tr>' +
                                        '<tr><th>Status</th><td>' + feature.properties.Status + '</td></tr>' +
                                        '<tr><th>Type</th><td>' + feature.properties.Type + '</td></tr>' +
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>' +
                                        '<tr><th>Coal Type</th><td>' + feature.properties.Coal_Type + '</td></tr>' +
                                        '<tr><th>Dom_Imp</th><td>' + feature.properties.Dom_Imp + '</td></tr>' +
                                        '<tr><th>Source</th><td>' + feature.properties.Source + '</td></tr>' +
                                        '<tr><th>Year</th><td>' + feature.properties.Year + '</td></tr>' +
                                        '<tr><th>Plant ID</th><td>' + feature.properties.Plant_ID + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.Plant_Name,
                        tokens: [layer.feature.properties.Plant_Name],
                        layer: 'Gas Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/gas_pplant.json", function (data) {
            gas_pplant.addData(data);
        });

        var coal_pplant = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/oil.gif',
                        iconSize: [14, 17],
                        iconAnchor: [12, 10],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Plant_Name,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Plant Name</th><td>' + feature.properties.Plant_Name + '</td></tr>'+
                                        '<tr><th>Owner</th><td>' + feature.properties.Owner + '</td></tr>'+
                                        '<tr><th>CO2 Tons 20</th><td>' + feature.properties.TonsCO2_20 + '</td></tr>'+
                                        '<tr><th>CO2 Tons 21</th><td>' + feature.properties.TonsCO2_21 + '</td></tr>'+
                                        '<tr><th>CO2 Tons Fu</th><td>' + feature.properties.TonsCO2_Fu + '</td></tr>' +
                                        '<tr><th>MWh 2004</th><td>' + feature.properties.MWh_2004 + '</td></tr>' +
                                        '<tr><th>MWh 2009</th><td>' + feature.properties.MWh_2009 + '</td></tr>' +
                                        '<tr><th>MWh Future</th><td>' + feature.properties.MWh_Future + '</td></tr>' +
                                        '<tr><th>Intensity</th><td>' + feature.properties.Intensity_ + '</td></tr>' +
                                        '<tr><th>Provice</th><td>' + feature.properties.Provice + '</td></tr>' +
                                        '<tr><th>City</th><td>' + feature.properties.City + '</td></tr>' +
                                        '<tr><th>Units</th><td>' + feature.properties.Units + '</td></tr>' +
                                        '<tr><th>Size</th><td>' + feature.properties.Size + '</td></tr>' +
                                        '<tr><th>Capacity</th><td>' + feature.properties.Capacity_M + '</td></tr>' +
                                        '<tr><th>Status</th><td>' + feature.properties.Status + '</td></tr>' +
                                        '<tr><th>Type</th><td>' + feature.properties.Type + '</td></tr>' +
                                        '<tr><th>Fuel</th><td>' + feature.properties.Fuel + '</td></tr>' +
                                        '<tr><th>Coal Type</th><td>' + feature.properties.Coal_Type + '</td></tr>' +
                                        '<tr><th>Dom_Imp</th><td>' + feature.properties.Dom_Imp + '</td></tr>' +
                                        '<tr><th>Source</th><td>' + feature.properties.Source + '</td></tr>' +
                                        '<tr><th>Year</th><td>' + feature.properties.Year + '</td></tr>' +
                                        '<tr><th>Plant ID</th><td>' + feature.properties.Plant_ID + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.Hyperlink + '" target=_blank">' + feature.properties.Hyperlink + '</a></td></tr>' +                                        
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.coal_pplant,
                        tokens: [layer.feature.properties.coal_pplant],
                        layer: 'Coal Power Plants',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/coal_pplant.json", function (data) {
            coal_pplant.addData(data);
        });

        var lng_term = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/triangle.gif',
                        iconSize: [14, 17],
                        iconAnchor: [11, 10],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.NAME_ENG,
                    riseOnHover: true
                });

            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Terminal Name</th><td>' + feature.properties.NAME_ENG + '</td></tr>'+
                                        '<tr><th>Ann Cap</th><td>' + feature.properties.ANN_CAP + '</td></tr>' +
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                        '<tr><th>Website</th><td><a href="' + feature.properties.LINK + '" target=_blank">' + feature.properties.LINK + '</a></td></tr>' +          
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.NAME_ENG,
                        tokens: [layer.feature.properties.NAME_ENG],
                        layer: 'LNG Terminal',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/lng_term.json", function (data) {
            lng_term.addData(data);
        });

        var railroads = L.geoJson(null, {
            style: function (feature) {
                return {
                    color: '#000000',
                    weight: 2,
                    opacity: 1
                };
           
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>EXS_DESCRI</th><td>' + feature.properties.EXS_DESCRI + '</td></tr>'+
                                        '<tr><th>F_CODE_DES</th><td>' + feature.properties.F_CODE_DES + '</td></tr>'+
                                        '<tr><th>FCO_DESCRI</th><td>' + feature.properties.FCO_DESCRI + '</td></tr>'+
                                        '<tr><th>FID_rail_d</th><td>' + feature.properties.FID_rail_d + '</td></tr>'+                                        
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }
                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 3,
                            color: '#000000',
                            opacity: 1
                        });
                        if (!L.Browser.ie && !L.Browser.opera) {
                            layer.bringToFront();
                        }
                    },
                    mouseout: function(e) {
                        railroads.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/railroads.json", function (data) {
            railroads.addData(data);
        });

        var power_line = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.TYPE === '200 kV AC line') {
                    return {  
                        color: '#80B1D3',
                        weight: 1,
                        opacity: 1
                    };   
                };
                if (feature.properties.TYPE === '220 kV AC line') {
                    return {
                        color: '#80B1D3',
                        weight: 1,
                        opacity: 1
                    };
                };
                if (feature.properties.TYPE === '330 kV AC line') {
                    return {
                        color: '#80B1D3',
                        weight: 2.5,
                        opacity: 1
                    };
                };
                if (feature.properties.TYPE === '500 kV AC line') {
                    return {
                        color: '#80B1D3',
                        weight: 4,
                        opacity: 1
                    };
                };
                if (feature.properties.TYPE === 'Planned 220 kV') {
                    return {
                        color: '#80B1D3',
                        weight: 1,
                        opacity: 1,
                        dashArray: '6'
                    };
                };
                if (feature.properties.TYPE === 'Planned ±500 kV') {
                    return {
                        color: '#80B1D3',
                        weight: 4,
                        opacity: 1,
                        dashArray: '6'
                    };
                };
                if (feature.properties.TYPE === '±500 kV AC line') {
                    return {
                        color: '#80B1D3',
                        weight: 3.5,
                        opacity: 1
                    };
                };               
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Type</th><td>' + feature.properties.TYPE + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }
                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 7,
                            color: '#80B1D3',
                            opacity: 1
                        });
                        if (!L.Browser.ie && !L.Browser.opera) {
                            layer.bringToFront();
                        }
                    },
                    mouseout: function(e) {
                        power_line.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/power_line.json", function (data) {
            power_line.addData(data);
        });

        var gas_pipeline = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.CLASS === 'branch') {
                    return {  
                        color: '#FB8072',
                        weight: 2,
                        opacity: 1
                    };   
                };
                if (feature.properties.CLASS === 'future branch') {
                    return {
                        color: '#FB8072',
                        weight: 2,
                        opacity: 1,
                        dashArray: '6'
                    };
                };
                if (feature.properties.CLASS === 'future trunk') {
                    return {
                        color: '#FB8072',
                        weight: 4,
                        opacity: 1,
                        dashArray: '6'
                    };
                };
                if (feature.properties.CLASS === 'trunk') {
                    return {
                        color: '#FB8072',
                        weight: 4,
                        opacity: 1
                    };
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>From</th><td>' + feature.properties.FROM + '</td></tr>'+
                                        '<tr><th>To</th><td>' + feature.properties.TO + '</td></tr>'+
                                        '<tr><th>Class</th><td>' + feature.properties.CLASS + '</td></tr>'+
                                        '<tr><th>West1</th><td>' + feature.properties.West1 + '</td></tr>'+
                                        '<tr><th>West2</th><td>' + feature.properties.West2 + '</td></tr>'+
                                        '<tr><th>West3</th><td>' + feature.properties.West3 + '</td></tr>'+
                                        '<tr><th>Pipeline</th><td>' + feature.properties.PIPELINE + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }
                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 7,
                            color: '#FB8072',
                            opacity: 1
                        });
                        if (!L.Browser.ie && !L.Browser.opera) {
                            layer.bringToFront();
                        }
                    },
                    mouseout: function(e) {
                        gas_pipeline.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/gas_pipeline.json", function (data) {
            gas_pipeline.addData(data);
        });

        var oil_gas = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                if (feature.properties.COMMODITY === 'Oil, gas and cond' || feature.properties.COMMODITY === 'Oil and gas' || feature.properties.COMMODITY === 'Oil')
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/sun.gif',
                            iconSize: [14, 17],
                            iconAnchor: [12, 11],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.COMMODITY,
                        riseOnHover: true
                    });
                }
                if (feature.properties.COMMODITY === 'Gas, cond and oil' || feature.properties.COMMODITY === 'Gas and oil' || feature.properties.COMMODITY === 'Gas and condensate' || feature.properties.COMMODITY === 'Gas')
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/sun2.gif',
                           iconSize: [14, 17],
                            iconAnchor: [9, 9],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.COMMODITY,
                        riseOnHover: true
                    });
                }
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Commodity</th><td>' + feature.properties.COMMODITY + '</td></tr>'+
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.COMMODITY,
                        tokens: [layer.feature.properties.COMMODITY],
                        layer: 'Oil and Gas',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/oil_gas.json", function (data) {
            oil_gas.addData(data);
        });

        var uncon_gas = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                return L.marker(latlng, {
                    icon: L.icon({
                        iconUrl: 'img/symbols/sun3.gif',
                        iconSize: [14, 17],
                        iconAnchor: [9, 10],
                        popupAnchor: [0, -25]
                    }),
                    title: feature.properties.Plant_Name,
                    riseOnHover: true
                });
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Type</th><td>' + feature.properties.TYPE + '</td></tr>'+
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }
            }
        });

        $.getJSON("data/simplified/uncon_gas.json", function (data) {
            uncon_gas.addData(data);
        });

        var coal_mine = L.geoJson(null, {
            pointToLayer: function (feature, latlng) {
                if (feature.properties.Avg_Tons < 0.25)
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/cross.gif',
                            iconSize: [14, 17],
                            iconAnchor: [8, 9],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.NAME,
                        riseOnHover: true
                    });
                }
                if (feature.properties.Avg_Tons >= 0.25 && feature.properties.Avg_Tons <= 0.75)
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/cross.gif',
                            iconSize: [16, 19],
                            iconAnchor: [9, 11],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.NAME,
                        riseOnHover: true
                    });
                }
                if (feature.properties.Avg_Tons >= 0.75 && feature.properties.Avg_Tons <= 2.5)
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/cross.gif',
                            iconSize: [18, 22],
                            iconAnchor: [11, 13],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.NAME,
                        riseOnHover: true
                    });
                }
                if (feature.properties.Avg_Tons >= 2.5 && feature.properties.Avg_Tons <= 7.5)
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/cross.gif',
                            iconSize: [20, 24],
                            iconAnchor: [12, 15],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.NAME,
                        riseOnHover: true
                    });
                }
                if (feature.properties.Avg_Tons >= 7.5 && feature.properties.Avg_Tons <= 15)
                {
                    return L.marker(latlng, {
                        icon: L.icon({
                            iconUrl: 'img/symbols/cross.gif',
                            iconSize: [22, 27],
                            iconAnchor: [14, 16],
                            popupAnchor: [0, -25]
                        }),
                        title: feature.properties.NAME,
                        riseOnHover: true
                    });
                }
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Name</th><td>' + feature.properties.NAME + '</td></tr>'+
                                        '<tr><th>Code</th><td>' + feature.properties.CODE + '</td></tr>'+
                                        '<tr><th>Production</th><td>' + feature.properties.Production + '</td></tr>'+
                                        '<tr><th>Website</th><td><a href="' + feature.properties.LINK + '" target=_blank">' + feature.properties.LINK + '</a></td></tr>' +
                                        '<tr><th>CB Methane</th><td>' + feature.properties.CBMethan_R + '</td></tr>'+
                                        '<tr><th>Province</th><td>' + feature.properties.Province1 + '</td></tr>'+
                                        '<tr><th>Population (2007)</th><td>' + feature.properties.Pop_2007 + '</td></tr>' +
                                        '<tr><th>GDP (Yuan)</th><td>' + feature.properties.GDP_Yuan + '</td></tr>' +
                                        '<tr><th>Trade Dollar</th><td>' + feature.properties.Trade_Doll + '</td></tr>' +
                                        '<tr><th>Minority</th><td>' + feature.properties.Minority + '%</td></tr>' +
                                        '<tr><th>Urban</th><td>' + feature.properties.Urban + '%</td></tr>' +
                                        '<tr><th>Area (km)</th><td>' + feature.properties.Area_km + '</td></tr>' +
                                        '<tr><th>Population Density (Persons per km<sup>2</sup>)</th><td>' + feature.properties.Pop_Dense + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                    sol_pplantSearch.push({
                        value: layer.feature.properties.NAME,
                        tokens: [layer.feature.properties.NAME],
                        layer: 'Coal Mine',
                        id: layer._leaflet_id,
                        lat: layer.feature.geometry.coordinates[1],
                        lng: layer.feature.geometry.coordinates[0]
                    });
                }
            }
        });

        $.getJSON("data/simplified/coal_mine.json", function (data) {
            coal_mine.addData(data);
        });

        var shale_gas = L.geoJson(null, {
            style: function (feature) {
                return {  
                    fillColor: '#1F78B4',
                    weight: 1,
                    fillOpacity: 0.8
                };   
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Name</th><td>' + feature.properties.Name + '</td></tr>'+
                                        '<tr><th>Area</th><td>' + feature.properties.AREA + '</td></tr>'+
                                        '<tr><th>Basin Age</th><td>' + feature.properties.AGE_BASIN_ + '</td></tr>'+
                                        '<tr><th>ERA</th><td>' + feature.properties.ERA + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }
                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        shale_gas.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/shale_gas.json", function (data) {
            shale_gas.addData(data);
        });

        var administrative_boundaries = L.geoJson(null, {
            style: function (feature) {
                return {  
                    color: '#000000',
                    weight: 1,
                    fillOpacity: 0
                };   
            },
            onEachFeature: function (feature, layer) {
                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4
                        });
                    },
                    mouseout: function(e) {
                        administrative_boundaries.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/administrative_boundaries.json", function (data) {
            administrative_boundaries.addData(data);
        });     

        var administrative_boundaries2 = L.geoJson(null, {
            style: function (feature) {
                    return {  
                        color: '#000000',
                        weight: 2,
                        fillOpacity: 0
                    };   
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Name</th><td>' + feature.properties.NAME_2 + '</td></tr>'+
                                        '<tr><th>Province</th><td>' + feature.properties.NAME_1 + '</td></tr>'+
                                        '<tr><th>Type</th><td>' + feature.properties.ENGTYPE_2 + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        administrative_boundaries2.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/CHN_adm2.json", function (data) {
            administrative_boundaries2.addData(data);
        });   

        var power_generation = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.PWRGEN_E >= 0 && feature.properties.PWRGEN_E <= 269) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.PWRGEN_E >= 269.1 && feature.properties.PWRGEN_E <= 876.19) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.PWRGEN_E >= 876.191 && feature.properties.PWRGEN_E <= 1443.85) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.PWRGEN_E >= 1443.851 && feature.properties.PWRGEN_E <= 2568.36) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.PWRGEN_E >= 2568.361 && feature.properties.PWRGEN_E <= 3359.18) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Power Generation (\'95)</th><td>' + feature.properties.PWRGEN_B + '</td></tr>'+
                                        '<tr><th>Power Generation (\'00)</th><td>' + feature.properties.PWRGEN_C + '</td></tr>'+
                                        '<tr><th>Power Generation (\'05)</th><td>' + feature.properties.PWRGEN_D + '</td></tr>'+
                                        '<tr><th>Power Generation (\'10)</th><td>' + feature.properties.PWRGEN_E + '</td></tr>'+
                                        '<tr><th>Hydro Power Generation (\'95)</th><td>' + feature.properties.PWRGEN_F  + '</td></tr>'+
                                        '<tr><th>Hydro Power Generation (\'00)</th><td>' + feature.properties.PWRGEN_G + '</td></tr>'+
                                        '<tr><th>Hydro Power Generation (\'05)</th><td>' + feature.properties.PWRGEN_H + '</td></tr>'+
                                        '<tr><th>Hydro Power Generation (\'10)/th><td>' + feature.properties.PWRGEN_I + '</td></tr>' +
                                        '<tr><th>Thermal Power Generation (\'95)</th><td>' + feature.properties.PWRGEN_J + '</td></tr>' +
                                        '<tr><th>Thermal Power Generation (\'04)</th><td>' + feature.properties.PWRGEN_K + '</td></tr>' +
                                        '<tr><th>Thermal Power Generation (\'10)</th><td>' + feature.properties.PWRGEN_L + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        power_generation.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/POWER_GENERATION.json", function (data) {
            power_generation.addData(data);
        });

        var power_wastegas_water = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.WGAS_WAT_E >= 0 && feature.properties.WGAS_WAT_E <= 1857) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.WGAS_WAT_E >= 1857.1 && feature.properties.WGAS_WAT_E <= 5786) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.WGAS_WAT_E >= 5786.1 && feature.properties.WGAS_WAT_E <= 11111) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.WGAS_WAT_E >= 11111.1 && feature.properties.WGAS_WAT_E <= 17476) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.WGAS_WAT_E >= 17476.1 && feature.properties.WGAS_WAT_E <= 27750) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Total Waste Gas Emissions (\'00)</th><td>' + feature.properties.WGAS_WAT_B + '</td></tr>'+
                                        '<tr><th>Total Waste Gas Emissions (\'10)</th><td>' + feature.properties.WGAS_WAT_C + '</td></tr>'+
                                        '<tr><th>Waste Gas Emission from Fuel Burning (\'00)</th><td>' + feature.properties.WGAS_WAT_D + '</td></tr>'+
                                        '<tr><th>Waste Gas Emission from Fuel Burning (\'10)</th><td>' + feature.properties.WGAS_WAT_E + '</td></tr>'+
                                        '<tr><th>National Waste Gas Emission (\'00)</th><td>' + feature.properties.WGAS_WAT_F  + '</td></tr>'+
                                        '<tr><th>National Waste Gas Emission (\'10)</th><td>' + feature.properties.WGAS_WAT_G + '</td></tr>'+
                                        '<tr><th>National Waste Gas Emission from Fuel Burning (\'00)</th><td>' + feature.properties.WGAS_WAT_H + '</td></tr>'+
                                        '<tr><th>National Waste Gas Emission from Fuel Burning (\'10)/th><td>' + feature.properties.WGAS_WAT_I + '</td></tr>' +
                                        '<tr><th>Industrial Waste Water Discharge (\'00)</th><td>' + feature.properties.WGAS_WAT_J + '</td></tr>' +
                                        '<tr><th>Industrial Waste Water Discharged (\'10)</th><td>' + feature.properties.WGAS_WAT_K + '</td></tr>' +
                                        '<tr><th>Cleaned Industrial Waste Water (\'00)</th><td>' + feature.properties.WGAS_WAT_L + '</td></tr>' +
                                        '<tr><th>Cleaned Industrial Waste Water(\'10)</th><td>' + feature.properties.WGAS_WAT_M + '</td></tr>' +
                                        '<tr><th>National Waste Water Discharged (\'00)</th><td>' + feature.properties.WGAS_WAT_N + '</td></tr>' +
                                        '<tr><th>National Waste Water Discharged (\'10)</th><td>' + feature.properties.WGAS_WAT_O + '</td></tr>' +
                                        '<tr><th>National Cleaned Industrial Waste Water (\'00)</th><td>' + feature.properties.WGAS_WAT_P + '</td></tr>' +
                                        '<tr><th>National Cleaned Industrial Waste Water (\'10)</th><td>' + feature.properties.WGAS_WAT_Q + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        power_wastegas_water.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/POWER_WASTEGAS_WATER.json", function (data) {
            power_wastegas_water.addData(data);
        });

        var investment_urban_energy_assets = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.INV_ENG_E >= 0 && feature.properties.INV_ENG_E <= 198.5728) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_ENG_E >= 198.572801 && feature.properties.INV_ENG_E <= 429.7557) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_ENG_E >= 429.755701 && feature.properties.INV_ENG_E <= 667.2436) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_ENG_E >= 667.243601 && feature.properties.INV_ENG_E <= 1191.4387) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_ENG_E >= 1191.438701 && feature.properties.INV_ENG_E <= 2092.8273) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Investment Urban Energy (\'95)</th><td>' + feature.properties.INV_ENG_B + '</td></tr>'+
                                        '<tr><th>Investment Urban Energy (\'00)</th><td>' + feature.properties.INV_ENG_C + '</td></tr>'+
                                        '<tr><th>Investment Urban Energy (\'05)</th><td>' + feature.properties.INV_ENG_D + '</td></tr>'+
                                        '<tr><th>Investment Urban Energy (\'10)</th><td>' + feature.properties.INV_ENG_E + '</td></tr>'+
                                        '<tr><th>Investment Urban Coal Mining (\'95)</th><td>' + feature.properties.INV_ENG_F  + '</td></tr>'+
                                        '<tr><th>Investment Urban Coal Mining(\'00)</th><td>' + feature.properties.INV_ENG_G + '</td></tr>'+
                                        '<tr><th>Investment Urban Coal Mining (\'05)</th><td>' + feature.properties.INV_ENG_H + '</td></tr>'+
                                        '<tr><th>Investment Urban Coal Mining (\'10)/th><td>' + feature.properties.INV_ENG_I + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Gas (\'95)</th><td>' + feature.properties.INV_ENG_J + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Gas (\'00)</th><td>' + feature.properties.INV_ENG_K + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Gas (\'05)</th><td>' + feature.properties.INV_ENG_L + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Gas (\'10)</th><td>' + feature.properties.INV_ENG_M + '</td></tr>' +
                                        '<tr><th>Investment Urban Electric Steam (\'95)</th><td>' + feature.properties.INV_ENG_N + '</td></tr>' +
                                        '<tr><th>Investment Urban Electric Steam (\'00)</th><td>' + feature.properties.INV_ENG_O + '</td></tr>' +
                                        '<tr><th>Investment Urban Electric Steam (\'05)</th><td>' + feature.properties.INV_ENG_P + '</td></tr>' +
                                        '<tr><th>Investment Urban Electric Steam (\'10)</th><td>' + feature.properties.INV_ENG_Q + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Processing (\'95)</th><td>' + feature.properties.INV_ENG_R + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Processing (\'00)</th><td>' + feature.properties.INV_ENG_S + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Processing (\'05)</th><td>' + feature.properties.INV_ENG_T + '</td></tr>' +
                                        '<tr><th>Investment Urban Petroleum Processing (\'10)</th><td>' + feature.properties.INV_ENG_U + '</td></tr>' +
                                        '<tr><th>Investment Urban Gas Prod. Supply (\'95)</th><td>' + feature.properties.INV_ENG_V + '</td></tr>' +
                                        '<tr><th>Investment Urban Gas Prod. Supply (\'00)</th><td>' + feature.properties.INV_ENG_W + '</td></tr>' +
                                        '<tr><th>Investment Urban Gas Prod. Supply (\'05)</th><td>' + feature.properties.INV_ENG_X + '</td></tr>' +
                                        '<tr><th>Investment Urban Gas Prod. Supply (\'10)</th><td>' + feature.properties.INV_ENG_Y + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        investment_urban_energy_assets.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/INVESTMENT_URBAN_ENERGY_ASSETS.json", function (data) {
            investment_urban_energy_assets.addData(data);
        });

        var investment_so_energy_assets = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.INV_SOE_E >= 0 && feature.properties.INV_SOE_E <= 56.524200) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_SOE_E >= 56.524201 && feature.properties.INV_SOE_E <= 195.131) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_SOE_E >= 195.1311 && feature.properties.INV_SOE_E <= 370.4415) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_SOE_E >= 370.441501 && feature.properties.INV_SOE_E <= 586.0635) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.INV_SOE_E >= 586.063501 && feature.properties.INV_SOE_E <= 905.6175) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Energy Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_B + '</td></tr>'+
                                        '<tr><th>Energy Fixed Assets (\'00)</th><td>' + feature.properties.INV_SOE_C + '</td></tr>'+
                                        '<tr><th>Energy Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_D + '</td></tr>'+
                                        '<tr><th>Energy Fixed Assets (\'10)</th><td>' + feature.properties.INV_SOE_E + '</td></tr>'+
                                        '<tr><th>Coal Mine Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_F  + '</td></tr>'+
                                        '<tr><th>Coal Mine Fixed Assets(\'00)</th><td>' + feature.properties.INV_SOE_G + '</td></tr>'+
                                        '<tr><th>Coal Mine Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_H + '</td></tr>'+
                                        '<tr><th>Coal Mine Fixed Assets (\'10)/th><td>' + feature.properties.INV_SOE_I + '</td></tr>' +
                                        '<tr><th>Pet. Processing and Coking Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_J + '</td></tr>' +
                                        '<tr><th>Pet. Processing and Coking Fixed Assets (\'00)</th><td>' + feature.properties.INV_SOE_K + '</td></tr>' +
                                        '<tr><th>Pet. Processing and Coking Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_L + '</td></tr>' +
                                        '<tr><th>Pet. Processing and Coking Fixed Assets (\'10)</th><td>' + feature.properties.INV_SOE_M + '</td></tr>' +
                                        '<tr><th>Pet. and N. Gas Extraction Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_N + '</td></tr>' +
                                        '<tr><th>Pet. and N. Gas Extraction Fixed Assets (\'00)</th><td>' + feature.properties.INV_SOE_O + '</td></tr>' +
                                        '<tr><th>Pet. and N. Gas Extraction Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_P + '</td></tr>' +
                                        '<tr><th>Pet. and N. Gas Extraction Fixed Assets (\'10)</th><td>' + feature.properties.INV_SOE_Q + '</td></tr>' +
                                        '<tr><th>Electric Steam H20 Production and Supply Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_R + '</td></tr>' +
                                        '<tr><th>Electric Steam H20 Production and Supply Fixed Assets (\'00)</th><td>' + feature.properties.INV_SOE_S + '</td></tr>' +
                                        '<tr><th>Electric Steam H20 Production and Supply Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_T + '</td></tr>' +
                                        '<tr><th>Electric Steam H20 Production and Supply Fixed Assets (\'10)</th><td>' + feature.properties.INV_SOE_U + '</td></tr>' +
                                        '<tr><th>N. Gas Production and Supply Fixed Assets (\'95)</th><td>' + feature.properties.INV_SOE_V + '</td></tr>' +
                                        '<tr><th>N. Gas Production and Supply Fixed Assets (\'00)</th><td>' + feature.properties.INV_SOE_W + '</td></tr>' +
                                        '<tr><th>N. Gas Production and Supply Fixed Assets (\'05)</th><td>' + feature.properties.INV_SOE_X + '</td></tr>' +
                                        '<tr><th>N. Gas Production and Supply Fixed Assets (\'10)</th><td>' + feature.properties.INV_SOE_Y + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        investment_so_energy_assets.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/INVESTMENT_SO_ENERGY_ASSETS.json", function (data) {
            investment_so_energy_assets.addData(data);
        });

        var heating = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.HTNG_K >= 0 && feature.properties.HTNG_K <= 1564) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.HTNG_K >= 1564.1 && feature.properties.HTNG_K <= 3731) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.HTNG_K >= 3731.1 && feature.properties.HTNG_K <= 6280) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.HTNG_K >= 6280.1 && feature.properties.HTNG_K <= 13186) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.HTNG_K >= 13186.1 && feature.properties.HTNG_K <= 31086) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>National Cap. Steam Heat (\'00)</th><td>' + feature.properties.HTNG_B + '</td></tr>'+
                                        '<tr><th>Cap. Steam Heat (\'00)</th><td>' + feature.properties.HTNG_C + '</td></tr>'+
                                        '<tr><th>National Cap. Hot Water Heater (\'00)</th><td>' + feature.properties.HTNG_D + '</td></tr>'+
                                        '<tr><th>Capacity Hot Water Heater (\'00)</th><td>' + feature.properties.HTNG_E + '</td></tr>'+
                                        '<tr><th>National Cap. Steam Heat (\'05)</th><td>' + feature.properties.HTNG_F  + '</td></tr>'+
                                        '<tr><th>Cap. Steam Heat(\'05)</th><td>' + feature.properties.HTNG_G + '</td></tr>'+
                                        '<tr><th>National Cap. Hot Water Heat (\'05)</th><td>' + feature.properties.HTNG_H + '</td></tr>'+
                                        '<tr><th>Cap Hot Water Heat (\'10)/th><td>' + feature.properties.HTNG_I + '</td></tr>' +
                                        '<tr><th>National Cap Steam Heat (\'10)</th><td>' + feature.properties.HTNG_J + '</td></tr>' +
                                        '<tr><th>Cap. Steam Heat (\'10)</th><td>' + feature.properties.HTNG_K + '</td></tr>' +
                                        '<tr><th>National Cap. Steam Heat (\'10)</th><td>' + feature.properties.HTNG_L + '</td></tr>' +
                                        '<tr><th>Cap. Hot Water Heat (\'10)</th><td>' + feature.properties.HTNG_M + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        heating.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/HEATING.json", function (data) {
            heating.addData(data);
        });

        var gas_urban_regional = L.geoJson(null, {
            style: function (feature) {
                return {  
                    color: '#000000',
                    weight: 2,
                    fillOpacity: 0
                };  
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Natl Total LPG (\'00)</th><td>' + feature.properties.GAS_SPL_B + '</td></tr>'+
                                        '<tr><th>Total LPG (\'00)</th><td>' + feature.properties.GAS_SPL_C + '</td></tr>'+
                                        '<tr><th>Natl. Population with Access (\'00)</th><td>' + feature.properties.GAS_SPL_D + '</td></tr>'+
                                        '<tr><th>Population with Access (\'00)</th><td>' + feature.properties.GAS_SPL_E + '</td></tr>'+
                                        '<tr><th>Natl. Total LPG (\'05)</th><td>' + feature.properties.GAS_SPL_F + '</td></tr>'+
                                        '<tr><th>Total LPG (\'05)</th><td>' + feature.properties.GAS_SPL_G  + '</td></tr>'+
                                        '<tr><th>Natl. Population with Access (\'05)</th><td>' + feature.properties.GAS_SPL_H + '</td></tr>'+
                                        '<tr><th>Population with Access (\'05)</th><td>' + feature.properties.GAS_SPL_I + '</td></tr>'+
                                        '<tr><th>Natl. Total LPG (\'10)/th><td>' + feature.properties.GAS_SPL_J + '</td></tr>' +
                                        '<tr><th>Total LPG (\'10)</th><td>' + feature.properties.GAS_SPL_K + '</td></tr>' +
                                        '<tr><th>Natl. Population with Access (\'10)</th><td>' + feature.properties.GAS_SPL_L + '</td></tr>' +
                                        '<tr><th>Population with Access (\'10)</th><td>' + feature.properties.GAS_SPL_M + '</td></tr>' +
                                        '<tr><th>Urban Nat. Gas (\'00)</th><td>' + feature.properties.GAS_SPL_N + '</td></tr>' +
                                        '<tr><th>Urban Nat. Gas (\'05)</th><td>' + feature.properties.GAS_SPL_O + '</td></tr>' +
                                        '<tr><th>Urban Nat. Gas (\'10)</th><td>' + feature.properties.GAS_SPL_P + '</td></tr>' +
                                        '<tr><th>Access to Urban Natl. Gas (\'00)</th><td>' + feature.properties.GAS_SPL_Q + '</td></tr>' +
                                        '<tr><th>Access to Urban Natl. Gas (\'05)</th><td>' + feature.properties.GAS_SPL_R + '</td></tr>' +
                                        '<tr><th>Access to Urban Natl. Gas (\'10)</th><td>' + feature.properties.GAS_SPL_S + '</td></tr>' +
                                        '<tr><th>Natl. Urban Nat. Gas (\'00)</th><td>' + feature.properties.GAS_SPL_T + '</td></tr>' +
                                        '<tr><th>Natl. Urban Nat. Gas  (\'05)</th><td>' + feature.properties.GAS_SPL_U + '</td></tr>' +
                                        '<tr><th>Natl. Urban Nat. Gas  (\'10)</th><td>' + feature.properties.GAS_SPL_V + '</td></tr>' +
                                        '<tr><th>Natl. Urban Access to Nat. Gas (\'00)</th><td>' + feature.properties.GAS_SPL_W + '</td></tr>' +
                                        '<tr><th>Natl. Urban Access to Nat. Gas (\'05)</th><td>' + feature.properties.GAS_SPL_X + '</td></tr>' +
                                        '<tr><th>Natl. Urban Access to Nat. Gas (\'10)</th><td>' + feature.properties.GAS_SPL_Y + '</td></tr>' +
                                        '<tr><th>Coal Gas (\'00)</th><td>' + feature.properties.GAS_SPL_Z + '</td></tr>' +
                                        '<tr><th>Coal Gas (\'05)</th><td>' + feature.properties.GAS_SPL_AA + '</td></tr>' +
                                        '<tr><th>Coal Gas (\'10)</th><td>' + feature.properties.GAS_SPL_AB + '</td></tr>' +
                                        '<tr><th>Access to Coal Gas (\'00)</th><td>' + feature.properties.GAS_SPL_AC + '</td></tr>' +
                                        '<tr><th>Access to Coal Gas (\'05)</th><td>' + feature.properties.GAS_SPL_AD + '</td></tr>' +
                                        '<tr><th>Access to Coal Gas (\'10)</th><td>' + feature.properties.GAS_SPL_AE + '</td></tr>' +
                                        '<tr><th>Natl. Coal Gas (\'00)</th><td>' + feature.properties.GAS_SPL_AF + '</td></tr>' +
                                        '<tr><th>Natl. Coal Gas (\'05)</th><td>' + feature.properties.GAS_SPL_AG + '</td></tr>' +
                                        '<tr><th>Natl. Coal Gas (\'10)</th><td>' + feature.properties.GAS_SPL_AH + '</td></tr>' +
                                        '<tr><th>Natl. Access to Coal Gas (\'00)</th><td>' + feature.properties.GAS_SPL_AI + '</td></tr>' +
                                        '<tr><th>Natl. Access to Coal Gas (\'05)</th><td>' + feature.properties.GAS_SPL_AJ + '</td></tr>' +
                                        '<tr><th>Natl. Access to Coal Gas (\'10)</th><td>' + feature.properties.GAS_SPL_AK + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        gas_urban_regional.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/GAS_URBAN_REGIONAL.json", function (data) {
            gas_urban_regional.addData(data);
        });

        var fuel_resources = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.FUEL_RSC_N >= 0 && feature.properties.FUEL_RSC_N <= 5.33) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_RSC_N >= 5.331 && feature.properties.FUEL_RSC_N <= 17.2) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_RSC_N >= 17.21 && feature.properties.FUEL_RSC_N <= 30) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_RSC_N >= 30.1 && feature.properties.FUEL_RSC_N <= 78.4) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_RSC_N >= 78.41 && feature.properties.FUEL_RSC_N <= 249.9) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Coke (\'95)</th><td>' + feature.properties.FUEL_RSC_B + '</td></tr>'+
                                        '<tr><th>Coke (\'04)</th><td>' + feature.properties.FUEL_RSC_C + '</td></tr>'+
                                        '<tr><th>Coke (\'10)</th><td>' + feature.properties.FUEL_RSC_D + '</td></tr>'+
                                        '<tr><th>Crude Oil (\'04)</th><td>' + feature.properties.FUEL_RSC_E + '</td></tr>'+
                                        '<tr><th>Crude Oil (\'10)</th><td>' + feature.properties.FUEL_RSC_F  + '</td></tr>'+
                                        '<tr><th>Diesel (\'04)</th><td>' + feature.properties.FUEL_RSC_G + '</td></tr>'+
                                        '<tr><th>Diesel (\'10)</th><td>' + feature.properties.FUEL_RSC_H + '</td></tr>'+
                                        '<tr><th>Fuel Oil (\'95)/th><td>' + feature.properties.FUEL_RSC_I + '</td></tr>' +
                                        '<tr><th>Fuel Oil (\'04)</th><td>' + feature.properties.FUEL_RSC_J + '</td></tr>' +
                                        '<tr><th>Fuel Oil (\'10)</th><td>' + feature.properties.FUEL_RSC_K + '</td></tr>' +
                                        '<tr><th>Nat. Gas (\'95)</th><td>' + feature.properties.FUEL_RSC_L + '</td></tr>' +
                                        '<tr><th>Nat. Gas (\'04)</th><td>' + feature.properties.FUEL_RSC_M + '</td></tr>' +
                                        '<tr><th>Nat. Gas (\'10)</th><td>' + feature.properties.FUEL_RSC_N + '</td></tr>' +
                                        '<tr><th>Petrol (\'95)</th><td>' + feature.properties.FUEL_RSC_O + '</td></tr>' +
                                        '<tr><th>Petrol (\'00)</th><td>' + feature.properties.FUEL_RSC_P + '</td></tr>' +
                                        '<tr><th>Petrol (\'05)</th><td>' + feature.properties.FUEL_RSC_Q + '</td></tr>' +
                                        '<tr><th>Petrol (\'10)</th><td>' + feature.properties.FUEL_RSC_R + '</td></tr>' +
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        fuel_resources.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/FUEL_RESOURCES.json", function (data) {
            fuel_resources.addData(data);
        });

        var fuel_for_power_generation = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.FUEL_PWR_D >= 0 && feature.properties.FUEL_PWR_D <= 0.486945) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_PWR_D >= 0.4869461 && feature.properties.FUEL_PWR_D <= 1.236136) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_PWR_D >= 1.2361371 && feature.properties.FUEL_PWR_D <= 2.334365) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_PWR_D >= 2.3343366 && feature.properties.FUEL_PWR_D <= 3.796420) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.FUEL_PWR_D >= 3.796421 && feature.properties.FUEL_PWR_D <= 8.536452) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Coke (\'95)</th><td>' + feature.properties.FUEL_PWR_B + '</td></tr>'+
                                        '<tr><th>Oil (\'04)</th><td>' + feature.properties.FUEL_PWR_C + '</td></tr>'+
                                        '<tr><th>Nat. Gas and Other (\'10)</th><td>' + feature.properties.FUEL_PWR_D + '</td></tr>'+
                                        '<tr><th>Total Fuel (\'04)</th><td>' + feature.properties.FUEL_PWR_E + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        fuel_for_power_generation.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/FUEL_FOR_POWER_GENERATION.json", function (data) {
            fuel_for_power_generation.addData(data);
        });

        var energy_consumption = L.geoJson(null, {
            style: function (feature) {
                if (feature.properties.ENG_CON_F >= 0 && feature.properties.ENG_CON_F <= 2568) {
                    return {  
                        fillColor: '#FEF0D9',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.ENG_CON_F >= 2568.1 && feature.properties.ENG_CON_F <= 8882) {
                    return {  
                        fillColor: '#FDCC8A',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.ENG_CON_F >= 8882.1 && feature.properties.ENG_CON_F <= 11234) {
                    return {  
                        fillColor: '#FC8D59',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.ENG_CON_F >= 11234.1 && feature.properties.ENG_CON_F <= 21438) {
                    return {  
                        fillColor: '#E34A33',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
                if (feature.properties.ENG_CON_F >= 21438.1 && feature.properties.ENG_CON_F <= 34808) {
                    return {  
                        fillColor: '#B30000',
                        weight: 1,
                        fillOpacity: 0.8
                    };   
                };
            },
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    var content =   '<table class="table table-striped table-bordered table-condensed">'+
                                        '<tr><th>Region</th><td>' + feature.properties.Region + '</td></tr>'+
                                        '<tr><th>Total Energy Consumed (\'90)</th><td>' + feature.properties.ENG_CON_B + '</td></tr>'+
                                        '<tr><th>Total Energy Consumed (\'95)</th><td>' + feature.properties.ENG_CON_C + '</td></tr>'+
                                        '<tr><th>Total Energy Consumed (\'00)</th><td>' + feature.properties.ENG_CON_D + '</td></tr>'+
                                        '<tr><th>Total Energy Consumed (\'05)</th><td>' + feature.properties.ENG_CON_E + '</td></tr>' +
                                        '<tr><th>Total Energy Consumed (\'10)</th><td>' + feature.properties.ENG_CON_F + '</td></tr>'+
                                    '<table>';
                    layer.bindPopup(content, {
                        maxWidth: 'auto'
                    });
                }

                layer.on({
                    mouseover: function(e) {
                        var layer = e.target;
                        layer.setStyle({
                            weight: 4,
                            opacity: 1
                        });
                    },
                    mouseout: function(e) {
                        energy_consumption.resetStyle(e.target);
                    }
                });
            }
        });

        $.getJSON("data/simplified/ENERGY_CONSUMPTION.json", function (data) {
            energy_consumption.addData(data);
        });

        map = L.map("map", {
            zoom: 4,
            center: new L.LatLng(38.54817,115.22461),
            layers: [mapquestOSM]
        });


        var scaleControl = L.control.scale({
            position: 'topright'
        });

        // Larger screens get scale control and expanded layer control
        if (document.body.clientWidth <= 767) {
        var isCollapsed = true;
        } else {
            var isCollapsed = false;
            map.addControl(scaleControl);
        };

        var baseLayers = {
            "Streets": mapquestOSM,
            "Imagery": mapquestOAM,
            "Hybrid": mapquestHYB
        };

        var overlays = {
        };

        // var layerControl = L.control.layers(baseLayers, overlays, {
        //     collapsed: isCollapsed
        // }).addTo(map);

        // Highlight search box text on click
        $("#searchbox").click(function () {
            $(this).select();
        });

        // Typeahead search functionality
        $(document).one("ajaxStop", function() {
            $('#loading').hide();
            $('#searchbox').typeahead([{
                name: 'Provinces',
                local: provSearch,
                minLength: 2,
                limit: 10,
                header: '<h4 class="typeahead-header">Provinces</h4>'
            },{
                name: 'GeoNames',
                remote: {
                    url: 'http://ws.geonames.org/searchJSON?featureClass=P&maxRows=5&countryCode=US&name_startsWith=%QUERY',
                    beforeSend: function(jqXhr, settings) {
                        settings.url += '&east='+map.getBounds().getEast()+'&west='+map.getBounds().getWest()+'&north='+map.getBounds().getNorth()+'&south='+map.getBounds().getSouth();
                    },
                    filter: function(parsedResponse) {
                        var dataset = [];
                        for(i = 0; i < parsedResponse.geonames.length; i++) {
                            dataset.push({
                                value: parsedResponse.geonames[i].name,
                                tokens: [parsedResponse.geonames[i].name],
                                layer: 'GeoNames',
                                lat: parsedResponse.geonames[i].lat,
                                lng: parsedResponse.geonames[i].lng
                            });
                        }
                        return dataset;
                    }
                },
                minLength: 2,
                limit: 5,
                header: '<h4 class="typeahead-header"><img src="img/globe.png" width="25" height="25">&nbsp;GeoNames Places</h4>'
              }]).on('typeahead:selected', function (obj, datum) {
                if (datum.layer === 'prov_pop') {
                    map.fitBounds(datum.bounds);
                };
                if (datum.layer === 'GeoNames') {
                    map.setView([datum.lat, datum.lng], 14);
                };
            }).on('typeahead:initialized ', function () {
                $('.tt-dropdown-menu').css('max-widtheight', $('#container').height()-$('.navbar').height()-20);
                // $('.tt-dropdown-menu').css('min-width', $('.tt-dropdown-menu').width()+50);
            });
        });

        // Placeholder hack for IE
        if (navigator.appName == "Microsoft Internet Explorer") {
            $("input").each( function () {
                if ($(this).val() == "" && $(this).attr("placeholder") != "") {
                    $(this).val($(this).attr("placeholder"));
                    $(this).focus(function () {
                        if ($(this).val() == $(this).attr("placeholder")) $(this).val("");
                    });
                    $(this).blur(function () {
                        if ($(this).val() == "") $(this).val($(this).attr("placeholder"));
                    });
                }
            });
        }



        var legend = L.control({position: 'bottomright'});

        legend.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Persons per km<sup>2</sup><br /><i style="background: #FFFFCC"></i>2 &ndash; 165<br />' +
            '<i style="background: #C2E699"></i>165 &ndash; 370<br />' +
            '<i style="background: #78C679"></i>370 &ndash; 599<br />' +
            '<i style="background: #31A354"></i>599 &ndash; 969<br />' +
            '<i style="background: #006837"></i>969 &ndash; 2861<br />'
            return this._div;
        };

        var legend2 = L.control({position: 'bottomright'});

        legend2.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Power Lines<br />' +
            '<i style="background: #80B1D3; height: 1px;"></i>200 kV AC line<br />' +
            '<i style="background: #80B1D3; height: 1px;"></i>220 kV AC line<br />' +
            '<i style="background: #80B1D3; height: 2px;"></i>330 kV AC line<br />' +
            '<i style="background: #80B1D3; height: 3px;"></i>500 kV AC line<br />' +
            '<i style="background-image: url(img/symbols/dash.gif); height: 1px;""></i>Planned 220 kV<br />' +
            '<i style="background-image: url(img/symbols/dash.gif); height: 4px;"></i>Planned ±500 kV<br />' +
            '<i style="background: #80B1D3 height: 3px"></i>±500 kV AC line<br />'
            return this._div;
        };

        var legend3 = L.control({position: 'bottomright'});

        legend3.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Gas Pipelines<br />' +
            '<i style="background: #FB8072; height: 2px;"></i>Branch<br />' +
            '<i style="background-image: url(img/symbols/dash2.gif); height: 2px"></i>Future Branch<br />' +
            '<i style="background-image: url(img/symbols/dash2.gif); height: 4px;"></i>Future Trunk<br />' +
            '<i style="background: #FB8072; height: 4px;"></i>Trunk<br />'
            return this._div;
        };

        var legend4 = L.control({position: 'bottomright'});

        legend4.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Oil & Gas<br />' +
            '<i><img src="img/symbols/sun.gif" /></i>Oil, gas and cond<br />' +
            '<i><img src="img/symbols/sun2.gif" /></i>Gas, cond and oil<br />'
            return this._div;
        };

        var legend5 = L.control({position: 'bottomright'});

        legend5.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Coal Mines: Average Tons<br />' +
            '<i><img src="img/symbols/cross.gif" width="16px" height="19px" /></i>0.25<br />' +
            '<i><img src="img/symbols/cross.gif" width="19px" height="23px" /></i>0.25 - 0.75<br />' +
            '<i><img src="img/symbols/cross.gif" width="22px" height="26px" /></i>0.75 - 2.5<br />' +
            '<i><img src="img/symbols/cross.gif" width="25px" height="30px" /></i>2.5 - 7.5<br />' +
            '<i><img src="img/symbols/cross.gif" width="28px" height="33px" /></i>7.5 - 15.0<br />'
            return this._div;
        };

        var legend6 = L.control({position: 'bottomright'});

        legend6.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Nuclear Power Plants<br />' +
            '<i><img src="img/symbols/radioactive1.gif" /></i>Operational<br />' +
            '<i><img src="img/symbols/radioactive2.gif" /></i>Under Construction<br />'
            return this._div;
        };

        var legend7 = L.control({position: 'bottomright'});

        legend7.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 
            '<i><a href="#" id="cross" data-toggle="tooltip" title="Coal Mines"><img src="img/symbols/cross.gif" width="14px" height="17px" /></a></i>' +
            '<i><a href="#" id="oil" data-toggle="tooltip" title="Coal Power Plants"><img src="img/symbols/oil.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="radioactive1" data-toggle="tooltip" title="Nuclear Power Plants (Operational)"><img src="img/symbols/radioactive1.gif"  width="14px" height="17px" /></a></i>' +
            '<i><a href="#" id="radioactive2" data-toggle="tooltip" title="Nuclear Power Plants (Under Construction)"><img src="img/symbols/radioactive2.gif"  width="14px" height="17px" /></a></i>' +
            '<i><a href="#" id="shield" data-toggle="tooltip" title="Dams"><img src="img/symbols/shield.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="shield2" data-toggle="tooltip" title="Hydro"><img src="img/symbols/shield2.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="star" data-toggle="tooltip" title="UGas"><img src="img/symbols/star.gif"  width="14px" height="17px" /></a></i>' +
            '<i><a href="#" id="star2" data-toggle="tooltip" title="Gas Power Plants"><img src="img/symbols/star2.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="sun" data-toggle="tooltip" title="Oil, gas and condensate"><img src="img/symbols/sun.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="sun2" data-toggle="tooltip" title="Gas, condensate and oil"><img src="img/symbols/sun2.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="sun3" data-toggle="tooltip" title="Uncon Gas"><img src="img/symbols/sun3.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="sun4" data-toggle="tooltip" title="Solar Power Plants"><img src="img/symbols/sun4.gif"  width="14px" height="17px" /></a></i>' +
            '<i><a href="#" id="swirl" data-toggle="tooltip" title="Wind Power Plants"><img src="img/symbols/swirl.gif" width="14px" height="17px"  /></a></i>' +
            '<i><a href="#" id="triangle" data-toggle="tooltip" title="LNG Terminals"><img src="img/symbols/triangle.gif" width="14px" height="17px"  /></a></i>' 
            return this._div;
        };

        legend7.addTo(map);

        var legend8 = L.control({position: 'bottomright'});

        legend8.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Power Generation (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 269<br />' +
            '<i style="background: #FDCC8A"></i>269 &ndash; 876<br />' +
            '<i style="background: #FC8D59"></i>876 &ndash; 1,443<br />' +
            '<i style="background: #E34A33"></i>1,443 &ndash; 2,568<br />' +
            '<i style="background: #B30000"></i>2,568 &ndash; 3,359<br />'
            return this._div;
        };

        var legend9 = L.control({position: 'bottomright'});

        legend9.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Waste Gas Emission from Fuel Burning (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 1857<br />' +
            '<i style="background: #FDCC8A"></i>1,857 &ndash; 5,786<br />' +
            '<i style="background: #FC8D59"></i>5,786 &ndash; 11,111<br />' +
            '<i style="background: #E34A33"></i>11,111 &ndash; 17,476<br />' +
            '<i style="background: #B30000"></i>17,476 &ndash; 27,750<br />'
            return this._div;
        };        

        var legend10 = L.control({position: 'bottomright'});

        legend10.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Investment in Urban Energy (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 198<br />' +
            '<i style="background: #FDCC8A"></i>198 &ndash; 429<br />' +
            '<i style="background: #FC8D59"></i>429 &ndash; 667<br />' +
            '<i style="background: #E34A33"></i>667 &ndash; 1,191<br />' +
            '<i style="background: #B30000"></i>1,191 &ndash; 2,092<br />'
            return this._div;
        }; 

        var legend11 = L.control({position: 'bottomright'});

        legend11.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Energy Fixed Assets (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 56<br />' +
            '<i style="background: #FDCC8A"></i>56 &ndash; 195<br />' +
            '<i style="background: #FC8D59"></i>195 &ndash; 370<br />' +
            '<i style="background: #E34A33"></i>370 &ndash; 586<br />' +
            '<i style="background: #B30000"></i>586 &ndash; 905<br />'
            return this._div;
        }; 

        var legend12 = L.control({position: 'bottomright'});

        legend12.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Cap. Steam Heat (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 1,564<br />' +
            '<i style="background: #FDCC8A"></i>1,564 &ndash; 3,731<br />' +
            '<i style="background: #FC8D59"></i>3,731 &ndash; 6,280<br />' +
            '<i style="background: #E34A33"></i>6,280 &ndash; 13,186<br />' +
            '<i style="background: #B30000"></i>13,186 &ndash; 31,086<br />'
            return this._div;
        }; 

        var legend13 = L.control({position: 'bottomright'});

        legend13.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Nat. Gas (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 5.33<br />' +
            '<i style="background: #FDCC8A"></i>5.33 &ndash; 17.2<br />' +
            '<i style="background: #FC8D59"></i>17.2 &ndash; 30<br />' +
            '<i style="background: #E34A33"></i>30 &ndash; 78.4<br />' +
            '<i style="background: #B30000"></i>78.4 &ndash; 249.9<br />'
            return this._div;
        };

        var legend14 = L.control({position: 'bottomright'});

        legend14.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Nat. Gas and Other (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 0.48694<br />' +
            '<i style="background: #FDCC8A"></i>0.486946 &ndash; 1.236136<br />' +
            '<i style="background: #FC8D59"></i>1.236137 &ndash; 2.334365<br />' +
            '<i style="background: #E34A33"></i>2.334366 &ndash; 3.796420<br />' +
            '<i style="background: #B30000"></i>3.796421 &ndash; 8.536452<br />'
            return this._div;
        };

        var legend15 = L.control({position: 'bottomright'});

        legend15.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info legend');
            this._div.innerHTML = 'Total Energy Consumed (\'10) <br /><i style="background: #FEF0D9"></i>0 &ndash; 2,568<br />' +
            '<i style="background: #FDCC8A"></i>2,568 &ndash; 8,882<br />' +
            '<i style="background: #FC8D59"></i>8,882 &ndash; 11,234<br />' +
            '<i style="background: #E34A33"></i>11,234 &ndash; 21,438<br />' +
            '<i style="background: #B30000"></i>21,438 &ndash; 34,808<br />'
            return this._div;
        };

        $('#nuc_pplant').click(function(){
            if (this.checked) {
                legend6.addTo(map)
            } else {
                legend6.removeFrom(map)
            }
        }) 

        $('#coal_mine').click(function(){
            if (this.checked) {
                legend5.addTo(map)
            } else {
                legend5.removeFrom(map)
            }
        }) 

        $('#oil_gas').click(function(){
            if (this.checked) {
                legend4.addTo(map)
            } else {
                legend4.removeFrom(map)
            }
        }) 

        $('#prov_pop').click(function(){
            if (this.checked) {
                legend.addTo(map)
            } else {
                legend.removeFrom(map)
            }
        }) 

        $('#power_line').click(function(){
            if (this.checked) {
                legend2.addTo(map)
            } else {
                legend2.removeFrom(map)
            }
        }) 

        $('#gas_pipeline').click(function(){
            if (this.checked) {
                legend3.addTo(map)
            } else {
                legend3.removeFrom(map)
            }
        }) 

        $('#power_generation').click(function(){
            if (this.checked) {
                legend8.addTo(map)
            } else {
                legend8.removeFrom(map)
            }
        })        

        $('#power_wastegas_water').click(function(){
            if (this.checked) {
                legend9.addTo(map)
            } else {
                legend9.removeFrom(map)
            }
        }) 

        $('#investment_urban_energy_assets').click(function(){
            if (this.checked) {
                legend10.addTo(map)
            } else {
                legend10.removeFrom(map)
            }
        }) 

        $('#investment_so_energy_assets').click(function(){
            if (this.checked) {
                legend11.addTo(map)
            } else {
                legend11.removeFrom(map)
            }
        }) 

        $('#heating').click(function(){
            if (this.checked) {
                legend12.addTo(map)
            } else {
                legend12.removeFrom(map)
            }
        }) 

        $('#fuel_resources').click(function(){
            if (this.checked) {
                legend13.addTo(map)
            } else {
                legend13.removeFrom(map)
            }
        }) 

        $('#fuel_for_power_generation').click(function(){
            if (this.checked) {
                legend14.addTo(map)
            } else {
                legend14.removeFrom(map)
            }
        }) 

        $('#energy_consumption').click(function(){
            if (this.checked) {
                legend15.addTo(map)
            } else {
                legend15.removeFrom(map)
            }
        }) 

        $('#cross').tooltip()
        $('#star').tooltip()
        $('#star2').tooltip()
        $('#oil').tooltip()
        $('#radioactive1').tooltip()
        $('#radioactive2').tooltip()
        $('#triangle').tooltip()
        $('#sun').tooltip()
        $('#sun2').tooltip()
        $('#sun3').tooltip()
        $('#sun4').tooltip()
        $('#shield').tooltip()
        $('#shield2').tooltip()
        $('#swirl').tooltip()

        function newPopup(url) {
            popupWindow = window.open(
                url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }
        // $.("#") try OnEachFeature() to display all layer properties
    </script>
  </body>
</html>
