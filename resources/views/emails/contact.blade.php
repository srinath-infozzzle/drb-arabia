<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Drb Arabia</title>


        <!-- Styles -->
        <style>
     
        </style>
    </head>
    <body >
    <h1>New Inquiry</h1>
<p>Name: {{ $data['name'] }}</p>
<p>Phone:  {{ $data['phone']  }}        </p>
<p>Email: {{ $data['email'] }}</p>
<p>Message: {{ $data['enquiry'] }}</p>

    </body>
</html>
