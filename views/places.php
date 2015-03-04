<html>
    <head>
        <title>Places You've Been To</title>
    </head>
    <body>
            <h2>Places You've Been To</h2>
        {% if places is not empty %}
            <h3>Here are the places you've been to:</h3>
            <ul>
            {% for place in places %}
                <li>Place: {{ place.getPlace }}</li>
            {% endfor %}
            </ul>
        {% endif %}
        <form action="/results" method="post">
            <label for='placeName'>Place Name</label>
            <input id='placeName' name='placeName' type='text'>
            <button type='submit'>Add Place</button>
        </form>
        <form action="/delete" method="post">
            <button type='submit'>Delete All Places</button>
        </form>
    </body>
</html>
