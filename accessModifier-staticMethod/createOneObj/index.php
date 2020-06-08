<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create one object</title>
</head>

<body>
    <?php
    class Application
    {
        private static $instance;

        private function __construct()
        {
        }

        public static function getInstance()
        {
            if (self::$instance === null) {
                self::$instance = new Application();
                echo 'alo';
            }
            return self::$instance;
        }
    }

    $app1 = Application::getInstance();
    $app2 = Application::getInstance();
    $app3 = new Application(); //Error
    ?>
</body>

</html>