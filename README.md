# ExtJS-MongoDB
This applications is used for accessing Data from nosql database (MongoDB) . Here, we use  EXTJS 6.0.2 to bind all the necessary JS file altogether.
EXTJS is an javascript framework. ExtJS is an insanely powerful framework that makes fancy stuff easy to achieve. We use EXTJS for our frontend applications and Mongodb in the backend and also using PHP to connect them. Details are given below:

System Requirements
---------------------
    •	OS: Windows 10
    •	Sencha cmd 6.1.3
    •	Sencha EXTJS 6.0.2
    •	PHP  (A server running PHP 5.3+)
    •	MongoDB

Downloads
------------
    •	Sencha cmd: https://www.sencha.com/products/extjs/cmd-download/
    •	Sencha EXTJS : https://www.sencha.com/products/extjs/#overview
    •	A server running PHP 5.3+
    •	MongoDB: https://www.mongodb.com/download-center#community

Installation
--------------
    •	Sencha 
     https://docs.sencha.com/extjs/6.0.2classic/guides/getting_started/getting_started.html
    
    •	MongoDB
    https://docs.mongodb.com/manual/installation/?jmp=footer&_ga=1.253760072.1156435387.1468309394
    
  
 Preparation
 -------------
•	Cmd: Open command Prompt and type
      sencha and press enter. If  sencha installed correctly then it gives some hints.

•	MongoDB: Open Command prompt and change the directory where the mongoDB installed, using the command    CD E:\... 
    Then  start mongod.exe
    Next  start mongo.exe

Workspace Generation
---------------------
    1.	Open cmd and Type 
    	Sencha generate workspace  ../Sencha_workspace    (workspace directory)
   
 App Generation
 ------------------
  App folder must be generated within the workspace. 
      1.	Open the cmd and Type
      	Sencha –sdk /Downloads/ext-6.0.2 generate app tapp /home/tapp
          Here, first directory is the extjs sdk directory and second directory is the apps directory.
          Note that tapp is the name of the desired app. 

Sencha Command:
----------------
Some of sencha command that will be needed for developing app.
    	Sencha app build development 
    	 Sencha app watch
    	Sencha app watch classic testing
    	Sencha app build .classic
    	Sencha app build .modern
    	Sencha –debug app watch
    	Sencha web start
    
Connect Ext Direct with PHP and MongoDB
-----------------------------------------
    1.	First we have to generate app. (using the above procedure)
    2.	 Create Database and Collections in MongoDB.
    3.	Our starter app already has a grid displaying names, emails, and phone numbers. However, it is using local data by way of a  memory proxy. Let’s begin by opening the “app/store/Personnel.js” file. Once opened, remove the data object and change the proxy type to ‘direct’, and add a directFn of “QueryDatabase.Results”. This is the function that we will create using PHP. 
    4.  Let’s go up a level to the “php” directory and create a new file called “config.php” .
    5.	In the root directory of our app, create a folder called ‘php’ followed by another one inside it called “classes”. Within “classes” create a file called “QueryDatabase.php”.
   6.	Next, we’ll need a router to make sure the correct methods are called. The router is where the calls from Ext Direct get routed   to the correct class using a Remote Procedure Call (RPC).While still in the “php” directory, let’s create another file called   “router.php” and add the following code.   Slightly more advanced version of router.php (and api.php in the next section) can be found within the “ext/examples/kitchensink/data/direct” folder within the SDK.
    7.	Finally, let’s create a file called ‘api.php’ 
    8.	Next, let’s tell Cmd about “api.php”, the application’s “entry point” to our Direct. The best way to communicate our needs        to Cmd is by way of “app.json’s” javascript array. Open “app.json” and find the JS array. Then add “api.php” as a remote  inclusion.
    9.	 Add “api.php” to a script tag in application’s “index.html” file. Just we have to make sure that “api.php” line comes before the “app.js” line.	
	 10.	Open your “Application.js” file and add the provider to the direct manager within the launch function.

          launch: function () {
          
          		Ext.direct.Manager.addProvider(Ext.REMOTING_API);
           
              },
    11.	Refreshing your application should now display our new grid results.
    
    Trouble shooting : 
    --------------------
    
        1.	If  php is not supported then we should add some code in composer.php file. 
         
        {
          "require":
          {
            "phpclasses/ext-direct-app": ">=1.0"
          },
          "repositories":
          [
            {
              "type": "composer",
              "url": "https:\/\/www.phpclasses.org\/"
            },
            {
              "packagist": false
            }
          ]
        }
        
        2.	Sometimes it is necessary to add scripts type in the scripts, when adding the api.php file in the index.html like below:
        
        <script type="text/javascript" src="php/api.php" >  </script>
        
        3.	If the above code will not work then sometimes it is helpful to add the api file in the following styles.
        
        <script type="text/javascript" src="php/api.php?javascript"    ></script>


 
    





