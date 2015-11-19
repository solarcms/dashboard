@extends('SolarTheme::_layouts.master')

@section('content')

    @include('Dashboard::_partials.header')


    <div class="box-row">
        <div class="box-cell">
            <div class="box-inner padding">


                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="row no-gutter">
                            <div class="col-xs-12">
                                <div class="card">
                                    <div class="card-heading">
                                        <h2>Dashboard</h2>
                                        <small>Welcome to the new material design dashboard</small>
                                    </div>
                                    <div class="card-tools">
                                        <ul class="list-inline">
                                            <li class="dropdown">
                                                <a md-ink-ripple data-toggle="dropdown"
                                                   class="md-btn md-flat md-btn-circle">
                                                    <i class="mdi-navigation-more-vert text-md"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up top text-color">
                                                    <li><a href>Action</a></li>
                                                    <li><a href>Another action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" ng-controller="ChartCtrl">
                                            <div class="col-sm-6">
                                                <div class="text-center">
                                                    Server Status
                                                </div>
                                                <div class="p-md">
                                                    <div ui-jp="plot" ui-options="
                      [
                        { data: [[1, 7.5], [2, 7.5], [3, 5.7], [4, 8.9], [5, 10], [6, 7], [7, 9], [8, 13], [9, 7], [10, 6]] },
                        { data: [[1, 4.5], [2, 4.2], [3, 4.5], [4, 4.3], [5, 4.5], [6, 4.7], [7, 4.6], [8, 4.8], [9, 4.6], [10, 4.5]] }
                      ],
                      {
                        bars: { show: true, fill: true,  barWidth: 0.4, lineWidth: 1, order: 1, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] } },
                        colors: ['#3f51b5','#4caf50'],
                        series: { shadowSize: 3 },
                        xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                        yaxis:{ show: true, font: { color: '#ccc' }},
                        grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                        tooltip: true,
                        tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
                      }
                    " style="height:160px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-center">
                                                    Client Overview
                                                </div>
                                                <div class="p-md">
                                                    <div ui-jp="plot" ui-options="
                      [{label:'Series 1', data: 45}, {label:'Series 2', data: 5}, {label:'Series 3', data: 30}, {label:'Series 4', data: 20}],
                      {
                        series: { pie: { show: true, innerRadius: 0.55, stroke: { width: 3 }, label: { show: true, threshold: 0.05 } } },
                        colors: ['#3f51b5','#4caf50'],
                        grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                        tooltip: true,
                        tooltipOpts: { content: '%s: %p.0%' }
                      }
                    " style="height:160px"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="card blue">
                                    <div class="card-heading">
                                        <h2>Popular</h2>
                                        <small>What you would like</small>
                                    </div>
                                    <div class="list-group list-group-lg no-bg">
                                        <a href class="list-group-item text-ellipsis">
                <span class="pull-right">
                  <i class="mdi-action-trending-up i-20 text-muted-dk"></i>
                </span>
                                            #TheWalkingDead
                                        </a>
                                        <a href class="list-group-item text-ellipsis">
                <span class="pull-right">
                  <i class="mdi-action-trending-neutral i-20 text-muted-dk"></i>
                </span>
                                            #Survivor
                                        </a>
                                        <a href class="list-group-item text-ellipsis">
                <span class="pull-right">
                  <i class="mdi-action-trending-down i-20 text-muted-dk"></i>
                </span>
                                            #Whitehouse
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="card green">
                                    <div class="card-heading">
                                        <h2>Top Search</h2>
                                        <small>Something really cool</small>
                                    </div>
                                    <div class="list-group list-group-lg no-bg">
                                        <a href class="list-group-item">
                <span class="pull-right">
                  1
                </span>
                                            #Story
                                        </a>
                                        <a href class="list-group-item">
                <span class="pull-right">
                  2
                </span>
                                            #Nature
                                        </a>
                                        <a href class="list-group-item">
                <span class="pull-right">
                  3
                </span>
                                            #Sleeping
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-heading">
                                        <a href class="pull-left w-32 m-r">
                                            <img src="/shared/images/a6.jpg" class="w-full img-circle">
                                        </a>

                                        <div class="clear">
                                            <a href class="font-bold block">James Brogan</a>

                                            <div class="text-xxs font-thin text-muted">Public - 28 March</div>
                                        </div>
                                    </div>
                                    <div class="item" ng-controller="VectorMapCtrl">
                                        <div class="m-b-lg" style="height:240px;" ui-jp="vectorMap" ui-options="{
                map: 'us_aea_en',
                markers: [{latLng: [40.71, -74.00], name: 'New York'},{latLng: [34.05, -118.24], name: 'Los Angeles'},{latLng: [41.87, -87.62], name: 'Chicago'},{latLng: [29.76, -95.36], name: 'Houston'},{latLng: [39.95, -75.16], name: 'Philadelphia'},{latLng: [38.90, -77.03], name: 'Washington'}, {latLng: [37.36, -122.03], name: 'Silicon Valley'}],
                backgroundColor: '#fff',
                regionsSelectable: true,
                markersSelectable: true,
                regionStyle: {
                  initial: {
                    fill: '#2196f3'
                  },
                  selected: {
                    fill: '#2196f3'
                  }
                },
                series: {
                  markers: [{
                    attribute: 'fill',
                    scale: ['#3f51b5','#ffc107', '#4caf50'],
                    values: [605.16, 310.69, 405.17, 248.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42]
                  },{
                    attribute: 'r',
                    scale: [5, 20],
                    values: [605.16, 310.69, 405.17, 248.31, 207.35, 217.22, 137.70, 280.71, 210.32, 325.42]
                  }]
                }
              }">
                                        </div>
                                    </div>
                                    <a md-ink-ripple=""
                                       class="md-btn md-raised md-fab m-r md-fab-offset pull-right bg-white">23</a>

                                    <div class="card-body">
                                        <h4 class="no-margin m-b">Compain</h4>

                                        <p class="text-sm text-muted">
                                            The titles of Washed Out's breakthrough song and the first single
                                            from Paracosm share the
                                            two most important words in Ernest Greene's musical language: feel
                                            it. It's a simple request, as well...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading bg-white">
                                <span class="label pull-right m-t-xs amber">4 left</span>
                                <span class="h4">Tasks</span>
                            </div>
                            <table class="table m-b-none">
                                <thead>
                                <tr>
                                    <th>Progress</th>
                                    <th>Item</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="progress progress-xs progress-striped active no-margin m-v-sm">
                                            <div class="progress-bar bg-success" data-toggle="tooltip"
                                                 data-original-title="80%" style="width: 80%"></div>
                                        </div>
                                    </td>
                                    <td>App prototype design</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress progress-xs no-margin m-v-sm">
                                            <div class="progress-bar bg-info" data-toggle="tooltip"
                                                 data-original-title="40%" style="width: 40%"></div>
                                        </div>
                                    </td>
                                    <td>Design documents</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress progress-xs no-margin m-v-sm">
                                            <div class="progress-bar bg-warning" data-toggle="tooltip"
                                                 data-original-title="20%" style="width: 20%"></div>
                                        </div>
                                    </td>
                                    <td>UI toolkit</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="progress progress-xs no-margin m-v-sm">
                                            <div class="progress-bar bg-danger" data-toggle="tooltip"
                                                 data-original-title="15%" style="width: 15%"></div>
                                        </div>
                                    </td>
                                    <td>Testing</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="card">
                            <form>
                                        <textarea class="form-control no-border p-md" rows="1"
                                                  placeholder="Write something..."></textarea>
                            </form>
                            <div class="lt p">
                                <button md-ink-ripple class="md-btn md-raised pull-right p-h-md blue">Post
                                </button>
                                <ul class="nav nav-pills nav-sm">
                                    <li><a href><i class="fa fa-camera"></i></a></li>
                                    <li><a href><i class="fa fa-video-camera"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-heading">
                                <h2>Activities</h2>
                                <small>Updated 4 minutes</small>
                            </div>
                            <div class="card-body">
                                <div class="streamline b-l b-accent m-b">
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">Just now</div>
                                            <p>Finished task <a href class="text-info">#features 4</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">11:30</div>
                                            <p><a href>@Jessi</a> retwit your post</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-primary b-l">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">10:30</div>
                                            <p>Call to customer <a href class="text-info">Jacob</a> and discuss
                                                the detail.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-warning">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">3 days ago</div>
                                            <p><a href class="text-info">Jessi</a> commented your post.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">Thu, 10 Mar</div>
                                            <p>Trip to the moon</p>
                                        </div>
                                    </div>
                                    <div class="sl-item b-info">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">Sat, 5 Mar</div>
                                            <p>Prepare for presentation</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">Sun, 11 Feb</div>
                                            <p><a href class="text-info">Jessi</a> assign you a task <a href
                                                                                                        class="text-info">Mockup
                                                    Design</a>.</p>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-content">
                                            <div class="text-muted-dk">Thu, 17 Jan</div>
                                            <p>Follow up to close deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blue">
                            <div class="card-heading">
                                <h2 class="font-thin">My Friends</h2>
                                <small>Follow your favorites</small>
                            </div>
                            <div class="card-tools">
                                <ul class="list-inline">
                                    <li class="dropdown">
                                        <a md-ink-ripple data-toggle="dropdown"
                                           class="md-btn md-flat md-btn-circle">
                                            <i class="mdi-navigation-more-vert text-md"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up top text-color">
                                            <li><a href>Action</a></li>
                                            <li><a href>Another action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body">
                                <a href class="m-r-xs inline">
                                    <img src="/shared/images/a4.jpg" class="w-40 img-circle">
                                </a>
                                <a href class="m-r-xs inline">
                                    <img src="/shared/images/a5.jpg" class="w-40 img-circle">
                                </a>
                                <a href class="m-r-xs inline">
                                    <img src="/shared/images/a6.jpg" class="w-40 img-circle">
                                </a>
                                <a class="btn btn-rounded btn-info">99+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h4 class="m-l">Connected</h4>
                        <ul class="list-group no-bg no-borders pull-in">
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a0.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Joge Lucky</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a1.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Folisise Chosielie</a></div>
                                    <small class="text-muted-dk">Musician, Player</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a2.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Aron Gonzalez</a></div>
                                    <small class="text-muted-dk">Designer</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a4.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Chris Fox</a></div>
                                    <small class="text-muted-dk">Designer, Blogger</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a5.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Mogen Polish</a></div>
                                    <small class="text-muted-dk">Writter, Mag Editor</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a6.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Joge Lucky</a></div>
                                    <small class="text-muted-dk">Art director, Movie Cut</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a7.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Folisise Chosielie</a></div>
                                    <small class="text-muted-dk">Musician, Player</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a8.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Aron Gonzalez</a></div>
                                    <small class="text-muted-dk">Designer</small>
                                </div>
                            </li>
                            <li class="list-group-item clearfix">
                                <a herf="" class="pull-left w-40 m-r">
                                    <img src="/shared/images/a9.jpg" alt="..." class="w-full img-circle">
                                </a>

                                <div class="clear text-ellipsis">
                                    <div><a href="">Mogen Polish</a></div>
                                    <small class="text-muted-dk">Writter, Mag Editor</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection