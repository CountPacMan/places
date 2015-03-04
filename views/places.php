<html>
    <head>
        <title>Places You've Been To</title>
    </head>
    <body>
            <h2>Places You've Been To</h2>
        {% if places is not empty %}
            <h3>Here are the places you've been to:</h3>
            {% for place in places %}
                <p>Place: {{ place.getPlace }}</p>
                <p><img src="{{ place.getPic }}"></p>
                <p>How Long: {{ place.getHowLong }}</p>
                <p>--------------------------------</p>
            {% endfor %}
        {% endif %}
        <form action="/results" method="post">
            <label for='placeName'>Place Name</label>
            <input id='placeName' name='placeName' type='text'>
            <label for='picture'>Picture Link</label>
            <input id='picture' name='picture' type='text'>
            <label for='howLong'>How long did you stay?</label>
            <input id='howLong' name='howLong' type='text'>
            <button type='submit'>Add Place</button>
        </form>
        <form action="/delete" method="post">
            <button type='submit'>Delete All Places</button>
        </form>
    </body>
</html>
