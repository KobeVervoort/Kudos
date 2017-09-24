<!doctype html>
<html lang="en">
<head>
    <title>users</title>
</head>
<body>

    <img src="https://randomuser.me/api/portraits/women/0.jpg" alt="">
    <h1>Pauline Carte</h1>

    <h2>compliments</h2>
    <ul>
        @foreach($compliments as $compliment)

            <li>{{$compliment}}</li>

        @endforeach
    </ul>

    <form action="POST">

        <label for="compliment">Write a compliment</label>
        <input type="text" id="compliment" name="compliment_text">

        <button type="submit">Compliment!</button>

    </form>

</body>
</html>