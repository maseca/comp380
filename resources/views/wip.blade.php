<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>This is a TEST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<section class="section">
    <div id="app">
        <div class="columns">
            <div class="column is-one-quarter">
                <div class="box">
                    <ul class="menu-list">
                        <li><a href="/tasks">Tasks</a></li>
                        <li><a href="/actionitems">Action Items</a></li>
                        <li><a href="/deliverables">Deliverables</a></li>
                        <li><a href="/issues">Issues</a></li>
                    </ul>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <h1>
                        This Web Application is a Work in Progress!
                    </h1>
                </div>
                <div class="box">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
