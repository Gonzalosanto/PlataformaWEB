<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Data Table | Kiaalap - Kiaalap Admin Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <?php $this->load->view('vistas-generales/css'); ?>
    </head>

    <body>
        <!--[if lt IE 8]>
                    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- Start Left menu area -->
        <?php $this->load->view('vistas-generales/menu-movil'); ?>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="assets/template/img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('vistas-generales/menu-principal'); ?>
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control dt-tb">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                               data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="name" data-editable="true">Task</th>
                                                    <th data-field="email" data-editable="true">Email</th>
                                                    <th data-field="phone" data-editable="true">Phone</th>
                                                    <th data-field="complete">Completed</th>
                                                    <th data-field="task" data-editable="true">Task</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="price" data-editable="true">Price</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>Web Development</td>
                                                    <td>admin@uttara.com</td>
                                                    <td>+8801962067309</td>
                                                    <td class="datatable-ct"><span class="pie">1/6</span>
                                                    </td>
                                                    <td>10%</td>
                                                    <td>Jul 14, 2017</td>
                                                    <td>$5455</td>
                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>21</td>
                                                    <td>Jquery Advance</td>
                                                    <td>hasad@uth.com</td>
                                                    <td>+8801962067301</td>
                                                    <td class="datatable-ct"><span class="pie">2,7</span>
                                                    </td>
                                                    <td>15%</td>
                                                    <td>Jun 6, 2013</td>
                                                    <td>$4565656</td>
                                                    <td class="datatable-ct"><i class="fa fa-check"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
            <?php $this->load->view('vistas-generales/footer'); ?>
        </div>

        <?php $this->load->view('vistas-generales/js'); ?>
    </body>

</html>