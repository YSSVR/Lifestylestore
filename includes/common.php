<!--To store or access the data in database,connection between the web page(s) and database server is must
Here is the connection to the localhost where the "store" data base is pressent-->
<?php
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
/*session enable the website that user is visiting and keep track of moment from page to page
 * since no session is started this will start the session
 */ 
session_start();
/*we us this common.php in every website at strting of the code using 'request' command
 * as session is sarted the it will resume the previous session
 */
