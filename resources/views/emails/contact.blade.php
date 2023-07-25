<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body style="background: #e5e5e5; padding: 30px;">

    <div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
        <h3>Message via la formulaire du site <a href="http://mobilplus.fr" style="text-decoration: none">MobilPlus</a> :
        </h3>
        <div>Nom : {{ $data['name'] }}</div>
        <br>
        <div>Email : {{ $data['email'] }}</div>
        <br>
        <div>{{ $data['message'] }}</div>
    </div>

</body>

</html>
