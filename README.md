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

The field can have the following field-level options:

* `sorting`: A boolean (true/false) setting if the columns should be sortable.
* `rowheaders`: A boolean (true/false) setting if an incrementing number should be shown for each row.
* `rowmove`: A boolean (true/false) setting if a row can be drag-and-dropped to move it.
* `columns`: A array/hash of the column names to be shown at the top of a column.
* `colheaders`: A boolean (true/false) setting if column headers should be shown or not. Overridden by columns.
* `maximumcols`: A number of the maximum columns allowed in the grid.
* `minimumcolumns`: A number of the minimum columns allowed in the grid.
* `height`: A number to set the height of the field.

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

This extension uses the [Handsontable][ht] javascript spreadsheet library.

[ht]: https://handsontable.com/

