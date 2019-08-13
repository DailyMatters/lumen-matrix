### Running

Use php in-built server to run the application: `php -S localhost:8000 -t public`.

### Testing

Run unit tests with vendor/bin/phpunit.


### cUrl to request (since Postman is acting crazy)
`curl -X POST -H "Content-Type: application/json" -d '{"m1": [[2,2]], "m2": [[1],[5]]}' http://localhost:8000/matrix/mul/`

### cUrl to throw MatrixSizeException
`curl -X POST -H "Content-Type: application/d '{"m1": [[1],[5]], "m2": [[2,2],[2,3]]}' http://localhost:8000/matrix/mul/`

#### To Do
- [ ] Fix character duplication on results
- [ ] Finish testing alphabet service
- [ ] Test MatrixMultiplier service
- [ ] Document decisions and improve README
