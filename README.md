### Running

Use php in-built server to run the application: `php -S localhost:8000 -t public`.

### Testing

Run unit tests with vendor/bin/phpunit.


### cUrl to request (since Postman is acting crazy)
`curl -X POST -H "Content-Type: application/json" -d '{"m1": [[2,2]], "m2": [[1],[5]]}' http://localhost:8000/matrix/mul/`
