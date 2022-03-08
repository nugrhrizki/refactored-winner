
![Overview](./overview.gif)

## Prerequisites

-   docker
-   docker-compose
-   node & npm
-   php
-   composer

## Setup

Lakukan setup ini untuk bisa menjalankan programnya

### 1. Install Package

-   `composer insntall`
-   `npm install` or `yarn install`

### 2. Setup Environment

-   you can change port

```javascript
function postData(email) {
    window.axios
        .post("http://localhost:8001/newsletter", { email: email })
        //    _____________________^___________
        //you can change the port here
        // resources/js/newsletter.js 47:36

        .then(() => {
            window.open("/", "_self");
        });
}
```

```javascript
window.axios.get("http://localhost:8001/api/" + route).then((res) => {
    //    _____________________^___________
    //you can change the port here
    // resources/js/register.js 57:43
    before();
    for (let data of res.data) {
        el.appendChild(createElement("option", data.id, data.name));
    }
    memoizeData[route] = res.data;
});
```

-   usually port comes with port 8000

### 3. Run Database

-   `docker-compose up`
-   connect to database shell using `database.sh <container_id>`
-   untuk melihat `container_id` dapat dengan menggunakan `docker ps`

### 3. Migrate Database

-   `php artisan migrate:fresh`
-   `php artisan db:seed --class="WilayahAdministrasiIndonesia"`

### 4. Run the server

-   `php artisan serve`

### 5. Run the front end compiler

-   `npm run watch`
