BLY API
===================

## Application Structure

###SUMMARY
#### Root Folders:
| Folder | Description |
| ------ | ------ |
| *controllers* | Defines your app routes and their logic |
| *helpers* | Code and functionality to be shared by different parts of the project |
| *middleware* | Express middleware which process the incoming requests before handling them down to the routes |
| *models* | Represents data, implements business logic and handles storage |
| *public* | Contains all static files like images, styles and javascript |
| *tests* | Tests everything which is in the other folders |

#### Root Files:
| File | Description |
| ------ | ------ |
| *app.js* | initializes the app and glues everything together |
| *package.json* | remembers all packages that your app depends on and their versions |


----------

###Models
> **Note:**
> Models are the files where we interact with **BLY** database. They contain all the methods and functions which will handle data. This includes not only the methods for creating, reading, updating and deleting items, but also any additional business logic.

###Controllers

>**Note:**
>This is the folder where we define all the routes that **BLY** API will serve. Controllers will handle web requests, serve *API response*  to the client and interact with models to process and retrieve data. It’s the glue which connects and controls the API.

###Middleware

>**Note:**
>This folder stores all Express middleware. The purpose of middleware is to extract a common controller code, which should be executed on multiple requests and usually modifies the request and/or the response objects. Just like a controller, **a middleware should never directly access the database!** Instead it should use our models for such tasks.

###Helpers

>**Note:**
>This folder contains utility code, which is used at multiple models, middleware or controllers, but does not fall under the category they cover. Usually we should have different files for different common tasks.

###Tests

>**Note:** 
>Every project needs tests, and **BLY** puts all API tests in this Test folder. The tests are set in several sub-folders:

> - *controllers*
> - *helpers*
> - *models*
> - *middleware*
> - *integration*

----------

###Dependancies
**BLY API** is currently depends on the following open source projects:

