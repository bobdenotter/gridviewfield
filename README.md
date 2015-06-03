Gridview Field
==============

This extension allows you to add a gridfield to your contenttypes, that you can
use to quickly add tabular data. After installing the extension, add a field to
a contenttype, like this:


```
        grid:
            type: grid
            columns:
                firstname: First name
                lastname: Last name
                address: Address
                zipcode: Zip code
                city: City
                country: Country
                email: Email
                password: Password
            height: 300
```

```
    {% if record.grid is json %}
        {% set grid = record.grid|json_decode %}

        <table border="1">
        {% for row in grid %}
            <tr>
                {% for cell in row %}
                    <td>{{ cell }}</td>
                {% endfor %}
            </tr>
        {% endfor %}
        </table>

        {{ dump(grid) }}
    {% else %}
        No grid.
    {% endif %}
```
