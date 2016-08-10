Gridview Field
==============

This extension allows you to add a gridfield to your contenttypes, that you can
use to quickly add tabular data. After installing the extension, add a field to
a contenttype in `contenttypes.yml`, like this:


```
        grid:
            type: grid
            sorting: true
            rowheaders: true
            rowmove: true
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

To output the result in your templates, you can access `record.grid`, like any
other field in your records. If you've renamed the field in your contenttype,
you'll obviously need to use the changedname here as well. To get a quick dump
of what's in there, use:

```
        {{ dump(grid) }}
```

In most cases you'll wish to display the information from the grid as a table
in the template. USe the following snippet to do so:


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
    {% else %}
        No grid.
    {% endif %}
```
