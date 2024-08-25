# API Documentation

This API utilizes the Sanctum package for authentication. It provides a system for CRUD operations on posts. This documentation is part of my skill development journey.

## Authentication

### Login

-   **Endpoint:** `POST /api/login`
-   **Controller:** `AuthController@login`

### Logout

-   **Endpoint:** `POST /api/logout`
-   **Controller:** `AuthController@logout`

### Registration

-   **Endpoint:** `POST /api/register`
-   **Controller:** `AuthController@register`

## Posts

### Get All Posts

-   **Endpoint:** `GET /api/posts`
-   **Controller:** `PostController@index`

### Create a Post

-   **Endpoint:** `POST /api/posts`
-   **Controller:** `PostController@store`

### Get a Single Post

-   **Endpoint:** `GET /api/posts/{post}`
-   **Controller:** `PostController@show`

### Update a Post

-   **Endpoint:** `PUT/PATCH /api/posts/{post}`
-   **Controller:** `PostController@update`

### Delete a Post

-   **Endpoint:** `DELETE /api/posts/{post}`
-   **Controller:** `PostController@destroy`

## Example Request and Response

### Login

**Request:**

```
POST /api/login
Content-Type: application/json

{
    "email": "example@example.com",
    "password": "password123"
}
```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

{
    "user": {
        "id": 11,
        "name": "testNew",
        "email": "test1234@test.com",
        "email_verified_at": null,
        "created_at": "2024-08-25T02:56:47.000000Z",
        "updated_at": "2024-08-25T02:56:47.000000Z"
    },
    "auth_token": "7|wYYbwETy84qohxipWV9d5CU7NSKf1yPQykXUK5k3deb182c7"
}
```

### Logout

**Request:**

```
POST /api/logout
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
```

**Response:**

```
HTTP/1.1 204

{
    "message": "User logged out successfully"
}
```

### Registration

**Request:**

```
POST /api/register
Content-Type: application/json

{
    "name": "John Doe",
    "email": "johndoe@example.com",
    "password": "password123"
}
```

**Response:**

```
HTTP/1.1 201 Created
Content-Type: application/json

{
   "user": {
        "id": 11,
        "name": "testNew",
        "email": "test1234@test.com",
        "email_verified_at": null,
        "created_at": "2024-08-25T02:56:47.000000Z",
        "updated_at": "2024-08-25T02:56:47.000000Z"
    }
}
```

### Get All Posts

**Request:**

```
GET /api/posts
```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

[
    {
        "id": 1,
        "title": "First Post",
        "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
    },
    {
        "id": 2,
        "title": "Second Post",
        "content": "Nulla facilisi. Sed euismod, nunc id aliquet lacinia."
    }
    ...
]
```

### Create a Post

**Request:**

```
POST /api/posts
Content-Type: application/json
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

{
    "title": "New Post",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
}
```

**Response:**

```
HTTP/1.1 201 Created
Content-Type: application/json

{
    "user": {
        "id": 11,
        "name": "testNew",
        "email": "test1234@test.com",
        "email_verified_at": null,
        "created_at": "2024-08-25T02:56:47.000000Z",
        "updated_at": "2024-08-25T02:56:47.000000Z"
    },
}
```

### Get a Single Post

**Request:**

```
GET /api/posts/1
```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

{
    "id": 1,
    "title": "First Post",
    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
}
```

### Update a Post

**Request:**

```
PUT /api/posts/1
Content-Type: application/json
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c

{
    "title": "Updated Post",
    "content": "Updated content"
}
```

**Response:**

```
HTTP/1.1 200 OK
Content-Type: application/json

{
    "message": "Post updated successfully"
}
```

### Delete a Post

**Request:**

```
DELETE /api/posts/1
Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c
```

**Response:**

```
HTTP/1.1 204 No Content
```
