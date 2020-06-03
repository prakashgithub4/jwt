<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# jwt

see this url for set up jwt

https://medium.com/@manuelmauriciozamarrn/implementing-jwt-on-laravel-5-8-edc39f545886
## method : Post
# Register User
<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "msg": "register user successfully",
    "data": {
        "name": "Rahul Roy",
        "email": "rj@gmail.com",
        "updated_at": "2020-06-03 22:23:55",
        "created_at": "2020-06-03 22:23:55",
        "id": 3
    }
}</td>  
        <td>
        {
    "error": {
        "name": [
            "The name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
        </td>
        
    </tr>
</table>
<p>Perameter list</p>
<p>name</p>
<p>email</p>
<p>Passsword</p>


## Login api
url
http://localhost/apiAuth/api/login
## method : Post

<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3RcL2FwaUF1dGhcL2FwaVwvbG9naW4iLCJpYXQiOjE1OTEyMjM4MTIsImV4cCI6MTU5MTIyNzQxMiwibmJmIjoxNTkxMjIzODEyLCJqdGkiOiJrMXQwT2FEYTJkNHhSSmg3Iiwic3ViIjozLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.ICDwQIwdMTTPd0cFjI4-TJsBOtc7vZDImjp2k3ya9hY",
    "type": "bearer",
    "expires": 3600
}</td>  
        <td>
       {
    "error": "Unauthorized"
}
        </td>
        
    </tr>
</table>
 ## Logout 
 url:http://localhost/apiAuth/api/logout
 <strong>Method:get</strong>
 <strong>AccessToken:- Authorization</strong>
 <table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "status": true,
    "code": 200,
    "data": {
        "message": "Successfully logged out"
    },
    "err": null
}</td>  
        <td>
       null
        </td>
        
    </tr>
</table>

## Post Api
 Add:
 <p>url: http://localhost/apiAuth/api/posts/add</p>
<p> method:post </p>

<p>Perameter List</p>
<p>Access token :- Autherization </p>
<p>title</p>
<p>desciption</p>
<p>desciption</p>
<p>photos</p>

<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "msg": "post added successfully",
    "status": true
} </td>
        <td>
       {
    "error": {
        "title": [
            "The title field is required."
        ],
        "desciption": [
            "The desciption field is required."
        ],
        "photos": [
            "The photos field is required."
        ]
    }
}
        </td>
        
    </tr>
</table>

## edit
url:-
http://localhost/apiAuth/api/post/update
<p>Perameter List</p>
<p>Autherization :bearer token</p>
<p>id</p>
<p>title</p>
<p>desciption</p>
<p>photos</p>


<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "msg": "post updated successfully",
    "status": true
} </td>
        <td>
      {
    "msg": "Id not found",
    "status": false
            }</td>
        </tr>
</table>
## post Details

<p>url: -http://localhost/apiAuth/api/post/details/12</p>
<p>Method Get:-</p>
<p>Authorization: bearer</p>
<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "msg": "post fetch successfully",
    "status": true,
    "data": {
        "id": 12,
        "title": "test1",
        "description": "test1",
        "image": "1591018224.jpg",
        "created_at": "2020-06-01 13:30:24",
        "updated_at": "2020-06-01 13:30:24"
    }
} </td> <td>
            {
            "msg": "id is empty",
            "status": false
        }
        </td></tr>
</table>

## all Post
<p>url:- http://localhost/apiAuth/api/post/all</p>
<p>method:get</p>
<p>Autherization</p>
<table>
<tr>
    <td>Success</td>
    <td>Fail</td>
    </tr>
    <tr>
        <td>{
    "msg": "post fetch successfully",
    "status": true,
    "data": [
        {
            "id": 11,
            "title": "tet23",
            "description": "tet23",
            "image": "http://localhost/apiAuth/public/Images/1591017732.jpg"
        },
        {
            "id": 12,
            "title": "test1",
            "description": "test1",
            "image": "http://localhost/apiAuth/public/Images/1591018224.jpg"
        },
        {
            "id": 13,
            "title": "test2",
            "description": "test1",
            "image": "http://localhost/apiAuth/public/Images/1591225075.jpg"
        },
        {
            "id": 14,
            "title": "test2",
            "description": "test1",
            "image": "http://localhost/apiAuth/public/Images/1591225053.jpg"
        }
    ]
}</td> <td>{
          "msg":"data not exsists",
        "status":false
        }
        </td></tr>
</table>



 
 
 
 

