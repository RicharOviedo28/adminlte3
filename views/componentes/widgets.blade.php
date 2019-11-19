@extends('layouts.app')
@section('content')
<div class="container">
    <h5 class="mb-2">Info Box</h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fa fa-envelope-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">410</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number">13,648</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div>
            </div>
        </div>
    </div>
    <h5 class="mt-4 mb-2">Info Box With <code>bg-*</code></h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
    </div>
    <h5 class="mt-4 mb-2">Info Box With <code>bg-*-gradient</code></h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info-gradient">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success-gradient">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning-gradient">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger-gradient">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>
    </div>
    <h5 class="mb-2 mt-4">Small Box</h5>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <h4 class="mb-2 mt-4">Cards</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-default collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Expandable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Removable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Collapsable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Loading state</h3>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-info collapsed-card card-outline">
                <div class="card-header">
                    <h3 class="card-title">Expandable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-success card-outline">
                <div class="card-header">
                    <h3 class="card-title">Removable</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-warning card-outline">
                <div class="card-header">
                    <h3 class="card-title">Warning Outline</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger card-outline">
                <div class="card-header">
                    <h3 class="card-title">Danger Outline</h3>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary-gradient">
                <div class="card-header">
                    <h3 class="card-title">Primary Gradient</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success-gradient">
                <div class="card-header">
                    <h3 class="card-title">Success Gradient</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning-gradient">
                <div class="card-header">
                    <h3 class="card-title">Warning Gradient</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger-gradient">
                <div class="card-header">
                    <h3 class="card-title">Danger Gradient</h3>
                </div>
                <div class="card-body">
                    The body of the card
                </div>
            </div>
        </div>
    </div>
    <h4 class="mt-4 mb-2">Direct Chat</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>
                    <div class="card-tools">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-primary">3</span>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-success card-outline direct-chat direct-chat-success">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>

                    <div class="card-tools">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-success">3</span>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-success">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-warning direct-chat direct-chat-warning">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>
                    <div class="card-tools">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge bg-danger">3</span>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-warning">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger direct-chat direct-chat-danger">
                <div class="card-header">
                    <h3 class="card-title">Direct Chat</h3>
                    <div class="card-tools">
                        <span data-toggle="tooltip" title="3 New Messages" class="badge">3</span>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="Message User Image">
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-danger">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h3 class="mt-4 mb-4">Social Widgets</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-widget widget-user-2">
                <div class="widget-user-header bg-warning">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                    </div>
                    <h3 class="widget-user-username">Nadia Carmichael</h3>
                    <h5 class="widget-user-desc">Lead Developer</h5>
                </div>
                <div class="card-footer p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Projects <span class="float-right badge bg-primary">31</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Tasks <span class="float-right badge bg-info">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Completed Projects <span class="float-right badge bg-success">12</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Followers <span class="float-right badge bg-danger">842</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-widget widget-user">
                <div class="widget-user-header bg-info-active">
                    <h3 class="widget-user-username">Alexander Pierce</h3>
                    <h5 class="widget-user-desc">Founder & CEO</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">SALES</span>
                            </div>
                        </div>
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">13,000</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">35</h5>
                                <span class="description-text">PRODUCTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-widget widget-user">
                <div class="widget-user-header text-white"
                    style="background: url('../dist/img/photo1.png') center center;">
                    <h3 class="widget-user-username">Elizabeth Pierce</h3>
                    <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">SALES</span>
                            </div>
                        </div>
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">13,000</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">35</h5>
                                <span class="description-text">PRODUCTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-widget">
                <div class="card-header">
                    <div class="user-block">
                        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <span class="description">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                            <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo">
                    <p>I took this photo this morning. What do you guys think?</p>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="float-right text-muted">127 likes - 3 comments</span>
                </div>
                <div class="card-footer card-comments">
                    <div class="card-comment">
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">
                        <div class="comment-text">
                            <span class="username">
                                Maria Gonzales
                                <span class="text-muted float-right">8:03 PM Today</span>
                            </span>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                    </div>
                    <div class="card-comment">
                        <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">
                        <div class="comment-text">
                            <span class="username">
                                Luna Stark
                                <span class="text-muted float-right">8:03 PM Today</span>
                            </span>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                        <div class="img-push">
                            <input type="text" class="form-control form-control-sm"
                                placeholder="Press enter to post comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-widget">
                <div class="card-header">
                    <div class="user-block">
                        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <span class="description">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                            <i class="fa fa-circle-o"></i></button>
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <p>Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at</p>
                    <p>the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into
                        your mouth.</p>
                    <div class="attachment-block clearfix">
                        <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">
                        <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text
                                    generator</a></h4>
                            <div class="attachment-text">
                                Description about the attachment can be placed here.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a
                                    href="#">more</a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="float-right text-muted">45 likes - 2 comments</span>
                </div>
                <div class="card-footer card-comments">
                    <div class="card-comment">
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">
                        <div class="comment-text">
                            <span class="username">
                                Maria Gonzales
                                <span class="text-muted float-right">8:03 PM Today</span>
                            </span>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                    </div>
                    <div class="card-comment">
                        <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">
                        <div class="comment-text">
                            <span class="username">
                                Nora Havisham
                                <span class="text-muted float-right">8:03 PM Today</span>
                            </span>
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="#" method="post">
                        <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                        <div class="img-push">
                            <input type="text" class="form-control form-control-sm"
                                placeholder="Press enter to post comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!-- Sin Scripts -->
@endsection
@section('css')
<!-- Sin CSS -->
@endsection
