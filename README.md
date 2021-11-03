# Simple API REST Standard includes

- clone the project `git clone git@github.com:ArielMejiaDev/filter-example.git` 
- go to the project `cd example`
- install composer dependencies `composer install`
- directly run migrations, do not worry about env file it is already in the project: `php artisan migrate:fresh --seed`
- go to `http:example.test/api/users` and check more endpoints
- `http:example.test/api/users?include[bio]=true&include[posts]`
- check the includes one by one or together.
- all the code for the filter is in the `UsersController`, in this case the includes use the same names as the relationships to make it easier.


## Loom to show how it works

https://www.loom.com/share/295fddbd92324e1eae400a05b0921460
