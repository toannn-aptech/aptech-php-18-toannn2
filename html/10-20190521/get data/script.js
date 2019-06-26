function create(nameOfElement) {
    return document.createElement(nameOfElement);
}

var table = create('table');
var thead = create('thead');
table.appendChild(thead);

var trow = create('tr');
thead.appendChild(trow);

var arrayTitle = ['ID', 'Name', 'Email', 'Password'];

for (var i = 0; i < arrayTitle.length; i++) {
    var th = create('th');
    var thContent = document.createTextNode(arrayTitle[i]);
    th.appendChild(thContent);
    trow.appendChild(th);
}

var tbody = create('tbody');
table.appendChild(tbody);
document.body.appendChild(table);

var data = {
    "users": [{
            "id": 10,
            "name": "Ethyl Medhurst",
            "email": "noah.hand@example.org",
            "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
            "created_at": "2019-03-26 04:55:04",
            "updated_at": "2019-03-26 04:55:04"
        },
        {
            "id": 9,
            "name": "Eula Lebsack PhD",
            "email": "schroeder.sylvan@example.org",
            "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        },
        {
            "id": 8,
            "name": "Mrs. Kathlyn Parisian DDS",
            "email": "ggrimes@example.net",
            "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        }
    ]
};

// https://namcoi.com/projects/users-crud-laravel/public/api/users

for (var j = 0; j < data.users.length; j++) {
    console.log(data.users[j].id);
    console.log(data.users[j].name);
    console.log(data.users[j].email);
    console.log(data.users[j].password);
    var trow = create('tr');
    tbody.appendChild(trow);
    var arrayContent = [data.users[j].id, data.users[j].name, data.users[j].email, data.users[j].password];
    for (var i = 0; i < arrayContent.length; i++) {
        var td = create('td');
        var tdContentId = document.createTextNode(arrayContent[i]);
        td.appendChild(tdContentId);
        trow.appendChild(td);
    }
}