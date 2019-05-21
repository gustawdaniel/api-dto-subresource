Steps to reproduce error

1) Start server

```
php bin/console server:run
```

2) Send request 

```
echo '{"isbn": "ABC"}' | http POST localhost:8000/api/books.json
```

You should see data like this

```
{
    "bool": false,
    "name": "CBA",
    "object": {
        "key": "value"
    }
}
```

3) Look at documentation of POST in browser on url

```
http://localhost:8000/api
```

you will see example value of output like this

```
{
  "name": "string",
  "object": "string",
  "bool": true
}
```

but it is incorrect. Then look to file `src/Dto/BookOutput.php` you will see that types are correct,
but `Attribute` type is converted to `string` in generated documentation.