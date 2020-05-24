Laradea - Notes

Explanation: 

Laradea is a REST API that allows people to use AJAX to add and delete ideas from the database. Simple as that. It might not work on local environment if the browser that is being used to send the AJAX Request is Google Chrome because CORS is disabled by default.
Works perfect is Safari. Each Idea has a body and a Text. Also an ID.

The logic behind it is to firstly send an AJAX request to the IdeasController in Laravel and it will be routed in Index() that will load all the database data on the user’s website. On rendering each element also has and ID which is being used to send a DELETE request to the Laravel Route->Controller so the API can delete the Database entry…

!!Important!! : There is a client folder with an Index.html it is the file that we are using to access the API...
