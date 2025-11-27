<?PHP
if (isset($_POST["marca"])) {
        $idiomas = $_POST["marca"];
        foreach ($idiomas as $key => $value) {
            echo "marca: " . $value;
        }
    }
?>
