<html>
    <head>
        <?php
        $path = 'data.txt';
        if (isset($_POST['phonenumber'])) {
            $fh = fopen($path,"a+");
            $string = $_POST['phonenumber'];
            fwrite($fh,$string); // Write information to the file
            fclose($fh); // Close the file
        

            <script type = "javascript">
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "/api/v2/lookups/{$string}?country=USA", false);
                xhr.send();
                
            </script>

        }
        ?>

    </head>
    <body>
        Well hello there
    </body>
</html>