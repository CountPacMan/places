<html>
    <head>
        <title>Here's Where You've Been</title>
    </head>
    <body>
        <h3>Here's where you've been:</h3>
        {% if places is not empty %}
            {% for place in places %}
                <p>{{ place.getPlace }}</p>
            {% endfor %}
        {% endif %}
        <a href="/">Back to the Homepage</a>
    </body>
</html>
