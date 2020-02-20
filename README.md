1. run 'php artisan migrate' --- create all tables and insert sample data

2. import 'mylaravel.postman_collection.json' in the root folder to postman. This is the collection of API calls required

3. run './vendor/bin/phpunit', a simple unit test. unit test file: 'tests/Unit/PropertyAnalyticRepositoryTest.php'