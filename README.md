##  ABCD JSON FILE PARSER CLASS AND DEPENDECIES
###  By James Hudnall  james.hudnall@gmail.com

 **abcd_conn.php** - Database Connection Class
 **abcd_etc.php** - Constants defined for use in system
 **class.CRUD.php** - Create, Update, Delete database class which also does other DB operations
 **class.reader.php** - Class to process JSON files and convert them to MySql
 **process.php** - page to execure the process of the JSON. Can be made to Cron job if needed. 

SUMMARY: The data sent to json flat files by forms need to be retrieved and converted to the format of a redcap table. 
The above scripts automate the process and are designed to handle a variety of data formats. 
