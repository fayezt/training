# training



Training Provider

The Diagram of The Project:
Here is a diagram that shows an overview of the components and interactions involved in the training course booking application:
 

The frontend is the client-side interface that potential customers use to browse and book training courses. And it is implemented using JavaScript, HTML, and CSS.
The REST API is the interface that the frontend uses to communicate with the backend. It exposes a set of endpoints that the frontend can use to retrieve information or make changes to the data stored in the backend. The REST API is implemented using a web framework (Laravel), and communicates with the backend using a programming language (PHP).
The backend is the server-side component that stores and manages the data for the training courses and reservations. It is implemented using a MySQL database, and is accessed by the REST API to perform read and write operations.
In terms of data flow, the frontend sends HTTP requests to the REST API to perform actions such as retrieving a list of courses or booking a place on a course. The REST API processes the request, performs any necessary operations on the data stored in the backend, and returns a response to the frontend. The frontend then updates the user interface to display the results of the action.


The APIs In Use to Complete the Project:
At a start we specified this subdomain to the backend project https://trainingadmin.fayez-tarboosh.com/. And we added this prefix to the API string /admin/api/v1 to make it possible to add more functionality to the project in the future by updating the version and not effecting the old version until we finished the update.

The list of APIs:
../auth/login. This is the login API.
../category. This API return all the categories in the project with the courses in it.
../course?start=2022-12-01&end=2022-12-28. This API used to search in all the courses about the courses that start and end in the range of dates.
../course/$couseID. This API return the course information of the course id provided.
../course/4/dates. This API returns all the appointments that the training could take places in.
./course/$couseID/appointment/$appointmentID/book. This API will book the appointment the selected by the logged in user.

And for the Admin we created this APIs:
In Addition to the APIs that the user can use, the admin has an access to these APIs:
../course. This API can be used in POST method to Add a new course.
../course/$couseID. This API can be used in PUT method to update the course information.
../course/$couseID. This API can be used in DELETE method to delete a course.
../course/$couseID/appointment. This API can be used in POST method to Add a new course appointment.
../course/$couseID/appointment/$appointmentID. This API can be used in PUT method to update a course appointment.
../course/$couseID/lecturer. This API used in deferent methods to Add or View lectures in the course.
../course/$couseID/lecturer/$lecturerID. This API used in deferent methods to Update or Delete lectures in the course.
 
Security:
To ensure the security of the application, we took several measures:
•	We used HTTPS to encrypt all communications between the client and the server. This will prevent eavesdropping or tampering with the data being transmitted.
•	We Implemented authentication and authorization to control access to the API. We have done this using Laravel Sanctum that implement JSON Web Tokens (JWTs).
•	We are Validating all user input to prevent injection attacks. This includes sanitizing input to prevent HTML or JavaScript injection, and validating that input is in the expected format.
•	We are using a firewall to block or limit access to the server, and enable rate limiting to prevent brute force attacks.
•	We will regularly update the server and all the dependencies that we are using.

