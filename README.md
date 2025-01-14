Analysis
1. Routes
    1.1. What are they and their purpose?
        - Call to different functions based on the url path
    1.2. Where are they defined?
        - They're defined in /routes/web.php
    1.3. How many are there?
        - There are 4:
            . on path /
            . on path oldFilms/{year?}
            . on path newFilms/{year?}
            . on films/{year?}/{genre?}
    1.4. How do they group?
        - Are grouped by Route::group(attributes ...) 
    1.5. Which prefix do they use?
        - Are grouped by the prefix => filmout 
    1.6. Which parameters do they use?
        - year and genre
2. Middleware
    2.1. What are they and their purpose?
        - autenticate something before do anything ( for example is the user is logged in )
    2.2. Where are they defined?
        - In the middleware folder
    2.3. How many are there?
        - there are 11 middleware, but right now only de year middleware is being used 
    2.4. Which parameters do they use?
        - the request and the closure 
    2.5. When are they invoked?
        - Before going trought any route groupe by the middleware in the web.php file
3. Data
    3.1. Where are they defined?
        - in the /app/storage/public/films.json file
    3.2. How are they read?
        - in the FilmController there's a Storage::json(/public/films.json)
4. Controller
    4.1. What are they and their purpose?
        - The controller is a file that contains all the functions to manage all the logic for each endpoint defined in the web.php file
    4.2. Where are they defined?
        - they're defined in the /app/http/controllers folders, it should be a controller.php file for each entity in the web app.
    4.3. How many are there?
        - We have two controllers, but only one manage endpoints petitions
5. View
    5.1. What are they and their purpose?
        - They are a new type of file named *.blade.php wich can  manage the info recivied from the enpoints.
    5.2. Where are they defined?
        - They are defined in the /resources/views/
    5.3. How many are there?
        - We have two diferents, the welcome.balde.php wich have a list to call diferent enpoints of our website and the lis.blade.php wich is render when a enpoint of the FilmController is called. ( The endpoint returns a view ) 

Implementation
1. add fields country(string) and duration(int) to current data and adapt all components required to list them. 
    ->DONE


2. split current route 'films/{year?}/{genre?}' in two new routes filmsByYear and filmsByGenre, every one only receives its corresponding parameter. 
    ->DONE 


3. adapt current function listFilms in FilmController to have listFilmsByYear and listFilmsByGenre for previous defined routes.
    ->

4. create a new route 'sortFilms' to list all films sorted by year descending, from newest to oldest.
    ->

5. create a new route 'countFilms' to return total number of films on a new view counter
    ->DONE
