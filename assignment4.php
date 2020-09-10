<!Doctype html>
<html lang="en">
<head> 
<title>George Mitchell WEB 2603 Server-Side Web Dev(PHP/ASP)</title>
<link rel="stylesheet"  type = "text/css" href="../style.css">

</head>
<body>
    <h1>George Mitchell</h1>
    <h2> WEB 2603 Server-Side Web Dev(PHP/ASP)</h2>
    <h3>Assignment 4</h3>   
    <?php
        $browsers = ['Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Konqurer' ,'Other'];
        Class Select{
            public $name;
            public $value;

            function set_name($name){
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }
            
            function set_value($value){
                $this->value;
            }

            function get_value(){
                return $this->value;
            }
            
        }

        $browser = new Select();
        $browser->set_name('User Browser');
        $browser->set_value($browsers);


    ?>
    <h2>Take the survey: </h2>
    <form method="post" name="form1" action ="form.php">
        <p>
            <label for="myName">*Name:</label> 
            <input type = "text" name="name" required="required">
        </p>
        <p>
            <label for="user">*Username:</label>
            <input type = "text" name="username" required="required">
        </p>
        <p>
            <label for="myEmail">*Email:</label>
            <input type = "email" name="email" required="required">
         </p>
        <input type="submit" id="mySubmit">

    </form>

</body>
</html>