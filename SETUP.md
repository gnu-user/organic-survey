SETUP INSTRUCTIONS
===================

DATABASE SETUP
--------------

1.  Create a new database for the purpose of the survey as a LIMITED account.
    
    ```sql
    CREATE DATABASE organic_survey;
    ```

2.  Create a table to store the survey results.

    ```sql
    USE organic_survey;
    
    CREATE TABLE results  
    (  
        is_organic  BOOLEAN NOT NULL, 
        taste       TINYINT UNSIGNED NOT NULL,  
        texture     TINYINT UNSIGNED NOT NULL, 
        crust       TINYINT UNSIGNED NOT NULL, 
        toppings    TINYINT UNSIGNED NOT NULL, 
        visual      TINYINT UNSIGNED NOT NULL, 
        aroma       TINYINT UNSIGNED NOT NULL, 
        submit_date DATE NOT NULL 
    );
    ```


SURVEY AUTH CONFIGURAION
------------------------

1.  Edit the configuration file **inc/auth.php** and set the following options according to the current
    database and server configuration.

    ```php
    /* Database access */
    $db_user = '';
    $db_pass = '';
    $db_name = '';
    ```

