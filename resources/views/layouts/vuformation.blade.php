<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets1/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>langue</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>

  <!--  Social tags    -->
  <meta name="keywords" content="creative tim, html table, html css table, web table, freebie, free bootstrap table, bootstrap, css3 table, bootstrap table, fresh bootstrap table, frontend, modern table, responsive bootstrap table, responsive bootstrap table">

  <meta name="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Fresh Bootstrap Table by Creative Tim">
  <meta itemprop="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <!-- Twitter Card data -->

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Fresh Bootstrap Table by Creative Tim">

  <meta name="twitter:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <meta name="twitter:data1" content="Fresh Bootstrap Table by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="Free">
  <meta name="twitter:label2" content="Price">

  <!-- Open Graph data -->
  <meta property="og:title" content="Fresh Bootstrap Table by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/full-screen-table.html" />
  <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg"/>
  <meta property="og:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need." />
  <meta property="og:site_name" content="Creative Tim" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets1/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets1/css/demo.css" rel="stylesheet" />

  <!--   Fonts and icons   -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="assets1/js/demo/gsdk-switch.js"></script>
  <script src="assets1/js/demo/jquery.sharrre.js"></script>
  <script src="assets1/js/demo/demo.js"></script>
  <style>
body {
  background-image: url("../../../assets/img/bg4.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

  </style>
</head>

<body>

<div class="wrapper">
   <!--   Creative Tim Branding   -->
  <a href="/admin">
    <div class="logo-container full-screen-table-demo">
      <div class="logo">
        <img src="assets1/img/new_logo.png">
      </div>
      <div class="brand">
        welcome
      </div>
    </div>
  </a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
  <div class="fresh-table full-color-green full-screen-table">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->
    <table id="fresh-table" class="table">
      <thead>
        <th data-field="id">Titre</th>
        <th data-field="name" data-sortable="true">Name formation</th>
        <th data-field="salary" data-sortable="true">Description</th>
        <th data-field="country" data-sortable="true">Video Descriptives</th>
        <th> Videos formations</th>
      
        <th >Modifier</th>
        <th > Supprimer</th>
        <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents"></th>
      </thead>
      <tbody>
      
        <tr>
          <td>98</td>
          <td>Stephen Pace</td>
          <td>$60,739</td>
          <td>Hungary</td>
          <td>Cinco Esquinas</td>
          <td ><a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Modifier</a></td>
          <td ><a href=""class="btn btn-default">Supprimer</a></td>
        
        </tr>
      
     
      </tbody>
    </table>
  </div>
  <div class="modal-footer">
            <a class="btn btn-primary" >Ajouter formation libre</a>
          </div>
   <!-- Sart Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        
          
         
          <div class="modal-body">
          <h4 class="title text-center">modifier la formation</h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('titre')" />

                <x-input id="email" class="form-control" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Description')" />

                <x-input id="password" class="form-control"
                                type="text"
                                name="description"
                                required autocomplete="current-password" />
            </div>
            <div class="mt-2">
                <x-label for="password" :value="__('Video Descriptive')" />

                <x-input id="password" class="form-control"
                                type="file"
                                name="description"
                                required autocomplete="current-password" />
            </div>
            <!-- Remember Me -->
            <br/>
            <br/>
           

            <div class="flex items-center justify-end mt-4">
              

                <x-button class="btn btn-success btn-round  btn-block">
                    {{ __('Modifier') }}
                </x-button>
            </div>
        </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
 
<script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')

    window.operateEvents = {
      'click .like': function (e, value, row, index) {
     
       
      },
      'click .edit': function (e, value, row, index) {
     
     
      },
      'click .remove': function (e, value, row, index) {
        $table.bootstrapTable('remove', {
          field: 'id',
          values: [row.id]
        })
      }
    }

    function operateFormatter(value, row, index) {
      return [
        '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
          '<i class="fa fa-heart"></i>',
        '</a>',
        '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
          '<i class="fa fa-edit"></i>',
        '</a>',
        '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
          '<i class="fa fa-remove"></i>',
        '</a>'
      ].join('')
    }

    $(function () {
      $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',

        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

        formatShowingRows: function (pageFrom, pageTo, totalRows) {
          return ''
        },
        formatRecordsPerPage: function (pageNumber) {
          return pageNumber + ' rows visible'
        }
      })

      $alertBtn.click(function () {
        alert('You pressed on Alert')
      })
    })

    $('#sharrreTitle').sharrre({
      share: {
        twitter: true,
        facebook: true
      },
      template: '',
      enableHover: false,
      enableTracking: true,
      render: function (api, options) {
        $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
      },
      enableTracking: true,
      url: location.href
    })

    $('#twitter').sharrre({
      share: {
        twitter: true
      },
      enableHover: false,
      enableTracking: true,
      buttons: { twitter: {via: 'CreativeTim'}},
      click: function (api, options) {
        api.simulateClick()
        api.openPopup('twitter')
      },
      template: '<i class="fa fa-twitter"></i> {total}',
      url: location.href
    })

    $('#facebook').sharrre({
      share: {
        facebook: true
      },
      enableHover: false,
      enableTracking: true,
      click: function (api, options) {
        api.simulateClick()
        api.openPopup('facebook')
      },
      template: '<i class="fa fa-facebook-square"></i> {total}',
      url: location.href
    })
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

    ga('create', 'UA-46172202-1', 'auto')
    ga('send', 'pageview')

  </script>
</html>